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
// Guide Page — Tab titles
// =============================================================================

define('LAN_DEMOBAR_GUIDE_TITLE',           'DemoBar Guide');
define('LAN_DEMOBAR_GUIDE_TAB_OVERVIEW',    'Overview');
define('LAN_DEMOBAR_GUIDE_TAB_CONFIG',      'Configuration');
define('LAN_DEMOBAR_GUIDE_TAB_USAGE',       'Usage');
define('LAN_DEMOBAR_GUIDE_TAB_MULTISITE',   'Multisite');
define('LAN_DEMOBAR_GUIDE_TAB_TROUBLE',     'Troubleshooting');
define('LAN_DEMOBAR_GUIDE_TAB_DEMOS',        'Demo Management');


// =============================================================================
// Guide — Tab 1: Overview
// =============================================================================

define('LAN_DEMOBAR_GUIDE_OVERVIEW_TITLE',  'Welcome to DemoBar');
define('LAN_DEMOBAR_GUIDE_OVERVIEW_INTRO',  'DemoBar is an e107 plugin that adds a fixed navigation bar to your multisite demos, allowing visitors to browse between themes/demo sites seamlessly. It supports branding, call-to-action buttons, admin-only tools, and full customization.');

// Flow steps
define('LAN_DEMOBAR_GUIDE_FLOW_STEP1',     'Install DemoBar');
define('LAN_DEMOBAR_GUIDE_FLOW_STEP2',     'Configure Prefs');
define('LAN_DEMOBAR_GUIDE_FLOW_STEP3',     'Setup Multisite');
define('LAN_DEMOBAR_GUIDE_FLOW_STEP4',     'Visitors Browse Demos');

// Features
define('LAN_DEMOBAR_GUIDE_FEATURES_TITLE',          'Key Features');
define('LAN_DEMOBAR_GUIDE_FEAT_MULTISITE',           'Multisite Integration');
define('LAN_DEMOBAR_GUIDE_FEAT_MULTISITE_DESC',      'Automatically detects and loads demos from multisite.json. Reads brand/CTA preferences from the main database.');
define('LAN_DEMOBAR_GUIDE_FEAT_NAVIGATION',          'Demo Navigation');
define('LAN_DEMOBAR_GUIDE_FEAT_NAVIGATION_DESC',     'Previous/Next arrows to browse demos with disabled state on first/last. Main site shows a "View Demos" button instead.');
define('LAN_DEMOBAR_GUIDE_FEAT_CUSTOMIZABLE',        'Fully Customizable');
define('LAN_DEMOBAR_GUIDE_FEAT_CUSTOMIZABLE_DESC',   'Change background color, text color, brand name, position (top/bottom), and toggle via the admin panel.');
define('LAN_DEMOBAR_GUIDE_FEAT_CTA',                 'Call-to-Action Buttons');
define('LAN_DEMOBAR_GUIDE_FEAT_CTA_DESC',            'Show Source Code and Contact buttons, linking to your GitHub repo and contact page.');
define('LAN_DEMOBAR_GUIDE_FEAT_TOGGLE',              'Show/Hide Toggle');
define('LAN_DEMOBAR_GUIDE_FEAT_TOGGLE_DESC',         'Visitors can hide the bar with a click or Ctrl+Shift+D keyboard shortcut. State is preserved in localStorage.');
define('LAN_DEMOBAR_GUIDE_FEAT_SECURITY',            'Admin-Only Access');
define('LAN_DEMOBAR_GUIDE_FEAT_SECURITY_DESC',       'The Admin button is only visible to authenticated administrators (check_class). IP whitelist available for extra restrictions.');
define('LAN_DEMOBAR_GUIDE_FEAT_I18N',                'Internationalization');
define('LAN_DEMOBAR_GUIDE_FEAT_I18N_DESC',           'All user-facing labels use language constants. Currently ships with English, Spanish, and Portuguese translations.');
define('LAN_DEMOBAR_GUIDE_FEAT_RESPONSIVE',          'Mobile Responsive');
define('LAN_DEMOBAR_GUIDE_FEAT_RESPONSIVE_DESC',     'Adapts layout and font sizes at 768px and 480px breakpoints. CTA text hidden on small screens, icons always visible.');

