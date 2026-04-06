<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2026 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * DemoBar Plugin — Panel de administración
 * Implementa el patrón e_admin_dispatcher + e_admin_ui para la gestión del plugin.
 */

require_once(__DIR__ . '/../../class2.php');

if (!getperms('P'))
{
	e107::redirect('admin');
	exit;
}

// Cargar idioma de administración (subdirectorio: languages/English/English_admin.php)
e107::lan('demobar', 'admin', true);


/**
 * Dispatcher principal — registra modos, controladores y menú de administración.
 */
class demobar_adminArea extends e_admin_dispatcher
{
	protected $modes = [
		'main' => [
			'controller' => 'demobar_admin_ui',
			'path'       => null,
			'ui'         => 'demobar_admin_form_ui',
			'uipath'     => null,
		],
		'demos' => [
			'controller' => 'demobar_demos_admin_ui',
			'path'       => null,
			'ui'         => 'demobar_demos_admin_form_ui',
			'uipath'     => null,
		],
	];

	protected $adminMenu = [
		'main/prefs'     => ['caption' => LAN_PREFS, 'perm' => 'P', 'icon' => 'fa-cog'],
		'demos/list'     => ['caption' => 'LAN_DEMOBAR_ADMIN_DEMOS', 'perm' => 'P', 'icon' => 'fa-th-list'],
		'demos/create'   => ['caption' => 'LAN_DEMOBAR_ADMIN_DEMOS_CREATE', 'perm' => 'P', 'icon' => 'fa-plus'],
		'demos/div1'     => ['divider' => true],
		'main/configure' => ['caption' => 'LAN_DEMOBAR_ADMIN_CONFIGURE', 'perm' => 'P', 'icon' => 'fa-television'],
		'main/guide'     => ['caption' => 'LAN_DEMOBAR_ADMIN_GUIDE', 'perm' => 'P', 'icon' => 'fa-book'],
	];

	protected $adminMenuAliases = [
		'main/edit'  => 'main/list',
		'demos/edit' => 'demos/list',
	];

	protected $menuTitle = 'DemoBar';
}


/**
 * Controlador de la interfaz de administración.
 * Gestiona preferencias, vista de demos y página de guía.
 */
class demobar_admin_ui extends e_admin_ui
{
	protected $pluginTitle = 'DemoBar';
	protected $pluginName  = 'demobar';

	// No necesitamos tabla ni PID porque la gestión es por preferencias y JSON
	protected $table = '';
	protected $pid   = '';

