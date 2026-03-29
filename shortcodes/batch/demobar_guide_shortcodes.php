<?php
/*
 * DemoBar Plugin para e107 CMS
 *
 * Copyright (c) 2026 LandingPro / Martin Costa
 * Licencia: GPL v2+
 *
 * Shortcodes de la Guía de Usuario (Admin).
 * Cada método devuelve texto i18n usando defset() como fallback inglés.
 *
 * Naming: plugin_{pluginName}_{batchName}_shortcodes
 * Loaded via: e107::getScBatch('demobar_guide', 'demobar')
 */

if (!defined('e107_INIT')) { exit; }

class plugin_demobar_demobar_guide_shortcodes extends e_shortcode
{

	// ═══════════════════════════════════════════════════════════════════
	// TAB 1 — OVERVIEW
	// ═══════════════════════════════════════════════════════════════════

	public function sc_demobar_guide_overview_title()
	{
		return defset('LAN_DEMOBAR_GUIDE_OVERVIEW_TITLE', 'Welcome to DemoBar');
	}

	public function sc_demobar_guide_overview_intro()
	{
		return defset('LAN_DEMOBAR_GUIDE_OVERVIEW_INTRO', 'DemoBar is an e107 plugin that adds a fixed navigation bar to your multisite demos, allowing visitors to browse between themes/demo sites seamlessly. It supports branding, call-to-action buttons, admin-only tools, and full customization.');
	}

	// ── Flow steps ──

	public function sc_demobar_guide_flow_step1()
	{
		return defset('LAN_DEMOBAR_GUIDE_FLOW_STEP1', 'Install DemoBar');
	}

	public function sc_demobar_guide_flow_step2()
	{
		return defset('LAN_DEMOBAR_GUIDE_FLOW_STEP2', 'Configure Prefs');
	}

	public function sc_demobar_guide_flow_step3()
	{
		return defset('LAN_DEMOBAR_GUIDE_FLOW_STEP3', 'Setup Multisite');
	}

	public function sc_demobar_guide_flow_step4()
	{
		return defset('LAN_DEMOBAR_GUIDE_FLOW_STEP4', 'Visitors Browse Demos');
	}

	// ── Features section ──

	public function sc_demobar_guide_features_title()
	{
		return defset('LAN_DEMOBAR_GUIDE_FEATURES_TITLE', 'Key Features');
	}

	// Feature: Multisite
	public function sc_demobar_guide_feat_multisite()
	{
		return defset('LAN_DEMOBAR_GUIDE_FEAT_MULTISITE', 'Multisite Integration');
	}

	public function sc_demobar_guide_feat_multisite_desc()
	{
		return defset('LAN_DEMOBAR_GUIDE_FEAT_MULTISITE_DESC', 'Automatically detects and loads demos from multisite.json. Reads brand/CTA preferences from the main database.');
	}

	// Feature: Navigation
	public function sc_demobar_guide_feat_navigation()
	{
		return defset('LAN_DEMOBAR_GUIDE_FEAT_NAVIGATION', 'Demo Navigation');
	}

	public function sc_demobar_guide_feat_navigation_desc()
	{
		return defset('LAN_DEMOBAR_GUIDE_FEAT_NAVIGATION_DESC', 'Previous/Next arrows to browse demos with disabled state on first/last. Main site shows a "View Demos" button instead.');
	}

	// Feature: Customizable
	public function sc_demobar_guide_feat_customizable()
	{
		return defset('LAN_DEMOBAR_GUIDE_FEAT_CUSTOMIZABLE', 'Fully Customizable');
	}

	public function sc_demobar_guide_feat_customizable_desc()
	{
		return defset('LAN_DEMOBAR_GUIDE_FEAT_CUSTOMIZABLE_DESC', 'Change background color, text color, brand name, position (top/bottom), and toggle via the admin panel.');
	}

	// Feature: CTA
	public function sc_demobar_guide_feat_cta()
	{
		return defset('LAN_DEMOBAR_GUIDE_FEAT_CTA', 'Call-to-Action Buttons');
	}

	public function sc_demobar_guide_feat_cta_desc()
	{
		return defset('LAN_DEMOBAR_GUIDE_FEAT_CTA_DESC', 'Show Source Code and Contact buttons, linking to your GitHub repo and contact page.');
	}

