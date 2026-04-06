<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2026 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * DemoBar Plugin — Menú lateral de detalle del demo (dinámico)
 *
 * Menú de plugin nativo e107. Se activa desde el Gestor de Menús
 * (Admin → Apariencia → Gestor de Menús).
 *
 * Auto-detecta qué demo mostrar basándose en:
 *   1. Ruta SEF /demos/{slug} → $_GET['name']
 *   2. Constante e_MULTISITE_MATCH (cuando estamos dentro de un demo)
 *
 * Lee el registro del demo desde la tabla demobar_demos y renderiza
 * un sidebar con metadatos y botones de acción.
 *
 * Caption siempre desde el archivo de idioma (LAN_DEMOBAR_MENU_DETAIL_CAPTION)
 * con posibilidad de override multilan vía parámetros del Menu Manager.
 */

if (!defined('e107_INIT')) { exit; }

// Cargar idioma del plugin (subdirectorio: languages/English/English_front.php)
e107::lan('demobar', 'front', true);

$tp  = e107::getParser();
$sql = e107::getDb('demobar_menu');

// --- Obtener parámetros configurados en Menu Manager ---
$parm = (is_string($parm)) ? e107::unserialize($parm) : (array) $parm;

// Caption: si el admin configuró uno multilan, usarlo; si no, usar el del archivo de idioma
$rawCaption = varset($parm['caption'], '');
if (!empty($rawCaption))
{
	if (is_array($rawCaption))
	{
		$caption = varset($rawCaption[e_LANGUAGE], varset($rawCaption['English'], reset($rawCaption)));
	}
	else
	{
		$caption = $rawCaption;
	}
}

// Fallback: siempre usar la constante de idioma si el caption está vacío
if (empty($caption))
{
	$caption = defset('LAN_DEMOBAR_MENU_DETAIL_CAPTION', 'Demo Details');
}


// --- Auto-detectar el slug del demo actual ---
$demoSlug = '';

// Prioridad 1: parámetro de URL (ruta SEF /demos/{slug})
if (!empty($_GET['name']))
{
	$demoSlug = $tp->filter($_GET['name'], 'w');
}

// Prioridad 2: constante multisite (estamos dentro de un demo activo)
if (empty($demoSlug) && defined('e_MULTISITE_MATCH'))
{
	$demoSlug = e_MULTISITE_MATCH;
}

// Si no se detectó ningún slug, no renderizar nada
if (empty($demoSlug))
{
	return;
}

// Leer el registro del demo desde la BD
$row = $sql->retrieve('demobar_demos', '*', "demo_slug = '" . $tp->toDB($demoSlug) . "' AND demo_active = 1");

if (empty($row))
{
	return;
}

// Construir el HTML del menú sidebar
$text = '<div class="demobar-detail-menu">';

// --- Nombre del demo como encabezado ---
$text .= '<h5 class="demobar-detail-name text-center mb-3">' . $tp->toHTML($row['demo_name'], false, 'TITLE') . '</h5>';

// --- Thumbnail del demo (si existe) ---
if (!empty($row['demo_thumbnail']))
{
	$text .= '<div class="demobar-detail-thumb text-center mb-3">';
	$text .= '<img src="' . $tp->thumbUrl($row['demo_thumbnail'], array('w' => 360)) . '" class="demobar-img-menu img-fluid rounded" alt="' . $tp->toAttribute($row['demo_name']) . '" loading="lazy">';
	$text .= '</div>';
}

// --- Descripción breve (truncada a 150 caracteres para el sidebar) ---
if (!empty($row['demo_description']))
{
	$descText = $tp->truncate($tp->toText($row['demo_description']), 150, '…');
	$text .= '<p class="demobar-detail-desc text-muted small mb-3">' . $descText . '</p>';
}

// --- Información del demo ---
$text .= '<ul class="list-unstyled demobar-detail-list">';

// Versión
if (!empty($row['demo_version']))
{
	$text .= '<li class="demobar-detail-item">';
	$text .= '<span class="demobar-detail-label"><i class="fa fa-tag"></i> ' . defset('LAN_DEMOBAR_MENU_VERSION', 'Version') . '</span>';
	$text .= '<span class="demobar-detail-value">' . $tp->toHTML($row['demo_version'], false, 'TITLE') . '</span>';
	$text .= '</li>';
}