	/**
	 * Preferencias del plugin — formulario auto-generado por e_admin_ui.
	 * Cada entrada define un campo de configuración con su tipo y validación.
	 */
	protected $prefs = [
		'demobar_active' => [
			'title' => 'LAN_DEMOBAR_PREF_ACTIVE',
			'type'  => 'boolean',
			'data'  => 'integer',
			'help'  => 'LAN_DEMOBAR_PREF_ACTIVE_HELP',
		],
		'demobar_brand_text' => [
			'title'    => 'LAN_DEMOBAR_PREF_BRAND_TEXT',
			'type'     => 'text',
			'data'     => 'string',
			'help'     => 'LAN_DEMOBAR_PREF_BRAND_TEXT_HELP',
			'validate' => false,
		],
		'demobar_brand_url' => [
			'title' => 'LAN_DEMOBAR_PREF_BRAND_URL',
			'type'  => 'url',
			'data'  => 'string',
			'help'  => 'LAN_DEMOBAR_PREF_BRAND_URL_HELP',
		],
		'demobar_bg_color' => [
			'title' => 'LAN_DEMOBAR_PREF_BG_COLOR',
			'type'  => 'text',
			'data'  => 'string',
			'help'  => 'LAN_DEMOBAR_PREF_BG_COLOR_HELP',
			'writeParms' => ['size' => 'small', 'placeholder' => '#343a40'],
		],
		'demobar_text_color' => [
			'title' => 'LAN_DEMOBAR_PREF_TEXT_COLOR',
			'type'  => 'text',
			'data'  => 'string',
			'help'  => 'LAN_DEMOBAR_PREF_TEXT_COLOR_HELP',
			'writeParms' => ['size' => 'small', 'placeholder' => '#ffffff'],
		],
		'demobar_position' => [
			'title' => 'LAN_DEMOBAR_PREF_POSITION',
			'type'  => 'dropdown',
			'data'  => 'string',
			'help'  => 'LAN_DEMOBAR_PREF_POSITION_HELP',
			'writeParms' => ['optArray' => ['top' => 'Top', 'bottom' => 'Bottom']],
		],
		'demobar_cta_source_url' => [
			'title' => 'LAN_DEMOBAR_PREF_CTA_SOURCE_URL',
			'type'  => 'url',
			'data'  => 'string',
			'help'  => 'LAN_DEMOBAR_PREF_CTA_SOURCE_HELP',
		],
		'demobar_cta_source_text' => [
			'title' => 'LAN_DEMOBAR_PREF_CTA_SOURCE_TEXT',
			'type'  => 'text',
			'data'  => 'string',
		],
		'demobar_cta_contact_url' => [
			'title' => 'LAN_DEMOBAR_PREF_CTA_CONTACT_URL',
			'type'  => 'url',
			'data'  => 'string',
			'help'  => 'LAN_DEMOBAR_PREF_CTA_CONTACT_HELP',
		],
		'demobar_cta_contact_text' => [
			'title' => 'LAN_DEMOBAR_PREF_CTA_CONTACT_TEXT',
			'type'  => 'text',
			'data'  => 'string',
		],
		'demobar_show_prevnext' => [
			'title' => 'LAN_DEMOBAR_PREF_SHOW_PREVNEXT',
			'type'  => 'boolean',
			'data'  => 'integer',
			'help'  => 'LAN_DEMOBAR_PREF_SHOW_PREVNEXT_HELP',
		],
		'demobar_show_hide_toggle' => [
			'title' => 'LAN_DEMOBAR_PREF_SHOW_TOGGLE',
			'type'  => 'boolean',
			'data'  => 'integer',
			'help'  => 'LAN_DEMOBAR_PREF_SHOW_TOGGLE_HELP',
		],
		'demobar_admin_ip_whitelist' => [
			'title'      => 'LAN_DEMOBAR_PREF_IP_WHITELIST',
			'type'       => 'textarea',
			'data'       => 'string',
			'help'       => 'LAN_DEMOBAR_PREF_IP_WHITELIST_HELP',
			'writeParms' => ['rows' => 5],
		],
	];


	/**
	 * Inicialización — tareas generales al cargar el admin UI.
	 */
	public function init()
	{
		// No mostrar warnings globales aquí — la validación de multisite.json
		// se hace en configurePage() donde es contextualmente relevante.
	}


