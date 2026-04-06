<?php
/*
 * DemoBar Plugin para e107 CMS
 *
 * Copyright (c) 2026 LandingPro / Martin Costa
 * Licencia: GPL v2+
 *
 * Plantillas HTML de la Guía de Usuario (Admin).
 * Usa shortcodes {DEMOBAR_GUIDE_*} resueltos por demobar_guide_shortcodes.php
 *
 * Arquitectura:
 *   - Cada clave (overview, configuration, ...) contiene el HTML de una pestaña.
 *   - guidePage() usa e107::getForm()->tabs() para generar la navegación
 *     (compatible con Bootstrap 3/4/5 automáticamente).
 *   - Los shortcodes resuelven i18n vía defset() con fallback inglés.
 *
 * El tema puede sobreescribir este archivo en:
 *   e107_themes/{theme}/templates/demobar/demobar_guide_template.php
 */

if (!defined('e107_INIT')) { exit; }


// ═══════════════════════════════════════════════════════════════════════════
// TAB OVERVIEW — Resumen general del plugin
// ═══════════════════════════════════════════════════════════════════════════

$DEMOBAR_GUIDE_TEMPLATE['overview'] = '

<!-- ── Encabezado principal ── -->
<div class="dg-overview-header">
	<h4>{DEMOBAR_GUIDE_OVERVIEW_TITLE}</h4>
	<p class="dg-overview-intro">{DEMOBAR_GUIDE_OVERVIEW_INTRO}</p>
</div>

<!-- ── Flujo visual: cómo funciona ── -->
<div class="dg-flow-bar">
	<div class="dg-flow-step">
		<span class="dg-flow-num">1</span>
		<span class="dg-flow-label">{DEMOBAR_GUIDE_FLOW_STEP1}</span>
	</div>
	<span class="dg-flow-arrow">→</span>
	<div class="dg-flow-step">
		<span class="dg-flow-num">2</span>
		<span class="dg-flow-label">{DEMOBAR_GUIDE_FLOW_STEP2}</span>
	</div>
	<span class="dg-flow-arrow">→</span>
	<div class="dg-flow-step">
		<span class="dg-flow-num">3</span>
		<span class="dg-flow-label">{DEMOBAR_GUIDE_FLOW_STEP3}</span>
	</div>
	<span class="dg-flow-arrow">→</span>
	<div class="dg-flow-step">
		<span class="dg-flow-num">4</span>
		<span class="dg-flow-label">{DEMOBAR_GUIDE_FLOW_STEP4}</span>
	</div>
</div>

<!-- ── Grid de funcionalidades (cards) ── -->
<h5 class="dg-section-title"><i class="fa fa-th-large"></i> {DEMOBAR_GUIDE_FEATURES_TITLE}</h5>
<div class="dg-features-grid">
	<div class="dg-feature-card">
		<div class="dg-feature-icon"><i class="fa fa-globe"></i></div>
		<strong>{DEMOBAR_GUIDE_FEAT_MULTISITE}</strong>
		<span>{DEMOBAR_GUIDE_FEAT_MULTISITE_DESC}</span>
	</div>
	<div class="dg-feature-card">
		<div class="dg-feature-icon"><i class="fa fa-arrows-alt-h"></i></div>
		<strong>{DEMOBAR_GUIDE_FEAT_NAVIGATION}</strong>
		<span>{DEMOBAR_GUIDE_FEAT_NAVIGATION_DESC}</span>
	</div>
	<div class="dg-feature-card">
		<div class="dg-feature-icon"><i class="fa fa-palette"></i></div>
		<strong>{DEMOBAR_GUIDE_FEAT_CUSTOMIZABLE}</strong>
		<span>{DEMOBAR_GUIDE_FEAT_CUSTOMIZABLE_DESC}</span>
	</div>
	<div class="dg-feature-card">
		<div class="dg-feature-icon"><i class="fa fa-bullhorn"></i></div>
		<strong>{DEMOBAR_GUIDE_FEAT_CTA}</strong>
		<span>{DEMOBAR_GUIDE_FEAT_CTA_DESC}</span>
	</div>
	<div class="dg-feature-card">
		<div class="dg-feature-icon"><i class="fa fa-eye-slash"></i></div>
		<strong>{DEMOBAR_GUIDE_FEAT_TOGGLE}</strong>
		<span>{DEMOBAR_GUIDE_FEAT_TOGGLE_DESC}</span>
	</div>
	<div class="dg-feature-card">
		<div class="dg-feature-icon"><i class="fa fa-shield-alt"></i></div>
		<strong>{DEMOBAR_GUIDE_FEAT_SECURITY}</strong>
		<span>{DEMOBAR_GUIDE_FEAT_SECURITY_DESC}</span>
	</div>
	<div class="dg-feature-card">
		<div class="dg-feature-icon"><i class="fa fa-language"></i></div>
		<strong>{DEMOBAR_GUIDE_FEAT_I18N}</strong>
		<span>{DEMOBAR_GUIDE_FEAT_I18N_DESC}</span>
	</div>
	<div class="dg-feature-card">
		<div class="dg-feature-icon"><i class="fa fa-mobile-alt"></i></div>
		<strong>{DEMOBAR_GUIDE_FEAT_RESPONSIVE}</strong>
		<span>{DEMOBAR_GUIDE_FEAT_RESPONSIVE_DESC}</span>
	</div>
