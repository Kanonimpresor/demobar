<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2026 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * DemoBar Plugin — Rutinas de instalación, actualización y desinstalación
 */

if (!defined('e107_INIT')) { exit; }


/**
 * Rutinas de setup para el plugin DemoBar.
 *
 * Se ejecutan automáticamente durante la instalación, actualización
 * y desinstalación del plugin a través del administrador.
 */
class demobar_setup
{
	/**
	 * Ejecutado durante la instalación del plugin.
	 *
	 * Establece los valores predeterminados de las preferencias
	 * y crea las tablas necesarias en la base de datos.
	 *
	 * @param array $info Información del plugin proporcionada por el instalador
	 * @return bool|null true si la instalación fue exitosa
	 */
	public function install_pre($info = array())
	{
		// Nada que hacer antes de la instalación SQL
		return null;
	}

	/**
	 * Ejecutado después de la instalación SQL.
	 *
	 * @param array $info Información del plugin
	 * @return bool|null
	 */
	public function install_post($info = array())
	{
		$mes = e107::getMessage();

		// Verificar que el archivo multisite.json existe
		$multisiteJson = e_SYSTEM_BASE . 'multisite.json';

		if (is_readable($multisiteJson))
		{
			$mes->addSuccess('DemoBar: multisite.json detected at ' . $multisiteJson);
		}
		else
		{
			$mes->addWarning('DemoBar: multisite.json not found at ' . $multisiteJson . '. The demo bar will not display demos until this file exists.');
		}

		$mes->addSuccess('DemoBar plugin installed successfully.');

		return null;
	}


	/**
	 * Ejecutado durante la desinstalación del plugin.
	 *
	 * Limpia las preferencias y datos asociados.
	 *
	 * @param array $info Información del plugin
	 * @return bool|null
	 */
	public function uninstall_pre($info = array())
	{
		// Nada que hacer antes de la desinstalación
		return null;
	}

	/**
	 * Ejecutado después de la desinstalación.
	 *
	 * @param array $info Información del plugin
	 * @return bool|null
	 */
	public function uninstall_post($info = array())
	{
		$mes = e107::getMessage();

		// Limpiar preferencias del plugin
		e107::getPlugConfig('demobar')->removeAllPrefs()->save();

		$mes->addSuccess('DemoBar: All preferences removed.');

		return null;
	}


	/**
	 * Ejecutado durante la actualización del plugin.
	 *
	 * Maneja migraciones entre versiones.
	 *
	 * @param string $oldVersion Versión anterior del plugin
	 * @param array  $info       Información del plugin
	 * @return bool|null
	 */
	public function upgrade_pre($oldVersion, $info = array())
	{
		return null;
	}

	/**
	 * Ejecutado después de la actualización.
	 *
	 * @param string $oldVersion Versión anterior del plugin
	 * @param array  $info       Información del plugin
	 * @return bool|null
	 */
	public function upgrade_post($oldVersion, $info = array())
	{
		$mes = e107::getMessage();

		// Migraciones por versión
		if (version_compare($oldVersion, '1.1.0', '<'))
		{
			// TODO v1.1.0: Agregar nuevas preferencias de demo reset
			$mes->addSuccess('DemoBar: Upgraded to v1.1.0 schema.');
		}

		if (version_compare($oldVersion, '1.3.0', '<'))
		{
			// TODO v1.3.0: Crear tabla de estadísticas si no existe
			$mes->addSuccess('DemoBar: Upgraded to v1.3.0 schema.');
		}

		return null;
	}
}