	/**
	 * Página personalizada — muestra los demos activos leídos de multisite.json.
	 * Permite visualizar el estado actual de la configuración multisite.
	 *
	 * @return string HTML de la página
	 */
	public function configurePage()
	{
		$ns  = e107::getRender();
		$frm = $this->getUI();
		$tp  = e107::getParser();

		$jsonPath = e_SYSTEM_BASE . 'multisite.json';

		if (!file_exists($jsonPath))
		{
			return '<div class="alert alert-warning">' .
				defset('LAN_DEMOBAR_ADMIN_CFG_NO_FILE', 'multisite.json file not found.') .
				' <a href="https://github.com/CaMer0n/multisite" target="_blank" rel="noopener">multisite plugin</a>' .
				'</div>';
		}

		$data = json_decode(file_get_contents($jsonPath), true);

		if ($data === null)
		{
			return '<div class="alert alert-danger">' .
				defset('LAN_DEMOBAR_ADMIN_CFG_INVALID', 'Invalid JSON in multisite.json') .
				'</div>';
		}

		if (empty($data) || !is_array($data))
		{
			return '<div class="alert alert-info">' .
				defset('LAN_DEMOBAR_ADMIN_CFG_NO_DEMOS', 'No demos configured in multisite.json') .
				'</div>';
		}

		// Construir tabla de demos
		$text = '<table class="table table-striped table-bordered">';
		$text .= '<thead><tr>';
		$text .= '<th>' . defset('LAN_DEMOBAR_ADMIN_CFG_NAME', 'Demo Name') . '</th>';
		$text .= '<th>' . defset('LAN_DEMOBAR_ADMIN_CFG_MATCH', 'Match Pattern') . '</th>';
		$text .= '<th>' . defset('LAN_DEMOBAR_ADMIN_CFG_HAYSTACK', 'Haystack') . '</th>';
		$text .= '<th>' . defset('LAN_DEMOBAR_ADMIN_CFG_DATABASE', 'Database') . '</th>';
		$text .= '<th class="text-center">' . defset('LAN_DEMOBAR_ADMIN_CFG_STATUS', 'Status') . '</th>';
		$text .= '</tr></thead><tbody>';

		foreach ($data as $site)
		{
			$name     = $tp->toHTML(varset($site['name'], '—'), false, 'TITLE');
			$match    = $tp->toHTML(varset($site['match'], '—'), false, 'TITLE');
			$haystack = varset($site['haystack'], 'url') === 'host' ? 'Subdomain' : 'Subdirectory';
			$database = $tp->toHTML(varset($site['mysql']['database'], '—'), false, 'TITLE');
			$activeLabel = !empty($site['active'])
				? '<span class="badge bg-success">' . defset('LAN_DEMOBAR_ADMIN_CFG_ACTIVE', 'Active') . '</span>'
				: '<span class="badge bg-secondary">' . defset('LAN_DEMOBAR_ADMIN_CFG_INACTIVE', 'Inactive') . '</span>';

			$text .= '<tr>';
			$text .= '<td>' . $name . '</td>';
			$text .= '<td><code>' . $match . '</code></td>';
			$text .= '<td>' . $haystack . '</td>';
			$text .= '<td>' . $database . '</td>';
			$text .= '<td class="text-center">' . $activeLabel . '</td>';
			$text .= '</tr>';
		}

		$text .= '</tbody></table>';

		// Nota informativa
		$text .= '<div class="alert alert-info">';
		$text .= '<i class="fa fa-info-circle"></i> ';
		$text .= defset('LAN_DEMOBAR_ADMIN_CFG_DESC',
			'Demos loaded from multisite.json. This file is read-only through this interface.');
		$text .= '</div>';

		return $text;
	}


	/**
	 * Página de guía de usuario — documentación integrada en el admin.
	 * Usa el patrón template + shortcodes + CSS separado.
	 *
	 * Archivos involucrados:
	 *   - templates/demobar_guide_template.php   → HTML con placeholders
	 *   - shortcodes/batch/demobar_guide_shortcodes.php → textos i18n
	 *   - css/demobar_admin.css                  → estilos aislados
	 *
	 * @return string HTML de la guía
	 */
	public function guidePage()
	{
		$tp  = e107::getParser();
		$frm = e107::getForm();

		// Cargar CSS del admin guide
		e107::css('demobar', 'css/demobar_admin.css');

		// Cargar template y shortcodes
		$template = e107::getTemplate('demobar', 'demobar_guide');
		$sc       = e107::getScBatch('demobar_guide', 'demobar');

		// Definir pestañas: id => [constante_i18n, fallback, icono]
		$tabs = [
			'overview'        => ['LAN_DEMOBAR_GUIDE_TAB_OVERVIEW',  'Overview',         'fa-info-circle'],
			'configuration'   => ['LAN_DEMOBAR_GUIDE_TAB_CONFIG',    'Configuration',    'fa-cog'],
			'usage'           => ['LAN_DEMOBAR_GUIDE_TAB_USAGE',     'Usage',            'fa-play'],
			'demos'           => ['LAN_DEMOBAR_GUIDE_TAB_DEMOS',     'Demo Management',  'fa-th-large'],
			'multisite'       => ['LAN_DEMOBAR_GUIDE_TAB_MULTISITE', 'Multisite',        'fa-globe'],
			'troubleshooting' => ['LAN_DEMOBAR_GUIDE_TAB_TROUBLE',   'Troubleshooting',  'fa-wrench'],
		];

		// Construir array para $frm->tabs(): cada entrada necesita 'caption' y 'text'
		$tabData = [];
		foreach ($tabs as $id => $tab)
		{
			$label   = defset($tab[0], $tab[1]);
			$icon    = '<i class="fa ' . $tab[2] . '"></i> ';
			$content = !empty($template[$id])
				? $tp->parseTemplate($template[$id], true, $sc)
				: '';

			$tabData[$id] = [
				'caption' => $icon . $label,
				'text'    => $content,
			];
		}

		return '<div class="demobar-guide">' . $frm->tabs($tabData) . '</div>';
	}
}