// Layout preview
define('LAN_DEMOBAR_GUIDE_LAYOUT_TITLE',             'Bar Layout');
define('LAN_DEMOBAR_GUIDE_LAYOUT_BRAND_DESC',        'Your brand name with link');
define('LAN_DEMOBAR_GUIDE_LAYOUT_NAV_DESC',          'Previous/Next demo navigation');
define('LAN_DEMOBAR_GUIDE_LAYOUT_ACTIONS_DESC',      'Source + Contact + Admin buttons');
define('LAN_DEMOBAR_GUIDE_LAYOUT_TOGGLE_DESC',       'Close / reopen the bar');

// Quick start
define('LAN_DEMOBAR_GUIDE_QUICKSTART',               'Quick Start');
define('LAN_DEMOBAR_GUIDE_QUICKSTART_DESC',          'Install the plugin, set your brand name, URLs, and colors in the Settings tab, then set up the multisite plugin with at least one demo site. DemoBar will automatically appear on all demo pages.');


// =============================================================================
// Guide — Tab 2: Configuration
// =============================================================================

define('LAN_DEMOBAR_GUIDE_CONFIG_TITLE',             'Configuration Reference');
define('LAN_DEMOBAR_GUIDE_CONFIG_INTRO',             'All settings are managed from DemoBar Admin → Settings. Preferences are stored in the e107 core prefs table under the key <code>plugin_demobar</code>.');
define('LAN_DEMOBAR_GUIDE_CONFIG_PREFS_TITLE',       'Available Settings');

// Table headers
define('LAN_DEMOBAR_GUIDE_CONFIG_TH_OPTION',         'Option');
define('LAN_DEMOBAR_GUIDE_CONFIG_TH_TYPE',           'Type');
define('LAN_DEMOBAR_GUIDE_CONFIG_TH_DESC',           'Description');

// Table rows
define('LAN_DEMOBAR_GUIDE_CONFIG_R_ACTIVE',          'Enables or disables the DemoBar across all frontend pages. When disabled, the bar is completely hidden.');
define('LAN_DEMOBAR_GUIDE_CONFIG_R_BRAND_TEXT',      'The text shown in the leftmost section of the bar (e.g. your company name). Supports plain text only.');
define('LAN_DEMOBAR_GUIDE_CONFIG_R_BRAND_URL',       'The URL linked to the brand name. Usually points to your main website or portfolio.');
define('LAN_DEMOBAR_GUIDE_CONFIG_R_BG_COLOR',        'Background color of the bar. Accepts any CSS color value (#hex, rgb, or named colors). Default: <code>#1a1a2e</code>.');
define('LAN_DEMOBAR_GUIDE_CONFIG_R_TEXT_COLOR',      'Text and icon color in the bar. Default: <code>#e0e0e0</code>.');
define('LAN_DEMOBAR_GUIDE_CONFIG_R_SOURCE_URL',      'URL for the "Source Code" button. Typically your GitHub or repository page. Leave blank to hide this button.');
define('LAN_DEMOBAR_GUIDE_CONFIG_R_CONTACT_URL',     'URL for the "Contact" button. Points to your contact form or email page. Leave blank to hide this button.');
define('LAN_DEMOBAR_GUIDE_CONFIG_R_POSITION',        'Position of the bar on screen: <strong>Top</strong> (fixed at the top) or <strong>Bottom</strong> (fixed at the bottom). Default: top.');
define('LAN_DEMOBAR_GUIDE_CONFIG_R_IP_WHITELIST',    'One IP per line. When set, the Admin button only shows for administrators connecting from these IPs. Leave empty to allow all admin IPs.');

// Cross-DB note
define('LAN_DEMOBAR_GUIDE_CONFIG_NOTE_TITLE',        'Cross-Database Preferences:');
define('LAN_DEMOBAR_GUIDE_CONFIG_NOTE_TEXT',          'When running in multisite mode, DemoBar reads brand and CTA URLs from the <strong>main site database</strong>, not from each demo\'s individual database. This ensures consistent branding and URLs across all demos without needing to configure each one separately.');


