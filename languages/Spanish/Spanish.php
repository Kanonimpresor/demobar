<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2026 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * DemoBar Plugin — Archivo de idioma Español (Frontend)
 *
 * Todas las constantes de idioma del frontend en español.
 */

if (!defined('e107_INIT')) { exit; }


// --- General ---
define('LAN_DEMOBAR_PLUGIN_NAME',        'DemoBar');
define('LAN_DEMOBAR_PLUGIN_DESCRIPTION', 'Barra de navegación persistente para entornos de demostración multisitio');
define('LAN_PLUGIN_DEMOBAR_LINK',        'Demos');

// --- Barra de navegación ---
define('LAN_DEMOBAR_VIEW_DEMO',          'Ver Demo');
define('LAN_DEMOBAR_HIDE_BAR',           'Ocultar barra');
define('LAN_DEMOBAR_SHOW_BAR',           'Mostrar barra');
define('LAN_DEMOBAR_PREV_DEMO',          'Demo anterior');
define('LAN_DEMOBAR_NEXT_DEMO',          'Demo siguiente');
define('LAN_DEMOBAR_SOURCE_CODE',        'Código Fuente');
define('LAN_DEMOBAR_CONTACT',            'Contacto');
define('LAN_DEMOBAR_BRAND_DEFAULT',      'Muestra de Demos');

// --- Catálogo de demos ---
define('LAN_DEMOBAR_CATALOG_TITLE',      'Catálogo de Demos');
define('LAN_DEMOBAR_CATALOG_SUBTITLE',   'Explora nuestra colección de demos disponibles');
define('LAN_DEMOBAR_CATALOG_EMPTY',      'No hay demos disponibles en este momento.');
define('LAN_DEMOBAR_CATALOG_COUNT',      'demos disponibles');
define('LAN_DEMOBAR_CATALOG_VIEW',       'Ver Demo');
define('LAN_DEMOBAR_CATALOG_BADGE',      'Activo');

// --- Tipos de demo ---
define('LAN_DEMOBAR_TYPE_SUBDOMAIN',     'Subdominio');
define('LAN_DEMOBAR_TYPE_SUBDIR',        'Subdirectorio');

// --- Meta ---
define('LAN_DEMOBAR_META_KEYWORDS',      'demos, muestra, plantillas, plugins');

// --- Dashboard ---
define('LAN_DEMOBAR_DASH_DEMOS',         'Demos Activos');

// --- Cron ---
define('LAN_DEMOBAR_CRON_RESET_NAME',    'DemoBar: Reinicio de Demos');
define('LAN_DEMOBAR_CRON_RESET_DESC',    'Reiniciar los sitios demo a su estado predeterminado (contenido, archivos, configuración)');
define('LAN_DEMOBAR_CRON_CLEANUP_NAME',  'DemoBar: Limpieza de Estadísticas');
define('LAN_DEMOBAR_CRON_CLEANUP_DESC',  'Eliminar registros de estadísticas antiguos (mayores a 90 días)');

// --- Mensajes de estado ---
define('LAN_DEMOBAR_STATUS_ACTIVE',      'DemoBar está activo');
define('LAN_DEMOBAR_STATUS_INACTIVE',    'DemoBar está desactivado actualmente');
define('LAN_DEMOBAR_STATUS_NO_MULTISITE','Configuración multisitio no encontrada');
define('LAN_DEMOBAR_STATUS_NO_DEMOS',    'No hay demos configurados');

// --- Errores ---
define('LAN_DEMOBAR_ERR_JSON_NOT_FOUND', 'El archivo multisite.json no fue encontrado');
define('LAN_DEMOBAR_ERR_JSON_INVALID',   'El archivo multisite.json contiene JSON inválido');
define('LAN_DEMOBAR_ERR_IP_BLOCKED',     'Acceso restringido por lista blanca de IP');