/**
 * Clase de formulario personalizado — extiende e_admin_form_ui.
 * Permite definir renderizados personalizados para campos tipo 'method'.
 */
class demobar_admin_form_ui extends e_admin_form_ui
{
	// Reservado para futuros campos personalizados con renderizado method
}


/**
 * Controlador CRUD para la tabla demobar_demos.
 * Gestiona el listado, creación, edición y eliminación de demos
 * directamente desde el panel de administración.
 */
class demobar_demos_admin_ui extends e_admin_ui
{
	protected $pluginTitle = 'DemoBar';
	protected $pluginName  = 'demobar';

	protected $table  = 'demobar_demos';
	protected $pid    = 'demo_id';
	protected $perPage = 20;

	protected $listOrder = 'demo_order ASC, demo_name ASC';

	protected $fields = [
		'checkboxes'         => ['title' => '', 'type' => null, 'data' => null, 'width' => '3%', 'thclass' => 'center', 'class' => 'center', 'forced' => true, 'nosort' => true],
		'demo_id'            => ['title' => LAN_ID, 'type' => 'number', 'data' => 'int', 'width' => '5%', 'forced' => true, 'readonly' => 2],
		'demo_slug'          => ['title' => 'LAN_DEMOBAR_FIELD_SLUG', 'type' => 'text', 'data' => 'str', 'width' => '10%', 'batch' => false, 'filter' => true, 'inline' => true, 'help' => 'LAN_DEMOBAR_FIELD_SLUG_HELP', 'validate' => true],
		'demo_name'          => ['title' => LAN_TITLE, 'type' => 'text', 'data' => 'str', 'width' => '15%', 'batch' => false, 'filter' => true, 'inline' => true],
		'demo_description'   => ['title' => LAN_DESCRIPTION, 'type' => 'textarea', 'data' => 'str', 'width' => 'auto', 'readParms' => ['truncate' => 100], 'writeParms' => ['rows' => 4]],
		'demo_category'      => ['title' => LAN_CATEGORY, 'type' => 'dropdown', 'data' => 'str', 'width' => '10%', 'batch' => true, 'filter' => true, 'inline' => true],
		'demo_thumbnail'     => ['title' => 'LAN_DEMOBAR_FIELD_THUMBNAIL', 'type' => 'image', 'data' => 'str', 'width' => '10%', 'readParms' => ['thumb' => 80]],
		'demo_version'       => ['title' => 'LAN_DEMOBAR_FIELD_VERSION', 'type' => 'text', 'data' => 'str', 'width' => '8%', 'inline' => true, 'writeParms' => ['size' => 'small', 'placeholder' => '1.0.0']],
		'demo_release_date'  => ['title' => 'LAN_DEMOBAR_FIELD_RELEASE_DATE', 'type' => 'text', 'data' => 'str', 'width' => '10%', 'inline' => true, 'writeParms' => ['size' => 'medium', 'placeholder' => '2026-01-01']],
		'demo_built_with'    => ['title' => 'LAN_DEMOBAR_FIELD_BUILT_WITH', 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'writeParms' => ['placeholder' => 'e107 v2.4.1, Bootstrap 5, PHP 8.2']],
		'demo_included_files'=> ['title' => 'LAN_DEMOBAR_FIELD_INCLUDED_FILES', 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'writeParms' => ['placeholder' => 'HTML, CSS, JS, PHP, SQL']],
		'demo_license_type'  => ['title' => 'LAN_DEMOBAR_FIELD_LICENSE_TYPE', 'type' => 'text', 'data' => 'str', 'width' => '8%', 'inline' => true, 'writeParms' => ['size' => 'small', 'placeholder' => 'GPL-3.0']],
		'demo_license_url'   => ['title' => 'LAN_DEMOBAR_FIELD_LICENSE_URL', 'type' => 'url', 'data' => 'str', 'width' => 'auto'],
		'demo_download_url'  => ['title' => 'LAN_DEMOBAR_FIELD_DOWNLOAD_URL', 'type' => 'url', 'data' => 'str', 'width' => 'auto'],
		'demo_order'         => ['title' => LAN_ORDER, 'type' => 'number', 'data' => 'int', 'width' => '5%', 'inline' => true],
		'demo_active'        => ['title' => LAN_ACTIVE, 'type' => 'boolean', 'data' => 'int', 'width' => '5%', 'batch' => true, 'filter' => true, 'inline' => true, 'thclass' => 'center', 'class' => 'center'],
		'options'            => ['title' => LAN_OPTIONS, 'type' => null, 'data' => null, 'width' => '8%', 'forced' => true, 'thclass' => 'center last', 'class' => 'center last'],
	];