// =============================================================================
// Guide — Tab 3: Usage
// =============================================================================

define('LAN_DEMOBAR_GUIDE_USAGE_TITLE',              'How to Use DemoBar');
define('LAN_DEMOBAR_GUIDE_USAGE_INTRO',              'DemoBar behaves differently depending on whether the visitor is on the main site or on a demo site.');

// Main site
define('LAN_DEMOBAR_GUIDE_USAGE_MAIN_TITLE',         'On the Main Site');
define('LAN_DEMOBAR_GUIDE_USAGE_MAIN_DESC',          'When a visitor is on the main site (not in a demo), the bar shows limited navigation:');
define('LAN_DEMOBAR_GUIDE_USAGE_MAIN_ITEM1',         'The brand name/link is always visible.');
define('LAN_DEMOBAR_GUIDE_USAGE_MAIN_ITEM2',         'Instead of navigation arrows, a <strong>"▶ View Demos"</strong> button links to the first available demo.');
define('LAN_DEMOBAR_GUIDE_USAGE_MAIN_ITEM3',         'CTA buttons (Source Code, Contact) are displayed if configured.');

// Demo site
define('LAN_DEMOBAR_GUIDE_USAGE_DEMO_TITLE',         'On Demo Sites');
define('LAN_DEMOBAR_GUIDE_USAGE_DEMO_DESC',          'When viewing a demo site, the full navigation is active:');
define('LAN_DEMOBAR_GUIDE_USAGE_DEMO_ITEM1',         '<strong>Previous/Next arrows</strong> navigate between demos. Arrows are disabled (greyed out) when at the first or last demo.');
define('LAN_DEMOBAR_GUIDE_USAGE_DEMO_ITEM2',         'The <strong>current demo name</strong> is displayed between the arrows.');
define('LAN_DEMOBAR_GUIDE_USAGE_DEMO_ITEM3',         'All CTA buttons are loaded from the main site preferences for consistent branding.');
define('LAN_DEMOBAR_GUIDE_USAGE_DEMO_ITEM4',         'The <strong>Admin button</strong> (if visible) links back to the admin panel of the main site.');

// Toggle & keyboard
define('LAN_DEMOBAR_GUIDE_USAGE_TOGGLE_TITLE',       'Toggle & Keyboard Shortcut');
define('LAN_DEMOBAR_GUIDE_USAGE_TOGGLE_DESC',        'Visitors can hide or show the DemoBar at any time. The bar state is saved in the browser\'s localStorage so it persists across page loads.');
define('LAN_DEMOBAR_GUIDE_USAGE_SHORTCUT_LABEL',     'Toggle DemoBar visibility');

// Admin button
define('LAN_DEMOBAR_GUIDE_USAGE_ADMIN_TITLE',        'Admin Button');
define('LAN_DEMOBAR_GUIDE_USAGE_ADMIN_DESC',         'The Admin button is only visible to users with administrator privileges (<code>check_class(e_UC_ADMIN)</code>). It provides a quick link to the main site admin panel.');
define('LAN_DEMOBAR_GUIDE_USAGE_ADMIN_WARNING',      'If you have configured an IP whitelist, the Admin button will only appear for admins connecting from those specific IPs.');


// =============================================================================
// Guide — Tab 4: Demo Management
// =============================================================================

define('LAN_DEMOBAR_GUIDE_DEMOS_TITLE',              'Demo Management');
define('LAN_DEMOBAR_GUIDE_DEMOS_INTRO',              'DemoBar includes a full demo catalog system. You can create, edit, and manage demo entries directly from the admin panel. Each demo is stored in the <code>demobar_demos</code> database table and displayed on the public catalog and detail pages.');

