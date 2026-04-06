<?php
/*
 * DemoBar Plugin para e107 CMS
 *
 * Copyright (c) 2026 LandingPro / Martin Costa
 * Licencia: GPL v2+
 *
 * Shortcodes de la Guía de Usuario (Admin).
 * Cada método devuelve una constante de idioma definida en languages/<lang>/<lang>_admin.php.
 * No se permiten cadenas hardcodeadas — toda la localización reside en los archivos de idioma.
 *
 * Naming: plugin_{pluginName}_{batchName}_shortcodes
 * Loaded via: e107::getScBatch('demobar_guide', 'demobar')
 */

if (!defined('e107_INIT')) { exit; }

class plugin_demobar_demobar_guide_shortcodes extends e_shortcode
{

	public function sc_demobar_guide_overview_title()
	{
		return LAN_DEMOBAR_GUIDE_OVERVIEW_TITLE;
	}

	public function sc_demobar_guide_overview_intro()
	{
		return LAN_DEMOBAR_GUIDE_OVERVIEW_INTRO;
	}

	public function sc_demobar_guide_flow_step1()
	{
		return LAN_DEMOBAR_GUIDE_FLOW_STEP1;
	}

	public function sc_demobar_guide_flow_step2()
	{
		return LAN_DEMOBAR_GUIDE_FLOW_STEP2;
	}

	public function sc_demobar_guide_flow_step3()
	{
		return LAN_DEMOBAR_GUIDE_FLOW_STEP3;
	}

	public function sc_demobar_guide_flow_step4()
	{
		return LAN_DEMOBAR_GUIDE_FLOW_STEP4;
	}

	public function sc_demobar_guide_features_title()
	{
		return LAN_DEMOBAR_GUIDE_FEATURES_TITLE;
	}

	public function sc_demobar_guide_feat_multisite()
	{
		return LAN_DEMOBAR_GUIDE_FEAT_MULTISITE;
	}

	public function sc_demobar_guide_feat_multisite_desc()
	{
		return LAN_DEMOBAR_GUIDE_FEAT_MULTISITE_DESC;
	}

	public function sc_demobar_guide_feat_navigation()
	{
		return LAN_DEMOBAR_GUIDE_FEAT_NAVIGATION;
	}

	public function sc_demobar_guide_feat_navigation_desc()
	{
		return LAN_DEMOBAR_GUIDE_FEAT_NAVIGATION_DESC;
	}

	public function sc_demobar_guide_feat_customizable()
	{
		return LAN_DEMOBAR_GUIDE_FEAT_CUSTOMIZABLE;
	}

	public function sc_demobar_guide_feat_customizable_desc()
	{
		return LAN_DEMOBAR_GUIDE_FEAT_CUSTOMIZABLE_DESC;
	}

	public function sc_demobar_guide_feat_cta()
	{
		return LAN_DEMOBAR_GUIDE_FEAT_CTA;
	}

	public function sc_demobar_guide_feat_cta_desc()
	{
		return LAN_DEMOBAR_GUIDE_FEAT_CTA_DESC;
	}

	public function sc_demobar_guide_feat_toggle()
	{
		return LAN_DEMOBAR_GUIDE_FEAT_TOGGLE;
	}

	public function sc_demobar_guide_feat_toggle_desc()
	{
		return LAN_DEMOBAR_GUIDE_FEAT_TOGGLE_DESC;
	}

	public function sc_demobar_guide_feat_security()
	{
		return LAN_DEMOBAR_GUIDE_FEAT_SECURITY;
	}

	public function sc_demobar_guide_feat_security_desc()
	{
		return LAN_DEMOBAR_GUIDE_FEAT_SECURITY_DESC;
	}

	public function sc_demobar_guide_feat_i18n()
	{
		return LAN_DEMOBAR_GUIDE_FEAT_I18N;
	}

	public function sc_demobar_guide_feat_i18n_desc()
	{
		return LAN_DEMOBAR_GUIDE_FEAT_I18N_DESC;
	}

	public function sc_demobar_guide_feat_responsive()
	{
		return LAN_DEMOBAR_GUIDE_FEAT_RESPONSIVE;
	}

	public function sc_demobar_guide_feat_responsive_desc()
	{
		return LAN_DEMOBAR_GUIDE_FEAT_RESPONSIVE_DESC;
	}