	// Feature: Toggle
	public function sc_demobar_guide_feat_toggle()
	{
		return defset('LAN_DEMOBAR_GUIDE_FEAT_TOGGLE', 'Show/Hide Toggle');
	}

	public function sc_demobar_guide_feat_toggle_desc()
	{
		return defset('LAN_DEMOBAR_GUIDE_FEAT_TOGGLE_DESC', 'Visitors can hide the bar with a click or Ctrl+Shift+D keyboard shortcut. State is preserved in localStorage.');
	}

	// Feature: Security
	public function sc_demobar_guide_feat_security()
	{
		return defset('LAN_DEMOBAR_GUIDE_FEAT_SECURITY', 'Admin-Only Access');
	}

	public function sc_demobar_guide_feat_security_desc()
	{
		return defset('LAN_DEMOBAR_GUIDE_FEAT_SECURITY_DESC', 'The Admin button is only visible to authenticated administrators (check_class). IP whitelist available for extra restrictions.');
	}

	// Feature: I18N
	public function sc_demobar_guide_feat_i18n()
	{
		return defset('LAN_DEMOBAR_GUIDE_FEAT_I18N', 'Internationalization');
	}

	public function sc_demobar_guide_feat_i18n_desc()
	{
		return defset('LAN_DEMOBAR_GUIDE_FEAT_I18N_DESC', 'All user-facing labels use language constants. Currently ships with English, Spanish, and Portuguese translations.');
	}

	// Feature: Responsive
	public function sc_demobar_guide_feat_responsive()
	{
		return defset('LAN_DEMOBAR_GUIDE_FEAT_RESPONSIVE', 'Mobile Responsive');
	}

	public function sc_demobar_guide_feat_responsive_desc()
	{
		return defset('LAN_DEMOBAR_GUIDE_FEAT_RESPONSIVE_DESC', 'Adapts layout and font sizes at 768px and 480px breakpoints. CTA text hidden on small screens, icons always visible.');
	}

	// ── Layout preview ──

	public function sc_demobar_guide_layout_title()
	{
		return defset('LAN_DEMOBAR_GUIDE_LAYOUT_TITLE', 'Bar Layout');
	}

	public function sc_demobar_guide_layout_brand_desc()
	{
		return defset('LAN_DEMOBAR_GUIDE_LAYOUT_BRAND_DESC', 'Your brand name with link');
	}

	public function sc_demobar_guide_layout_nav_desc()
	{
		return defset('LAN_DEMOBAR_GUIDE_LAYOUT_NAV_DESC', 'Previous/Next demo navigation');
	}

	public function sc_demobar_guide_layout_actions_desc()
	{
		return defset('LAN_DEMOBAR_GUIDE_LAYOUT_ACTIONS_DESC', 'Source + Contact + Admin buttons');
	}

	public function sc_demobar_guide_layout_toggle_desc()
	{
		return defset('LAN_DEMOBAR_GUIDE_LAYOUT_TOGGLE_DESC', 'Close / reopen the bar');
	}

	// ── Quick start ──

	public function sc_demobar_guide_quickstart()
	{
		return defset('LAN_DEMOBAR_GUIDE_QUICKSTART', 'Quick Start');
	}

	public function sc_demobar_guide_quickstart_desc()
	{
		return defset('LAN_DEMOBAR_GUIDE_QUICKSTART_DESC', 'Install the plugin, set your brand name, URLs, and colors in the Settings tab, then set up the multisite plugin with at least one demo site. DemoBar will automatically appear on all demo pages.');
	}


	// ═══════════════════════════════════════════════════════════════════
	// TAB 2 — CONFIGURATION
	// ═══════════════════════════════════════════════════════════════════

	public function sc_demobar_guide_config_title()
	{
		return defset('LAN_DEMOBAR_GUIDE_CONFIG_TITLE', 'Configuration Reference');
	}

	public function sc_demobar_guide_config_intro()
	{
		return defset('LAN_DEMOBAR_GUIDE_CONFIG_INTRO', 'All settings are managed from DemoBar Admin → Settings. Preferences are stored in the e107 core prefs table under the key <code>plugin_demobar</code>.');
	}

	public function sc_demobar_guide_config_prefs_title()
	{
		return defset('LAN_DEMOBAR_GUIDE_CONFIG_PREFS_TITLE', 'Available Settings');
	}

	// ── Table headers ──

	public function sc_demobar_guide_config_th_option()
	{
		return defset('LAN_DEMOBAR_GUIDE_CONFIG_TH_OPTION', 'Option');
	}

