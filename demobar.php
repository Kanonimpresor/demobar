<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2026 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * DemoBar Plugin — Página frontend del catálogo de demos
 * Muestra un grid visual de todos los demos activos.
 * Fase v1.2.0: por ahora funciona como listado básico.
 */

if (!defined('e107_INIT'))
{
	require_once(__DIR__ . '/../../class2.php');
}

// Cargar idioma del plugin
e107::lan('demobar');


/**
 * Controlador del frontend — página /demos/ con catálogo de demos.
 */
class demobar_front
{
	/**
	 * Constructor — cargar assets y configurar meta/breadcrumb.
	 */
	public function __construct()
	{
		e107::css('demobar', 'css/demobar.css');
		e107::meta('keywords', defset('LAN_DEMOBAR_META_KEYWORDS', 'demos, showcase, templates, plugins'));
	}


	/**
	 * Ejecutar la lógica principal y renderizar el catálogo.
	 *
	 * @return void
	 */
	public function run()
	{
		$tp = e107::getParser();
		$ns = e107::getRender();

		$this->setBreadcrumb();

		require_once(e_PLUGIN . 'demobar/includes/demobar_class.php');

		$demobar = new demobar_class();
		$demos   = $demobar->getDemos();

		if (empty($demos))
		{
			$text = '<div class="alert alert-info">';
			$text .= defset('LAN_DEMOBAR_CATALOG_EMPTY', 'No demos available at this time.');
			$text .= '</div>';

			$ns->tablerender(defset('LAN_DEMOBAR_CATALOG_TITLE', 'Demos'), $text);
			return;
		}

		// Renderizar el grid de demos
		$text = '<div class="row demobar-catalog">';

		foreach ($demos as $demo)
		{
			$name = $tp->toHTML($demo['name'], false, 'TITLE');
			$url  = $tp->toAttribute($demobar->getDemoUrl($demo));
			$type = ($demo['haystack'] === 'host')
				? defset('LAN_DEMOBAR_TYPE_SUBDOMAIN', 'Subdomain')
				: defset('LAN_DEMOBAR_TYPE_SUBDIR', 'Subdirectory');

			$text .= '<div class="col-md-4 col-sm-6 mb-4">';
			$text .= '<div class="card demobar-card h-100">';
			$text .= '<div class="card-body text-center">';
			$text .= '<h5 class="card-title">' . $name . '</h5>';
			$text .= '<p class="card-text"><span class="badge bg-secondary">' . $type . '</span></p>';
			$text .= '<a href="' . $url . '" class="btn btn-primary" target="_blank" rel="noopener">';
			$text .= defset('LAN_DEMOBAR_VIEW_DEMO', 'View Demo');
			$text .= '</a>';
			$text .= '</div>';
			$text .= '</div>';
			$text .= '</div>';
		}

		$text .= '</div>';

		$ns->tablerender(defset('LAN_DEMOBAR_CATALOG_TITLE', 'Demos'), $text);
	}


	/**
	 * Configurar el breadcrumb de la página.
	 *
	 * @return void
	 */
	private function setBreadcrumb()
	{
		$breadcrumb = [];

		$breadcrumb[] = [
			'text' => deftrue('LAN_HOME', 'Home'),
			'url'  => e_HTTP,
		];

		$breadcrumb[] = [
			'text' => defset('LAN_DEMOBAR_CATALOG_TITLE', 'Demos'),
			'url'  => null,
		];

		e107::breadcrumb($breadcrumb);
	}
}


// Inicializar y ejecutar
$front = new demobar_front();
require_once(HEADERF);
$front->run();
require_once(FOOTERF);
