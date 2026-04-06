<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2026 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * DemoBar Plugin — Arquivo de idioma Português (Frontend)
 *
 * Todas as constantes de idioma do frontend em português.
 */

if (!defined('e107_INIT')) { exit; }


// --- Geral ---
define('LAN_DEMOBAR_PLUGIN_NAME',        'DemoBar');
define('LAN_DEMOBAR_PLUGIN_DESCRIPTION', 'Barra de navegação persistente para ambientes de demonstração multissite');
define('LAN_PLUGIN_DEMOBAR_LINK',        'Demos');

// --- Barra de navegação ---
define('LAN_DEMOBAR_VIEW_DEMO',          'Ver Demo');
define('LAN_DEMOBAR_HIDE_BAR',           'Ocultar barra');
define('LAN_DEMOBAR_SHOW_BAR',           'Mostrar barra');
define('LAN_DEMOBAR_PREV_DEMO',          'Demo anterior');
define('LAN_DEMOBAR_NEXT_DEMO',          'Próximo demo');
define('LAN_DEMOBAR_SOURCE_CODE',        'Código Fonte');
define('LAN_DEMOBAR_CONTACT',            'Contato');
define('LAN_DEMOBAR_BRAND_DEFAULT',      'Mostruário de Demos');

// --- Catálogo de demos ---
define('LAN_DEMOBAR_CATALOG_TITLE',      'Catálogo de Demos');
define('LAN_DEMOBAR_CATALOG_SUBTITLE',   'Explore nossa coleção de demos disponíveis');
define('LAN_DEMOBAR_CATALOG_EMPTY',      'Nenhum demo disponível no momento.');
define('LAN_DEMOBAR_CATALOG_COUNT',      'demos disponíveis');
define('LAN_DEMOBAR_CATALOG_VIEW',       'Ver Demo');
define('LAN_DEMOBAR_CATALOG_BADGE',      'Ativo');

// --- Tipos de demo ---
define('LAN_DEMOBAR_TYPE_SUBDOMAIN',     'Subdomínio');
define('LAN_DEMOBAR_TYPE_SUBDIR',        'Subdiretório');

// --- Meta ---
define('LAN_DEMOBAR_META_KEYWORDS',      'demos, mostruário, templates, plugins');

// --- Dashboard ---
define('LAN_DEMOBAR_DASH_DEMOS',         'Demos Ativos');

// --- Cron ---
define('LAN_DEMOBAR_CRON_RESET_NAME',    'DemoBar: Redefinição de Demos');
define('LAN_DEMOBAR_CRON_RESET_DESC',    'Redefinir os sites demo para seu estado padrão (conteúdo, uploads, configurações)');
define('LAN_DEMOBAR_CRON_CLEANUP_NAME',  'DemoBar: Limpeza de Estatísticas');
define('LAN_DEMOBAR_CRON_CLEANUP_DESC',  'Remover registros de estatísticas antigos (com mais de 90 dias)');

// --- Mensagens de status ---
define('LAN_DEMOBAR_STATUS_ACTIVE',      'DemoBar está ativo');
define('LAN_DEMOBAR_STATUS_INACTIVE',    'DemoBar está desativado atualmente');
define('LAN_DEMOBAR_STATUS_NO_MULTISITE','Configuração multissite não encontrada');
define('LAN_DEMOBAR_STATUS_NO_DEMOS',    'Nenhum demo configurado');

// --- Erros ---
define('LAN_DEMOBAR_ERR_JSON_NOT_FOUND', 'O arquivo multisite.json não foi encontrado');
define('LAN_DEMOBAR_ERR_JSON_INVALID',   'O arquivo multisite.json contém JSON inválido');
define('LAN_DEMOBAR_ERR_IP_BLOCKED',     'Acesso restrito por lista branca de IP');

// --- Menu de detalhe do demo (sidebar) ---
define('LAN_DEMOBAR_MENU_DETAIL_CAPTION', 'Detalhes do Demo');
define('LAN_DEMOBAR_MENU_VERSION',        'Versão');
define('LAN_DEMOBAR_MENU_RELEASE_DATE',   'Data de Lançamento');
define('LAN_DEMOBAR_MENU_BUILT_WITH',     'Construído Com');
define('LAN_DEMOBAR_MENU_INCLUDED_FILES', 'Arquivos Incluídos');
define('LAN_DEMOBAR_MENU_CATEGORY',       'Categoria');
define('LAN_DEMOBAR_MENU_DOWNLOAD',       'Baixar');
define('LAN_DEMOBAR_MENU_LICENSE',        'Licença');
define('LAN_DEMOBAR_MENU_LICENSE_TYPE',   'Licença');
define('LAN_DEMOBAR_MENU_SELECT_DEMO',    '-- Selecionar Demo --');
define('LAN_DEMOBAR_MENU_CAPTION_LABEL',  'Título do Menu');
define('LAN_DEMOBAR_MENU_CAPTION_HELP',   'Título exibido acima do menu. Deixe vazio para usar o padrão do arquivo de idioma.');
define('LAN_DEMOBAR_MENU_DEMO_LABEL',     'Selecionar Demo');
define('LAN_DEMOBAR_MENU_DEMO_HELP',      'Selecione qual demo exibir neste menu.');

// --- Catálogo e detalhe (v1.2.0) ---
define('LAN_DEMOBAR_VIEW_DETAILS',        'Ver Detalhes');
define('LAN_DEMOBAR_DEMO_NOT_FOUND',      'O demo solicitado não foi encontrado.');
define('LAN_DEMOBAR_DETAIL_INFO',         'Informações');