// CRUD
define('LAN_DEMOBAR_GUIDE_DEMOS_CRUD_TITLE',         'Creating & Editing Demos');
define('LAN_DEMOBAR_GUIDE_DEMOS_CRUD_DESC',          'Navigate to <strong>Admin → DemoBar → Create Demo</strong> to add a new demo. Use the demo list to edit or delete existing entries. The following fields are available:');
define('LAN_DEMOBAR_GUIDE_DEMOS_TH_FIELD',           'Field');
define('LAN_DEMOBAR_GUIDE_DEMOS_TH_TYPE',            'Type');
define('LAN_DEMOBAR_GUIDE_DEMOS_TH_DESC',            'Description');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_SLUG',             'Unique URL-friendly identifier that matches the multisite match pattern (e.g. <code>bootstrap5</code>, <code>kreative</code>). Used in URLs like <code>/demos/bootstrap5</code>.');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_NAME',             'Display name of the demo shown in catalog cards and detail pages.');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_DESC',             'Full description of the demo. Automatically truncated in catalog cards and sidebar (see Truncation section below).');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_CATEGORY',         'Select from 25 predefined categories (Business, Portfolio, eCommerce, etc.). Categories are fully internationalized and support batch operations and filtering in the admin list.');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_THUMBNAIL',        'Demo preview image. Uses e107 media manager for upload and selection. Displayed as a card image in the catalog.');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_VERSION',          'Version string of the demo (e.g. <code>1.0.0</code>). Shown in the detail page info panel.');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_RELEASE',          'Date the demo was released. Displayed in the detail page metadata.');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_BUILT',            'Technologies used (e.g. <code>Bootstrap 5, jQuery</code>). Shown in the detail page.');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_LICENSE',          'License type (e.g. GPL, MIT) and an optional URL linking to the full license text.');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_DOWNLOAD',         'URL where the demo files can be downloaded. If provided, a Download button appears on the detail page.');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_ORDER',            'Sort order for catalog display. Lower numbers appear first.');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_ACTIVE',           'Enable or disable the demo. Inactive demos are hidden from the public catalog but still visible in admin.');

// Categories
define('LAN_DEMOBAR_GUIDE_DEMOS_CAT_TITLE',          'Predefined Categories');
define('LAN_DEMOBAR_GUIDE_DEMOS_CAT_DESC',           'DemoBar ships with 25 predefined categories. Each category label is internationalized (i18n) — the stored value in the database is always the English key, and the display label is translated via language constants. Categories support batch edit and column filter in the admin list.');

// Catalog page
define('LAN_DEMOBAR_GUIDE_DEMOS_CATALOG_TITLE',      'Public Catalog Page');
define('LAN_DEMOBAR_GUIDE_DEMOS_CATALOG_DESC',       'The catalog page displays all active demos as responsive cards at <code>/demos/</code> (or the configured SEF URL):');
define('LAN_DEMOBAR_GUIDE_DEMOS_CATALOG_ITEM1',      'Each card shows the <strong>thumbnail</strong>, <strong>name</strong>, <strong>category badge</strong>, and a <strong>truncated description</strong> (120 characters).');
define('LAN_DEMOBAR_GUIDE_DEMOS_CATALOG_ITEM2',      'Cards link to the individual demo detail page at <code>/demos/{slug}</code>.');
define('LAN_DEMOBAR_GUIDE_DEMOS_CATALOG_ITEM3',      'The layout uses a responsive grid that adapts from 3 columns on desktop to 1 column on mobile.');

// Detail page
define('LAN_DEMOBAR_GUIDE_DEMOS_DETAIL_TITLE',       'Demo Detail Page');
define('LAN_DEMOBAR_GUIDE_DEMOS_DETAIL_DESC',        'Each demo has a dedicated detail page (<code>/demos/{slug}</code>) that shows:');
define('LAN_DEMOBAR_GUIDE_DEMOS_DETAIL_ITEM1',       'Full description (no truncation), thumbnail, version, release date, built-with info, and license details.');
define('LAN_DEMOBAR_GUIDE_DEMOS_DETAIL_ITEM2',       '<strong>Live Preview</strong> and <strong>Download</strong> action buttons (when URLs are configured).');
define('LAN_DEMOBAR_GUIDE_DEMOS_DETAIL_ITEM3',       'Breadcrumb navigation: Home → Demos → Demo Name.');

