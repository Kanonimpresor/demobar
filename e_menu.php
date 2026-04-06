<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2026 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * DemoBar Plugin — Configuración de Menús para el Gestor de Menús de e107
 *
 * Este archivo registra y configura los menús del plugin demobar
 * para ser gestionados desde Admin → Apariencia → Gestor de Menús.
 *
 * El menú demobar_detail_menu auto-detecta el demo desde la URL
 * o e_MULTISITE_MATCH, por lo que no requiere selección manual de slug.
 * Solo se expone el campo 'caption' para personalización opcional.
 */

if (!defined('e107_INIT')) { exit; }


class demobar_menu
{
	/**
	 * Configuración del menú para el Gestor de Menús.
	 *
	 * Solo el campo caption es configurable. El demo a mostrar
	 * se auto-detecta dinámicamente (ver demobar_detail_menu.php).
	 *
	 * @param string $menu Nombre del menú (sin sufijo _menu)
	 * @return array Campos configurables
	 */
	public function config($menu = '')
	{
		$fields = array();

		$fields['caption'] = array(
			'title'      => defset('LAN_DEMOBAR_MENU_CAPTION_LABEL', 'Menu Caption'),
			'type'       => 'text',
			'multilan'   => true,
			'writeParms' => array('size' => 'xxlarge', 'default' => defset('LAN_DEMOBAR_MENU_DETAIL_CAPTION', 'Demo Details')),
			'help'       => defset('LAN_DEMOBAR_MENU_CAPTION_HELP', 'Title displayed above the menu. Leave empty to use the default from language files.'),
		);

		return $fields;
	}
}
