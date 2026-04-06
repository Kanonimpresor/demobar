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
// Página de Guía — Títulos de pestañas
// =============================================================================

define('LAN_DEMOBAR_GUIDE_TITLE',           'Guía de DemoBar');
define('LAN_DEMOBAR_GUIDE_TAB_OVERVIEW',    'Descripción General');
define('LAN_DEMOBAR_GUIDE_TAB_CONFIG',      'Configuración');
define('LAN_DEMOBAR_GUIDE_TAB_USAGE',       'Uso');
define('LAN_DEMOBAR_GUIDE_TAB_MULTISITE',   'Multisitio');
define('LAN_DEMOBAR_GUIDE_TAB_TROUBLE',     'Solución de Problemas');
define('LAN_DEMOBAR_GUIDE_TAB_DEMOS',        'Gestión de Demos');


// =============================================================================
// Guía — Pestaña 1: Descripción General
// =============================================================================

define('LAN_DEMOBAR_GUIDE_OVERVIEW_TITLE',  'Bienvenido a DemoBar');
define('LAN_DEMOBAR_GUIDE_OVERVIEW_INTRO',  'DemoBar es un plugin para e107 que agrega una barra de navegación fija a sus demos multisitio, permitiendo a los visitantes explorar entre temas/sitios demo sin interrupciones. Soporta branding, botones de llamada a la acción, herramientas exclusivas para administradores y personalización completa.');

// Pasos del flujo
define('LAN_DEMOBAR_GUIDE_FLOW_STEP1',     'Instalar DemoBar');
define('LAN_DEMOBAR_GUIDE_FLOW_STEP2',     'Configurar Preferencias');
define('LAN_DEMOBAR_GUIDE_FLOW_STEP3',     'Configurar Multisitio');
define('LAN_DEMOBAR_GUIDE_FLOW_STEP4',     'Los Visitantes Navegan Demos');

// Características
define('LAN_DEMOBAR_GUIDE_FEATURES_TITLE',          'Características Principales');
define('LAN_DEMOBAR_GUIDE_FEAT_MULTISITE',           'Integración Multisitio');
define('LAN_DEMOBAR_GUIDE_FEAT_MULTISITE_DESC',      'Detecta y carga automáticamente los demos desde multisite.json. Lee las preferencias de marca/CTA desde la base de datos principal.');
define('LAN_DEMOBAR_GUIDE_FEAT_NAVIGATION',          'Navegación de Demos');
define('LAN_DEMOBAR_GUIDE_FEAT_NAVIGATION_DESC',     'Flechas Anterior/Siguiente para navegar entre demos con estado deshabilitado en el primero/último. El sitio principal muestra un botón "Ver Demos" en su lugar.');
define('LAN_DEMOBAR_GUIDE_FEAT_CUSTOMIZABLE',        'Totalmente Personalizable');
define('LAN_DEMOBAR_GUIDE_FEAT_CUSTOMIZABLE_DESC',   'Cambie el color de fondo, color de texto, nombre de marca, posición (arriba/abajo) y alterne desde el panel de administración.');
define('LAN_DEMOBAR_GUIDE_FEAT_CTA',                 'Botones de Llamada a la Acción');
define('LAN_DEMOBAR_GUIDE_FEAT_CTA_DESC',            'Muestra botones de Código Fuente y Contacto, enlazando a su repositorio GitHub y página de contacto.');
define('LAN_DEMOBAR_GUIDE_FEAT_TOGGLE',              'Botón Mostrar/Ocultar');
define('LAN_DEMOBAR_GUIDE_FEAT_TOGGLE_DESC',         'Los visitantes pueden ocultar la barra con un clic o el atajo de teclado Ctrl+Shift+D. El estado se preserva en localStorage.');
define('LAN_DEMOBAR_GUIDE_FEAT_SECURITY',            'Acceso Solo para Administradores');
define('LAN_DEMOBAR_GUIDE_FEAT_SECURITY_DESC',       'El botón de Admin solo es visible para administradores autenticados (check_class). Lista blanca de IPs disponible para restricciones adicionales.');
define('LAN_DEMOBAR_GUIDE_FEAT_I18N',                'Internacionalización');
define('LAN_DEMOBAR_GUIDE_FEAT_I18N_DESC',           'Todas las etiquetas de interfaz usan constantes de idioma. Actualmente incluye traducciones en inglés, español y portugués.');
define('LAN_DEMOBAR_GUIDE_FEAT_RESPONSIVE',          'Diseño Responsivo');
define('LAN_DEMOBAR_GUIDE_FEAT_RESPONSIVE_DESC',     'Adapta el diseño y tamaños de fuente en puntos de quiebre de 768px y 480px. El texto de CTA se oculta en pantallas pequeñas, los iconos siempre visibles.');