// Sidebar
define('LAN_DEMOBAR_GUIDE_DEMOS_SIDEBAR_TITLE',      'Sidebar Menu');
define('LAN_DEMOBAR_GUIDE_DEMOS_SIDEBAR_DESC',       'DemoBar provides a sidebar menu (<code>demobar_detail_menu</code>) that displays a list of all active demos. It highlights the currently viewed demo and truncates descriptions to 150 characters. To activate it:');
define('LAN_DEMOBAR_GUIDE_DEMOS_SIDEBAR_STEP1',      'Go to <strong>Admin → Menus</strong> (Menu Manager).');
define('LAN_DEMOBAR_GUIDE_DEMOS_SIDEBAR_STEP2',      'Find <strong>DemoBar — Demo Detail Menu</strong> in the available menus list.');
define('LAN_DEMOBAR_GUIDE_DEMOS_SIDEBAR_STEP3',      'Drag it to a sidebar area (e.g. <code>Menu Area 1</code>) or the area used by your theme for side navigation.');

// Truncation
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_TITLE',        'Description Truncation');
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_DESC',         'Descriptions are automatically truncated in different contexts to maintain a clean layout:');
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_TH_CONTEXT',   'Context');
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_TH_LIMIT',     'Char Limit');
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_TH_HOW',       'Implementation');
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_R_CATALOG',    'Catalog Cards');
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_R_CATALOG_HOW','Via shortcode parameter: <code>{DEMOBAR_DEMO_DESCRIPTION=120}</code> in the catalog template.');
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_R_SIDEBAR',    'Sidebar Menu');
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_R_SIDEBAR_HOW','Via <code>$tp->truncate($text, 150, "…")</code> in the sidebar menu file.');
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_R_DETAIL',     'Detail Page');
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_R_DETAIL_HOW', 'Full description is displayed without any truncation.');

// Note
define('LAN_DEMOBAR_GUIDE_DEMOS_NOTE_TITLE',         'Database Table:');
define('LAN_DEMOBAR_GUIDE_DEMOS_NOTE_TEXT',           'Demo records are stored in the <code>{PREFIX}demobar_demos</code> table (14 columns). The admin CRUD interface uses the standard e107 <code>e_admin_ui</code> pattern with inline editing, batch operations, and column filters for category and status.');


// =============================================================================
// Guide — Tab 5: Multisite
// =============================================================================

define('LAN_DEMOBAR_GUIDE_MULTI_TITLE',              'Multisite Integration');
define('LAN_DEMOBAR_GUIDE_MULTI_INTRO',              'DemoBar is designed to work seamlessly with the <strong>CaMer0n/multisite</strong> plugin for e107. It reads the site list from multisite.json and adapts its behavior based on the active site.');

// Requirements
define('LAN_DEMOBAR_GUIDE_MULTI_REQS_TITLE',         'Requirements');
define('LAN_DEMOBAR_GUIDE_MULTI_REQ1',               'The <strong>CaMer0n/multisite</strong> plugin must be installed and enabled.');
define('LAN_DEMOBAR_GUIDE_MULTI_REQ2',               'At least one demo site must be configured in the multisite admin panel.');
define('LAN_DEMOBAR_GUIDE_MULTI_REQ3',               'Each demo site must have its own database (the plugin creates these automatically during provisioning).');
define('LAN_DEMOBAR_GUIDE_MULTI_REQ4',               'The <code>.htaccess</code> rewrite rules must be in place (automatically configured by the multisite plugin).');

// How it works
define('LAN_DEMOBAR_GUIDE_MULTI_HOW_TITLE',          'How It Works');
define('LAN_DEMOBAR_GUIDE_MULTI_HOW_DESC',           'The following components work together to enable multisite demo navigation:');
define('LAN_DEMOBAR_GUIDE_MULTI_TH_COMPONENT',       'Component');
define('LAN_DEMOBAR_GUIDE_MULTI_TH_ROLE',            'Role');
define('LAN_DEMOBAR_GUIDE_MULTI_ROW_JSON',           'JSON configuration file that lists all demo sites with their names, databases, and URL paths.');
define('LAN_DEMOBAR_GUIDE_MULTI_ROW_MATCH',          'Constant set by the multisite plugin containing the current site slug (e.g. "booking", "kreative").');
define('LAN_DEMOBAR_GUIDE_MULTI_ROW_INUSE',          'Boolean constant that indicates if multisite is actively redirecting to a demo database. DemoBar uses this to decide whether to show navigation arrows.');
define('LAN_DEMOBAR_GUIDE_MULTI_ROW_HTACCESS',       'Rewrites <code>/demo-slug/</code> paths to the multisite handler, enabling clean URLs for each demo.');

