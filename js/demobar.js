/**
 * DemoBar Plugin — JavaScript
 *
 * Funcionalidad interactiva de la barra de demos:
 * - Toggle de visibilidad con persistencia en sessionStorage
 * - Botón flotante para restaurar la barra
 * - Gestión del padding del body según la posición de la barra
 *
 * @version 1.1.0
 * @requires No depende de jQuery — vanilla JS puro
 *
 * NOTA: El HTML de la barra se inyecta desde e_header.php via un script inline
 * que usa MutationObserver para insertar el DOM tan pronto como <body> exista.
 * Este script (demobar.js) se carga después y encuentra #demobar ya presente.
 */

(function () {
	'use strict';

	// --- Constantes ---
	var STORAGE_KEY = 'demobar_hidden';

	/**
	 * Inicializar la barra — buscar elementos y añadir listeners.
	 * Se llama cuando el DOM está listo o directamente si ya lo está.
	 */
	function init() {
		var bar     = document.getElementById('demobar');
		var toggle  = document.getElementById('demobar-toggle');
		var restore = document.getElementById('demobar-restore');

		if (!bar) {
			return; // La barra no está presente en esta página
		}

		/**
		 * Determina si la barra está en posición superior.
		 */
		function isTop() {
			return bar.classList.contains('demobar-top');
		}

		/**
		 * Ajusta el padding del body para compensar la barra fija.
		 */
		function adjustBodyPadding(visible) {
			var height = visible ? (bar.offsetHeight || 44) + 'px' : '0px';

			if (isTop()) {
				document.body.style.paddingTop = height;
			} else {
				document.body.style.paddingBottom = height;
			}
		}

		/**
		 * Oculta la barra y muestra el botón de restauración.
		 */
		function hideBar() {
			bar.classList.add('demobar-hidden');
			document.body.classList.remove('demobar-active');

			if (restore) {
				restore.classList.add('visible');
			}

			adjustBodyPadding(false);

			try {
				sessionStorage.setItem(STORAGE_KEY, '1');
			} catch (e) {}
		}

		/**
		 * Muestra la barra y oculta el botón de restauración.
		 */
		function showBar() {
			bar.classList.remove('demobar-hidden');
			document.body.classList.add('demobar-active');

			if (restore) {
				restore.classList.remove('visible');
			}

			adjustBodyPadding(true);

			try {
				sessionStorage.removeItem(STORAGE_KEY);
			} catch (e) {}
		}

		/**
		 * Restaurar estado persistido desde sessionStorage.
		 */
		function restoreState() {
			var hidden = false;

			try {
				hidden = sessionStorage.getItem(STORAGE_KEY) === '1';
			} catch (e) {}

			if (hidden) {
				hideBar();
			}
			// Si no está oculta, la clase demobar-active ya fue añadida por el script inline de e_header.php
		}

		// --- Event Listeners ---

		if (toggle) {
			toggle.addEventListener('click', function (e) {
				e.preventDefault();
				e.stopPropagation();
				hideBar();
			});
		}

		if (restore) {
			restore.addEventListener('click', function (e) {
				e.preventDefault();
				e.stopPropagation();
				showBar();
			});
		}

		// --- Atajos de teclado ---
		document.addEventListener('keydown', function (e) {
			if ((e.ctrlKey || e.metaKey) && e.shiftKey && e.key === 'D') {
				e.preventDefault();
				if (bar.classList.contains('demobar-hidden')) {
					showBar();
				} else {
					hideBar();
				}
			}
		});

		// --- Inicialización ---
		restoreState();
	}

	// Ejecutar init cuando el DOM esté listo
	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', init);
	} else {
		init();
	}

})();
