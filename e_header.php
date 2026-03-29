<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2026 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * DemoBar Plugin — Hook e_header
 * Inyecta la barra de navegación CSS/JS y el HTML en todas las páginas del frontend.
 * Se ejecuta automáticamente por el core de e107 al renderizar la cabecera.
 */

if (!defined('e107_INIT')) { exit; }


// Solo inyectar en el área de usuario (frontend), no en el admin
if (deftrue('USER_AREA'))
{
	$demobarPrefs = e107::pref('demobar');

	// When multisite is active, the current demo DB may not have demobar prefs.
	// In that case, force the bar active and use sensible defaults.
	$isMultisite = defined('e_MULTISITE_IN_USE');
	$isActive    = !empty($demobarPrefs['demobar_active']) || $isMultisite;

	// Verificar si la barra está activa
	if ($isActive)
	{
		// Cargar estilos CSS de la barra
		e107::css('demobar', 'css/demobar.css');

		// Cargar JavaScript para funcionalidad de toggle (se ejecuta después del DOM)
		e107::js('demobar', 'js/demobar.js', 'jquery');

		// Cargar idioma del plugin
		e107::lan('demobar');

		// Inyectar estilos dinámicos basados en las preferencias del admin
		$bgColor   = varset($demobarPrefs['demobar_bg_color'], '#343a40');
		$textColor = varset($demobarPrefs['demobar_text_color'], '#ffffff');
		$position  = varset($demobarPrefs['demobar_position'], 'top');

		$safeBg   = e107::getParser()->toAttribute($bgColor);
		$safeText = e107::getParser()->toAttribute($textColor);

		// CSS inline para colores personalizados y compensación del navbar
		$inlineCss = "
			.demobar {
				background-color: {$safeBg} !important;
				color: {$safeText} !important;
			}
			.demobar a { color: {$safeText}; }
		";

		if ($position === 'top')
		{
			$inlineCss .= "
				/* Empujar el body para compensar la barra fija */
				body.demobar-active { padding-top: var(--demobar-height, 44px); }

				/* Empujar navbars fixed-top de Bootstrap hacia abajo */
				body.demobar-active .navbar.fixed-top,
				body.demobar-active .fixed-top {
					top: var(--demobar-height, 44px);
				}
			";
		}
		else
		{
			$inlineCss .= "
				body.demobar-active { padding-bottom: var(--demobar-height, 44px); }
				body.demobar-active .navbar.fixed-bottom,
				body.demobar-active .fixed-bottom {
					bottom: var(--demobar-height, 44px);
				}
			";
		}

		e107::css('inline', $inlineCss);

		// --- Renderizar la barra ---
		require_once(e_PLUGIN . 'demobar/includes/demobar_class.php');
		$demobar = new demobar_class();
		$barHtml = $demobar->renderBar();

		if (!empty($barHtml))
		{
			// Escapar HTML para embeber en JS de forma segura
			$escapedHtml = json_encode($barHtml, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

			// Script auto-ejecutable que inyecta la barra inmediatamente al inicio del body.
			// Usa un MutationObserver para actuar en cuanto <body> exista (antes de DOMContentLoaded).
			// Si el usuario la ocultó previamente, respeta esa decisión.
			$injectionJs = "
(function(){
	var hidden = false;
	try { hidden = sessionStorage.getItem('demobar_hidden') === '1'; } catch(e){}
	if(hidden) return;

	function inject(){
		if(!document.body) return false;
		var d = document.createElement('div');
		d.innerHTML = {$escapedHtml};
		while(d.firstChild){ document.body.insertBefore(d.firstChild, document.body.firstChild); }
		document.body.classList.add('demobar-active');
		return true;
	}

	if(document.body){ inject(); return; }

	// body no existe todavía — esperar con MutationObserver
	if(typeof MutationObserver !== 'undefined'){
		var obs = new MutationObserver(function(m, o){
			if(inject()){ o.disconnect(); }
		});
		obs.observe(document.documentElement, {childList:true});
	} else {
		// Fallback para navegadores sin MutationObserver
		document.addEventListener('DOMContentLoaded', inject);
	}
})();
";
			e107::js('inline', $injectionJs);
		}
	}
}