// Vista previa del diseño
define('LAN_DEMOBAR_GUIDE_LAYOUT_TITLE',             'Diseño de la Barra');
define('LAN_DEMOBAR_GUIDE_LAYOUT_BRAND_DESC',        'Su nombre de marca con enlace');
define('LAN_DEMOBAR_GUIDE_LAYOUT_NAV_DESC',          'Navegación de demo Anterior/Siguiente');
define('LAN_DEMOBAR_GUIDE_LAYOUT_ACTIONS_DESC',      'Botones de Código Fuente + Contacto + Admin');
define('LAN_DEMOBAR_GUIDE_LAYOUT_TOGGLE_DESC',       'Cerrar / reabrir la barra');

// Inicio rápido
define('LAN_DEMOBAR_GUIDE_QUICKSTART',               'Inicio Rápido');
define('LAN_DEMOBAR_GUIDE_QUICKSTART_DESC',          'Instale el plugin, configure su nombre de marca, URLs y colores en la pestaña de Configuración, luego configure el plugin multisitio con al menos un sitio demo. DemoBar aparecerá automáticamente en todas las páginas de demos.');


// =============================================================================
// Guía — Pestaña 2: Configuración
// =============================================================================

define('LAN_DEMOBAR_GUIDE_CONFIG_TITLE',             'Referencia de Configuración');
define('LAN_DEMOBAR_GUIDE_CONFIG_INTRO',             'Todas las opciones se gestionan desde DemoBar Admin → Configuración. Las preferencias se almacenan en la tabla de prefs del core de e107 bajo la clave <code>plugin_demobar</code>.');
define('LAN_DEMOBAR_GUIDE_CONFIG_PREFS_TITLE',       'Opciones Disponibles');

// Encabezados de tabla
define('LAN_DEMOBAR_GUIDE_CONFIG_TH_OPTION',         'Opción');
define('LAN_DEMOBAR_GUIDE_CONFIG_TH_TYPE',           'Tipo');
define('LAN_DEMOBAR_GUIDE_CONFIG_TH_DESC',           'Descripción');

// Filas de tabla
define('LAN_DEMOBAR_GUIDE_CONFIG_R_ACTIVE',          'Activa o desactiva DemoBar en todas las páginas del frontend. Cuando está desactivado, la barra queda completamente oculta.');
define('LAN_DEMOBAR_GUIDE_CONFIG_R_BRAND_TEXT',      'El texto mostrado en la sección izquierda de la barra (ej: nombre de su empresa). Solo soporta texto plano.');
define('LAN_DEMOBAR_GUIDE_CONFIG_R_BRAND_URL',       'La URL enlazada al nombre de marca. Generalmente apunta a su sitio web principal o portafolio.');
define('LAN_DEMOBAR_GUIDE_CONFIG_R_BG_COLOR',        'Color de fondo de la barra. Acepta cualquier valor de color CSS (#hex, rgb, o colores con nombre). Por defecto: <code>#1a1a2e</code>.');
define('LAN_DEMOBAR_GUIDE_CONFIG_R_TEXT_COLOR',      'Color de texto e iconos en la barra. Por defecto: <code>#e0e0e0</code>.');
define('LAN_DEMOBAR_GUIDE_CONFIG_R_SOURCE_URL',      'URL para el botón "Código Fuente". Generalmente su página de GitHub o repositorio. Déjelo vacío para ocultar este botón.');
define('LAN_DEMOBAR_GUIDE_CONFIG_R_CONTACT_URL',     'URL para el botón "Contacto". Apunta a su formulario de contacto o página de correo. Déjelo vacío para ocultar este botón.');
define('LAN_DEMOBAR_GUIDE_CONFIG_R_POSITION',        'Posición de la barra en pantalla: <strong>Arriba</strong> (fija en la parte superior) o <strong>Abajo</strong> (fija en la parte inferior). Por defecto: arriba.');
define('LAN_DEMOBAR_GUIDE_CONFIG_R_IP_WHITELIST',    'Una IP por línea. Cuando está configurado, el botón Admin solo se muestra para administradores conectados desde estas IPs. Déjelo vacío para permitir todas las IPs de admin.');