</div>

<!-- ── Layout de la barra ── -->
<h5 class="dg-section-title"><i class="fa fa-ruler-horizontal"></i> {DEMOBAR_GUIDE_LAYOUT_TITLE}</h5>
<div class="dg-layout-preview">
	<div class="dg-layout-item dg-layout-brand"><strong>Brand</strong><br><small>{DEMOBAR_GUIDE_LAYOUT_BRAND_DESC}</small></div>
	<div class="dg-layout-item dg-layout-nav"><strong>◀ Demo ▶</strong><br><small>{DEMOBAR_GUIDE_LAYOUT_NAV_DESC}</small></div>
	<div class="dg-layout-item dg-layout-actions"><strong>CTAs</strong><br><small>{DEMOBAR_GUIDE_LAYOUT_ACTIONS_DESC}</small></div>
	<div class="dg-layout-item dg-layout-toggle"><strong>✕</strong><br><small>{DEMOBAR_GUIDE_LAYOUT_TOGGLE_DESC}</small></div>
</div>

<!-- ── Quick Start ── -->
<div class="alert alert-success">
	<i class="fa fa-rocket"></i> <strong>{DEMOBAR_GUIDE_QUICKSTART}</strong>
	{DEMOBAR_GUIDE_QUICKSTART_DESC}
</div>
';


// ═══════════════════════════════════════════════════════════════════════════
// TAB CONFIGURATION — Opciones del plugin
// ═══════════════════════════════════════════════════════════════════════════

$DEMOBAR_GUIDE_TEMPLATE['configuration'] = '
<h4>{DEMOBAR_GUIDE_CONFIG_TITLE}</h4>
<p>{DEMOBAR_GUIDE_CONFIG_INTRO}</p>

<!-- ── Tabla de preferencias ── -->
<h5 class="dg-section-title"><i class="fa fa-sliders-h"></i> {DEMOBAR_GUIDE_CONFIG_PREFS_TITLE}</h5>
<div class="table-responsive">
<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th style="width:25%">{DEMOBAR_GUIDE_CONFIG_TH_OPTION}</th>
			<th style="width:15%">{DEMOBAR_GUIDE_CONFIG_TH_TYPE}</th>
			<th>{DEMOBAR_GUIDE_CONFIG_TH_DESC}</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Enable DemoBar</strong></td>
			<td><code>boolean</code></td>
			<td>{DEMOBAR_GUIDE_CONFIG_R_ACTIVE}</td>
		</tr>
		<tr>
			<td><strong>Brand Text</strong></td>
			<td><code>text</code></td>
			<td>{DEMOBAR_GUIDE_CONFIG_R_BRAND_TEXT}</td>
		</tr>
		<tr>
			<td><strong>Brand URL</strong></td>
			<td><code>url</code></td>
			<td>{DEMOBAR_GUIDE_CONFIG_R_BRAND_URL}</td>
		</tr>
		<tr>
			<td><strong>Background Color</strong></td>
			<td><code>color</code></td>
			<td>{DEMOBAR_GUIDE_CONFIG_R_BG_COLOR}</td>
		</tr>
		<tr>
			<td><strong>Text Color</strong></td>
			<td><code>color</code></td>
			<td>{DEMOBAR_GUIDE_CONFIG_R_TEXT_COLOR}</td>
		</tr>
		<tr>
			<td><strong>Source Code URL</strong></td>
			<td><code>url</code></td>
			<td>{DEMOBAR_GUIDE_CONFIG_R_SOURCE_URL}</td>
		</tr>
		<tr>
			<td><strong>Contact URL</strong></td>
			<td><code>url</code></td>
			<td>{DEMOBAR_GUIDE_CONFIG_R_CONTACT_URL}</td>
		</tr>
		<tr>
			<td><strong>Position</strong></td>
			<td><code>dropdown</code></td>
			<td>{DEMOBAR_GUIDE_CONFIG_R_POSITION}</td>
		</tr>
		<tr>
			<td><strong>Admin IP Whitelist</strong></td>
			<td><code>textarea</code></td>
			<td>{DEMOBAR_GUIDE_CONFIG_R_IP_WHITELIST}</td>
		</tr>
	</tbody>