// Auto-provisioning
define('LAN_DEMOBAR_GUIDE_MULTI_PROV_TITLE',         'Auto-Provisioning');
define('LAN_DEMOBAR_GUIDE_MULTI_PROV_DESC',          'When you create a new demo site through the multisite admin panel, DemoBar automatically registers itself in the new demo database. This ensures the bar appears on the new demo without manual configuration.');
define('LAN_DEMOBAR_GUIDE_MULTI_PROV_NOTE_TITLE',    'Preference Inheritance:');
define('LAN_DEMOBAR_GUIDE_MULTI_PROV_NOTE_TEXT',     'Brand text, URLs, and CTA settings are always read from the <strong>main site database</strong> at runtime. You only need to configure these once — they will be inherited by all demo sites automatically.');


// =============================================================================
// Guide — Tab 5: Troubleshooting
// =============================================================================

define('LAN_DEMOBAR_GUIDE_TROUBLE_TITLE',            'Troubleshooting');
define('LAN_DEMOBAR_GUIDE_TROUBLE_INTRO',            'Below are common issues and their solutions.');

define('LAN_DEMOBAR_GUIDE_TROUBLE_Q1',               'DemoBar does not appear on any page');
define('LAN_DEMOBAR_GUIDE_TROUBLE_A1',               'Make sure the plugin is installed and enabled. Check that "Enable DemoBar" is turned on in Settings. Verify the plugin\'s <code>e_header.php</code> file exists. Clear e107 cache from Admin → Tools → Cache.');

define('LAN_DEMOBAR_GUIDE_TROUBLE_Q2',               'Navigation arrows don\'t show on demo pages');
define('LAN_DEMOBAR_GUIDE_TROUBLE_A2',               'Check that the multisite plugin is installed and <code>multisite.json</code> contains valid demo entries. Verify the <code>e_MULTISITE_IN_USE</code> constant is being set. Ensure the current URL matches a configured demo slug.');

define('LAN_DEMOBAR_GUIDE_TROUBLE_Q3',               'Brand name and CTA buttons are empty in demos');
define('LAN_DEMOBAR_GUIDE_TROUBLE_A3',               'DemoBar reads these values from the <strong>main site database</strong>. Ensure you have set Brand Text, Brand URL, Source URL, and Contact URL in the main site\'s DemoBar admin settings (not the demo\'s admin).');

define('LAN_DEMOBAR_GUIDE_TROUBLE_Q4',               'Bar appears inside the page instead of fixed at top/bottom');
define('LAN_DEMOBAR_GUIDE_TROUBLE_A4',               'This is usually a CSS conflict. Check that <code>demobar.css</code> is loading correctly (look in browser dev tools → Network tab). Make sure your theme doesn\'t override <code>position: fixed</code> on the bar element. Clear browser cache and e107 cache.');

define('LAN_DEMOBAR_GUIDE_TROUBLE_Q5',               'Admin button is not visible');
define('LAN_DEMOBAR_GUIDE_TROUBLE_A5',               'The Admin button is only visible to logged-in administrators. Check that you are logged in with an admin account. If you have an IP whitelist configured, make sure your current IP is in the list.');

define('LAN_DEMOBAR_GUIDE_TROUBLE_Q6',               'Bar was hidden and I can\'t get it back');
define('LAN_DEMOBAR_GUIDE_TROUBLE_A6',               'Press <strong>Ctrl+Shift+D</strong> to toggle the bar. Alternatively, open your browser\'s developer console and run: <code>localStorage.removeItem("demobar-hidden")</code> then reload the page.');

