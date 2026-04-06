<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2026 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * DemoBar Plugin — English Language File (Frontend)
 *
 * All frontend-facing language constants for the DemoBar plugin.
 * Constants follow the naming convention: LAN_DEMOBAR_<SECTION>_<NAME>
 */

if (!defined('e107_INIT')) { exit; }


// --- General ---
// LAN_PLUGIN_DEMOBAR_NAME, LAN_PLUGIN_DEMOBAR_LINK → see English_global.php (loaded on every page)

// --- Barra de navegación ---
define('LAN_DEMOBAR_VIEW_DEMO',          'View Demo');
define('LAN_DEMOBAR_HIDE_BAR',           'Hide bar');
define('LAN_DEMOBAR_SHOW_BAR',           'Show bar');
define('LAN_DEMOBAR_PREV_DEMO',          'Previous demo');
define('LAN_DEMOBAR_NEXT_DEMO',          'Next demo');
define('LAN_DEMOBAR_SOURCE_CODE',        'Source Code');
define('LAN_DEMOBAR_CONTACT',            'Contact');
define('LAN_DEMOBAR_BRAND_DEFAULT',      'Demo Showcase');

// --- Catálogo de demos ---
define('LAN_DEMOBAR_CATALOG_TITLE',      'Demo Catalog');
define('LAN_DEMOBAR_CATALOG_SUBTITLE',   'Explore our collection of available demos');
define('LAN_DEMOBAR_CATALOG_EMPTY',      'No demos available at this time.');
define('LAN_DEMOBAR_CATALOG_COUNT',      'demos available');
define('LAN_DEMOBAR_CATALOG_VIEW',       'View Demo');
define('LAN_DEMOBAR_CATALOG_BADGE',      'Active');

// --- Tipos de demo ---
define('LAN_DEMOBAR_TYPE_SUBDOMAIN',     'Subdomain');
define('LAN_DEMOBAR_TYPE_SUBDIR',        'Subdirectory');

// --- Meta ---
define('LAN_DEMOBAR_META_KEYWORDS',      'demos, showcase, templates, plugins');

// --- Dashboard ---
define('LAN_DEMOBAR_DASH_DEMOS',         'Active Demos');

// --- Cron ---
define('LAN_DEMOBAR_CRON_RESET_NAME',    'DemoBar: Demo Reset');
define('LAN_DEMOBAR_CRON_RESET_DESC',    'Reset demo sites to their default state (content, uploads, settings)');
define('LAN_DEMOBAR_CRON_CLEANUP_NAME',  'DemoBar: Stats Cleanup');
define('LAN_DEMOBAR_CRON_CLEANUP_DESC',  'Remove old statistics records (older than 90 days)');

// --- Mensajes de estado ---
define('LAN_DEMOBAR_STATUS_ACTIVE',      'DemoBar is active');
define('LAN_DEMOBAR_STATUS_INACTIVE',    'DemoBar is currently disabled');
define('LAN_DEMOBAR_STATUS_NO_MULTISITE','Multisite configuration not found');
define('LAN_DEMOBAR_STATUS_NO_DEMOS',    'No demos configured');

// --- Errores ---
define('LAN_DEMOBAR_ERR_JSON_NOT_FOUND', 'The multisite.json file was not found');
define('LAN_DEMOBAR_ERR_JSON_INVALID',   'The multisite.json file contains invalid JSON');
define('LAN_DEMOBAR_ERR_IP_BLOCKED',     'Access restricted by IP whitelist');

// --- Menú de detalle del demo (sidebar) ---
define('LAN_DEMOBAR_MENU_DETAIL_CAPTION', 'Demo Details');
define('LAN_DEMOBAR_MENU_VERSION',        'Version');
define('LAN_DEMOBAR_MENU_RELEASE_DATE',   'Release Date');
define('LAN_DEMOBAR_MENU_BUILT_WITH',     'Built With');
define('LAN_DEMOBAR_MENU_INCLUDED_FILES', 'Included Files');
define('LAN_DEMOBAR_MENU_CATEGORY',       'Category');
define('LAN_DEMOBAR_MENU_DOWNLOAD',       'Download');
define('LAN_DEMOBAR_MENU_LICENSE',        'License');
define('LAN_DEMOBAR_MENU_LICENSE_TYPE',   'License');
define('LAN_DEMOBAR_MENU_SELECT_DEMO',    '-- Select Demo --');
define('LAN_DEMOBAR_MENU_CAPTION_LABEL',  'Menu Caption');
define('LAN_DEMOBAR_MENU_CAPTION_HELP',   'Title displayed above the menu. Leave empty to use the default from language files.');
define('LAN_DEMOBAR_MENU_DEMO_LABEL',     'Select Demo');
define('LAN_DEMOBAR_MENU_DEMO_HELP',      'Select which demo details to display in this menu.');

// --- Catálogo y detalle (v1.2.0) ---
define('LAN_DEMOBAR_VIEW_DETAILS',        'View Details');
define('LAN_DEMOBAR_DEMO_NOT_FOUND',      'The requested demo was not found.');
define('LAN_DEMOBAR_DETAIL_INFO',         'Information');