	public function sc_demobar_guide_config_th_type()
	{
		return defset('LAN_DEMOBAR_GUIDE_CONFIG_TH_TYPE', 'Type');
	}

	public function sc_demobar_guide_config_th_desc()
	{
		return defset('LAN_DEMOBAR_GUIDE_CONFIG_TH_DESC', 'Description');
	}

	// ── Table rows ──

	public function sc_demobar_guide_config_r_active()
	{
		return defset('LAN_DEMOBAR_GUIDE_CONFIG_R_ACTIVE', 'Enables or disables the DemoBar across all frontend pages. When disabled, the bar is completely hidden.');
	}

	public function sc_demobar_guide_config_r_brand_text()
	{
		return defset('LAN_DEMOBAR_GUIDE_CONFIG_R_BRAND_TEXT', 'The text shown in the leftmost section of the bar (e.g. your company name). Supports plain text only.');
	}

	public function sc_demobar_guide_config_r_brand_url()
	{
		return defset('LAN_DEMOBAR_GUIDE_CONFIG_R_BRAND_URL', 'The URL linked to the brand name. Usually points to your main website or portfolio.');
	}

	public function sc_demobar_guide_config_r_bg_color()
	{
		return defset('LAN_DEMOBAR_GUIDE_CONFIG_R_BG_COLOR', 'Background color of the bar. Accepts any CSS color value (#hex, rgb, or named colors). Default: <code>#1a1a2e</code>.');
	}

	public function sc_demobar_guide_config_r_text_color()
	{
		return defset('LAN_DEMOBAR_GUIDE_CONFIG_R_TEXT_COLOR', 'Text and icon color in the bar. Default: <code>#e0e0e0</code>.');
	}

	public function sc_demobar_guide_config_r_source_url()
	{
		return defset('LAN_DEMOBAR_GUIDE_CONFIG_R_SOURCE_URL', 'URL for the "Source Code" button. Typically your GitHub or repository page. Leave blank to hide this button.');
	}

	public function sc_demobar_guide_config_r_contact_url()
	{
		return defset('LAN_DEMOBAR_GUIDE_CONFIG_R_CONTACT_URL', 'URL for the "Contact" button. Points to your contact form or email page. Leave blank to hide this button.');
	}

	public function sc_demobar_guide_config_r_position()
	{
		return defset('LAN_DEMOBAR_GUIDE_CONFIG_R_POSITION', 'Position of the bar on screen: <strong>Top</strong> (fixed at the top) or <strong>Bottom</strong> (fixed at the bottom). Default: top.');
	}

	public function sc_demobar_guide_config_r_ip_whitelist()
	{
		return defset('LAN_DEMOBAR_GUIDE_CONFIG_R_IP_WHITELIST', 'One IP per line. When set, the Admin button only shows for administrators connecting from these IPs. Leave empty to allow all admin IPs.');
	}

	// ── Note ──

	public function sc_demobar_guide_config_note_title()
	{
		return defset('LAN_DEMOBAR_GUIDE_CONFIG_NOTE_TITLE', 'Cross-Database Preferences:');
	}

	public function sc_demobar_guide_config_note_text()
	{
		return defset('LAN_DEMOBAR_GUIDE_CONFIG_NOTE_TEXT', 'When running in multisite mode, DemoBar reads brand and CTA URLs from the <strong>main site database</strong>, not from each demo\'s individual database. This ensures consistent branding and URLs across all demos without needing to configure each one separately.');
	}


	// ═══════════════════════════════════════════════════════════════════
	// TAB 3 — USAGE
	// ═══════════════════════════════════════════════════════════════════

	public function sc_demobar_guide_usage_title()
	{
		return defset('LAN_DEMOBAR_GUIDE_USAGE_TITLE', 'How to Use DemoBar');
	}

	public function sc_demobar_guide_usage_intro()
	{
		return defset('LAN_DEMOBAR_GUIDE_USAGE_INTRO', 'DemoBar behaves differently depending on whether the visitor is on the main site or on a demo site.');
	}

	// ── Main site ──

	public function sc_demobar_guide_usage_main_title()
	{
		return defset('LAN_DEMOBAR_GUIDE_USAGE_MAIN_TITLE', 'On the Main Site');
	}

