<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2026 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * DemoBar Plugin — Batch Shortcodes para templates del catálogo/detalle
 *
 * Este archivo es cargado por e107::getScBatch('demobar', 'demobar')
 * y proporciona todos los shortcodes de datos para los templates del plugin.
 *
 * Shortcodes de datos (requieren setVars() con row de demobar_demos):
 *   {DEMOBAR_DEMO_NAME}        — Nombre del demo
 *   {DEMOBAR_DEMO_DESCRIPTION} — Descripción
 *   {DEMOBAR_DEMO_THUMBNAIL}   — Tag <img> del thumbnail (parm: =large para 600px)
 *   {DEMOBAR_DEMO_CATEGORY}    — Categoría
 *   {DEMOBAR_DEMO_VERSION}     — Versión (con prefijo "v")
 *   {DEMOBAR_DEMO_URL}         — URL del demo live
 *   {DEMOBAR_DETAIL_URL}       — URL de la página de detalle
 *   {DEMOBAR_VIEW_DEMO}        — Texto i18n "View Demo"
 *   {DEMOBAR_VIEW_DETAILS}     — Texto i18n "View Details"
 *   {DEMOBAR_CATALOG_TITLE}    — Título del catálogo
 *   {DEMOBAR_CATALOG_SUBTITLE} — Subtítulo del catálogo
 *   {DEMOBAR_CATALOG_COUNT}    — Número de demos en el catálogo actual
 *   {DEMOBAR_CATALOG_COUNT_LABEL} — Texto i18n "demos available"
 *   {DEMOBAR_CATALOG_ITEMS}    — Cards HTML pre-renderizados
 *   {DEMOBAR_DETAIL_INFO_TITLE}  — Texto i18n "Information"
 *   {DEMOBAR_DETAIL_META_*}      — Items de metadatos individuales
 *   {DEMOBAR_DOWNLOAD_BUTTON}    — Botón de descarga (si existe URL)
 *   {DEMOBAR_LICENSE_BUTTON}     — Botón de licencia (si existe URL)
 */

if (!defined('e107_INIT')) { exit; }


class demobar_catalog_shortcodes extends e_shortcode
{
	// =========================================================================
	// SHORTCODES DE DATOS — para templates catalog_card, catalog, detail
	// =========================================================================

	/**
	 * {DEMOBAR_DEMO_NAME} — Nombre del demo (escapado para HTML).
	 */
	public function sc_demobar_demo_name($parm = null)
	{
		return e107::getParser()->toHTML(varset($this->var['demo_name'], ''), false, 'TITLE');
	}

	/**
	 * {DEMOBAR_DEMO_DESCRIPTION} — Descripción del demo.
	 *
	 * Uso:
	 *   {DEMOBAR_DEMO_DESCRIPTION}       — Texto completo (para página de detalle)
	 *   {DEMOBAR_DEMO_DESCRIPTION=120}    — Truncado a 120 caracteres (para catálogo)
	 *
	 * @param string|null $parm Número máximo de caracteres, o null para completo
	 */
	public function sc_demobar_demo_description($parm = null)
	{
		$desc = varset($this->var['demo_description'], '');

		if (empty($desc))
		{
			return '';
		}

		$tp = e107::getParser();

		// Si se especifica un límite numérico, truncar el texto plano
		if (!empty($parm) && is_numeric($parm))
		{
			return $tp->truncate($tp->toText($desc), (int) $parm, '…');
		}

		return $tp->toHTML($desc, false, 'BODY');
	}

	/**
	 * {DEMOBAR_DEMO_THUMBNAIL} — Imagen del demo.
	 * Uso:
	 *   {DEMOBAR_DEMO_THUMBNAIL}       — Catálogo (w=480, proporcional, sin recorte)
	 *   {DEMOBAR_DEMO_THUMBNAIL=large}  — Detalle  (w=960, proporcional, sin recorte)
	 *
	 * Todas las imágenes incluyen loading="lazy" para carga diferida.
	 */
	public function sc_demobar_demo_thumbnail($parm = null)
	{
		$thumb = varset($this->var['demo_thumbnail'], '');

		if (empty($thumb))
		{
			return '';
		}

		$tp = e107::getParser();
		$alt = $tp->toAttribute(varset($this->var['demo_name'], ''));

		if ($parm === 'large')
		{
			// Detalle: imagen amplia, proporcional
			$src = $tp->thumbUrl($thumb, array('w' => 960));

			return '<img src="' . $src . '" class="demobar-img-detail img-fluid" alt="' . $alt . '" loading="lazy">';
		}

		// Catálogo: imagen proporcional sin recorte
		$src = $tp->thumbUrl($thumb, array('w' => 480));

		return '<img src="' . $src . '" class="demobar-img-card img-fluid" alt="' . $alt . '" loading="lazy">';
	}

