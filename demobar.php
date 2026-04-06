<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2026 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * DemoBar Plugin — Frontend del catálogo de demos
 *
 * Dos vistas:
 *   /demos/         → Cuadrícula de tarjetas (catálogo)
 *   /demos/{slug}   → Vista individual del demo (detalle)
 *
 * Los datos provienen de la tabla demobar_demos (gestionada desde Admin CRUD).
 * El HTML se renderiza usando templates de demobar_template.php y shortcodes
 * del plugin, siguiendo los patrones nativos de e107.
 */

if (!defined('e107_INIT'))
{
	require_once(__DIR__ . '/../../class2.php');
}

// Cargar idioma del plugin (subdirectorio: languages/English/English_front.php)
e107::lan('demobar', 'front', true);


/**
 * Controlador del frontend — catálogo y vista individual de demos.
 */
class demobar_front
{
	/** @var array Plantillas cargadas de demobar_template.php */
	private $templates = [];

	/** @var demobar_catalog_shortcodes Instancia de shortcodes del catálogo */
	private $sc = null;


	/**
	 * Constructor — cargar assets, templates y shortcodes.
	 */
	public function __construct()
	{
		e107::css('demobar', 'css/demobar.css');
		e107::meta('keywords', defset('LAN_DEMOBAR_META_KEYWORDS', 'demos, showcase, templates, plugins'));

		$this->templates = e107::getTemplate('demobar', 'demobar');

		// Cargar shortcodes del catálogo desde el batch file
		// Nota: la clase global demobar_shortcodes ya existe en e_shortcode.php,
		// por eso el batch usa el nombre demobar_catalog_shortcodes
		$scFile = e_PLUGIN . 'demobar/shortcodes/batch/demobar_shortcodes.php';

		if (!class_exists('demobar_catalog_shortcodes', false))
		{
			if (is_readable($scFile))
			{
				require_once($scFile);
			}
		}

		if (class_exists('demobar_catalog_shortcodes', false))
		{
			$this->sc = new demobar_catalog_shortcodes();
		}
	}


	/**
	 * Ejecutar la lógica principal — despachar a vista de catálogo o individual.
	 *
	 * @return void
	 */
	public function run()
	{
		$demoSlug = isset($_GET['name']) ? e107::getParser()->filter($_GET['name'], 'w') : '';

		if (!empty($demoSlug))
		{
			$this->viewSingle($demoSlug);
		}
		else
		{
			$this->viewCatalog();
		}
	}


	/**
	 * Vista de catálogo — cuadrícula de tarjetas con todos los demos activos.
	 *
	 * @return void
	 */
	private function viewCatalog()
	{
		$tp  = e107::getParser();
		$ns  = e107::getRender();
		$sql = e107::getDb('demobar_catalog');

		if ($this->sc === null)
		{
			$ns->tablerender('DemoBar Error', '<div class="alert alert-danger">Shortcodes class not loaded. Check shortcodes/batch/demobar_shortcodes.php exists.</div>');
			return;
		}

		$this->setBreadcrumb();

		// Obtener demos activos desde la BD
		$rows = $sql->retrieve('demobar_demos', '*', 'demo_active = 1 ORDER BY demo_order ASC, demo_name ASC', true);

		if (empty($rows))
		{
			$text = '<div class="alert alert-info">';
			$text .= defset('LAN_DEMOBAR_CATALOG_EMPTY', 'No demos available at this time.');
			$text .= '</div>';

			$ns->tablerender(defset('LAN_DEMOBAR_CATALOG_TITLE', 'Demo Catalog'), $text);
			return;
		}

		// Necesitamos la clase demobar para construir URLs de demos
		require_once(e_PLUGIN . 'demobar/includes/demobar_class.php');
		$demobar = new demobar_class();
		$multisiteDemos = $demobar->getDemos();

		// Renderizar las tarjetas usando el template catalog_card
		$cards = '';

		foreach ($rows as $row)
		{
			// Inyectar URL del demo al row para que los shortcodes la lean
			$row['_demo_url'] = '#';
			foreach ($multisiteDemos as $d)
			{
				if ($d['match'] === $row['demo_slug'])
				{
					$row['_demo_url'] = $demobar->getDemoUrl($d);
					break;
				}
			}

			// Inyectar URL de la página de detalle
			$row['_detail_url'] = e107::url('demobar', 'view', array('name' => $row['demo_slug']));
			if (empty($row['_detail_url']))
			{
				$row['_detail_url'] = e_PLUGIN_ABS . 'demobar/demobar.php?name=' . $row['demo_slug'];
			}

			// Pasar los datos del row a los shortcodes
			$this->sc->setVars($row);

			$cards .= $tp->parseTemplate($this->templates['catalog_card'], true, $this->sc);
		}

		// Renderizar el wrapper del catálogo
		$catalogVars = array(
			'_catalog_items' => $cards,
			'_catalog_count' => count($rows),
		);
		$this->sc->setVars($catalogVars);

		$text = $tp->parseTemplate($this->templates['catalog'], true, $this->sc);

		$ns->tablerender(defset('LAN_DEMOBAR_CATALOG_TITLE', 'Demo Catalog'), $text);
	}


