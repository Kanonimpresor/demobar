<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2026 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * DemoBar Plugin — Templates
 *
 * Todas las plantillas HTML del plugin.
 * Se acceden vía e107::getTemplate('demobar', 'demobar', 'key').
 *
 * Los shortcodes disponibles se definen en e_shortcode.php.
 * Las variables dinámicas usan la notación {SHORTCODE_NAME}.
 */

if (!defined('e107_INIT')) { exit; }

$DEMOBAR_TEMPLATE = array();


// =============================================================================
// BARRA DE NAVEGACIÓN (BAR)
// =============================================================================

/**
 * Template principal de la barra de demos.
 * Contiene la estructura HTML con slots para:
 *   - Marca/logo de la agencia
 *   - Navegación de demos (prev/next)
 *   - Botones CTA (ver código fuente, contacto)
 *   - Toggle de visibilidad
 */
$DEMOBAR_TEMPLATE['bar'] = '
<div id="demobar" class="demobar demobar-{DEMOBAR_POSITION}">
	<div class="demobar-inner d-flex align-items-center justify-content-between">
		<div class="demobar-brand">
			<a href="{DEMOBAR_BRAND_URL}" class="demobar-brand-link" target="_blank" rel="noopener">
				{DEMOBAR_BRAND_TEXT}
			</a>
		</div>
		<div class="demobar-nav d-flex align-items-center gap-2">
			{DEMOBAR_DEMO_LINKS}
		</div>
		<div class="demobar-actions d-flex align-items-center gap-2">
			{DEMOBAR_CTA_BUTTONS}
			{DEMOBAR_TOGGLE_BUTTON}
		</div>
	</div>
</div>';


// =============================================================================
// ENLACE DE DEMO INDIVIDUAL
// =============================================================================

/**
 * Template para cada enlace de demo en la barra.
 */
$DEMOBAR_TEMPLATE['demo_link'] = '
<a href="{DEMOBAR_DEMO_URL}" class="demobar-link{DEMOBAR_LINK_ACTIVE}" title="{DEMOBAR_DEMO_NAME}">
	{DEMOBAR_DEMO_NAME}
</a>';


// =============================================================================
// BOTÓN CTA
// =============================================================================

/**
 * Template para botones de llamada a la acción.
 */
$DEMOBAR_TEMPLATE['cta_button'] = '
<a href="{DEMOBAR_CTA_URL}" class="demobar-btn {DEMOBAR_CTA_CLASS}" target="_blank" rel="noopener">
	{DEMOBAR_CTA_TEXT}
</a>';


// =============================================================================
// CATÁLOGO - TARJETA DE DEMO
// =============================================================================

/**
 * Template de tarjeta para la página de catálogo (/demos/).
 * Usado en la vista de cuadrícula del catálogo.
 */
$DEMOBAR_TEMPLATE['catalog_card'] = '
<div class="col-md-6 col-lg-4 mb-4">
	<div class="card demobar-card h-100 shadow-sm">
		<div class="card-body d-flex flex-column">
			<h5 class="card-title">{DEMOBAR_DEMO_NAME}</h5>
			<p class="card-text text-muted flex-grow-1">{DEMOBAR_DEMO_DESCRIPTION}</p>
			<a href="{DEMOBAR_DEMO_URL}" class="btn btn-primary mt-auto">
				{DEMOBAR_VIEW_DEMO}
			</a>
		</div>
	</div>
</div>';


// =============================================================================
// CATÁLOGO - WRAPPER
// =============================================================================

/**
 * Template wrapper para la página de catálogo completa.
 */
$DEMOBAR_TEMPLATE['catalog'] = '
<div class="demobar-catalog">
	<div class="container py-5">
		<div class="text-center mb-5">
			<h1>{DEMOBAR_CATALOG_TITLE}</h1>
			<p class="lead text-muted">{DEMOBAR_CATALOG_SUBTITLE}</p>
		</div>
		<div class="row">
			{DEMOBAR_CATALOG_ITEMS}
		</div>
	</div>
</div>';