</table>
</div>

<div class="alert alert-info">
	<i class="fa fa-info-circle"></i> <strong>{DEMOBAR_GUIDE_CONFIG_NOTE_TITLE}</strong>
	{DEMOBAR_GUIDE_CONFIG_NOTE_TEXT}
</div>
';


// ═══════════════════════════════════════════════════════════════════════════
// TAB USAGE — Cómo usar el plugin
// ═══════════════════════════════════════════════════════════════════════════

$DEMOBAR_GUIDE_TEMPLATE['usage'] = '
<h4>{DEMOBAR_GUIDE_USAGE_TITLE}</h4>
<p>{DEMOBAR_GUIDE_USAGE_INTRO}</p>

<!-- ── Comportamiento en la página principal ── -->
<h5 class="dg-section-title"><i class="fa fa-home"></i> {DEMOBAR_GUIDE_USAGE_MAIN_TITLE}</h5>
<p>{DEMOBAR_GUIDE_USAGE_MAIN_DESC}</p>
<ul>
	<li>{DEMOBAR_GUIDE_USAGE_MAIN_ITEM1}</li>
	<li>{DEMOBAR_GUIDE_USAGE_MAIN_ITEM2}</li>
	<li>{DEMOBAR_GUIDE_USAGE_MAIN_ITEM3}</li>
</ul>

<!-- ── Comportamiento en los demos ── -->
<h5 class="dg-section-title"><i class="fa fa-desktop"></i> {DEMOBAR_GUIDE_USAGE_DEMO_TITLE}</h5>
<p>{DEMOBAR_GUIDE_USAGE_DEMO_DESC}</p>
<ul>
	<li>{DEMOBAR_GUIDE_USAGE_DEMO_ITEM1}</li>
	<li>{DEMOBAR_GUIDE_USAGE_DEMO_ITEM2}</li>
	<li>{DEMOBAR_GUIDE_USAGE_DEMO_ITEM3}</li>
	<li>{DEMOBAR_GUIDE_USAGE_DEMO_ITEM4}</li>
</ul>

<!-- ── Toggle y atajos ── -->
<h5 class="dg-section-title"><i class="fa fa-keyboard"></i> {DEMOBAR_GUIDE_USAGE_TOGGLE_TITLE}</h5>
<p>{DEMOBAR_GUIDE_USAGE_TOGGLE_DESC}</p>
<div class="dg-shortcut-box">
	<span class="dg-shortcut-key">Ctrl</span> + <span class="dg-shortcut-key">Shift</span> + <span class="dg-shortcut-key">D</span>
	<span class="dg-shortcut-label">{DEMOBAR_GUIDE_USAGE_SHORTCUT_LABEL}</span>
</div>

<!-- ── Botón Admin ── -->
<h5 class="dg-section-title"><i class="fa fa-user-shield"></i> {DEMOBAR_GUIDE_USAGE_ADMIN_TITLE}</h5>
<p>{DEMOBAR_GUIDE_USAGE_ADMIN_DESC}</p>

<div class="alert alert-warning">
	<i class="fa fa-exclamation-triangle"></i> {DEMOBAR_GUIDE_USAGE_ADMIN_WARNING}
</div>
';


// ═══════════════════════════════════════════════════════════════════════════
// TAB DEMOS — Gestión de demos (CRUD, catálogo, sidebar, categorías)
// ═══════════════════════════════════════════════════════════════════════════

$DEMOBAR_GUIDE_TEMPLATE['demos'] = '
<h4>{DEMOBAR_GUIDE_DEMOS_TITLE}</h4>
<p>{DEMOBAR_GUIDE_DEMOS_INTRO}</p>