	public function sc_demobar_guide_layout_title()
	{
		return LAN_DEMOBAR_GUIDE_LAYOUT_TITLE;
	}

	public function sc_demobar_guide_layout_brand_desc()
	{
		return LAN_DEMOBAR_GUIDE_LAYOUT_BRAND_DESC;
	}

	public function sc_demobar_guide_layout_nav_desc()
	{
		return LAN_DEMOBAR_GUIDE_LAYOUT_NAV_DESC;
	}

	public function sc_demobar_guide_layout_actions_desc()
	{
		return LAN_DEMOBAR_GUIDE_LAYOUT_ACTIONS_DESC;
	}

	public function sc_demobar_guide_layout_toggle_desc()
	{
		return LAN_DEMOBAR_GUIDE_LAYOUT_TOGGLE_DESC;
	}

	public function sc_demobar_guide_quickstart()
	{
		return LAN_DEMOBAR_GUIDE_QUICKSTART;
	}

	public function sc_demobar_guide_quickstart_desc()
	{
		return LAN_DEMOBAR_GUIDE_QUICKSTART_DESC;
	}

	public function sc_demobar_guide_config_title()
	{
		return LAN_DEMOBAR_GUIDE_CONFIG_TITLE;
	}

	public function sc_demobar_guide_config_intro()
	{
		return LAN_DEMOBAR_GUIDE_CONFIG_INTRO;
	}

	public function sc_demobar_guide_config_prefs_title()
	{
		return LAN_DEMOBAR_GUIDE_CONFIG_PREFS_TITLE;
	}

	public function sc_demobar_guide_config_th_option()
	{
		return LAN_DEMOBAR_GUIDE_CONFIG_TH_OPTION;
	}

	public function sc_demobar_guide_config_th_type()
	{
		return LAN_DEMOBAR_GUIDE_CONFIG_TH_TYPE;
	}

	public function sc_demobar_guide_config_th_desc()
	{
		return LAN_DEMOBAR_GUIDE_CONFIG_TH_DESC;
	}

	public function sc_demobar_guide_config_r_active()
	{
		return LAN_DEMOBAR_GUIDE_CONFIG_R_ACTIVE;
	}

	public function sc_demobar_guide_config_r_brand_text()
	{
		return LAN_DEMOBAR_GUIDE_CONFIG_R_BRAND_TEXT;
	}

	public function sc_demobar_guide_config_r_brand_url()
	{
		return LAN_DEMOBAR_GUIDE_CONFIG_R_BRAND_URL;
	}

	public function sc_demobar_guide_config_r_bg_color()
	{
		return LAN_DEMOBAR_GUIDE_CONFIG_R_BG_COLOR;
	}

	public function sc_demobar_guide_config_r_text_color()
	{
		return LAN_DEMOBAR_GUIDE_CONFIG_R_TEXT_COLOR;
	}

	public function sc_demobar_guide_config_r_source_url()
	{
		return LAN_DEMOBAR_GUIDE_CONFIG_R_SOURCE_URL;
	}

	public function sc_demobar_guide_config_r_contact_url()
	{
		return LAN_DEMOBAR_GUIDE_CONFIG_R_CONTACT_URL;
	}

	public function sc_demobar_guide_config_r_position()
	{
		return LAN_DEMOBAR_GUIDE_CONFIG_R_POSITION;
	}

	public function sc_demobar_guide_config_r_ip_whitelist()
	{
		return LAN_DEMOBAR_GUIDE_CONFIG_R_IP_WHITELIST;
	}

	public function sc_demobar_guide_config_note_title()
	{
		return LAN_DEMOBAR_GUIDE_CONFIG_NOTE_TITLE;
	}

	public function sc_demobar_guide_config_note_text()
	{
		return LAN_DEMOBAR_GUIDE_CONFIG_NOTE_TEXT;
	}

	public function sc_demobar_guide_usage_title()
	{
		return LAN_DEMOBAR_GUIDE_USAGE_TITLE;
	}

	public function sc_demobar_guide_usage_intro()
	{
		return LAN_DEMOBAR_GUIDE_USAGE_INTRO;
	}

	public function sc_demobar_guide_usage_main_title()
	{
		return LAN_DEMOBAR_GUIDE_USAGE_MAIN_TITLE;
	}