	protected $fieldpref = ['demo_id', 'demo_slug', 'demo_name', 'demo_category', 'demo_version', 'demo_active', 'demo_order', 'options'];


	public function init()
	{
		// Construir opciones del dropdown de categorías con i18n.
		// La clave almacenada en BD es el nombre en inglés (consistente entre idiomas).
		// El valor mostrado es la traducción del idioma activo.
		$categories = [
			'Business'          => defset('LAN_DEMOBAR_CAT_BUSINESS',          'Business'),
			'Portfolio'         => defset('LAN_DEMOBAR_CAT_PORTFOLIO',         'Portfolio'),
			'Admin'             => defset('LAN_DEMOBAR_CAT_ADMIN',             'Admin'),
			'Education'         => defset('LAN_DEMOBAR_CAT_EDUCATION',         'Education'),
			'eCommerce'         => defset('LAN_DEMOBAR_CAT_ECOMMERCE',         'eCommerce'),
			'Restaurant'        => defset('LAN_DEMOBAR_CAT_RESTAURANT',        'Restaurant'),
			'Medical'           => defset('LAN_DEMOBAR_CAT_MEDICAL',           'Medical'),
			'Coming Soon'       => defset('LAN_DEMOBAR_CAT_COMING_SOON',       'Coming Soon'),
			'One Page'          => defset('LAN_DEMOBAR_CAT_ONE_PAGE',          'One Page'),
			'Landing Page'      => defset('LAN_DEMOBAR_CAT_LANDING_PAGE',      'Landing Page'),
			'Corporate'         => defset('LAN_DEMOBAR_CAT_CORPORATE',         'Corporate'),
			'Agency'            => defset('LAN_DEMOBAR_CAT_AGENCY',            'Agency'),
			'Travel'            => defset('LAN_DEMOBAR_CAT_TRAVEL',            'Travel'),
			'Hotel'             => defset('LAN_DEMOBAR_CAT_HOTEL',             'Hotel'),
			'Events'            => defset('LAN_DEMOBAR_CAT_EVENTS',            'Events'),
			'Photography'       => defset('LAN_DEMOBAR_CAT_PHOTOGRAPHY',       'Photography'),
			'Personal'          => defset('LAN_DEMOBAR_CAT_PERSONAL',          'Personal'),
			'Resume / CV'       => defset('LAN_DEMOBAR_CAT_RESUME',            'Resume / CV'),
			'Real Estate'       => defset('LAN_DEMOBAR_CAT_REAL_ESTATE',       'Real Estate'),
			'Health'            => defset('LAN_DEMOBAR_CAT_HEALTH',            'Health'),
			'Website Templates' => defset('LAN_DEMOBAR_CAT_WEBSITE_TEMPLATES', 'Website Templates'),
			'Construction'      => defset('LAN_DEMOBAR_CAT_CONSTRUCTION',      'Construction'),
			'Transportation'    => defset('LAN_DEMOBAR_CAT_TRANSPORTATION',    'Transportation'),
			'Blog & Magazine'   => defset('LAN_DEMOBAR_CAT_BLOG_MAGAZINE',     'Blog & Magazine'),
			'SaaS'              => defset('LAN_DEMOBAR_CAT_SAAS',              'SaaS'),
		];

		$this->fields['demo_category']['writeParms'] = ['optArray' => $categories];
	}
}


/**
 * Clase de formulario personalizado para demos — extiende e_admin_form_ui.
 */
class demobar_demos_admin_form_ui extends e_admin_form_ui
{
	// Reservado para futuros campos personalizados
}


// Inicializar el dispatcher
new demobar_adminArea();

require_once(e_ADMIN . 'auth.php');
e107::getAdminUI()->runPage();
require_once(e_ADMIN . 'footer.php');
exit;
