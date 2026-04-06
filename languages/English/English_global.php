<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2026 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * DemoBar Plugin — English Global Language File
 *
 * Constants defined here are loaded on EVERY page load (via lan_global_list).
 * Only include constants needed site-wide (navigation links, plugin name, etc.).
 * Keep this file minimal — it runs on every request.
 */

if (!defined('e107_INIT')) { exit; }


// --- Plugin identification ---
define('LAN_PLUGIN_DEMOBAR_NAME',        'DemoBar');
define('LAN_PLUGIN_DEMOBAR_SUMMARY',     'Persistent navigation bar for multisite demo environments');
define('LAN_PLUGIN_DEMOBAR_DESCRIPTION', 'Injects a fixed top bar across all sites within a multisite e107 installation. Reads active demos from multisite.json and displays navigation, CTA buttons, and status indicators.');

// --- Navigation link (used by siteLinks in plugin.xml) ---
define('LAN_PLUGIN_DEMOBAR_LINK',        'Demos');