// Support
define('LAN_DEMOBAR_GUIDE_TROUBLE_SUPPORT_TITLE',    'Need More Help?');
define('LAN_DEMOBAR_GUIDE_TROUBLE_SUPPORT_TEXT',     'Visit the e107 community forums or open an issue on the plugin\'s GitHub repository. Please include your e107 version, PHP version, and any relevant error messages from your admin log.');


// =============================================================================
// Mensajes flash (success, warning, error)
// =============================================================================

define('LAN_DEMOBAR_ADMIN_SAVED',           'DemoBar settings saved successfully.');
define('LAN_DEMOBAR_ADMIN_SAVE_ERROR',      'Error saving DemoBar settings.');


// =============================================================================
// Demos CRUD — Admin Menu & Field Labels
// =============================================================================

define('LAN_DEMOBAR_ADMIN_DEMOS',                'Demos');
define('LAN_DEMOBAR_ADMIN_DEMOS_CREATE',         'Create Demo');

define('LAN_DEMOBAR_FIELD_SLUG',                 'Slug');
define('LAN_DEMOBAR_FIELD_SLUG_HELP',            'Unique identifier matching the demo match pattern in multisite.json (e.g., bootstrap5, kreative)');
define('LAN_DEMOBAR_FIELD_THUMBNAIL',            'Thumbnail');
define('LAN_DEMOBAR_FIELD_VERSION',              'Version');
define('LAN_DEMOBAR_FIELD_RELEASE_DATE',         'Release Date');
define('LAN_DEMOBAR_FIELD_BUILT_WITH',           'Built With');
define('LAN_DEMOBAR_FIELD_INCLUDED_FILES',       'Included Files');
define('LAN_DEMOBAR_FIELD_LICENSE_TYPE',         'License Type');
define('LAN_DEMOBAR_FIELD_LICENSE_URL',          'License URL');
define('LAN_DEMOBAR_FIELD_DOWNLOAD_URL',         'Download URL');


// =============================================================================
// Demo Categories — Dropdown options (key stored in DB = English value)
// =============================================================================

define('LAN_DEMOBAR_CAT_BUSINESS',           'Business');
define('LAN_DEMOBAR_CAT_PORTFOLIO',          'Portfolio');
define('LAN_DEMOBAR_CAT_ADMIN',             'Admin');
define('LAN_DEMOBAR_CAT_EDUCATION',          'Education');
define('LAN_DEMOBAR_CAT_ECOMMERCE',          'eCommerce');
define('LAN_DEMOBAR_CAT_RESTAURANT',         'Restaurant');
define('LAN_DEMOBAR_CAT_MEDICAL',            'Medical');
define('LAN_DEMOBAR_CAT_COMING_SOON',        'Coming Soon');
define('LAN_DEMOBAR_CAT_ONE_PAGE',           'One Page');
define('LAN_DEMOBAR_CAT_LANDING_PAGE',       'Landing Page');
define('LAN_DEMOBAR_CAT_CORPORATE',          'Corporate');
define('LAN_DEMOBAR_CAT_AGENCY',             'Agency');
define('LAN_DEMOBAR_CAT_TRAVEL',             'Travel');
define('LAN_DEMOBAR_CAT_HOTEL',              'Hotel');
define('LAN_DEMOBAR_CAT_EVENTS',             'Events');
define('LAN_DEMOBAR_CAT_PHOTOGRAPHY',        'Photography');
define('LAN_DEMOBAR_CAT_PERSONAL',           'Personal');
define('LAN_DEMOBAR_CAT_RESUME',             'Resume / CV');
define('LAN_DEMOBAR_CAT_REAL_ESTATE',        'Real Estate');
define('LAN_DEMOBAR_CAT_HEALTH',             'Health');
define('LAN_DEMOBAR_CAT_WEBSITE_TEMPLATES',  'Website Templates');
define('LAN_DEMOBAR_CAT_CONSTRUCTION',       'Construction');
define('LAN_DEMOBAR_CAT_TRANSPORTATION',     'Transportation');
define('LAN_DEMOBAR_CAT_BLOG_MAGAZINE',      'Blog & Magazine');
define('LAN_DEMOBAR_CAT_SAAS',               'SaaS');
