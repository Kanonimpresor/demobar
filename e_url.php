<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2026 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * DemoBar Plugin — Enrutamiento SEF (Search Engine Friendly URLs)
 * Define las rutas amigables para la sección de catálogo de demos.
 */

if (!defined('e107_INIT')) { exit; }


/**
 * Configuración de URLs amigables para el plugin DemoBar.
 *
 * Registra las rutas:
 *   /demos/         → Página de catálogo
 *   /demos/{name}/  → Reservado para vista individual (v1.2.0+)
 */
class demobar_url
{
	/**
	 * Devuelve la configuración de rutas.
	 *
	 * @return array Arreglo de definiciones de rutas SEF
	 */
	public function config()
	{
		$config = array();

		// --- Catálogo de demos ---
		$config['index'] = array(
			'alias'    => 'demos',
			'regex'    => '^demos/?$',
			'redirect' => '{e_PLUGIN}demobar/demobar.php',
			'sef'      => 'demos/',
		);

		// --- Vista individual de demo (preparado para v1.2.0) ---
		$config['view'] = array(
			'alias'    => 'demos',
			'regex'    => '^demos/(.+)/?$',
			'redirect' => '{e_PLUGIN}demobar/demobar.php?name=$1',
			'sef'      => 'demos/{name}/',
		);

		return $config;
	}
}