	public function sc_demobar_guide_usage_main_desc()
	{
		return defset('LAN_DEMOBAR_GUIDE_USAGE_MAIN_DESC', 'When a visitor is on the main site (not in a demo), the bar shows limited navigation:');
	}

	public function sc_demobar_guide_usage_main_item1()
	{
		return defset('LAN_DEMOBAR_GUIDE_USAGE_MAIN_ITEM1', 'The brand name/link is always visible.');
	}

	public function sc_demobar_guide_usage_main_item2()
	{
		return defset('LAN_DEMOBAR_GUIDE_USAGE_MAIN_ITEM2', 'Instead of navigation arrows, a <strong>"▶ View Demos"</strong> button links to the first available demo.');
	}

	public function sc_demobar_guide_usage_main_item3()
	{
		return defset('LAN_DEMOBAR_GUIDE_USAGE_MAIN_ITEM3', 'CTA buttons (Source Code, Contact) are displayed if configured.');
	}

	// ── Demo site ──

	public function sc_demobar_guide_usage_demo_title()
	{
		return defset('LAN_DEMOBAR_GUIDE_USAGE_DEMO_TITLE', 'On Demo Sites');
	}

	public function sc_demobar_guide_usage_demo_desc()
	{
		return defset('LAN_DEMOBAR_GUIDE_USAGE_DEMO_DESC', 'When viewing a demo site, the full navigation is active:');
	}

	public function sc_demobar_guide_usage_demo_item1()
	{
		return defset('LAN_DEMOBAR_GUIDE_USAGE_DEMO_ITEM1', '<strong>Previous/Next arrows</strong> navigate between demos. Arrows are disabled (greyed out) when at the first or last demo.');
	}

	public function sc_demobar_guide_usage_demo_item2()
	{
		return defset('LAN_DEMOBAR_GUIDE_USAGE_DEMO_ITEM2', 'The <strong>current demo name</strong> is displayed between the arrows.');
	}

	public function sc_demobar_guide_usage_demo_item3()
	{
		return defset('LAN_DEMOBAR_GUIDE_USAGE_DEMO_ITEM3', 'All CTA buttons are loaded from the main site preferences for consistent branding.');
	}

	public function sc_demobar_guide_usage_demo_item4()
	{
		return defset('LAN_DEMOBAR_GUIDE_USAGE_DEMO_ITEM4', 'The <strong>Admin button</strong> (if visible) links back to the admin panel of the main site.');
	}

	// ── Toggle / keyboard ──

	public function sc_demobar_guide_usage_toggle_title()
	{
		return defset('LAN_DEMOBAR_GUIDE_USAGE_TOGGLE_TITLE', 'Toggle & Keyboard Shortcut');
	}

	public function sc_demobar_guide_usage_toggle_desc()
	{
		return defset('LAN_DEMOBAR_GUIDE_USAGE_TOGGLE_DESC', 'Visitors can hide or show the DemoBar at any time. The bar state is saved in the browser\'s localStorage so it persists across page loads.');
	}

	public function sc_demobar_guide_usage_shortcut_label()
	{
		return defset('LAN_DEMOBAR_GUIDE_USAGE_SHORTCUT_LABEL', 'Toggle DemoBar visibility');
	}

	// ── Admin button ──

	public function sc_demobar_guide_usage_admin_title()
	{
		return defset('LAN_DEMOBAR_GUIDE_USAGE_ADMIN_TITLE', 'Admin Button');
	}

	public function sc_demobar_guide_usage_admin_desc()
	{
		return defset('LAN_DEMOBAR_GUIDE_USAGE_ADMIN_DESC', 'The Admin button is only visible to users with administrator privileges (<code>check_class(e_UC_ADMIN)</code>). It provides a quick link to the main site admin panel.');
	}

	public function sc_demobar_guide_usage_admin_warning()
	{
		return defset('LAN_DEMOBAR_GUIDE_USAGE_ADMIN_WARNING', 'If you have configured an IP whitelist, the Admin button will only appear for admins connecting from those specific IPs.');
	}


	// ═══════════════════════════════════════════════════════════════════
	// TAB 4 — MULTISITE
	// ═══════════════════════════════════════════════════════════════════

	public function sc_demobar_guide_multi_title()
	{
		return defset('LAN_DEMOBAR_GUIDE_MULTI_TITLE', 'Multisite Integration');
	}

