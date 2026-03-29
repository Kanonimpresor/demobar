<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2026 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * DemoBar Plugin — Shortcodes globales
 * Disponibles en todo el sitio para insertar elementos del demobar en templates.
 */

if (!defined('e107_INIT')) { exit; }


/**
 * Shortcodes del plugin DemoBar — disponibles en todo el sitio.
 * Convención de nombres: sc_demobar_<nombre>
 */
class demobar_shortcodes extends e_shortcode
{
	/** @var bool No sobreescribir shortcodes existentes del core */
	public $override = false;

	/** @var demobar_class|null Instancia del controlador principal */
	private $demobarInstance = null;


	/**
	 * Obtener (y cachear) la instancia de demobar_class.
	 *
	 * @return demobar_class
	 */
	private function getDemobar()
	{
		if ($this->demobarInstance === null)
		{
			require_once(e_PLUGIN . 'demobar/includes/demobar_class.php');
			$this->demobarInstance = new demobar_class();
		}

		return $this->demobarInstance;
	}


	/**
	 * {DEMOBAR_NAV} — Renderiza la barra de navegación completa.
	 * Uso en templates: {DEMOBAR_NAV}
	 *
	 * @param mixed $parm Parámetros opcionales (no usados actualmente)
	 * @return string HTML de la barra de navegación
	 */
	public function sc_demobar_nav($parm = null)
	{
		return $this->getDemobar()->renderBar();
	}


	/**
	 * {DEMOBAR_COUNT} — Número total de demos activos.
	 * Uso: {DEMOBAR_COUNT}
	 *
	 * @param mixed $parm Parámetros opcionales (no usados actualmente)
	 * @return string Número de demos
	 */
	public function sc_demobar_count($parm = null)
	{
		return (string) $this->getDemobar()->getDemoCount();
	}


	/**
	 * {DEMOBAR_CURRENT} — Nombre del demo que se está visualizando actualmente.
	 * Uso: {DEMOBAR_CURRENT}
	 *
	 * @param mixed $parm Parámetros opcionales (no usados actualmente)
	 * @return string Nombre del demo actual o cadena vacía
	 */
	public function sc_demobar_current($parm = null)
	{
		$name = $this->getDemobar()->getCurrentDemoName();

		return $name !== false ? e107::getParser()->toHTML($name, false, 'TITLE') : '';
	}
}