<!-- ── Crear / Editar Demos (CRUD) ── -->
<h5 class="dg-section-title"><i class="fa fa-plus-circle"></i> {DEMOBAR_GUIDE_DEMOS_CRUD_TITLE}</h5>
<p>{DEMOBAR_GUIDE_DEMOS_CRUD_DESC}</p>

<div class="table-responsive">
<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th style="width:22%">{DEMOBAR_GUIDE_DEMOS_TH_FIELD}</th>
			<th style="width:12%">{DEMOBAR_GUIDE_DEMOS_TH_TYPE}</th>
			<th>{DEMOBAR_GUIDE_DEMOS_TH_DESC}</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Slug</strong></td>
			<td><code>text</code></td>
			<td>{DEMOBAR_GUIDE_DEMOS_F_SLUG}</td>
		</tr>
		<tr>
			<td><strong>Name</strong></td>
			<td><code>text</code></td>
			<td>{DEMOBAR_GUIDE_DEMOS_F_NAME}</td>
		</tr>
		<tr>
			<td><strong>Description</strong></td>
			<td><code>textarea</code></td>
			<td>{DEMOBAR_GUIDE_DEMOS_F_DESC}</td>
		</tr>
		<tr>
			<td><strong>Category</strong></td>
			<td><code>dropdown</code></td>
			<td>{DEMOBAR_GUIDE_DEMOS_F_CATEGORY}</td>
		</tr>
		<tr>
			<td><strong>Thumbnail</strong></td>
			<td><code>image</code></td>
			<td>{DEMOBAR_GUIDE_DEMOS_F_THUMBNAIL}</td>
		</tr>
		<tr>
			<td><strong>Version</strong></td>
			<td><code>text</code></td>
			<td>{DEMOBAR_GUIDE_DEMOS_F_VERSION}</td>
		</tr>
		<tr>
			<td><strong>Release Date</strong></td>
			<td><code>date</code></td>
			<td>{DEMOBAR_GUIDE_DEMOS_F_RELEASE}</td>
		</tr>
		<tr>
			<td><strong>Built With</strong></td>
			<td><code>text</code></td>
			<td>{DEMOBAR_GUIDE_DEMOS_F_BUILT}</td>
		</tr>
		<tr>
			<td><strong>License Type / URL</strong></td>
			<td><code>text / url</code></td>
			<td>{DEMOBAR_GUIDE_DEMOS_F_LICENSE}</td>
		</tr>
		<tr>
			<td><strong>Download URL</strong></td>
			<td><code>url</code></td>
			<td>{DEMOBAR_GUIDE_DEMOS_F_DOWNLOAD}</td>
		</tr>
		<tr>
			<td><strong>Order</strong></td>
			<td><code>number</code></td>
			<td>{DEMOBAR_GUIDE_DEMOS_F_ORDER}</td>
		</tr>
		<tr>
			<td><strong>Active</strong></td>
			<td><code>boolean</code></td>
			<td>{DEMOBAR_GUIDE_DEMOS_F_ACTIVE}</td>
		</tr>
	</tbody>
</table>
</div>

<!-- ── Categorías predefinidas ── -->
<h5 class="dg-section-title"><i class="fa fa-tags"></i> {DEMOBAR_GUIDE_DEMOS_CAT_TITLE}</h5>
<p>{DEMOBAR_GUIDE_DEMOS_CAT_DESC}</p>
<div class="dg-categories-list">
	<span class="label label-default">Business</span>
	<span class="label label-default">Portfolio</span>
	<span class="label label-default">Admin</span>
	<span class="label label-default">Education</span>
	<span class="label label-default">eCommerce</span>
	<span class="label label-default">Restaurant</span>
	<span class="label label-default">Medical</span>
	<span class="label label-default">Coming Soon</span>
	<span class="label label-default">One Page</span>
	<span class="label label-default">Landing Page</span>
	<span class="label label-default">Corporate</span>
	<span class="label label-default">Agency</span>
	<span class="label label-default">Travel</span>
	<span class="label label-default">Hotel</span>
	<span class="label label-default">Events</span>
	<span class="label label-default">Photography</span>
	<span class="label label-default">Personal</span>
	<span class="label label-default">Resume / CV</span>
	<span class="label label-default">Real Estate</span>
	<span class="label label-default">Health</span>
	<span class="label label-default">Website Templates</span>
	<span class="label label-default">Construction</span>
	<span class="label label-default">Transportation</span>
	<span class="label label-default">Blog & Magazine</span>
	<span class="label label-default">SaaS</span>
