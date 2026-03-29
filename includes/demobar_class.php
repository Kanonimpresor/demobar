<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2026 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * DemoBar Plugin — Clase principal de lógica de negocio
 * Lee multisite.json, construye la lista de demos y renderiza la barra HTML.
 */

if (!defined('e107_INIT')) { exit; }


/**
 * Clase central del plugin DemoBar.
 * Gestiona la lectura de multisite.json, la detección del demo actual
 * y la generación del HTML de la barra de navegación.
 */
class demobar_class
{
	/** @var array Lista de demos activos leídos de multisite.json */
	private $demos = [];

	/** @var string|false Identificador del demo actual (valor de e_MULTISITE_MATCH) */
	private $currentMatch = false;

	/** @var array Preferencias del plugin cargadas desde e107::pref() */
	private $prefs = [];


	/**
	 * Constructor — carga preferencias y lee los demos disponibles.
	 *
	 * When multisite is active, the current demo's DB may have its own (incomplete)
	 * demobar prefs. We always read from the MAIN site database so that the brand URL,
	 * CTA URLs, colors, etc. configured by the admin apply uniformly across all demos.
	 */
	public function __construct()
	{
		$this->prefs = $this->loadPrefs();
		$this->currentMatch = defset('e_MULTISITE_MATCH', false);
		$this->loadDemos();
	}


	/**
	 * Load demobar plugin preferences.
	 * In a multisite environment, always reads from the main (original) database
	 * so that admin-configured URLs and settings are consistent across all demos.
	 *
	 * @return array Plugin preferences
	 */
	private function loadPrefs()
	{
		// If not running under multisite, use the normal e107 API.
		if (!defined('e_MULTISITE_IN_USE'))
		{
			return e107::pref('demobar') ?: [];
		}

		// Multisite active — read prefs from the main site database.
		// The main DB name is stored in the original e107_config before multisite override.
		$configFile = e_ROOT . 'e107_config.php';

		if (!is_readable($configFile))
		{
			return e107::pref('demobar') ?: [];
		}

		// Parse the config file to get the main database name.
		// We read the raw PHP file content and extract $config['database']['db'].
		$configContent = file_get_contents($configFile);

		// Extract the main DB name using regex (avoids re-requiring the file).
		if (!preg_match("/['\"]db['\"]\s*=>\s*['\"]([^'\"]+)['\"]/", $configContent, $m))
		{
			return e107::pref('demobar') ?: [];
		}

		$mainDb = $m[1];
		$prefix = MPREFIX; // e107_ — same across all sites

		try
		{
			$sql = e107::getDb('demobar_main');
			$query = "SELECT e107_value FROM {$mainDb}.{$prefix}core WHERE e107_name = 'plugin_demobar' LIMIT 1";

			if ($sql->gen($query) && $row = $sql->fetch())
			{
				$value = $row['e107_value'];

				if (!empty($value))
				{
					// e107 stores plugin prefs as var_export'd PHP arrays
					$prefs = e107::getArrayStorage()->ReadArray($value);

					if (is_array($prefs))
					{
						return $prefs;
					}

					// Fallback: try eval for var_export format
					$prefs = @eval('return ' . $value . ';');

					if (is_array($prefs))
					{
						return $prefs;
					}
				}
			}
		}
		catch (\Exception $e)
		{
			e107::getDebug()->log('DemoBar: Failed to read main DB prefs: ' . $e->getMessage());
		}

		// Last resort: use current DB prefs
		return e107::pref('demobar') ?: [];
	}