// Nota cross-DB
define('LAN_DEMOBAR_GUIDE_CONFIG_NOTE_TITLE',        'Preferencias Cross-Database:');
define('LAN_DEMOBAR_GUIDE_CONFIG_NOTE_TEXT',          'Cuando se ejecuta en modo multisitio, DemoBar lee las URLs de marca y CTA desde la <strong>base de datos del sitio principal</strong>, no desde la base de datos individual de cada demo. Esto asegura una imagen de marca y URLs consistentes en todos los demos sin necesidad de configurar cada uno por separado.');


// =============================================================================
// Guía — Pestaña 3: Uso
// =============================================================================

define('LAN_DEMOBAR_GUIDE_USAGE_TITLE',              'Cómo Usar DemoBar');
define('LAN_DEMOBAR_GUIDE_USAGE_INTRO',              'DemoBar se comporta de manera diferente dependiendo de si el visitante está en el sitio principal o en un sitio demo.');

// Sitio principal
define('LAN_DEMOBAR_GUIDE_USAGE_MAIN_TITLE',         'En el Sitio Principal');
define('LAN_DEMOBAR_GUIDE_USAGE_MAIN_DESC',          'Cuando un visitante está en el sitio principal (no en un demo), la barra muestra navegación limitada:');
define('LAN_DEMOBAR_GUIDE_USAGE_MAIN_ITEM1',         'El nombre/enlace de marca siempre es visible.');
define('LAN_DEMOBAR_GUIDE_USAGE_MAIN_ITEM2',         'En lugar de flechas de navegación, un botón <strong>"▶ Ver Demos"</strong> enlaza al primer demo disponible.');
define('LAN_DEMOBAR_GUIDE_USAGE_MAIN_ITEM3',         'Los botones CTA (Código Fuente, Contacto) se muestran si están configurados.');

// Sitio demo
define('LAN_DEMOBAR_GUIDE_USAGE_DEMO_TITLE',         'En Sitios Demo');
define('LAN_DEMOBAR_GUIDE_USAGE_DEMO_DESC',          'Al visualizar un sitio demo, la navegación completa está activa:');
define('LAN_DEMOBAR_GUIDE_USAGE_DEMO_ITEM1',         'Las <strong>flechas Anterior/Siguiente</strong> navegan entre demos. Las flechas se deshabilitan (en gris) cuando está en el primero o último demo.');
define('LAN_DEMOBAR_GUIDE_USAGE_DEMO_ITEM2',         'El <strong>nombre del demo actual</strong> se muestra entre las flechas.');
define('LAN_DEMOBAR_GUIDE_USAGE_DEMO_ITEM3',         'Todos los botones CTA se cargan desde las preferencias del sitio principal para mantener una imagen de marca consistente.');
define('LAN_DEMOBAR_GUIDE_USAGE_DEMO_ITEM4',         'El <strong>botón Admin</strong> (si es visible) enlaza al panel de administración del sitio principal.');

// Toggle y teclado
define('LAN_DEMOBAR_GUIDE_USAGE_TOGGLE_TITLE',       'Alternar y Atajo de Teclado');
define('LAN_DEMOBAR_GUIDE_USAGE_TOGGLE_DESC',        'Los visitantes pueden ocultar o mostrar DemoBar en cualquier momento. El estado de la barra se guarda en el localStorage del navegador para que persista entre cargas de página.');
define('LAN_DEMOBAR_GUIDE_USAGE_SHORTCUT_LABEL',     'Alternar visibilidad de DemoBar');

