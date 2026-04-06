<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2026 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * DemoBar Plugin — Arquivo de idioma global Português
 *
 * Constantes carregadas em CADA página (via lan_global_list).
 * Apenas constantes necessárias globalmente (links de navegação, nome do plugin, etc.).
 */

if (!defined('e107_INIT')) { exit; }


// --- Identificação do plugin ---
define('LAN_PLUGIN_DEMOBAR_NAME',        'DemoBar');
define('LAN_PLUGIN_DEMOBAR_SUMMARY',     'Barra de navegação persistente para ambientes de demonstração multissite');
define('LAN_PLUGIN_DEMOBAR_DESCRIPTION', 'Injeta uma barra fixa superior em todos os sites de uma instalação multissite e107. Lê os demos ativos do multisite.json e exibe navegação, botões CTA e indicadores de estado.');

// --- Link de navegação (usado por siteLinks em plugin.xml) ---
define('LAN_PLUGIN_DEMOBAR_LINK',        'Demos');
