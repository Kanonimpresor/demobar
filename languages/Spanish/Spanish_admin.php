<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2026 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * DemoBar Plugin — Archivo de idioma Español (Admin)
 *
 * Todas las constantes de idioma del panel de administración en español.
 */

if (!defined('e107_INIT')) { exit; }


// =============================================================================
// Menú de administración
// =============================================================================

define('LAN_DEMOBAR_ADMIN_TITLE',           'Configuración de DemoBar');
define('LAN_DEMOBAR_ADMIN_PREFS',           'Preferencias');
define('LAN_DEMOBAR_ADMIN_CONFIGURE',       'Configurar');
define('LAN_DEMOBAR_ADMIN_GUIDE',           'Guía');


// =============================================================================
// Preferencias — Etiquetas de campos
// =============================================================================

define('LAN_DEMOBAR_PREF_ACTIVE',           'Activar DemoBar');
define('LAN_DEMOBAR_PREF_ACTIVE_HELP',      'Mostrar la barra de navegación de demos en el frontend');

define('LAN_DEMOBAR_PREF_BRAND_TEXT',       'Texto de Marca');
define('LAN_DEMOBAR_PREF_BRAND_TEXT_HELP',  'Texto que se muestra en el lado izquierdo de la barra (ej: nombre de su agencia)');

define('LAN_DEMOBAR_PREF_BRAND_URL',        'URL de Marca');
define('LAN_DEMOBAR_PREF_BRAND_URL_HELP',   'URL a la que apunta el texto de marca (ej: sitio web de su agencia)');

define('LAN_DEMOBAR_PREF_BG_COLOR',         'Color de Fondo');
define('LAN_DEMOBAR_PREF_BG_COLOR_HELP',    'Color de fondo de la barra (formato hexadecimal)');

define('LAN_DEMOBAR_PREF_TEXT_COLOR',        'Color de Texto');
define('LAN_DEMOBAR_PREF_TEXT_COLOR_HELP',   'Color de texto y enlaces de la barra (formato hexadecimal)');

define('LAN_DEMOBAR_PREF_CTA_SOURCE_URL',   'URL del Código Fuente');
define('LAN_DEMOBAR_PREF_CTA_SOURCE_HELP',  'URL del repositorio de código fuente (ej: GitHub)');

define('LAN_DEMOBAR_PREF_CTA_SOURCE_TEXT',  'Texto del Botón de Código Fuente');

define('LAN_DEMOBAR_PREF_CTA_CONTACT_URL',  'URL de Contacto');
define('LAN_DEMOBAR_PREF_CTA_CONTACT_HELP', 'URL para el botón de contacto/consultas');

define('LAN_DEMOBAR_PREF_CTA_CONTACT_TEXT', 'Texto del Botón de Contacto');

define('LAN_DEMOBAR_PREF_SHOW_PREVNEXT',    'Mostrar Navegación Anterior/Siguiente');
define('LAN_DEMOBAR_PREF_SHOW_PREVNEXT_HELP', 'Mostrar flechas de demo anterior y siguiente en la barra');

define('LAN_DEMOBAR_PREF_SHOW_TOGGLE',      'Mostrar Botón Ocultar/Mostrar');
define('LAN_DEMOBAR_PREF_SHOW_TOGGLE_HELP', 'Permitir a los usuarios ocultar/mostrar la barra de demos');

define('LAN_DEMOBAR_PREF_IP_WHITELIST',     'Lista Blanca de IP (Admin)');
define('LAN_DEMOBAR_PREF_IP_WHITELIST_HELP', 'Lista de IPs separadas por coma con acceso a funciones de administración. Dejar vacío para permitir todas.');

define('LAN_DEMOBAR_PREF_POSITION',         'Posición de la Barra');
define('LAN_DEMOBAR_PREF_POSITION_HELP',    'Posición de la barra de demos en la página');
define('LAN_DEMOBAR_PREF_POSITION_TOP',     'Arriba');
define('LAN_DEMOBAR_PREF_POSITION_BOTTOM',  'Abajo');


// =============================================================================
// Página de Configuración
// =============================================================================

