<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2026 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * DemoBar Plugin — Arquivo de idioma Português (Admin)
 *
 * Todas as constantes de idioma do painel de administração em português.
 */

if (!defined('e107_INIT')) { exit; }


// =============================================================================
// Menu de administração
// =============================================================================

define('LAN_DEMOBAR_ADMIN_TITLE',           'Configurações do DemoBar');
define('LAN_DEMOBAR_ADMIN_PREFS',           'Preferências');
define('LAN_DEMOBAR_ADMIN_CONFIGURE',       'Configurar');
define('LAN_DEMOBAR_ADMIN_GUIDE',           'Guia');


// =============================================================================
// Preferências — Rótulos dos campos
// =============================================================================

define('LAN_DEMOBAR_PREF_ACTIVE',           'Ativar DemoBar');
define('LAN_DEMOBAR_PREF_ACTIVE_HELP',      'Mostrar a barra de navegação de demos no frontend');

define('LAN_DEMOBAR_PREF_BRAND_TEXT',       'Texto da Marca');
define('LAN_DEMOBAR_PREF_BRAND_TEXT_HELP',  'Texto exibido no lado esquerdo da barra (ex: nome da sua agência)');

define('LAN_DEMOBAR_PREF_BRAND_URL',        'URL da Marca');
define('LAN_DEMOBAR_PREF_BRAND_URL_HELP',   'URL para a qual o texto da marca aponta (ex: site da sua agência)');

define('LAN_DEMOBAR_PREF_BG_COLOR',         'Cor de Fundo');
define('LAN_DEMOBAR_PREF_BG_COLOR_HELP',    'Cor de fundo da barra (formato hexadecimal)');

define('LAN_DEMOBAR_PREF_TEXT_COLOR',        'Cor do Texto');
define('LAN_DEMOBAR_PREF_TEXT_COLOR_HELP',   'Cor do texto e links da barra (formato hexadecimal)');

define('LAN_DEMOBAR_PREF_CTA_SOURCE_URL',   'URL do Código Fonte');
define('LAN_DEMOBAR_PREF_CTA_SOURCE_HELP',  'URL do repositório de código fonte (ex: GitHub)');

define('LAN_DEMOBAR_PREF_CTA_SOURCE_TEXT',  'Texto do Botão de Código Fonte');

define('LAN_DEMOBAR_PREF_CTA_CONTACT_URL',  'URL de Contato');
define('LAN_DEMOBAR_PREF_CTA_CONTACT_HELP', 'URL para o botão de contato/consultas');

define('LAN_DEMOBAR_PREF_CTA_CONTACT_TEXT', 'Texto do Botão de Contato');

define('LAN_DEMOBAR_PREF_SHOW_PREVNEXT',    'Mostrar Navegação Anterior/Próximo');
define('LAN_DEMOBAR_PREF_SHOW_PREVNEXT_HELP', 'Exibir setas de demo anterior e próximo na barra');

define('LAN_DEMOBAR_PREF_SHOW_TOGGLE',      'Mostrar Botão Ocultar/Mostrar');
define('LAN_DEMOBAR_PREF_SHOW_TOGGLE_HELP', 'Permitir que os usuários ocultem/mostrem a barra de demos');

define('LAN_DEMOBAR_PREF_IP_WHITELIST',     'Lista Branca de IP (Admin)');
define('LAN_DEMOBAR_PREF_IP_WHITELIST_HELP', 'Lista de IPs separados por vírgula com acesso às funções de administração. Deixe vazio para permitir todos.');

define('LAN_DEMOBAR_PREF_POSITION',         'Posição da Barra');
define('LAN_DEMOBAR_PREF_POSITION_HELP',    'Posição da barra de demos na página');
define('LAN_DEMOBAR_PREF_POSITION_TOP',     'Topo');
define('LAN_DEMOBAR_PREF_POSITION_BOTTOM',  'Inferior');


// =============================================================================
// Página de Configuração
// =============================================================================