// Botón Admin
define('LAN_DEMOBAR_GUIDE_USAGE_ADMIN_TITLE',        'Botón de Administración');
define('LAN_DEMOBAR_GUIDE_USAGE_ADMIN_DESC',         'El botón Admin solo es visible para usuarios con privilegios de administrador (<code>check_class(e_UC_ADMIN)</code>). Proporciona un enlace rápido al panel de administración del sitio principal.');
define('LAN_DEMOBAR_GUIDE_USAGE_ADMIN_WARNING',      'Si ha configurado una lista blanca de IPs, el botón Admin solo aparecerá para administradores conectados desde esas IPs específicas.');


// =============================================================================
// Guía — Pestaña 4: Gestión de Demos
// =============================================================================

define('LAN_DEMOBAR_GUIDE_DEMOS_TITLE',              'Gestión de Demos');
define('LAN_DEMOBAR_GUIDE_DEMOS_INTRO',              'DemoBar incluye un sistema de catálogo de demos completo. Puede crear, editar y gestionar entradas de demos directamente desde el panel de administración. Cada demo se almacena en la tabla <code>demobar_demos</code> y se muestra en las páginas públicas de catálogo y detalle.');

// CRUD
define('LAN_DEMOBAR_GUIDE_DEMOS_CRUD_TITLE',         'Crear y Editar Demos');
define('LAN_DEMOBAR_GUIDE_DEMOS_CRUD_DESC',          'Navegue a <strong>Admin → DemoBar → Crear Demo</strong> para agregar un nuevo demo. Use la lista de demos para editar o eliminar entradas existentes. Los siguientes campos están disponibles:');
define('LAN_DEMOBAR_GUIDE_DEMOS_TH_FIELD',           'Campo');
define('LAN_DEMOBAR_GUIDE_DEMOS_TH_TYPE',            'Tipo');
define('LAN_DEMOBAR_GUIDE_DEMOS_TH_DESC',            'Descripción');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_SLUG',             'Identificador único compatible con URLs que coincide con el patrón match del multisitio (ej: <code>bootstrap5</code>, <code>kreative</code>). Se usa en URLs como <code>/demos/bootstrap5</code>.');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_NAME',             'Nombre visible del demo que se muestra en las tarjetas del catálogo y la página de detalle.');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_DESC',             'Descripción completa del demo. Se trunca automáticamente en las tarjetas del catálogo y la barra lateral (ver sección de Truncamiento más abajo).');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_CATEGORY',         'Seleccione entre 25 categorías predefinidas (Negocios, Portafolio, Comercio Electrónico, etc.). Las categorías están completamente internacionalizadas y soportan operaciones por lote y filtrado en la lista de admin.');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_THUMBNAIL',        'Imagen de vista previa del demo. Usa el gestor de medios de e107 para carga y selección. Se muestra como imagen de tarjeta en el catálogo.');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_VERSION',          'Cadena de versión del demo (ej: <code>1.0.0</code>). Se muestra en el panel de información de la página de detalle.');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_RELEASE',          'Fecha de lanzamiento del demo. Se muestra en los metadatos de la página de detalle.');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_BUILT',            'Tecnologías utilizadas (ej: <code>Bootstrap 5, jQuery</code>). Se muestra en la página de detalle.');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_LICENSE',          'Tipo de licencia (ej: GPL, MIT) y una URL opcional que enlaza al texto completo de la licencia.');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_DOWNLOAD',         'URL donde se pueden descargar los archivos del demo. Si se proporciona, aparece un botón de Descarga en la página de detalle.');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_ORDER',            'Orden de clasificación para la visualización del catálogo. Los números más bajos aparecen primero.');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_ACTIVE',           'Activar o desactivar el demo. Los demos inactivos se ocultan del catálogo público pero siguen visibles en el admin.');