	public function sc_demobar_guide_multi_intro()
	{
		return defset('LAN_DEMOBAR_GUIDE_MULTI_INTRO', 'DemoBar is designed to work seamlessly with the <strong>CaMer0n/multisite</strong> plugin for e107. It reads the site list from multisite.json and adapts its behavior based on the active site.');
	}

	// ── Requirements ──

	public function sc_demobar_guide_multi_reqs_title()
	{
		return defset('LAN_DEMOBAR_GUIDE_MULTI_REQS_TITLE', 'Requirements');
	}

	public function sc_demobar_guide_multi_req1()
	{
		return defset('LAN_DEMOBAR_GUIDE_MULTI_REQ1', 'The <strong>CaMer0n/multisite</strong> plugin must be installed and enabled.');
	}

	public function sc_demobar_guide_multi_req2()
	{
		return defset('LAN_DEMOBAR_GUIDE_MULTI_REQ2', 'At least one demo site must be configured in the multisite admin panel.');
	}

	public function sc_demobar_guide_multi_req3()
	{
		return defset('LAN_DEMOBAR_GUIDE_MULTI_REQ3', 'Each demo site must have its own database (the plugin creates these automatically during provisioning).');
	}

	public function sc_demobar_guide_multi_req4()
	{
		return defset('LAN_DEMOBAR_GUIDE_MULTI_REQ4', 'The <code>.htaccess</code> rewrite rules must be in place (automatically configured by the multisite plugin).');
	}

	// ── How it works table ──

	public function sc_demobar_guide_multi_how_title()
	{
		return defset('LAN_DEMOBAR_GUIDE_MULTI_HOW_TITLE', 'How It Works');
	}

	public function sc_demobar_guide_multi_how_desc()
	{
		return defset('LAN_DEMOBAR_GUIDE_MULTI_HOW_DESC', 'The following components work together to enable multisite demo navigation:');
	}

	public function sc_demobar_guide_multi_th_component()
	{
		return defset('LAN_DEMOBAR_GUIDE_MULTI_TH_COMPONENT', 'Component');
	}

	public function sc_demobar_guide_multi_th_role()
	{
		return defset('LAN_DEMOBAR_GUIDE_MULTI_TH_ROLE', 'Role');
	}

	public function sc_demobar_guide_multi_row_json()
	{
		return defset('LAN_DEMOBAR_GUIDE_MULTI_ROW_JSON', 'JSON configuration file that lists all demo sites with their names, databases, and URL paths.');
	}

	public function sc_demobar_guide_multi_row_match()
	{
		return defset('LAN_DEMOBAR_GUIDE_MULTI_ROW_MATCH', 'Constant set by the multisite plugin containing the current site slug (e.g. "booking", "kreative").');
	}

	public function sc_demobar_guide_multi_row_inuse()
	{
		return defset('LAN_DEMOBAR_GUIDE_MULTI_ROW_INUSE', 'Boolean constant that indicates if multisite is actively redirecting to a demo database. DemoBar uses this to decide whether to show navigation arrows.');
	}

	public function sc_demobar_guide_multi_row_htaccess()
	{
		return defset('LAN_DEMOBAR_GUIDE_MULTI_ROW_HTACCESS', 'Rewrites <code>/demo-slug/</code> paths to the multisite handler, enabling clean URLs for each demo.');
	}

	// ── Auto provisioning ──

	public function sc_demobar_guide_multi_prov_title()
	{
		return defset('LAN_DEMOBAR_GUIDE_MULTI_PROV_TITLE', 'Auto-Provisioning');
	}

	public function sc_demobar_guide_multi_prov_desc()
	{
		return defset('LAN_DEMOBAR_GUIDE_MULTI_PROV_DESC', 'When you create a new demo site through the multisite admin panel, DemoBar automatically registers itself in the new demo database. This ensures the bar appears on the new demo without manual configuration.');
	}

	public function sc_demobar_guide_multi_prov_note_title()
	{
		return defset('LAN_DEMOBAR_GUIDE_MULTI_PROV_NOTE_TITLE', 'Preference Inheritance:');
	}

	public function sc_demobar_guide_multi_prov_note_text()
	{
		return defset('LAN_DEMOBAR_GUIDE_MULTI_PROV_NOTE_TEXT', 'Brand text, URLs, and CTA settings are always read from the <strong>main site database</strong> at runtime. You only need to configure these once — they will be inherited by all demo sites automatically.');
	}


	// ═══════════════════════════════════════════════════════════════════
	// TAB 5 — TROUBLESHOOTING
	// ═══════════════════════════════════════════════════════════════════