	public function sc_demobar_guide_usage_main_desc()
	{
		return LAN_DEMOBAR_GUIDE_USAGE_MAIN_DESC;
	}

	public function sc_demobar_guide_usage_main_item1()
	{
		return LAN_DEMOBAR_GUIDE_USAGE_MAIN_ITEM1;
	}

	public function sc_demobar_guide_usage_main_item2()
	{
		return LAN_DEMOBAR_GUIDE_USAGE_MAIN_ITEM2;
	}

	public function sc_demobar_guide_usage_main_item3()
	{
		return LAN_DEMOBAR_GUIDE_USAGE_MAIN_ITEM3;
	}

	public function sc_demobar_guide_usage_demo_title()
	{
		return LAN_DEMOBAR_GUIDE_USAGE_DEMO_TITLE;
	}

	public function sc_demobar_guide_usage_demo_desc()
	{
		return LAN_DEMOBAR_GUIDE_USAGE_DEMO_DESC;
	}

	public function sc_demobar_guide_usage_demo_item1()
	{
		return LAN_DEMOBAR_GUIDE_USAGE_DEMO_ITEM1;
	}

	public function sc_demobar_guide_usage_demo_item2()
	{
		return LAN_DEMOBAR_GUIDE_USAGE_DEMO_ITEM2;
	}

	public function sc_demobar_guide_usage_demo_item3()
	{
		return LAN_DEMOBAR_GUIDE_USAGE_DEMO_ITEM3;
	}

	public function sc_demobar_guide_usage_demo_item4()
	{
		return LAN_DEMOBAR_GUIDE_USAGE_DEMO_ITEM4;
	}

	public function sc_demobar_guide_usage_toggle_title()
	{
		return LAN_DEMOBAR_GUIDE_USAGE_TOGGLE_TITLE;
	}

	public function sc_demobar_guide_usage_toggle_desc()
	{
		return LAN_DEMOBAR_GUIDE_USAGE_TOGGLE_DESC;
	}

	public function sc_demobar_guide_usage_shortcut_label()
	{
		return LAN_DEMOBAR_GUIDE_USAGE_SHORTCUT_LABEL;
	}

	public function sc_demobar_guide_usage_admin_title()
	{
		return LAN_DEMOBAR_GUIDE_USAGE_ADMIN_TITLE;
	}

	public function sc_demobar_guide_usage_admin_desc()
	{
		return LAN_DEMOBAR_GUIDE_USAGE_ADMIN_DESC;
	}

	public function sc_demobar_guide_usage_admin_warning()
	{
		return LAN_DEMOBAR_GUIDE_USAGE_ADMIN_WARNING;
	}

	public function sc_demobar_guide_multi_title()
	{
		return LAN_DEMOBAR_GUIDE_MULTI_TITLE;
	}

	public function sc_demobar_guide_multi_intro()
	{
		return LAN_DEMOBAR_GUIDE_MULTI_INTRO;
	}

	public function sc_demobar_guide_multi_reqs_title()
	{
		return LAN_DEMOBAR_GUIDE_MULTI_REQS_TITLE;
	}

	public function sc_demobar_guide_multi_req1()
	{
		return LAN_DEMOBAR_GUIDE_MULTI_REQ1;
	}

	public function sc_demobar_guide_multi_req2()
	{
		return LAN_DEMOBAR_GUIDE_MULTI_REQ2;
	}

	public function sc_demobar_guide_multi_req3()
	{
		return LAN_DEMOBAR_GUIDE_MULTI_REQ3;
	}

	public function sc_demobar_guide_multi_req4()
	{
		return LAN_DEMOBAR_GUIDE_MULTI_REQ4;
	}

	public function sc_demobar_guide_multi_how_title()
	{
		return LAN_DEMOBAR_GUIDE_MULTI_HOW_TITLE;
	}

	public function sc_demobar_guide_multi_how_desc()
	{
		return LAN_DEMOBAR_GUIDE_MULTI_HOW_DESC;
	}

	public function sc_demobar_guide_multi_th_component()
	{
		return LAN_DEMOBAR_GUIDE_MULTI_TH_COMPONENT;
	}

	public function sc_demobar_guide_multi_th_role()
	{
		return LAN_DEMOBAR_GUIDE_MULTI_TH_ROLE;
	}