// Categorías
define('LAN_DEMOBAR_GUIDE_DEMOS_CAT_TITLE',          'Categorías Predefinidas');
define('LAN_DEMOBAR_GUIDE_DEMOS_CAT_DESC',           'DemoBar incluye 25 categorías predefinidas. Cada etiqueta de categoría está internacionalizada (i18n) — el valor almacenado en la base de datos siempre es la clave en inglés, y la etiqueta visible se traduce mediante constantes de idioma. Las categorías soportan edición por lote y filtro de columna en la lista de admin.');

// Página de catálogo
define('LAN_DEMOBAR_GUIDE_DEMOS_CATALOG_TITLE',      'Página Pública del Catálogo');
define('LAN_DEMOBAR_GUIDE_DEMOS_CATALOG_DESC',       'La página de catálogo muestra todos los demos activos como tarjetas responsivas en <code>/demos/</code> (o la URL SEF configurada):');
define('LAN_DEMOBAR_GUIDE_DEMOS_CATALOG_ITEM1',      'Cada tarjeta muestra la <strong>miniatura</strong>, <strong>nombre</strong>, <strong>insignia de categoría</strong> y una <strong>descripción truncada</strong> (120 caracteres).');
define('LAN_DEMOBAR_GUIDE_DEMOS_CATALOG_ITEM2',      'Las tarjetas enlazan a la página de detalle individual del demo en <code>/demos/{slug}</code>.');
define('LAN_DEMOBAR_GUIDE_DEMOS_CATALOG_ITEM3',      'El diseño usa una grilla responsiva que se adapta de 3 columnas en escritorio a 1 columna en móvil.');

// Página de detalle
define('LAN_DEMOBAR_GUIDE_DEMOS_DETAIL_TITLE',       'Página de Detalle del Demo');
define('LAN_DEMOBAR_GUIDE_DEMOS_DETAIL_DESC',        'Cada demo tiene una página de detalle dedicada (<code>/demos/{slug}</code>) que muestra:');
define('LAN_DEMOBAR_GUIDE_DEMOS_DETAIL_ITEM1',       'Descripción completa (sin truncamiento), miniatura, versión, fecha de lanzamiento, tecnologías y detalles de licencia.');
define('LAN_DEMOBAR_GUIDE_DEMOS_DETAIL_ITEM2',       'Botones de acción <strong>Vista Previa en Vivo</strong> y <strong>Descarga</strong> (cuando las URLs están configuradas).');
define('LAN_DEMOBAR_GUIDE_DEMOS_DETAIL_ITEM3',       'Navegación breadcrumb: Inicio → Demos → Nombre del Demo.');

// Menú lateral
define('LAN_DEMOBAR_GUIDE_DEMOS_SIDEBAR_TITLE',      'Menú Lateral');
define('LAN_DEMOBAR_GUIDE_DEMOS_SIDEBAR_DESC',       'DemoBar proporciona un menú lateral (<code>demobar_detail_menu</code>) que muestra una lista de todos los demos activos. Resalta el demo actualmente visualizado y trunca las descripciones a 150 caracteres. Para activarlo:');
define('LAN_DEMOBAR_GUIDE_DEMOS_SIDEBAR_STEP1',      'Vaya a <strong>Admin → Menús</strong> (Gestor de Menús).');
define('LAN_DEMOBAR_GUIDE_DEMOS_SIDEBAR_STEP2',      'Busque <strong>DemoBar — Menú de Detalle de Demo</strong> en la lista de menús disponibles.');
define('LAN_DEMOBAR_GUIDE_DEMOS_SIDEBAR_STEP3',      'Arrástrelo a un área de barra lateral (ej: <code>Área de Menú 1</code>) o el área que su tema usa para navegación lateral.');

// Truncamiento
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_TITLE',        'Truncamiento de Descripciones');
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_DESC',         'Las descripciones se truncan automáticamente en diferentes contextos para mantener un diseño limpio:');
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_TH_CONTEXT',   'Contexto');
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_TH_LIMIT',     'Límite');
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_TH_HOW',       'Implementación');
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_R_CATALOG',    'Tarjetas del Catálogo');
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_R_CATALOG_HOW','Mediante parámetro de shortcode: <code>{DEMOBAR_DEMO_DESCRIPTION=120}</code> en la plantilla del catálogo.');
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_R_SIDEBAR',    'Menú Lateral');
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_R_SIDEBAR_HOW','Mediante <code>$tp->truncate($text, 150, "…")</code> en el archivo del menú lateral.');
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_R_DETAIL',     'Página de Detalle');
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_R_DETAIL_HOW', 'La descripción completa se muestra sin ningún truncamiento.');

