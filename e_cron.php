<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2026 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * DemoBar Plugin — Tareas programadas (Cron)
 * Define las tareas que se ejecutan periódicamente vía cron del sistema.
 */

if (!defined('e107_INIT')) { exit; }


/**
 * Tareas programadas del plugin DemoBar.
 *
 * v1.0.0 — Stub preparatorio (sin acciones reales).
 * v1.1.0 — Demo Reset: limpieza automática de datos de demostración.
 * v1.3.0 — Limpieza de estadísticas antiguas.
 */
class demobar_cron
{
	/**
	 * Registra las tareas cron disponibles.
	 *
	 * @return array Lista de tareas cron con sus metadatos
	 */
	public function config()
	{
		$cron = array();

		// --- Tarea: Reset de Demos (preparada para v1.1.0) ---
		$cron[] = array(
			'name'        => LAN_DEMOBAR_CRON_RESET_NAME,
			'function'    => 'demoReset',
			'description' => LAN_DEMOBAR_CRON_RESET_DESC,
			'category'    => 'plugin',
			'active'      => false, // Desactivado hasta v1.1.0
			'tab'         => 2,     // Cada 2 horas por defecto
		);

		// --- Tarea: Limpieza de estadísticas (preparada para v1.3.0) ---
		$cron[] = array(
			'name'        => LAN_DEMOBAR_CRON_CLEANUP_NAME,
			'function'    => 'statsCleanup',
			'description' => LAN_DEMOBAR_CRON_CLEANUP_DESC,
			'category'    => 'plugin',
			'active'      => false, // Desactivado hasta v1.3.0
			'tab'         => 3,     // Diariamente por defecto
		);

		return $cron;
	}


	/**
	 * Ejecuta el reset de demos (v1.1.0).
	 *
	 * Limpia datos de demostración para volver al estado inicial:
	 * - Restaura contenido de ejemplo
	 * - Limpia uploads del usuario
	 * - Restablece configuraciones predeterminadas
	 *
	 * @return string Resultado de la ejecución
	 */
	public function demoReset()
	{
		// TODO v1.1.0: Implementar lógica de reset
		$msg = 'DemoBar: Demo reset task executed (stub) at ' . date('Y-m-d H:i:s');
		e107::getAdminLog()->addDebug($msg);

		return $msg;
	}


	/**
	 * Ejecuta la limpieza de estadísticas antiguas (v1.3.0).
	 *
	 * Elimina registros de estadísticas con más de 90 días de antigüedad
	 * para mantener el rendimiento de la base de datos.
	 *
	 * @return string Resultado de la ejecución
	 */
	public function statsCleanup()
	{
		// TODO v1.3.0: Implementar limpieza de la tabla demobar_stats
		$msg = 'DemoBar: Stats cleanup task executed (stub) at ' . date('Y-m-d H:i:s');
		e107::getAdminLog()->addDebug($msg);

		return $msg;
	}
}
