<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2026 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * DemoBar Plugin — Archivo de idioma global Español
 *
 * Constantes cargadas en CADA página (vía lan_global_list).
 * Solo constantes necesarias globalmente (links de navegación, nombre del plugin, etc.).
 */

if (!defined('e107_INIT')) { exit; }


// --- Identificación del plugin ---
define('LAN_PLUGIN_DEMOBAR_NAME',        'DemoBar');
define('LAN_PLUGIN_DEMOBAR_SUMMARY',     'Barra de navegación persistente para entornos de demostración multisitio');
define('LAN_PLUGIN_DEMOBAR_DESCRIPTION', 'Inyecta una barra fija superior en todos los sitios de una instalación multisitio de e107. Lee los demos activos desde multisite.json y muestra navegación, botones CTA e indicadores de estado.');

// --- Link de navegación (usado por siteLinks en plugin.xml) ---
define('LAN_PLUGIN_DEMOBAR_LINK',        'Demos');