</div>

<!-- ── Catálogo público ── -->
<h5 class="dg-section-title"><i class="fa fa-th"></i> {DEMOBAR_GUIDE_DEMOS_CATALOG_TITLE}</h5>
<p>{DEMOBAR_GUIDE_DEMOS_CATALOG_DESC}</p>
<ul>
	<li>{DEMOBAR_GUIDE_DEMOS_CATALOG_ITEM1}</li>
	<li>{DEMOBAR_GUIDE_DEMOS_CATALOG_ITEM2}</li>
	<li>{DEMOBAR_GUIDE_DEMOS_CATALOG_ITEM3}</li>
</ul>

<!-- ── Página de detalle ── -->
<h5 class="dg-section-title"><i class="fa fa-file-alt"></i> {DEMOBAR_GUIDE_DEMOS_DETAIL_TITLE}</h5>
<p>{DEMOBAR_GUIDE_DEMOS_DETAIL_DESC}</p>
<ul>
	<li>{DEMOBAR_GUIDE_DEMOS_DETAIL_ITEM1}</li>
	<li>{DEMOBAR_GUIDE_DEMOS_DETAIL_ITEM2}</li>
	<li>{DEMOBAR_GUIDE_DEMOS_DETAIL_ITEM3}</li>
</ul>

<!-- ── Menú lateral (sidebar) ── -->
<h5 class="dg-section-title"><i class="fa fa-bars"></i> {DEMOBAR_GUIDE_DEMOS_SIDEBAR_TITLE}</h5>
<p>{DEMOBAR_GUIDE_DEMOS_SIDEBAR_DESC}</p>
<ol>
	<li>{DEMOBAR_GUIDE_DEMOS_SIDEBAR_STEP1}</li>
	<li>{DEMOBAR_GUIDE_DEMOS_SIDEBAR_STEP2}</li>
	<li>{DEMOBAR_GUIDE_DEMOS_SIDEBAR_STEP3}</li>
</ol>

<!-- ── Truncamiento de descripciones ── -->
<h5 class="dg-section-title"><i class="fa fa-cut"></i> {DEMOBAR_GUIDE_DEMOS_TRUNC_TITLE}</h5>
<p>{DEMOBAR_GUIDE_DEMOS_TRUNC_DESC}</p>
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th style="width:30%">{DEMOBAR_GUIDE_DEMOS_TRUNC_TH_CONTEXT}</th>
			<th style="width:15%">{DEMOBAR_GUIDE_DEMOS_TRUNC_TH_LIMIT}</th>
			<th>{DEMOBAR_GUIDE_DEMOS_TRUNC_TH_HOW}</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>{DEMOBAR_GUIDE_DEMOS_TRUNC_R_CATALOG}</td>
			<td><code>120</code></td>
			<td>{DEMOBAR_GUIDE_DEMOS_TRUNC_R_CATALOG_HOW}</td>
		</tr>
		<tr>
			<td>{DEMOBAR_GUIDE_DEMOS_TRUNC_R_SIDEBAR}</td>
			<td><code>150</code></td>
			<td>{DEMOBAR_GUIDE_DEMOS_TRUNC_R_SIDEBAR_HOW}</td>
		</tr>
		<tr>
			<td>{DEMOBAR_GUIDE_DEMOS_TRUNC_R_DETAIL}</td>
			<td>—</td>
			<td>{DEMOBAR_GUIDE_DEMOS_TRUNC_R_DETAIL_HOW}</td>
		</tr>
	</tbody>
</table>

<div class="alert alert-info">
	<i class="fa fa-info-circle"></i> <strong>{DEMOBAR_GUIDE_DEMOS_NOTE_TITLE}</strong>
	{DEMOBAR_GUIDE_DEMOS_NOTE_TEXT}
</div>
';


// ═══════════════════════════════════════════════════════════════════════════
// TAB MULTISITE — Integración con multisite
// ═══════════════════════════════════════════════════════════════════════════

$DEMOBAR_GUIDE_TEMPLATE['multisite'] = '
<h4>{DEMOBAR_GUIDE_MULTI_TITLE}</h4>
<p>{DEMOBAR_GUIDE_MULTI_INTRO}</p>