define('LAN_DEMOBAR_ADMIN_CFG_TITLE',       'Configuração Multissite');
define('LAN_DEMOBAR_ADMIN_CFG_DESC',        'Demos carregados do multisite.json. Este arquivo é somente leitura nesta interface.');
define('LAN_DEMOBAR_ADMIN_CFG_NAME',        'Nome do Demo');
define('LAN_DEMOBAR_ADMIN_CFG_MATCH',       'Padrão de Correspondência');
define('LAN_DEMOBAR_ADMIN_CFG_HAYSTACK',    'Tipo de Busca');
define('LAN_DEMOBAR_ADMIN_CFG_DATABASE',    'Banco de Dados');
define('LAN_DEMOBAR_ADMIN_CFG_STATUS',      'Status');
define('LAN_DEMOBAR_ADMIN_CFG_ACTIVE',      'Ativo');
define('LAN_DEMOBAR_ADMIN_CFG_INACTIVE',    'Inativo');
define('LAN_DEMOBAR_ADMIN_CFG_NO_FILE',     'Arquivo multisite.json não encontrado');
define('LAN_DEMOBAR_ADMIN_CFG_NO_DEMOS',    'Nenhum demo configurado no multisite.json');
define('LAN_DEMOBAR_ADMIN_CFG_INVALID',     'JSON inválido no multisite.json');


// =============================================================================
// Página de Guia
// =============================================================================

define('LAN_DEMOBAR_GUIDE_TITLE',           'Guia do DemoBar');
define('LAN_DEMOBAR_GUIDE_TAB_OVERVIEW',    'Visão Geral');
define('LAN_DEMOBAR_GUIDE_TAB_CONFIG',      'Configuração');
define('LAN_DEMOBAR_GUIDE_TAB_USAGE',       'Uso');
define('LAN_DEMOBAR_GUIDE_TAB_TROUBLE',     'Solução de Problemas');

define('LAN_DEMOBAR_GUIDE_OVERVIEW_TITLE',  'O que é o DemoBar?');
define('LAN_DEMOBAR_GUIDE_OVERVIEW_TEXT',   'O DemoBar adiciona uma barra de navegação persistente ao seu ambiente de demonstração multissite, permitindo que os visitantes naveguem entre demos, vejam o código fonte e entrem em contato. Ele lê a configuração existente do multisite.json.');

define('LAN_DEMOBAR_GUIDE_CONFIG_TITLE',    'Etapas de Configuração');
define('LAN_DEMOBAR_GUIDE_CONFIG_TEXT',     '1. Ative o DemoBar em Preferências.<br>2. Configure o texto e URL da sua marca.<br>3. Configure os botões CTA (código fonte, contato).<br>4. Personalize as cores para combinar com sua marca.<br>5. Opcionalmente, restrinja o acesso administrativo por IP.');

define('LAN_DEMOBAR_GUIDE_USAGE_TITLE',     'Usando o DemoBar');
define('LAN_DEMOBAR_GUIDE_USAGE_TEXT',      'Uma vez ativado, a barra aparece automaticamente em todas as páginas do frontend. Os visitantes podem navegar entre demos e a barra persiste entre carregamentos de página. Use Ctrl+Shift+D para alternar a visibilidade.');

define('LAN_DEMOBAR_GUIDE_TROUBLE_TITLE',   'Solução de Problemas');
define('LAN_DEMOBAR_GUIDE_TROUBLE_TEXT',    '<strong>Barra não aparece?</strong> Verifique se o DemoBar está ativado e se o multisite.json existe.<br><strong>Nenhum demo listado?</strong> Verifique se o multisite.json contém entradas válidas.<br><strong>Cores erradas?</strong> Limpe o cache do site após alterar as preferências de cores.');


// =============================================================================
// Mensagens flash
// =============================================================================

define('LAN_DEMOBAR_ADMIN_SAVED',           'Configurações do DemoBar salvas com sucesso.');
define('LAN_DEMOBAR_ADMIN_SAVE_ERROR',      'Erro ao salvar as configurações do DemoBar.');