define('LAN_DEMOBAR_ADMIN_CFG_TITLE',       'Configuración Multisitio');
define('LAN_DEMOBAR_ADMIN_CFG_DESC',        'Demos cargados desde multisite.json. Este archivo es de solo lectura desde esta interfaz.');
define('LAN_DEMOBAR_ADMIN_CFG_NAME',        'Nombre del Demo');
define('LAN_DEMOBAR_ADMIN_CFG_MATCH',       'Patrón de Coincidencia');
define('LAN_DEMOBAR_ADMIN_CFG_HAYSTACK',    'Tipo de Búsqueda');
define('LAN_DEMOBAR_ADMIN_CFG_DATABASE',    'Base de Datos');
define('LAN_DEMOBAR_ADMIN_CFG_STATUS',      'Estado');
define('LAN_DEMOBAR_ADMIN_CFG_ACTIVE',      'Activo');
define('LAN_DEMOBAR_ADMIN_CFG_INACTIVE',    'Inactivo');
define('LAN_DEMOBAR_ADMIN_CFG_NO_FILE',     'Archivo multisite.json no encontrado');
define('LAN_DEMOBAR_ADMIN_CFG_NO_DEMOS',    'No hay demos configurados en multisite.json');
define('LAN_DEMOBAR_ADMIN_CFG_INVALID',     'JSON inválido en multisite.json');


// =============================================================================
// Página de Guía
// =============================================================================

define('LAN_DEMOBAR_GUIDE_TITLE',           'Guía de DemoBar');
define('LAN_DEMOBAR_GUIDE_TAB_OVERVIEW',    'Descripción General');
define('LAN_DEMOBAR_GUIDE_TAB_CONFIG',      'Configuración');
define('LAN_DEMOBAR_GUIDE_TAB_USAGE',       'Uso');
define('LAN_DEMOBAR_GUIDE_TAB_TROUBLE',     'Solución de Problemas');

define('LAN_DEMOBAR_GUIDE_OVERVIEW_TITLE',  '¿Qué es DemoBar?');
define('LAN_DEMOBAR_GUIDE_OVERVIEW_TEXT',   'DemoBar agrega una barra de navegación persistente a su entorno de demostración multisitio, permitiendo a los visitantes navegar entre demos, ver el código fuente y contactarlo. Lee la configuración existente de multisite.json.');

define('LAN_DEMOBAR_GUIDE_CONFIG_TITLE',    'Pasos de Configuración');
define('LAN_DEMOBAR_GUIDE_CONFIG_TEXT',     '1. Active DemoBar en Preferencias.<br>2. Configure el texto y URL de su marca.<br>3. Configure los botones CTA (código fuente, contacto).<br>4. Personalice los colores para que coincidan con su marca.<br>5. Opcionalmente restrinja el acceso administrativo por IP.');

define('LAN_DEMOBAR_GUIDE_USAGE_TITLE',     'Uso de DemoBar');
define('LAN_DEMOBAR_GUIDE_USAGE_TEXT',      'Una vez activado, la barra aparece automáticamente en todas las páginas del frontend. Los visitantes pueden navegar entre demos y la barra persiste entre cargas de página. Use Ctrl+Shift+D para alternar la visibilidad.');

define('LAN_DEMOBAR_GUIDE_TROUBLE_TITLE',   'Solución de Problemas');
define('LAN_DEMOBAR_GUIDE_TROUBLE_TEXT',    '<strong>¿La barra no aparece?</strong> Verifique que DemoBar esté activado y que multisite.json exista.<br><strong>¿No se listan demos?</strong> Verifique que multisite.json contenga entradas válidas.<br><strong>¿Colores incorrectos?</strong> Limpie la caché del sitio después de cambiar las preferencias de color.');


// =============================================================================
// Mensajes flash
// =============================================================================

define('LAN_DEMOBAR_ADMIN_SAVED',           'Configuración de DemoBar guardada exitosamente.');
define('LAN_DEMOBAR_ADMIN_SAVE_ERROR',      'Error al guardar la configuración de DemoBar.');