<!-- ── Requisitos ── -->
<h5 class="dg-section-title"><i class="fa fa-check-circle"></i> {DEMOBAR_GUIDE_MULTI_REQS_TITLE}</h5>
<ol>
	<li>{DEMOBAR_GUIDE_MULTI_REQ1}</li>
	<li>{DEMOBAR_GUIDE_MULTI_REQ2}</li>
	<li>{DEMOBAR_GUIDE_MULTI_REQ3}</li>
	<li>{DEMOBAR_GUIDE_MULTI_REQ4}</li>
</ol>

<!-- ── Cómo funciona ── -->
<h5 class="dg-section-title"><i class="fa fa-cogs"></i> {DEMOBAR_GUIDE_MULTI_HOW_TITLE}</h5>
<p>{DEMOBAR_GUIDE_MULTI_HOW_DESC}</p>
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th style="width:30%">{DEMOBAR_GUIDE_MULTI_TH_COMPONENT}</th>
			<th>{DEMOBAR_GUIDE_MULTI_TH_ROLE}</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><code>multisite.json</code></td>
			<td>{DEMOBAR_GUIDE_MULTI_ROW_JSON}</td>
		</tr>
		<tr>
			<td><code>e_MULTISITE_MATCH</code></td>
			<td>{DEMOBAR_GUIDE_MULTI_ROW_MATCH}</td>
		</tr>
		<tr>
			<td><code>e_MULTISITE_IN_USE</code></td>
			<td>{DEMOBAR_GUIDE_MULTI_ROW_INUSE}</td>
		</tr>
		<tr>
			<td><code>.htaccess</code></td>
			<td>{DEMOBAR_GUIDE_MULTI_ROW_HTACCESS}</td>
		</tr>
	</tbody>
</table>

<!-- ── Provisionamiento automático ── -->
<h5 class="dg-section-title"><i class="fa fa-magic"></i> {DEMOBAR_GUIDE_MULTI_PROV_TITLE}</h5>
<p>{DEMOBAR_GUIDE_MULTI_PROV_DESC}</p>

<div class="alert alert-info">
	<i class="fa fa-info-circle"></i> <strong>{DEMOBAR_GUIDE_MULTI_PROV_NOTE_TITLE}</strong>
	{DEMOBAR_GUIDE_MULTI_PROV_NOTE_TEXT}
</div>
';


// ═══════════════════════════════════════════════════════════════════════════
// TAB TROUBLESHOOTING — Solución de problemas
// ═══════════════════════════════════════════════════════════════════════════

$DEMOBAR_GUIDE_TEMPLATE['troubleshooting'] = '
<h4>{DEMOBAR_GUIDE_TROUBLE_TITLE}</h4>
<p>{DEMOBAR_GUIDE_TROUBLE_INTRO}</p>
<dl>
	<dt><i class="fa fa-times-circle"></i> {DEMOBAR_GUIDE_TROUBLE_Q1}</dt>
	<dd>{DEMOBAR_GUIDE_TROUBLE_A1}</dd>

	<dt><i class="fa fa-times-circle"></i> {DEMOBAR_GUIDE_TROUBLE_Q2}</dt>
	<dd>{DEMOBAR_GUIDE_TROUBLE_A2}</dd>

	<dt><i class="fa fa-times-circle"></i> {DEMOBAR_GUIDE_TROUBLE_Q3}</dt>
	<dd>{DEMOBAR_GUIDE_TROUBLE_A3}</dd>

	<dt><i class="fa fa-times-circle"></i> {DEMOBAR_GUIDE_TROUBLE_Q4}</dt>
	<dd>{DEMOBAR_GUIDE_TROUBLE_A4}</dd>

	<dt><i class="fa fa-times-circle"></i> {DEMOBAR_GUIDE_TROUBLE_Q5}</dt>
	<dd>{DEMOBAR_GUIDE_TROUBLE_A5}</dd>

	<dt><i class="fa fa-times-circle"></i> {DEMOBAR_GUIDE_TROUBLE_Q6}</dt>
	<dd>{DEMOBAR_GUIDE_TROUBLE_A6}</dd>
</dl>

<div class="alert alert-success">
	<i class="fa fa-life-ring"></i> <strong>{DEMOBAR_GUIDE_TROUBLE_SUPPORT_TITLE}</strong>
	{DEMOBAR_GUIDE_TROUBLE_SUPPORT_TEXT}
</div>
';