	public function sc_demobar_guide_trouble_title()
	{
		return defset('LAN_DEMOBAR_GUIDE_TROUBLE_TITLE', 'Troubleshooting');
	}

	public function sc_demobar_guide_trouble_intro()
	{
		return defset('LAN_DEMOBAR_GUIDE_TROUBLE_INTRO', 'Below are common issues and their solutions.');
	}

	public function sc_demobar_guide_trouble_q1()
	{
		return defset('LAN_DEMOBAR_GUIDE_TROUBLE_Q1', 'DemoBar does not appear on any page');
	}

	public function sc_demobar_guide_trouble_a1()
	{
		return defset('LAN_DEMOBAR_GUIDE_TROUBLE_A1', 'Make sure the plugin is installed and enabled. Check that "Enable DemoBar" is turned on in Settings. Verify the plugin\'s <code>e_header.php</code> file exists. Clear e107 cache from Admin → Tools → Cache.');
	}

	public function sc_demobar_guide_trouble_q2()
	{
		return defset('LAN_DEMOBAR_GUIDE_TROUBLE_Q2', 'Navigation arrows don\'t show on demo pages');
	}

	public function sc_demobar_guide_trouble_a2()
	{
		return defset('LAN_DEMOBAR_GUIDE_TROUBLE_A2', 'Check that the multisite plugin is installed and <code>multisite.json</code> contains valid demo entries. Verify the <code>e_MULTISITE_IN_USE</code> constant is being set. Ensure the current URL matches a configured demo slug.');
	}

	public function sc_demobar_guide_trouble_q3()
	{
		return defset('LAN_DEMOBAR_GUIDE_TROUBLE_Q3', 'Brand name and CTA buttons are empty in demos');
	}

	public function sc_demobar_guide_trouble_a3()
	{
		return defset('LAN_DEMOBAR_GUIDE_TROUBLE_A3', 'DemoBar reads these values from the <strong>main site database</strong>. Ensure you have set Brand Text, Brand URL, Source URL, and Contact URL in the main site\'s DemoBar admin settings (not the demo\'s admin).');
	}

	public function sc_demobar_guide_trouble_q4()
	{
		return defset('LAN_DEMOBAR_GUIDE_TROUBLE_Q4', 'Bar appears inside the page instead of fixed at top/bottom');
	}

	public function sc_demobar_guide_trouble_a4()
	{
		return defset('LAN_DEMOBAR_GUIDE_TROUBLE_A4', 'This is usually a CSS conflict. Check that <code>demobar.css</code> is loading correctly (look in browser dev tools → Network tab). Make sure your theme doesn\'t override <code>position: fixed</code> on the bar element. Clear browser cache and e107 cache.');
	}

	public function sc_demobar_guide_trouble_q5()
	{
		return defset('LAN_DEMOBAR_GUIDE_TROUBLE_Q5', 'Admin button is not visible');
	}

	public function sc_demobar_guide_trouble_a5()
	{
		return defset('LAN_DEMOBAR_GUIDE_TROUBLE_A5', 'The Admin button is only visible to logged-in administrators. Check that you are logged in with an admin account. If you have an IP whitelist configured, make sure your current IP is in the list.');
	}

	public function sc_demobar_guide_trouble_q6()
	{
		return defset('LAN_DEMOBAR_GUIDE_TROUBLE_Q6', 'Bar was hidden and I can\'t get it back');
	}

	public function sc_demobar_guide_trouble_a6()
	{
		return defset('LAN_DEMOBAR_GUIDE_TROUBLE_A6', 'Press <strong>Ctrl+Shift+D</strong> to toggle the bar. Alternatively, open your browser\'s developer console and run: <code>localStorage.removeItem("demobar-hidden")</code> then reload the page.');
	}

	// ── Support ──

	public function sc_demobar_guide_trouble_support_title()
	{
		return defset('LAN_DEMOBAR_GUIDE_TROUBLE_SUPPORT_TITLE', 'Need More Help?');
	}

	public function sc_demobar_guide_trouble_support_text()
	{
		return defset('LAN_DEMOBAR_GUIDE_TROUBLE_SUPPORT_TEXT', 'Visit the e107 community forums or open an issue on the plugin\'s GitHub repository. Please include your e107 version, PHP version, and any relevant error messages from your admin log.');
	}

}