	/**
	 * Lee multisite.json desde e_SYSTEM_BASE y filtra los demos activos.
	 * Soporta tanto el esquema legacy como el nuevo esquema v2.4+ del plugin multisite.
	 *
	 * @return void
	 */
	private function loadDemos()
	{
		// Ruta al archivo de configuración del plugin multisite
		$jsonPath = e_SYSTEM_BASE . 'multisite.json';

		if (!file_exists($jsonPath))
		{
			e107::getDebug()->log('DemoBar: multisite.json not found at ' . $jsonPath);
			return;
		}

		$raw = file_get_contents($jsonPath);

		if (empty($raw))
		{
			e107::getDebug()->log('DemoBar: multisite.json is empty');
			return;
		}

		$data = json_decode($raw, true);

		if (!is_array($data))
		{
			e107::getDebug()->log('DemoBar: multisite.json contains invalid JSON');
			return;
		}

		// Iterar y filtrar solo demos activos con match válido
		foreach ($data as $site)
		{
			if (empty($site['active']) || empty($site['match']))
			{
				continue;
			}

			$this->demos[] = [
				'name'     => varset($site['name'], $site['match']),
				'match'    => $site['match'],
				'haystack' => varset($site['haystack'], 'url'),
				'database' => varset($site['mysql']['database'], ''),
				'active'   => true,
			];
		}
	}


	/**
	 * Devuelve la lista completa de demos activos.
	 *
	 * @return array
	 */
	public function getDemos()
	{
		return $this->demos;
	}


	/**
	 * Devuelve la cantidad de demos activos.
	 *
	 * @return int
	 */
	public function getDemoCount()
	{
		return count($this->demos);
	}


	/**
	 * Determina si estamos viendo un demo en este momento.
	 *
	 * @return bool
	 */
	public function isOnDemo()
	{
		return ($this->currentMatch !== false);
	}


	/**
	 * Devuelve el nombre del demo actual.
	 *
	 * @return string|false
	 */
	public function getCurrentDemoName()
	{
		if (!$this->isOnDemo())
		{
			return false;
		}

		foreach ($this->demos as $demo)
		{
			if ($demo['match'] === $this->currentMatch)
			{
				return $demo['name'];
			}
		}

		return $this->currentMatch;
	}


	/**
	 * Calcula el demo anterior y el siguiente respecto al actual.
	 * Retorna un array con las claves 'prev' y 'next' (o null si no aplica).
	 *
	 * @return array ['prev' => array|null, 'next' => array|null]
	 */
	public function getPrevNext()
	{
		$result = ['prev' => null, 'next' => null];

		if (!$this->isOnDemo() || count($this->demos) < 2)
		{
			return $result;
		}

		$currentIndex = null;

		foreach ($this->demos as $index => $demo)
		{
			if ($demo['match'] === $this->currentMatch)
			{
				$currentIndex = $index;
				break;
			}
		}

		if ($currentIndex === null)
		{
			return $result;
		}

		// Demo anterior (circular)
		if ($currentIndex > 0)
		{
			$result['prev'] = $this->demos[$currentIndex - 1];
		}

		// Demo siguiente (circular)
		if ($currentIndex < count($this->demos) - 1)
		{
			$result['next'] = $this->demos[$currentIndex + 1];
		}

		return $result;
	}