	/**
	 * Vista individual — detalles completos de un demo específico.
	 *
	 * @param string $slug Identificador del demo
	 * @return void
	 */
	private function viewSingle($slug)
	{
		$tp  = e107::getParser();
		$ns  = e107::getRender();
		$sql = e107::getDb('demobar_single');

		if ($this->sc === null)
		{
			$ns->tablerender('DemoBar Error', '<div class="alert alert-danger">Shortcodes class not loaded. Check shortcodes/batch/demobar_shortcodes.php exists.</div>');
			return;
		}

		$row = $sql->retrieve('demobar_demos', '*', "demo_slug = '" . $tp->toDB($slug) . "' AND demo_active = 1");

		if (empty($row))
		{
			$text = '<div class="alert alert-warning">';
			$text .= defset('LAN_DEMOBAR_DEMO_NOT_FOUND', 'The requested demo was not found.');
			$text .= '</div>';

			$ns->tablerender(defset('LAN_DEMOBAR_CATALOG_TITLE', 'Demo Catalog'), $text);
			return;
		}

		// Inyectar URL del demo live
		require_once(e_PLUGIN . 'demobar/includes/demobar_class.php');
		$demobar = new demobar_class();
		$multisiteDemos = $demobar->getDemos();

		$row['_demo_url'] = '#';
		foreach ($multisiteDemos as $d)
		{
			if ($d['match'] === $row['demo_slug'])
			{
				$row['_demo_url'] = $demobar->getDemoUrl($d);
				break;
			}
		}

		$row['_detail_url'] = e_SELF;

		// Breadcrumb con el nombre del demo
		$this->setBreadcrumb($row['demo_name']);

		// Pasar datos a shortcodes y renderizar
		$this->sc->setVars($row);

		$text = $tp->parseTemplate($this->templates['detail'], true, $this->sc);

		$ns->tablerender($tp->toHTML($row['demo_name'], false, 'TITLE'), $text);
	}


	/**
	 * Configurar el breadcrumb de la página.
	 *
	 * @param string|null $demoName Nombre del demo individual (null para catálogo)
	 * @return void
	 */
	private function setBreadcrumb($demoName = null)
	{
		$breadcrumb = [];

		$breadcrumb[] = [
			'text' => deftrue('LAN_HOME', 'Home'),
			'url'  => e_HTTP,
		];

		$catalogUrl = e107::url('demobar', 'index');
		if (empty($catalogUrl))
		{
			$catalogUrl = e_PLUGIN_ABS . 'demobar/demobar.php';
		}

		if ($demoName !== null)
		{
			$breadcrumb[] = [
				'text' => defset('LAN_DEMOBAR_CATALOG_TITLE', 'Demo Catalog'),
				'url'  => $catalogUrl,
			];
			$breadcrumb[] = [
				'text' => $demoName,
				'url'  => null,
			];
		}
		else
		{
			$breadcrumb[] = [
				'text' => defset('LAN_DEMOBAR_CATALOG_TITLE', 'Demo Catalog'),
				'url'  => null,
			];
		}

		e107::breadcrumb($breadcrumb);
	}
}


// Inicializar y ejecutar
$front = new demobar_front();
require_once(HEADERF);
$front->run();
require_once(FOOTERF);
