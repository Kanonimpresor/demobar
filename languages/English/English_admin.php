<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2026 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * DemoBar Plugin — English Language File (Admin)
 *
 * All admin-facing language constants for the DemoBar plugin.
 * Constants follow the naming convention: LAN_DEMOBAR_ADMIN_<SECTION>_<NAME>
 */

if (!defined('e107_INIT')) { exit; }


// =============================================================================
// Admin Menu
// =============================================================================

define('LAN_DEMOBAR_ADMIN_TITLE',           'DemoBar Settings');
define('LAN_DEMOBAR_ADMIN_PREFS',           'Preferences');
define('LAN_DEMOBAR_ADMIN_CONFIGURE',       'Configure');
define('LAN_DEMOBAR_ADMIN_GUIDE',           'Guide');


// =============================================================================
// Preferences — Field Labels
// =============================================================================

define('LAN_DEMOBAR_PREF_ACTIVE',           'Enable DemoBar');
define('LAN_DEMOBAR_PREF_ACTIVE_HELP',      'Show the demo navigation bar on the frontend');

define('LAN_DEMOBAR_PREF_BRAND_TEXT',       'Brand Text');
define('LAN_DEMOBAR_PREF_BRAND_TEXT_HELP',  'Text displayed on the left side of the bar (e.g., your agency name)');

define('LAN_DEMOBAR_PREF_BRAND_URL',        'Brand URL');
define('LAN_DEMOBAR_PREF_BRAND_URL_HELP',   'URL the brand text links to (e.g., your agency website)');

define('LAN_DEMOBAR_PREF_BG_COLOR',         'Background Color');
define('LAN_DEMOBAR_PREF_BG_COLOR_HELP',    'Background color of the bar (hex format)');

define('LAN_DEMOBAR_PREF_TEXT_COLOR',        'Text Color');
define('LAN_DEMOBAR_PREF_TEXT_COLOR_HELP',   'Text and link color of the bar (hex format)');

define('LAN_DEMOBAR_PREF_CTA_SOURCE_URL',   'Source Code URL');
define('LAN_DEMOBAR_PREF_CTA_SOURCE_HELP',  'URL to the source code repository (e.g., GitHub)');

define('LAN_DEMOBAR_PREF_CTA_SOURCE_TEXT',  'Source Code Button Text');

define('LAN_DEMOBAR_PREF_CTA_CONTACT_URL',  'Contact URL');
define('LAN_DEMOBAR_PREF_CTA_CONTACT_HELP', 'URL for the contact/inquiry button');

define('LAN_DEMOBAR_PREF_CTA_CONTACT_TEXT', 'Contact Button Text');

define('LAN_DEMOBAR_PREF_SHOW_PREVNEXT',    'Show Prev/Next Navigation');
define('LAN_DEMOBAR_PREF_SHOW_PREVNEXT_HELP', 'Display previous and next demo arrows in the bar');

define('LAN_DEMOBAR_PREF_SHOW_TOGGLE',      'Show Hide/Show Toggle');
define('LAN_DEMOBAR_PREF_SHOW_TOGGLE_HELP', 'Allow users to hide/show the demo bar');

define('LAN_DEMOBAR_PREF_IP_WHITELIST',     'Admin IP Whitelist');
define('LAN_DEMOBAR_PREF_IP_WHITELIST_HELP', 'Comma-separated list of IP addresses allowed to access admin features. Leave empty to allow all.');

define('LAN_DEMOBAR_PREF_POSITION',         'Bar Position');
define('LAN_DEMOBAR_PREF_POSITION_HELP',    'Position of the demo bar on the page');
define('LAN_DEMOBAR_PREF_POSITION_TOP',     'Top');
define('LAN_DEMOBAR_PREF_POSITION_BOTTOM',  'Bottom');


// =============================================================================
// Configure Page
// =============================================================================

define('LAN_DEMOBAR_ADMIN_CFG_TITLE',       'Multisite Configuration');
define('LAN_DEMOBAR_ADMIN_CFG_DESC',        'Demos loaded from multisite.json. This file is read-only through this interface.');
define('LAN_DEMOBAR_ADMIN_CFG_NAME',        'Demo Name');
define('LAN_DEMOBAR_ADMIN_CFG_MATCH',       'Match Pattern');
define('LAN_DEMOBAR_ADMIN_CFG_HAYSTACK',    'Haystack');
define('LAN_DEMOBAR_ADMIN_CFG_DATABASE',    'Database');
define('LAN_DEMOBAR_ADMIN_CFG_STATUS',      'Status');
define('LAN_DEMOBAR_ADMIN_CFG_ACTIVE',      'Active');
define('LAN_DEMOBAR_ADMIN_CFG_INACTIVE',    'Inactive');
define('LAN_DEMOBAR_ADMIN_CFG_NO_FILE',     'multisite.json file not found');
define('LAN_DEMOBAR_ADMIN_CFG_NO_DEMOS',    'No demos configured in multisite.json');
define('LAN_DEMOBAR_ADMIN_CFG_INVALID',     'Invalid JSON in multisite.json');


// =============================================================================
// Guide Page
// =============================================================================

define('LAN_DEMOBAR_GUIDE_TITLE',           'DemoBar Guide');
define('LAN_DEMOBAR_GUIDE_TAB_OVERVIEW',    'Overview');
define('LAN_DEMOBAR_GUIDE_TAB_CONFIG',      'Configuration');
define('LAN_DEMOBAR_GUIDE_TAB_USAGE',       'Usage');
define('LAN_DEMOBAR_GUIDE_TAB_TROUBLE',     'Troubleshooting');

define('LAN_DEMOBAR_GUIDE_OVERVIEW_TITLE',  'What is DemoBar?');
define('LAN_DEMOBAR_GUIDE_OVERVIEW_TEXT',   'DemoBar adds a persistent navigation bar to your multisite demo environment, allowing visitors to browse between demos, view source code, and contact you. It reads the existing multisite.json configuration.');

define('LAN_DEMOBAR_GUIDE_CONFIG_TITLE',    'Configuration Steps');
define('LAN_DEMOBAR_GUIDE_CONFIG_TEXT',     '1. Enable the DemoBar in Preferences.<br>2. Set your brand text and URL.<br>3. Configure CTA buttons (source code, contact).<br>4. Customize colors to match your branding.<br>5. Optionally restrict admin access by IP.');

define('LAN_DEMOBAR_GUIDE_USAGE_TITLE',     'Using DemoBar');
define('LAN_DEMOBAR_GUIDE_USAGE_TEXT',      'Once enabled, the bar automatically appears on all frontend pages. Visitors can navigate between demos, and the bar persists across page loads. Use Ctrl+Shift+D to toggle visibility.');

define('LAN_DEMOBAR_GUIDE_TROUBLE_TITLE',   'Troubleshooting');
define('LAN_DEMOBAR_GUIDE_TROUBLE_TEXT',    '<strong>Bar not appearing?</strong> Check that DemoBar is enabled and multisite.json exists.<br><strong>No demos listed?</strong> Verify your multisite.json contains valid entries.<br><strong>Colors wrong?</strong> Clear the site cache after changing color preferences.');


// =============================================================================
// Mensajes flash (success, warning, error)
// =============================================================================

define('LAN_DEMOBAR_ADMIN_SAVED',           'DemoBar settings saved successfully.');
define('LAN_DEMOBAR_ADMIN_SAVE_ERROR',      'Error saving DemoBar settings.');