	/**
	 * {DEMOBAR_DEMO_CATEGORY} — Categoría del demo.
	 */
	public function sc_demobar_demo_category($parm = null)
	{
		return e107::getParser()->toHTML(varset($this->var['demo_category'], ''), false, 'TITLE');
	}

	/**
	 * {DEMOBAR_DEMO_VERSION} — Versión del demo (con prefijo "v").
	 */
	public function sc_demobar_demo_version($parm = null)
	{
		$ver = varset($this->var['demo_version'], '');

		return !empty($ver) ? 'v' . e107::getParser()->toHTML($ver, false, 'TITLE') : '';
	}

	/**
	 * {DEMOBAR_DEMO_URL} — URL del demo live (de multisite).
	 */
	public function sc_demobar_demo_url($parm = null)
	{
		return e107::getParser()->toAttribute(varset($this->var['_demo_url'], '#'));
	}

	/**
	 * {DEMOBAR_DETAIL_URL} — URL de la página de detalle (/demos/{slug}).
	 */
	public function sc_demobar_detail_url($parm = null)
	{
		return e107::getParser()->toAttribute(varset($this->var['_detail_url'], '#'));
	}


	// =========================================================================
	// SHORTCODES I18N — textos traducidos
	// =========================================================================

	/**
	 * {DEMOBAR_VIEW_DEMO} — Texto "View Demo" (i18n).
	 */
	public function sc_demobar_view_demo($parm = null)
	{
		return defset('LAN_DEMOBAR_VIEW_DEMO', 'View Demo');
	}

	/**
	 * {DEMOBAR_VIEW_DETAILS} — Texto "View Details" (i18n).
	 */
	public function sc_demobar_view_details($parm = null)
	{
		return defset('LAN_DEMOBAR_VIEW_DETAILS', 'View Details');
	}

	/**
	 * {DEMOBAR_CATALOG_TITLE} — Título del catálogo (i18n).
	 */
	public function sc_demobar_catalog_title($parm = null)
	{
		return defset('LAN_DEMOBAR_CATALOG_TITLE', 'Demo Catalog');
	}

	/**
	 * {DEMOBAR_CATALOG_SUBTITLE} — Subtítulo del catálogo (i18n).
	 */
	public function sc_demobar_catalog_subtitle($parm = null)
	{
		return defset('LAN_DEMOBAR_CATALOG_SUBTITLE', 'Explore our collection of available demos');
	}

	/**
	 * {DEMOBAR_CATALOG_COUNT} — Número de demos en el catálogo actual.
	 */
	public function sc_demobar_catalog_count($parm = null)
	{
		return (string) varset($this->var['_catalog_count'], '0');
	}

	/**
	 * {DEMOBAR_CATALOG_COUNT_LABEL} — Texto "demos available" (i18n).
	 */
	public function sc_demobar_catalog_count_label($parm = null)
	{
		return defset('LAN_DEMOBAR_CATALOG_COUNT', 'demos available');
	}

	/**
	 * {DEMOBAR_CATALOG_ITEMS} — HTML de tarjetas pre-renderizadas.
	 */
	public function sc_demobar_catalog_items($parm = null)
	{
		return varset($this->var['_catalog_items'], '');
	}


	// =========================================================================
	// SHORTCODES DE DETALLE — vista individual
	// =========================================================================

	/**
	 * {DEMOBAR_DETAIL_INFO_TITLE} — Texto "Information" (i18n).
	 */
	public function sc_demobar_detail_info_title($parm = null)
	{
		return defset('LAN_DEMOBAR_DETAIL_INFO', 'Information');
	}

	/**
	 * {DEMOBAR_DETAIL_META_VERSION} — Item de metadato: versión.
	 */
	public function sc_demobar_detail_meta_version($parm = null)
	{
		$val = varset($this->var['demo_version'], '');
		if (empty($val)) return '';

		return '<li class="demobar-detail-item"><span class="demobar-detail-label"><i class="fa fa-tag"></i> '
			. defset('LAN_DEMOBAR_MENU_VERSION', 'Version')
			. '</span><span class="demobar-detail-value">'
			. e107::getParser()->toHTML($val, false, 'TITLE')
			. '</span></li>';
	}