	public function sc_demobar_guide_multi_row_json()
	{
		return LAN_DEMOBAR_GUIDE_MULTI_ROW_JSON;
	}

	public function sc_demobar_guide_multi_row_match()
	{
		return LAN_DEMOBAR_GUIDE_MULTI_ROW_MATCH;
	}

	public function sc_demobar_guide_multi_row_inuse()
	{
		return LAN_DEMOBAR_GUIDE_MULTI_ROW_INUSE;
	}

	public function sc_demobar_guide_multi_row_htaccess()
	{
		return LAN_DEMOBAR_GUIDE_MULTI_ROW_HTACCESS;
	}

	public function sc_demobar_guide_multi_prov_title()
	{
		return LAN_DEMOBAR_GUIDE_MULTI_PROV_TITLE;
	}

	public function sc_demobar_guide_multi_prov_desc()
	{
		return LAN_DEMOBAR_GUIDE_MULTI_PROV_DESC;
	}

	public function sc_demobar_guide_multi_prov_note_title()
	{
		return LAN_DEMOBAR_GUIDE_MULTI_PROV_NOTE_TITLE;
	}

	public function sc_demobar_guide_multi_prov_note_text()
	{
		return LAN_DEMOBAR_GUIDE_MULTI_PROV_NOTE_TEXT;
	}

	public function sc_demobar_guide_trouble_title()
	{
		return LAN_DEMOBAR_GUIDE_TROUBLE_TITLE;
	}

	public function sc_demobar_guide_trouble_intro()
	{
		return LAN_DEMOBAR_GUIDE_TROUBLE_INTRO;
	}

	public function sc_demobar_guide_trouble_q1()
	{
		return LAN_DEMOBAR_GUIDE_TROUBLE_Q1;
	}

	public function sc_demobar_guide_trouble_a1()
	{
		return LAN_DEMOBAR_GUIDE_TROUBLE_A1;
	}

	public function sc_demobar_guide_trouble_q2()
	{
		return LAN_DEMOBAR_GUIDE_TROUBLE_Q2;
	}

	public function sc_demobar_guide_trouble_a2()
	{
		return LAN_DEMOBAR_GUIDE_TROUBLE_A2;
	}

	public function sc_demobar_guide_trouble_q3()
	{
		return LAN_DEMOBAR_GUIDE_TROUBLE_Q3;
	}

	public function sc_demobar_guide_trouble_a3()
	{
		return LAN_DEMOBAR_GUIDE_TROUBLE_A3;
	}

	public function sc_demobar_guide_trouble_q4()
	{
		return LAN_DEMOBAR_GUIDE_TROUBLE_Q4;
	}

	public function sc_demobar_guide_trouble_a4()
	{
		return LAN_DEMOBAR_GUIDE_TROUBLE_A4;
	}

	public function sc_demobar_guide_trouble_q5()
	{
		return LAN_DEMOBAR_GUIDE_TROUBLE_Q5;
	}

	public function sc_demobar_guide_trouble_a5()
	{
		return LAN_DEMOBAR_GUIDE_TROUBLE_A5;
	}

	public function sc_demobar_guide_trouble_q6()
	{
		return LAN_DEMOBAR_GUIDE_TROUBLE_Q6;
	}

	public function sc_demobar_guide_trouble_a6()
	{
		return LAN_DEMOBAR_GUIDE_TROUBLE_A6;
	}

	public function sc_demobar_guide_trouble_support_title()
	{
		return LAN_DEMOBAR_GUIDE_TROUBLE_SUPPORT_TITLE;
	}

	public function sc_demobar_guide_trouble_support_text()
	{
		return LAN_DEMOBAR_GUIDE_TROUBLE_SUPPORT_TEXT;
	}

	// ── Tab Demos ──