// Nota
define('LAN_DEMOBAR_GUIDE_DEMOS_NOTE_TITLE',         'Tabla de Base de Datos:');
define('LAN_DEMOBAR_GUIDE_DEMOS_NOTE_TEXT',           'Los registros de demos se almacenan en la tabla <code>{PREFIX}demobar_demos</code> (14 columnas). La interfaz CRUD de admin usa el patrón estándar de e107 <code>e_admin_ui</code> con edición en línea, operaciones por lote y filtros de columna para categoría y estado.');


// =============================================================================
// Guía — Pestaña 5: Multisitio
// =============================================================================

define('LAN_DEMOBAR_GUIDE_MULTI_TITLE',              'Integración Multisitio');
define('LAN_DEMOBAR_GUIDE_MULTI_INTRO',              'DemoBar está diseñado para funcionar perfectamente con el plugin <strong>CaMer0n/multisite</strong> para e107. Lee la lista de sitios desde multisite.json y adapta su comportamiento según el sitio activo.');

// Requisitos
define('LAN_DEMOBAR_GUIDE_MULTI_REQS_TITLE',         'Requisitos');
define('LAN_DEMOBAR_GUIDE_MULTI_REQ1',               'El plugin <strong>CaMer0n/multisite</strong> debe estar instalado y activado.');
define('LAN_DEMOBAR_GUIDE_MULTI_REQ2',               'Al menos un sitio demo debe estar configurado en el panel de administración multisitio.');
define('LAN_DEMOBAR_GUIDE_MULTI_REQ3',               'Cada sitio demo debe tener su propia base de datos (el plugin las crea automáticamente durante el aprovisionamiento).');
define('LAN_DEMOBAR_GUIDE_MULTI_REQ4',               'Las reglas de reescritura de <code>.htaccess</code> deben estar configuradas (el plugin multisitio las configura automáticamente).');

// Cómo funciona
define('LAN_DEMOBAR_GUIDE_MULTI_HOW_TITLE',          'Cómo Funciona');
define('LAN_DEMOBAR_GUIDE_MULTI_HOW_DESC',           'Los siguientes componentes trabajan juntos para habilitar la navegación de demos multisitio:');
define('LAN_DEMOBAR_GUIDE_MULTI_TH_COMPONENT',       'Componente');
define('LAN_DEMOBAR_GUIDE_MULTI_TH_ROLE',            'Función');
define('LAN_DEMOBAR_GUIDE_MULTI_ROW_JSON',           'Archivo de configuración JSON que lista todos los sitios demo con sus nombres, bases de datos y rutas URL.');
define('LAN_DEMOBAR_GUIDE_MULTI_ROW_MATCH',          'Constante definida por el plugin multisitio que contiene el slug del sitio actual (ej: "booking", "kreative").');
define('LAN_DEMOBAR_GUIDE_MULTI_ROW_INUSE',          'Constante booleana que indica si el multisitio está redirigiendo activamente a una base de datos demo. DemoBar la usa para decidir si mostrar las flechas de navegación.');
define('LAN_DEMOBAR_GUIDE_MULTI_ROW_HTACCESS',       'Reescribe las rutas <code>/slug-demo/</code> al handler multisitio, habilitando URLs limpias para cada demo.');

