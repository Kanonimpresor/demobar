<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2026 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * DemoBar Plugin — Listeners de eventos del sistema
 * Reacciona a eventos del core de e107 para integrar la funcionalidad del demobar.
 */

if (!defined('e107_INIT')) { exit; }


/**
 * Listener de eventos para el plugin DemoBar.
 *
 * Escucha eventos del core de e107 y ejecuta lógica asociada.
 * Fase actual (v1.0.0): registro de actividad en login.
 * Fases futuras: limpieza automática, estadísticas de uso.
 */
class demobar_event
{
	/**
	 * Registra los eventos que este plugin escucha.
	 *
	 * @return array Mapa de evento => método callback
	 */
	public function config()
	{
		$event = array();

		// Registrar cuando un usuario hace login dentro de un demo
		$event[] = array(
			'name'     => 'login',             // Evento del core: login de usuario
			'function' => 'onDemoLogin',        // Método de esta clase
			'class'    => 'demobar_event',
		);

		return $event;
	}


	/**
	 * Callback ejecutado cuando un usuario hace login.
	 *
	 * En contexto multisite demo, registra la actividad para estadísticas (v1.3.0).
	 * En v1.0.0 simplemente verifica el contexto sin acción adicional.
	 *
	 * @param array $data Datos del evento de login (user_id, user_name, etc.)
	 * @return void
	 */
	public function onDemoLogin($data = array())
	{
		// Solo actuar si estamos en un sitio demo (multisite activo)
		if (!defined('e_MULTISITE_IN_USE') || !e_MULTISITE_IN_USE)
		{
			return;
		}

		// Verificar que el plugin está activo
		if (!e107::pref('demobar', 'demobar_active'))
		{
			return;
		}

		// --- Preparado para v1.3.0: Analytics ---
		// Aquí se registrará la visita/login en la tabla demobar_stats
		// $sql = e107::getDb();
		// $sql->insert('demobar_stats', array(
		//     'stat_demo'    => e_MULTISITE_MATCH,
		//     'stat_type'    => 'login',
		//     'stat_ip'      => e107::getIPHandler()->getIP(),
		//     'stat_datestamp'=> time(),
		// ));

		e107::getAdminLog()->addDebug('DemoBar: Login en demo "' . (defined('e_MULTISITE_MATCH') ? e_MULTISITE_MATCH : 'unknown') . '"');
	}
}