	/**
	 * {DEMOBAR_DETAIL_META_RELEASE} — Item de metadato: fecha de lanzamiento.
	 */
	public function sc_demobar_detail_meta_release($parm = null)
	{
		$val = varset($this->var['demo_release_date'], '');
		if (empty($val)) return '';

		$timestamp = strtotime($val);
		if ($timestamp !== false)
		{
			$val = e107::getDate()->convert_date($timestamp, 'short');
		}

		return '<li class="demobar-detail-item"><span class="demobar-detail-label"><i class="fa fa-calendar"></i> '
			. defset('LAN_DEMOBAR_MENU_RELEASE_DATE', 'Release Date')
			. '</span><span class="demobar-detail-value">'
			. e107::getParser()->toHTML($val, false, 'TITLE')
			. '</span></li>';
	}

	/**
	 * {DEMOBAR_DETAIL_META_BUILT} — Item de metadato: construido con.
	 */
	public function sc_demobar_detail_meta_built($parm = null)
	{
		$val = varset($this->var['demo_built_with'], '');
		if (empty($val)) return '';

		return '<li class="demobar-detail-item"><span class="demobar-detail-label"><i class="fa fa-code"></i> '
			. defset('LAN_DEMOBAR_MENU_BUILT_WITH', 'Built With')
			. '</span><span class="demobar-detail-value">'
			. e107::getParser()->toHTML($val, false, 'BODY')
			. '</span></li>';
	}

	/**
	 * {DEMOBAR_DETAIL_META_FILES} — Item de metadato: archivos incluidos.
	 */
	public function sc_demobar_detail_meta_files($parm = null)
	{
		$val = varset($this->var['demo_included_files'], '');
		if (empty($val)) return '';

		return '<li class="demobar-detail-item"><span class="demobar-detail-label"><i class="fa fa-folder-open"></i> '
			. defset('LAN_DEMOBAR_MENU_INCLUDED_FILES', 'Included Files')
			. '</span><span class="demobar-detail-value">'
			. e107::getParser()->toHTML($val, false, 'BODY')
			. '</span></li>';
	}

	/**
	 * {DEMOBAR_DETAIL_META_CATEGORY} — Item de metadato: categoría.
	 */
	public function sc_demobar_detail_meta_category($parm = null)
	{
		$val = varset($this->var['demo_category'], '');
		if (empty($val)) return '';

		return '<li class="demobar-detail-item"><span class="demobar-detail-label"><i class="fa fa-folder"></i> '
			. defset('LAN_DEMOBAR_MENU_CATEGORY', 'Category')
			. '</span><span class="demobar-detail-value">'
			. e107::getParser()->toHTML($val, false, 'TITLE')
			. '</span></li>';
	}

	/**
	 * {DEMOBAR_DETAIL_META_LICENSE} — Item de metadato: tipo de licencia.
	 */
	public function sc_demobar_detail_meta_license($parm = null)
	{
		$val = varset($this->var['demo_license_type'], '');
		if (empty($val)) return '';

		return '<li class="demobar-detail-item"><span class="demobar-detail-label"><i class="fa fa-shield"></i> '
			. defset('LAN_DEMOBAR_MENU_LICENSE_TYPE', 'License')
			. '</span><span class="demobar-detail-value">'
			. e107::getParser()->toHTML($val, false, 'TITLE')
			. '</span></li>';
	}

	/**
	 * {DEMOBAR_DOWNLOAD_BUTTON} — Botón de descarga (solo si existe URL).
	 */
	public function sc_demobar_download_button($parm = null)
	{
		$url = varset($this->var['demo_download_url'], '');
		if (empty($url)) return '';

		$tp = e107::getParser();

		return '<a href="' . $tp->toAttribute($url) . '" class="btn btn-success btn-lg" target="_blank" rel="noopener">'
			. '<i class="fa fa-download"></i> ' . defset('LAN_DEMOBAR_MENU_DOWNLOAD', 'Download')
			. '</a>';
	}

	/**
	 * {DEMOBAR_LICENSE_BUTTON} — Botón de licencia (solo si existe URL).
	 */
	public function sc_demobar_license_button($parm = null)
	{
		$url = varset($this->var['demo_license_url'], '');
		if (empty($url)) return '';

		$tp = e107::getParser();

		return '<a href="' . $tp->toAttribute($url) . '" class="btn btn-outline-info btn-lg" target="_blank" rel="noopener">'
			. '<i class="fa fa-file-text-o"></i> ' . defset('LAN_DEMOBAR_MENU_LICENSE', 'License')
			. '</a>';
	}
}