// Auto-aprovisionamiento
define('LAN_DEMOBAR_GUIDE_MULTI_PROV_TITLE',         'Auto-Aprovisionamiento');
define('LAN_DEMOBAR_GUIDE_MULTI_PROV_DESC',          'Cuando crea un nuevo sitio demo a través del panel de administración multisitio, DemoBar se registra automáticamente en la nueva base de datos del demo. Esto asegura que la barra aparezca en el nuevo demo sin configuración manual.');
define('LAN_DEMOBAR_GUIDE_MULTI_PROV_NOTE_TITLE',    'Herencia de Preferencias:');
define('LAN_DEMOBAR_GUIDE_MULTI_PROV_NOTE_TEXT',     'El texto de marca, URLs y configuración de CTA siempre se leen desde la <strong>base de datos del sitio principal</strong> en tiempo de ejecución. Solo necesita configurarlos una vez — serán heredados por todos los sitios demo automáticamente.');


// =============================================================================
// Guía — Pestaña 5: Solución de Problemas
// =============================================================================

define('LAN_DEMOBAR_GUIDE_TROUBLE_TITLE',            'Solución de Problemas');
define('LAN_DEMOBAR_GUIDE_TROUBLE_INTRO',            'A continuación se presentan problemas comunes y sus soluciones.');

define('LAN_DEMOBAR_GUIDE_TROUBLE_Q1',               'DemoBar no aparece en ninguna página');
define('LAN_DEMOBAR_GUIDE_TROUBLE_A1',               'Asegúrese de que el plugin esté instalado y activado. Verifique que "Activar DemoBar" esté habilitado en Configuración. Compruebe que el archivo <code>e_header.php</code> del plugin existe. Limpie la caché de e107 desde Admin → Herramientas → Caché.');

define('LAN_DEMOBAR_GUIDE_TROUBLE_Q2',               'Las flechas de navegación no aparecen en las páginas demo');
define('LAN_DEMOBAR_GUIDE_TROUBLE_A2',               'Verifique que el plugin multisitio esté instalado y que <code>multisite.json</code> contenga entradas de demo válidas. Compruebe que la constante <code>e_MULTISITE_IN_USE</code> se esté definiendo. Asegúrese de que la URL actual coincida con un slug de demo configurado.');

define('LAN_DEMOBAR_GUIDE_TROUBLE_Q3',               'El nombre de marca y botones CTA están vacíos en los demos');
define('LAN_DEMOBAR_GUIDE_TROUBLE_A3',               'DemoBar lee estos valores desde la <strong>base de datos del sitio principal</strong>. Asegúrese de haber configurado Texto de Marca, URL de Marca, URL de Código Fuente y URL de Contacto en la configuración de admin de DemoBar del sitio principal (no del demo).');

define('LAN_DEMOBAR_GUIDE_TROUBLE_Q4',               'La barra aparece dentro de la página en vez de fija arriba/abajo');
define('LAN_DEMOBAR_GUIDE_TROUBLE_A4',               'Esto generalmente es un conflicto de CSS. Verifique que <code>demobar.css</code> se esté cargando correctamente (revise en las herramientas de desarrollo del navegador → pestaña Red). Asegúrese de que su tema no sobreescriba <code>position: fixed</code> en el elemento de la barra. Limpie la caché del navegador y la de e107.');

define('LAN_DEMOBAR_GUIDE_TROUBLE_Q5',               'El botón Admin no es visible');
define('LAN_DEMOBAR_GUIDE_TROUBLE_A5',               'El botón Admin solo es visible para administradores con sesión iniciada. Verifique que haya iniciado sesión con una cuenta de administrador. Si tiene configurada una lista blanca de IPs, asegúrese de que su IP actual esté en la lista.');

define('LAN_DEMOBAR_GUIDE_TROUBLE_Q6',               'Oculté la barra y no puedo recuperarla');
define('LAN_DEMOBAR_GUIDE_TROUBLE_A6',               'Presione <strong>Ctrl+Shift+D</strong> para alternar la barra. Alternativamente, abra la consola de desarrollador de su navegador y ejecute: <code>localStorage.removeItem("demobar-hidden")</code> y luego recargue la página.');

// Soporte
define('LAN_DEMOBAR_GUIDE_TROUBLE_SUPPORT_TITLE',    '¿Necesita Más Ayuda?');
define('LAN_DEMOBAR_GUIDE_TROUBLE_SUPPORT_TEXT',     'Visite los foros de la comunidad e107 o abra un issue en el repositorio GitHub del plugin. Por favor incluya su versión de e107, versión de PHP y cualquier mensaje de error relevante de su registro de administración.');