	/**
	 * Genera la URL completa para acceder a un demo específico.
	 *
	 * @param array $demo Un elemento del array de demos
	 * @return string La URL absoluta al demo
	 */
	public function getDemoUrl($demo)
	{
		if ($demo['haystack'] === 'host')
		{
			// Subdominio: construir URL con el host del demo
			$scheme = (defset('e_REQUEST_HTTPS') || (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')) ? 'https' : 'http';
			return $scheme . '://' . $demo['match'] . '/';
		}

		// Subdirectorio: construir URL a partir de e_HTTP.
		// Si estamos dentro de un demo (e_MULTISITE_MATCH definido), e_HTTP ya contiene
		// el base path + subdir actual (ej: /e107_multisites/bootstrap5/).
		// Necesitamos reemplazar el subdir actual por el del demo destino.
		$currentMatch = defset('e_MULTISITE_MATCH', '');

		if (!empty($currentMatch))
		{
			// Quitar el subdirectorio actual de e_HTTP para obtener el base path.
			$basePath = str_replace($currentMatch . '/', '', e_HTTP);
		}
		else
		{
			// No estamos en un demo, usar e_HTTP directamente como base.
			$basePath = e_HTTP;
		}

		return SITEURLBASE . $basePath . $demo['match'] . '/';
	}


	/**
	 * Renderiza el HTML completo de la barra de navegación.
	 * Usa las preferencias del plugin para personalizar colores, textos y CTAs.
	 *
	 * @return string HTML de la barra
	 */
	public function renderBar()
	{
		$tp = e107::getParser();

		// Verificar si la barra está activa
		if (empty($this->prefs['demobar_active']))
		{
			return '';
		}

		// Si no hay demos, no renderizar
		if (empty($this->demos))
		{
			return '';
		}

		// Cargar el template
		$template = e107::getTemplate('demobar', 'demobar', 'bar');

		if (!empty($template))
		{
			// Obtener el batch de shortcodes global del plugin (registrado via e_shortcode.php)
			$sc = e107::getScBatch('demobar');

			if ($sc !== null && method_exists($sc, 'sc_demobar_position'))
			{
				// Solo usar template si los shortcodes internos del bar existen.
				// Los shortcodes globales (NAV, COUNT, CURRENT) no sirven para parsear
				// el template interno de la barra — se necesitarían sc_demobar_position(),
				// sc_demobar_brand_url(), sc_demobar_demo_links(), etc.
				$sc->setVars([
					'demos'         => $this->demos,
					'currentMatch'  => $this->currentMatch,
					'prefs'         => $this->prefs,
					'prevNext'      => $this->getPrevNext(),
					'demobarClass'  => $this,
				]);

				return $tp->parseTemplate($template, true, $sc);
			}
		}

		// Renderizado directo — genera HTML funcional sin depender de shortcodes de template
		return $this->renderBarFallback();
	}


	/**
	 * Renderizado de emergencia cuando no existe el archivo de template.
	 * Genera HTML mínimo funcional directamente.
	 *
	 * @return string HTML de la barra
	 */
	private function renderBarFallback()
	{
		$tp = e107::getParser();

		$bgColor   = $tp->toAttribute(varset($this->prefs['demobar_bg_color'], '#343a40'));
		$textColor = $tp->toAttribute(varset($this->prefs['demobar_text_color'], '#ffffff'));
		$brandText = $tp->toHTML(varset($this->prefs['demobar_brand_text'], 'Demos'), false, 'TITLE');
		$brandUrl  = $tp->toAttribute(varset($this->prefs['demobar_brand_url'], ''));
		$position  = varset($this->prefs['demobar_position'], 'top') === 'bottom' ? 'bottom' : 'top';

		// Determine current demo name and prev/next
		$currentName = $this->getCurrentDemoName();
		if ($currentName === false)
		{
			$currentName = '';
		}
		$pn = $this->getPrevNext();

		// Build navigation: ◀ CurrentName ▶
		// Only show navigation when a demo is actually active (not on the main site).
		$navHtml = '';

		if ($this->isOnDemo())
		{
			// Previous arrow
			if ($pn['prev'])
			{
				$prevUrl   = $tp->toAttribute($this->getDemoUrl($pn['prev']));
				$prevTitle = $tp->toAttribute($pn['prev']['name']);
				$navHtml  .= '<a href="' . $prevUrl . '" class="demobar-arrow" title="' . $prevTitle . '">&#9664;</a>';
			}
			else
			{
				$navHtml .= '<span class="demobar-arrow disabled">&#9664;</span>';
			}

			// Current demo name
			$navHtml .= '<span class="demobar-current">' . $tp->toHTML($currentName, false, 'TITLE') . '</span>';

			// Next arrow
			if ($pn['next'])
			{
				$nextUrl   = $tp->toAttribute($this->getDemoUrl($pn['next']));
				$nextTitle = $tp->toAttribute($pn['next']['name']);
				$navHtml  .= '<a href="' . $nextUrl . '" class="demobar-arrow" title="' . $nextTitle . '">&#9654;</a>';
			}
			else
			{
				$navHtml .= '<span class="demobar-arrow disabled">&#9654;</span>';
			}
		}
		else
		{
			// On the main site: show a demo list link or the first demo link
			if (!empty($this->demos))
			{
				$firstDemo = $this->demos[0];
				$firstUrl  = $tp->toAttribute($this->getDemoUrl($firstDemo));
				$navHtml  .= '<a href="' . $firstUrl . '" class="demobar-btn demobar-btn-outline">&#9654; ' . defset('LAN_DEMOBAR_VIEW_DEMOS', 'View Demos') . '</a>';
			}
		}

		// Right-side actions (CTAs)
		$actionsHtml = '';

		$sourceUrl = varset($this->prefs['demobar_cta_source_url'], '');
		if (!empty($sourceUrl))
		{
			$sourceText = $tp->toHTML(varset($this->prefs['demobar_cta_source_text'], 'Source Code'), false, 'TITLE');
			$actionsHtml .= '<a href="' . $tp->toAttribute($sourceUrl) . '" class="demobar-btn demobar-btn-primary" target="_blank" rel="noopener">' . $sourceText . '</a>';
		}

		$contactUrl = varset($this->prefs['demobar_cta_contact_url'], '');
		if (!empty($contactUrl))
		{
			$contactText = $tp->toHTML(varset($this->prefs['demobar_cta_contact_text'], 'Contact'), false, 'TITLE');
			$actionsHtml .= '<a href="' . $tp->toAttribute($contactUrl) . '" class="demobar-btn demobar-btn-outline">' . $contactText . '</a>';
		}

		// Admin link — only visible for administrators
		if (check_class(e_UC_ADMIN))
		{
			$adminUrl   = SITEURLBASE . e_HTTP . 'e107_admin/admin.php';
			$adminLabel = defset('LAN_DEMOBAR_ADMIN', 'Admin');
			$actionsHtml .= '<a href="' . $tp->toAttribute($adminUrl) . '" class="demobar-btn demobar-btn-admin" target="_blank" rel="noopener">&#9881; ' . $adminLabel . '</a>';
		}

		// Hide toggle button
		$toggleHtml = '<button type="button" id="demobar-toggle" class="demobar-toggle" title="' . $tp->toAttribute(defset('LAN_DEMOBAR_HIDE_BAR', 'Hide bar')) . '">&#10005;</button>';

		// Brand link or text
		$brandHtml = '';
		if (!empty($brandUrl))
		{
			$brandHtml = '<a href="' . $brandUrl . '" class="demobar-brand">' . $brandText . '</a>';
		}
		else
		{
			$brandHtml = '<span class="demobar-brand">' . $brandText . '</span>';
		}

		// Assemble the bar
		$html  = '<div id="demobar" class="demobar demobar-' . $position . '" style="background-color:' . $bgColor . '; color:' . $textColor . ';">';
		$html .= '<div class="demobar-inner">';
		$html .= $brandHtml;
		$html .= '<div class="demobar-nav">' . $navHtml . '</div>';
		$html .= '<div class="demobar-actions">' . $actionsHtml . '</div>';
		$html .= $toggleHtml;
		$html .= '</div>';
		$html .= '</div>';

		// Restore button (hidden by default, shown when bar is hidden)
		$html .= '<button type="button" id="demobar-restore" class="demobar-restore demobar-restore-' . $position . '" style="background-color:' . $bgColor . '; color:' . $textColor . ';" title="Show demo bar">&#9776;</button>';

		return $html;
	}


	/**
	 * Verifica si la IP actual está en la whitelist de administración.
	 * Se usa para restringir acceso al admin de los demos.
	 *
	 * @return bool true si la IP está permitida o si no hay whitelist configurada
	 */
	public function isIpAllowed()
	{
		$whitelist = varset($this->prefs['demobar_admin_ip_whitelist'], '');

		// Si no hay whitelist, se permite todo
		if (empty(trim($whitelist)))
		{
			return true;
		}

		$allowedIps = array_map('trim', explode("\n", $whitelist));
		$currentIp = e107::getIPHandler()->getIP();

		return in_array($currentIp, $allowedIps, true);
	}
}
