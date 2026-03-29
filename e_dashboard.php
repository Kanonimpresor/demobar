<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2026 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * DemoBar Plugin — Widget de dashboard administrativo
 * Muestra un resumen rápido del estado de demos en el panel principal de administración.
 */

if (!defined('e107_INIT')) { exit; }


/**
 * Widget de dashboard para el plugin DemoBar.
 *
 * Aparece en el panel principal del admin con un resumen del estado:
 * - Número de demos activos
 * - Estado del demobar (activo/inactivo)
 */
class demobar_dashboard
{
	/**
	 * Genera el contenido del widget de dashboard.
	 *
	 * @return array Arreglo con los datos del gráfico/widget
	 */
	public function chart()
	{
		$charts = array();

		require_once(e_PLUGIN . 'demobar/includes/demobar_class.php');
		$demobar = new demobar_class();

		$demoCount = $demobar->getDemoCount();
		$isActive  = (bool) e107::pref('demobar', 'demobar_active');

		// --- Widget: Resumen del DemoBar ---
		$text  = '<div class="demobar-dashboard-widget">';
		$text .= '<ul class="list-group list-group-flush">';

		// Estado del plugin
		$statusBadge = $isActive
			? '<span class="badge bg-success">' . LAN_ENABLED . '</span>'
			: '<span class="badge bg-secondary">' . LAN_DISABLED . '</span>';
		$text .= '<li class="list-group-item d-flex justify-content-between align-items-center">';
		$text .= LAN_STATUS . $statusBadge;
		$text .= '</li>';

		// Conteo de demos
		$text .= '<li class="list-group-item d-flex justify-content-between align-items-center">';
		$text .= deftrue('LAN_DEMOBAR_DASH_DEMOS', 'Active Demos');
		$text .= '<span class="badge bg-primary rounded-pill">' . $demoCount . '</span>';
		$text .= '</li>';

		// Enlace a configuración
		$text .= '<li class="list-group-item text-center">';
		$text .= '<a href="' . e_PLUGIN_ABS . 'demobar/admin_config.php" class="btn btn-sm btn-outline-primary">';
		$text .= LAN_CONFIGURE;
		$text .= '</a>';
		$text .= '</li>';

		$text .= '</ul>';
		$text .= '</div>';

		$charts[] = array(
			'text'    => $text,
			'caption' => 'DemoBar',
			'icon'    => 'fa-window-maximize',
		);

		return $charts;
	}
}