// =============================================================================
// Mensajes flash
// =============================================================================

define('LAN_DEMOBAR_ADMIN_SAVED',           'Configuración de DemoBar guardada exitosamente.');
define('LAN_DEMOBAR_ADMIN_SAVE_ERROR',      'Error al guardar la configuración de DemoBar.');


// =============================================================================
// Demos CRUD — Menú Admin y Etiquetas de campos
// =============================================================================

define('LAN_DEMOBAR_ADMIN_DEMOS',                'Demos');
define('LAN_DEMOBAR_ADMIN_DEMOS_CREATE',         'Crear Demo');

define('LAN_DEMOBAR_FIELD_SLUG',                 'Slug');
define('LAN_DEMOBAR_FIELD_SLUG_HELP',            'Identificador único que coincide con el patrón match en multisite.json (ej: bootstrap5, kreative)');
define('LAN_DEMOBAR_FIELD_THUMBNAIL',            'Miniatura');
define('LAN_DEMOBAR_FIELD_VERSION',              'Versión');
define('LAN_DEMOBAR_FIELD_RELEASE_DATE',         'Fecha de Lanzamiento');
define('LAN_DEMOBAR_FIELD_BUILT_WITH',           'Construido Con');
define('LAN_DEMOBAR_FIELD_INCLUDED_FILES',       'Archivos Incluidos');
define('LAN_DEMOBAR_FIELD_LICENSE_TYPE',         'Tipo de Licencia');
define('LAN_DEMOBAR_FIELD_LICENSE_URL',          'URL de Licencia');
define('LAN_DEMOBAR_FIELD_DOWNLOAD_URL',         'URL de Descarga');


// =============================================================================
// Categorías de Demos — Opciones del dropdown (clave en BD = valor en inglés)
// =============================================================================

define('LAN_DEMOBAR_CAT_BUSINESS',           'Negocios');
define('LAN_DEMOBAR_CAT_PORTFOLIO',          'Portafolio');
define('LAN_DEMOBAR_CAT_ADMIN',             'Administración');
define('LAN_DEMOBAR_CAT_EDUCATION',          'Educación');
define('LAN_DEMOBAR_CAT_ECOMMERCE',          'Comercio Electrónico');
define('LAN_DEMOBAR_CAT_RESTAURANT',         'Restaurante');
define('LAN_DEMOBAR_CAT_MEDICAL',            'Médico');
define('LAN_DEMOBAR_CAT_COMING_SOON',        'Próximamente');
define('LAN_DEMOBAR_CAT_ONE_PAGE',           'Una Página');
define('LAN_DEMOBAR_CAT_LANDING_PAGE',       'Página de Aterrizaje');
define('LAN_DEMOBAR_CAT_CORPORATE',          'Corporativo');
define('LAN_DEMOBAR_CAT_AGENCY',             'Agencia');
define('LAN_DEMOBAR_CAT_TRAVEL',             'Viajes');
define('LAN_DEMOBAR_CAT_HOTEL',              'Hotel');
define('LAN_DEMOBAR_CAT_EVENTS',             'Eventos');
define('LAN_DEMOBAR_CAT_PHOTOGRAPHY',        'Fotografía');
define('LAN_DEMOBAR_CAT_PERSONAL',           'Personal');
define('LAN_DEMOBAR_CAT_RESUME',             'Currículum / CV');
define('LAN_DEMOBAR_CAT_REAL_ESTATE',        'Bienes Raíces');
define('LAN_DEMOBAR_CAT_HEALTH',             'Salud');
define('LAN_DEMOBAR_CAT_WEBSITE_TEMPLATES',  'Plantillas Web');
define('LAN_DEMOBAR_CAT_CONSTRUCTION',       'Construcción');
define('LAN_DEMOBAR_CAT_TRANSPORTATION',     'Transporte');
define('LAN_DEMOBAR_CAT_BLOG_MAGAZINE',      'Blog y Revista');
define('LAN_DEMOBAR_CAT_SAAS',               'SaaS');