	public function sc_demobar_guide_demos_title()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_TITLE;
	}

	public function sc_demobar_guide_demos_intro()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_INTRO;
	}

	public function sc_demobar_guide_demos_crud_title()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_CRUD_TITLE;
	}

	public function sc_demobar_guide_demos_crud_desc()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_CRUD_DESC;
	}

	public function sc_demobar_guide_demos_th_field()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_TH_FIELD;
	}

	public function sc_demobar_guide_demos_th_type()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_TH_TYPE;
	}

	public function sc_demobar_guide_demos_th_desc()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_TH_DESC;
	}

	public function sc_demobar_guide_demos_f_slug()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_F_SLUG;
	}

	public function sc_demobar_guide_demos_f_name()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_F_NAME;
	}

	public function sc_demobar_guide_demos_f_desc()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_F_DESC;
	}

	public function sc_demobar_guide_demos_f_category()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_F_CATEGORY;
	}

	public function sc_demobar_guide_demos_f_thumbnail()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_F_THUMBNAIL;
	}

	public function sc_demobar_guide_demos_f_version()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_F_VERSION;
	}

	public function sc_demobar_guide_demos_f_release()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_F_RELEASE;
	}

	public function sc_demobar_guide_demos_f_built()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_F_BUILT;
	}

	public function sc_demobar_guide_demos_f_license()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_F_LICENSE;
	}

	public function sc_demobar_guide_demos_f_download()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_F_DOWNLOAD;
	}

	public function sc_demobar_guide_demos_f_order()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_F_ORDER;
	}

	public function sc_demobar_guide_demos_f_active()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_F_ACTIVE;
	}

	public function sc_demobar_guide_demos_cat_title()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_CAT_TITLE;
	}

	public function sc_demobar_guide_demos_cat_desc()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_CAT_DESC;
	}

	public function sc_demobar_guide_demos_catalog_title()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_CATALOG_TITLE;
	}

	public function sc_demobar_guide_demos_catalog_desc()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_CATALOG_DESC;
	}

	public function sc_demobar_guide_demos_catalog_item1()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_CATALOG_ITEM1;
	}

	public function sc_demobar_guide_demos_catalog_item2()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_CATALOG_ITEM2;
	}

	public function sc_demobar_guide_demos_catalog_item3()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_CATALOG_ITEM3;
	}

	public function sc_demobar_guide_demos_detail_title()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_DETAIL_TITLE;
	}

	public function sc_demobar_guide_demos_detail_desc()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_DETAIL_DESC;
	}

	public function sc_demobar_guide_demos_detail_item1()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_DETAIL_ITEM1;
	}

	public function sc_demobar_guide_demos_detail_item2()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_DETAIL_ITEM2;
	}

	public function sc_demobar_guide_demos_detail_item3()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_DETAIL_ITEM3;
	}

	public function sc_demobar_guide_demos_sidebar_title()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_SIDEBAR_TITLE;
	}

	public function sc_demobar_guide_demos_sidebar_desc()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_SIDEBAR_DESC;
	}

	public function sc_demobar_guide_demos_sidebar_step1()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_SIDEBAR_STEP1;
	}

	public function sc_demobar_guide_demos_sidebar_step2()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_SIDEBAR_STEP2;
	}

	public function sc_demobar_guide_demos_sidebar_step3()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_SIDEBAR_STEP3;
	}

	public function sc_demobar_guide_demos_trunc_title()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_TITLE;
	}

	public function sc_demobar_guide_demos_trunc_desc()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_DESC;
	}

	public function sc_demobar_guide_demos_trunc_th_context()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_TH_CONTEXT;
	}

	public function sc_demobar_guide_demos_trunc_th_limit()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_TH_LIMIT;
	}

	public function sc_demobar_guide_demos_trunc_th_how()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_TH_HOW;
	}

	public function sc_demobar_guide_demos_trunc_r_catalog()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_R_CATALOG;
	}

	public function sc_demobar_guide_demos_trunc_r_catalog_how()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_R_CATALOG_HOW;
	}

	public function sc_demobar_guide_demos_trunc_r_sidebar()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_R_SIDEBAR;
	}

	public function sc_demobar_guide_demos_trunc_r_sidebar_how()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_R_SIDEBAR_HOW;
	}

	public function sc_demobar_guide_demos_trunc_r_detail()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_R_DETAIL;
	}

	public function sc_demobar_guide_demos_trunc_r_detail_how()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_R_DETAIL_HOW;
	}

	public function sc_demobar_guide_demos_note_title()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_NOTE_TITLE;
	}

	public function sc_demobar_guide_demos_note_text()
	{
		return LAN_DEMOBAR_GUIDE_DEMOS_NOTE_TEXT;
	}

}