// Fecha de lanzamiento
if (!empty($row['demo_release_date']))
{
	$dateValue = $row['demo_release_date'];
	$timestamp = strtotime($dateValue);

	if ($timestamp !== false)
	{
		$dateValue = e107::getDate()->convert_date($timestamp, 'short');
	}

	$text .= '<li class="demobar-detail-item">';
	$text .= '<span class="demobar-detail-label"><i class="fa fa-calendar"></i> ' . defset('LAN_DEMOBAR_MENU_RELEASE_DATE', 'Release Date') . '</span>';
	$text .= '<span class="demobar-detail-value">' . $tp->toHTML($dateValue, false, 'TITLE') . '</span>';
	$text .= '</li>';
}

// Construido con
if (!empty($row['demo_built_with']))
{
	$text .= '<li class="demobar-detail-item">';
	$text .= '<span class="demobar-detail-label"><i class="fa fa-code"></i> ' . defset('LAN_DEMOBAR_MENU_BUILT_WITH', 'Built With') . '</span>';
	$text .= '<span class="demobar-detail-value">' . $tp->toHTML($row['demo_built_with'], false, 'BODY') . '</span>';
	$text .= '</li>';
}

// Archivos incluidos
if (!empty($row['demo_included_files']))
{
	$text .= '<li class="demobar-detail-item">';
	$text .= '<span class="demobar-detail-label"><i class="fa fa-folder-open"></i> ' . defset('LAN_DEMOBAR_MENU_INCLUDED_FILES', 'Included Files') . '</span>';
	$text .= '<span class="demobar-detail-value">' . $tp->toHTML($row['demo_included_files'], false, 'BODY') . '</span>';
	$text .= '</li>';
}

// Categoría
if (!empty($row['demo_category']))
{
	$text .= '<li class="demobar-detail-item">';
	$text .= '<span class="demobar-detail-label"><i class="fa fa-folder"></i> ' . defset('LAN_DEMOBAR_MENU_CATEGORY', 'Category') . '</span>';
	$text .= '<span class="demobar-detail-value">' . $tp->toHTML($row['demo_category'], false, 'TITLE') . '</span>';
	$text .= '</li>';
}

$text .= '</ul>';

// --- Botones de acción ---
$text .= '<hr>';
$text .= '<div class="demobar-detail-actions d-grid gap-2">';

// Botón "Ver Demo" — construir URL desde multisite.json
require_once(e_PLUGIN . 'demobar/includes/demobar_class.php');
$demobar = new demobar_class();
$demos = $demobar->getDemos();
$demoUrl = '#';

foreach ($demos as $d)
{
	if ($d['match'] === $demoSlug)
	{
		$demoUrl = $demobar->getDemoUrl($d);
		break;
	}
}

$text .= '<a href="' . $tp->toAttribute($demoUrl) . '" class="btn btn-primary" target="_blank" rel="noopener">';
$text .= '<i class="fa fa-eye"></i> ' . defset('LAN_DEMOBAR_VIEW_DEMO', 'View Demo');
$text .= '</a>';

// Botón "Descargar" (solo si hay URL)
if (!empty($row['demo_download_url']))
{
	$text .= '<a href="' . $tp->toAttribute($row['demo_download_url']) . '" class="btn btn-success" target="_blank" rel="noopener">';
	$text .= '<i class="fa fa-download"></i> ' . defset('LAN_DEMOBAR_MENU_DOWNLOAD', 'Download');
	$text .= '</a>';
}

// Botón "Licencia" (solo si hay URL)
if (!empty($row['demo_license_url']))
{
	$text .= '<a href="' . $tp->toAttribute($row['demo_license_url']) . '" class="btn btn-outline-info" target="_blank" rel="noopener">';
	$text .= '<i class="fa fa-file-text-o"></i> ' . defset('LAN_DEMOBAR_MENU_LICENSE', 'License');
	$text .= '</a>';
}

$text .= '</div>';

// --- Tipo de licencia ---
if (!empty($row['demo_license_type']))
{
	$text .= '<div class="demobar-detail-license text-center mt-3">';
	$text .= '<small class="text-muted"><i class="fa fa-shield"></i> ';
	$text .= defset('LAN_DEMOBAR_MENU_LICENSE_TYPE', 'License') . ': ';
	$text .= $tp->toHTML($row['demo_license_type'], false, 'TITLE');
	$text .= '</small></div>';
}

$text .= '</div>';

// Renderizar con tablerender de e107
e107::getRender()->tablerender($caption, $text, 'demobar-detail');
