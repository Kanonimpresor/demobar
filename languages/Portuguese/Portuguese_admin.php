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
// Página de Guia — Títulos das abas
// =============================================================================

define('LAN_DEMOBAR_GUIDE_TITLE',           'Guia do DemoBar');
define('LAN_DEMOBAR_GUIDE_TAB_OVERVIEW',    'Visão Geral');
define('LAN_DEMOBAR_GUIDE_TAB_CONFIG',      'Configuração');
define('LAN_DEMOBAR_GUIDE_TAB_USAGE',       'Uso');
define('LAN_DEMOBAR_GUIDE_TAB_MULTISITE',   'Multissite');
define('LAN_DEMOBAR_GUIDE_TAB_TROUBLE',     'Solução de Problemas');
define('LAN_DEMOBAR_GUIDE_TAB_DEMOS',        'Gestão de Demos');


// =============================================================================
// Guia — Aba 1: Visão Geral
// =============================================================================

define('LAN_DEMOBAR_GUIDE_OVERVIEW_TITLE',  'Bem-vindo ao DemoBar');
define('LAN_DEMOBAR_GUIDE_OVERVIEW_INTRO',  'O DemoBar é um plugin para e107 que adiciona uma barra de navegação fixa aos seus demos multissite, permitindo que os visitantes naveguem entre temas/sites demo de forma fluida. Suporta branding, botões de chamada para ação, ferramentas exclusivas para administradores e personalização completa.');

// Passos do fluxo
define('LAN_DEMOBAR_GUIDE_FLOW_STEP1',     'Instalar DemoBar');
define('LAN_DEMOBAR_GUIDE_FLOW_STEP2',     'Configurar Preferências');
define('LAN_DEMOBAR_GUIDE_FLOW_STEP3',     'Configurar Multissite');
define('LAN_DEMOBAR_GUIDE_FLOW_STEP4',     'Visitantes Navegam os Demos');

// Funcionalidades
define('LAN_DEMOBAR_GUIDE_FEATURES_TITLE',          'Funcionalidades Principais');
define('LAN_DEMOBAR_GUIDE_FEAT_MULTISITE',           'Integração Multissite');
define('LAN_DEMOBAR_GUIDE_FEAT_MULTISITE_DESC',      'Detecta e carrega automaticamente os demos a partir do multisite.json. Lê as preferências de marca/CTA do banco de dados principal.');
define('LAN_DEMOBAR_GUIDE_FEAT_NAVIGATION',          'Navegação de Demos');
define('LAN_DEMOBAR_GUIDE_FEAT_NAVIGATION_DESC',     'Setas Anterior/Próximo para navegar entre demos com estado desabilitado no primeiro/último. O site principal mostra um botão "Ver Demos" em vez disso.');
define('LAN_DEMOBAR_GUIDE_FEAT_CUSTOMIZABLE',        'Totalmente Personalizável');
define('LAN_DEMOBAR_GUIDE_FEAT_CUSTOMIZABLE_DESC',   'Altere a cor de fundo, cor do texto, nome da marca, posição (topo/inferior) e alterne pelo painel de administração.');
define('LAN_DEMOBAR_GUIDE_FEAT_CTA',                 'Botões de Chamada para Ação');
define('LAN_DEMOBAR_GUIDE_FEAT_CTA_DESC',            'Exibe botões de Código Fonte e Contato, com links para seu repositório GitHub e página de contato.');
define('LAN_DEMOBAR_GUIDE_FEAT_TOGGLE',              'Botão Mostrar/Ocultar');
define('LAN_DEMOBAR_GUIDE_FEAT_TOGGLE_DESC',         'Os visitantes podem ocultar a barra com um clique ou o atalho de teclado Ctrl+Shift+D. O estado é preservado no localStorage.');
define('LAN_DEMOBAR_GUIDE_FEAT_SECURITY',            'Acesso Somente para Administradores');
define('LAN_DEMOBAR_GUIDE_FEAT_SECURITY_DESC',       'O botão Admin só é visível para administradores autenticados (check_class). Lista branca de IPs disponível para restrições adicionais.');
define('LAN_DEMOBAR_GUIDE_FEAT_I18N',                'Internacionalização');
define('LAN_DEMOBAR_GUIDE_FEAT_I18N_DESC',           'Todos os rótulos de interface utilizam constantes de idioma. Atualmente inclui traduções em inglês, espanhol e português.');
define('LAN_DEMOBAR_GUIDE_FEAT_RESPONSIVE',          'Design Responsivo');
define('LAN_DEMOBAR_GUIDE_FEAT_RESPONSIVE_DESC',     'Adapta o layout e tamanhos de fonte nos pontos de quebra de 768px e 480px. O texto de CTA é ocultado em telas pequenas, os ícones permanecem sempre visíveis.');

// Pré-visualização do layout
define('LAN_DEMOBAR_GUIDE_LAYOUT_TITLE',             'Layout da Barra');
define('LAN_DEMOBAR_GUIDE_LAYOUT_BRAND_DESC',        'Seu nome de marca com link');
define('LAN_DEMOBAR_GUIDE_LAYOUT_NAV_DESC',          'Navegação de demo Anterior/Próximo');
define('LAN_DEMOBAR_GUIDE_LAYOUT_ACTIONS_DESC',      'Botões de Código Fonte + Contato + Admin');
define('LAN_DEMOBAR_GUIDE_LAYOUT_TOGGLE_DESC',       'Fechar / reabrir a barra');

// Início rápido
define('LAN_DEMOBAR_GUIDE_QUICKSTART',               'Início Rápido');
define('LAN_DEMOBAR_GUIDE_QUICKSTART_DESC',          'Instale o plugin, configure o nome da sua marca, URLs e cores na aba de Configurações, depois configure o plugin multissite com pelo menos um site demo. O DemoBar aparecerá automaticamente em todas as páginas de demos.');


// =============================================================================
// Guia — Aba 2: Configuração
// =============================================================================

define('LAN_DEMOBAR_GUIDE_CONFIG_TITLE',             'Referência de Configuração');
define('LAN_DEMOBAR_GUIDE_CONFIG_INTRO',             'Todas as opções são gerenciadas em DemoBar Admin → Configurações. As preferências são armazenadas na tabela de prefs do core do e107 com a chave <code>plugin_demobar</code>.');
define('LAN_DEMOBAR_GUIDE_CONFIG_PREFS_TITLE',       'Opções Disponíveis');

// Cabeçalhos da tabela
define('LAN_DEMOBAR_GUIDE_CONFIG_TH_OPTION',         'Opção');
define('LAN_DEMOBAR_GUIDE_CONFIG_TH_TYPE',           'Tipo');
define('LAN_DEMOBAR_GUIDE_CONFIG_TH_DESC',           'Descrição');

// Linhas da tabela
define('LAN_DEMOBAR_GUIDE_CONFIG_R_ACTIVE',          'Ativa ou desativa o DemoBar em todas as páginas do frontend. Quando desativado, a barra fica completamente oculta.');
define('LAN_DEMOBAR_GUIDE_CONFIG_R_BRAND_TEXT',      'O texto exibido na seção esquerda da barra (ex: nome da sua empresa). Suporta apenas texto simples.');
define('LAN_DEMOBAR_GUIDE_CONFIG_R_BRAND_URL',       'A URL vinculada ao nome da marca. Geralmente aponta para o seu site principal ou portfólio.');
define('LAN_DEMOBAR_GUIDE_CONFIG_R_BG_COLOR',        'Cor de fundo da barra. Aceita qualquer valor de cor CSS (#hex, rgb ou cores nomeadas). Padrão: <code>#1a1a2e</code>.');
define('LAN_DEMOBAR_GUIDE_CONFIG_R_TEXT_COLOR',      'Cor do texto e ícones na barra. Padrão: <code>#e0e0e0</code>.');
define('LAN_DEMOBAR_GUIDE_CONFIG_R_SOURCE_URL',      'URL para o botão "Código Fonte". Geralmente sua página do GitHub ou repositório. Deixe em branco para ocultar este botão.');
define('LAN_DEMOBAR_GUIDE_CONFIG_R_CONTACT_URL',     'URL para o botão "Contato". Aponta para seu formulário de contato ou página de e-mail. Deixe em branco para ocultar este botão.');
define('LAN_DEMOBAR_GUIDE_CONFIG_R_POSITION',        'Posição da barra na tela: <strong>Topo</strong> (fixa no topo) ou <strong>Inferior</strong> (fixa na parte inferior). Padrão: topo.');
define('LAN_DEMOBAR_GUIDE_CONFIG_R_IP_WHITELIST',    'Um IP por linha. Quando configurado, o botão Admin só aparece para administradores conectados a partir desses IPs. Deixe vazio para permitir todos os IPs de admin.');

// Nota cross-DB
define('LAN_DEMOBAR_GUIDE_CONFIG_NOTE_TITLE',        'Preferências Cross-Database:');
define('LAN_DEMOBAR_GUIDE_CONFIG_NOTE_TEXT',          'Quando executado em modo multissite, o DemoBar lê as URLs de marca e CTA do <strong>banco de dados do site principal</strong>, não do banco de dados individual de cada demo. Isso garante branding e URLs consistentes em todos os demos sem necessidade de configurar cada um separadamente.');


// =============================================================================
// Guia — Aba 3: Uso
// =============================================================================

define('LAN_DEMOBAR_GUIDE_USAGE_TITLE',              'Como Usar o DemoBar');
define('LAN_DEMOBAR_GUIDE_USAGE_INTRO',              'O DemoBar se comporta de maneira diferente dependendo de se o visitante está no site principal ou em um site demo.');

// Site principal
define('LAN_DEMOBAR_GUIDE_USAGE_MAIN_TITLE',         'No Site Principal');
define('LAN_DEMOBAR_GUIDE_USAGE_MAIN_DESC',          'Quando um visitante está no site principal (não em um demo), a barra mostra navegação limitada:');
define('LAN_DEMOBAR_GUIDE_USAGE_MAIN_ITEM1',         'O nome/link da marca está sempre visível.');
define('LAN_DEMOBAR_GUIDE_USAGE_MAIN_ITEM2',         'Em vez de setas de navegação, um botão <strong>"▶ Ver Demos"</strong> leva ao primeiro demo disponível.');
define('LAN_DEMOBAR_GUIDE_USAGE_MAIN_ITEM3',         'Os botões CTA (Código Fonte, Contato) são exibidos se configurados.');

// Site demo
define('LAN_DEMOBAR_GUIDE_USAGE_DEMO_TITLE',         'Em Sites Demo');
define('LAN_DEMOBAR_GUIDE_USAGE_DEMO_DESC',          'Ao visualizar um site demo, a navegação completa está ativa:');
define('LAN_DEMOBAR_GUIDE_USAGE_DEMO_ITEM1',         'As <strong>setas Anterior/Próximo</strong> navegam entre demos. As setas ficam desabilitadas (em cinza) quando está no primeiro ou último demo.');
define('LAN_DEMOBAR_GUIDE_USAGE_DEMO_ITEM2',         'O <strong>nome do demo atual</strong> é exibido entre as setas.');
define('LAN_DEMOBAR_GUIDE_USAGE_DEMO_ITEM3',         'Todos os botões CTA são carregados das preferências do site principal para manter um branding consistente.');
define('LAN_DEMOBAR_GUIDE_USAGE_DEMO_ITEM4',         'O <strong>botão Admin</strong> (se visível) leva ao painel de administração do site principal.');

// Toggle e teclado
define('LAN_DEMOBAR_GUIDE_USAGE_TOGGLE_TITLE',       'Alternar e Atalho de Teclado');
define('LAN_DEMOBAR_GUIDE_USAGE_TOGGLE_DESC',        'Os visitantes podem ocultar ou mostrar o DemoBar a qualquer momento. O estado da barra é salvo no localStorage do navegador para que persista entre carregamentos de página.');
define('LAN_DEMOBAR_GUIDE_USAGE_SHORTCUT_LABEL',     'Alternar visibilidade do DemoBar');

// Botão Admin
define('LAN_DEMOBAR_GUIDE_USAGE_ADMIN_TITLE',        'Botão de Administração');
define('LAN_DEMOBAR_GUIDE_USAGE_ADMIN_DESC',         'O botão Admin só é visível para usuários com privilégios de administrador (<code>check_class(e_UC_ADMIN)</code>). Fornece um link rápido para o painel de administração do site principal.');
define('LAN_DEMOBAR_GUIDE_USAGE_ADMIN_WARNING',      'Se você configurou uma lista branca de IPs, o botão Admin só aparecerá para administradores conectados a partir desses IPs específicos.');


// =============================================================================
// Guia — Aba 4: Gestão de Demos
// =============================================================================

define('LAN_DEMOBAR_GUIDE_DEMOS_TITLE',              'Gestão de Demos');
define('LAN_DEMOBAR_GUIDE_DEMOS_INTRO',              'O DemoBar inclui um sistema de catálogo de demos completo. Você pode criar, editar e gerenciar entradas de demos diretamente pelo painel de administração. Cada demo é armazenado na tabela <code>demobar_demos</code> e exibido nas páginas públicas de catálogo e detalhes.');

// CRUD
define('LAN_DEMOBAR_GUIDE_DEMOS_CRUD_TITLE',         'Criar e Editar Demos');
define('LAN_DEMOBAR_GUIDE_DEMOS_CRUD_DESC',          'Navegue até <strong>Admin → DemoBar → Criar Demo</strong> para adicionar um novo demo. Use a lista de demos para editar ou excluir entradas existentes. Os seguintes campos estão disponíveis:');
define('LAN_DEMOBAR_GUIDE_DEMOS_TH_FIELD',           'Campo');
define('LAN_DEMOBAR_GUIDE_DEMOS_TH_TYPE',            'Tipo');
define('LAN_DEMOBAR_GUIDE_DEMOS_TH_DESC',            'Descrição');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_SLUG',             'Identificador único compatível com URLs que corresponde ao padrão match do multissite (ex: <code>bootstrap5</code>, <code>kreative</code>). Usado em URLs como <code>/demos/bootstrap5</code>.');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_NAME',             'Nome de exibição do demo mostrado nos cards do catálogo e na página de detalhes.');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_DESC',             'Descrição completa do demo. Truncada automaticamente nos cards do catálogo e na barra lateral (veja a seção de Truncamento abaixo).');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_CATEGORY',         'Selecione entre 25 categorias predefinidas (Negócios, Portfólio, Comércio Eletrônico, etc.). As categorias são totalmente internacionalizadas e suportam operações em lote e filtragem na lista de admin.');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_THUMBNAIL',        'Imagem de pré-visualização do demo. Usa o gerenciador de mídia do e107 para upload e seleção. Exibida como imagem do card no catálogo.');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_VERSION',          'String de versão do demo (ex: <code>1.0.0</code>). Exibida no painel de informações da página de detalhes.');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_RELEASE',          'Data de lançamento do demo. Exibida nos metadados da página de detalhes.');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_BUILT',            'Tecnologias utilizadas (ex: <code>Bootstrap 5, jQuery</code>). Exibida na página de detalhes.');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_LICENSE',          'Tipo de licença (ex: GPL, MIT) e uma URL opcional vinculando ao texto completo da licença.');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_DOWNLOAD',         'URL onde os arquivos do demo podem ser baixados. Se fornecida, um botão de Download aparece na página de detalhes.');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_ORDER',            'Ordem de classificação para exibição no catálogo. Números menores aparecem primeiro.');
define('LAN_DEMOBAR_GUIDE_DEMOS_F_ACTIVE',           'Ativar ou desativar o demo. Demos inativos ficam ocultos do catálogo público mas continuam visíveis no admin.');

// Categorias
define('LAN_DEMOBAR_GUIDE_DEMOS_CAT_TITLE',          'Categorias Predefinidas');
define('LAN_DEMOBAR_GUIDE_DEMOS_CAT_DESC',           'O DemoBar inclui 25 categorias predefinidas. Cada rótulo de categoria é internacionalizado (i18n) — o valor armazenado no banco de dados é sempre a chave em inglês, e o rótulo de exibição é traduzido via constantes de idioma. As categorias suportam edição em lote e filtro de coluna na lista de admin.');

// Página de catálogo
define('LAN_DEMOBAR_GUIDE_DEMOS_CATALOG_TITLE',      'Página Pública do Catálogo');
define('LAN_DEMOBAR_GUIDE_DEMOS_CATALOG_DESC',       'A página de catálogo exibe todos os demos ativos como cards responsivos em <code>/demos/</code> (ou a URL SEF configurada):');
define('LAN_DEMOBAR_GUIDE_DEMOS_CATALOG_ITEM1',      'Cada card mostra a <strong>miniatura</strong>, <strong>nome</strong>, <strong>badge de categoria</strong> e uma <strong>descrição truncada</strong> (120 caracteres).');
define('LAN_DEMOBAR_GUIDE_DEMOS_CATALOG_ITEM2',      'Os cards linkam para a página de detalhes individual do demo em <code>/demos/{slug}</code>.');
define('LAN_DEMOBAR_GUIDE_DEMOS_CATALOG_ITEM3',      'O layout usa uma grade responsiva que se adapta de 3 colunas no desktop para 1 coluna no celular.');

// Página de detalhes
define('LAN_DEMOBAR_GUIDE_DEMOS_DETAIL_TITLE',       'Página de Detalhes do Demo');
define('LAN_DEMOBAR_GUIDE_DEMOS_DETAIL_DESC',        'Cada demo tem uma página de detalhes dedicada (<code>/demos/{slug}</code>) que mostra:');
define('LAN_DEMOBAR_GUIDE_DEMOS_DETAIL_ITEM1',       'Descrição completa (sem truncamento), miniatura, versão, data de lançamento, tecnologias e detalhes da licença.');
define('LAN_DEMOBAR_GUIDE_DEMOS_DETAIL_ITEM2',       'Botões de ação <strong>Pré-visualização ao Vivo</strong> e <strong>Download</strong> (quando as URLs estão configuradas).');
define('LAN_DEMOBAR_GUIDE_DEMOS_DETAIL_ITEM3',       'Navegação breadcrumb: Início → Demos → Nome do Demo.');

// Menu lateral
define('LAN_DEMOBAR_GUIDE_DEMOS_SIDEBAR_TITLE',      'Menu Lateral');
define('LAN_DEMOBAR_GUIDE_DEMOS_SIDEBAR_DESC',       'O DemoBar fornece um menu lateral (<code>demobar_detail_menu</code>) que exibe uma lista de todos os demos ativos. Ele destaca o demo atualmente visualizado e trunca as descrições para 150 caracteres. Para ativá-lo:');
define('LAN_DEMOBAR_GUIDE_DEMOS_SIDEBAR_STEP1',      'Vá para <strong>Admin → Menus</strong> (Gerenciador de Menus).');
define('LAN_DEMOBAR_GUIDE_DEMOS_SIDEBAR_STEP2',      'Encontre <strong>DemoBar — Menu de Detalhes do Demo</strong> na lista de menus disponíveis.');
define('LAN_DEMOBAR_GUIDE_DEMOS_SIDEBAR_STEP3',      'Arraste-o para uma área de barra lateral (ex: <code>Área de Menu 1</code>) ou a área que seu tema usa para navegação lateral.');

// Truncamento
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_TITLE',        'Truncamento de Descrições');
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_DESC',         'As descrições são automaticamente truncadas em diferentes contextos para manter um layout limpo:');
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_TH_CONTEXT',   'Contexto');
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_TH_LIMIT',     'Limite');
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_TH_HOW',       'Implementação');
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_R_CATALOG',    'Cards do Catálogo');
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_R_CATALOG_HOW','Via parâmetro de shortcode: <code>{DEMOBAR_DEMO_DESCRIPTION=120}</code> no template do catálogo.');
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_R_SIDEBAR',    'Menu Lateral');
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_R_SIDEBAR_HOW','Via <code>$tp->truncate($text, 150, "…")</code> no arquivo do menu lateral.');
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_R_DETAIL',     'Página de Detalhes');
define('LAN_DEMOBAR_GUIDE_DEMOS_TRUNC_R_DETAIL_HOW', 'A descrição completa é exibida sem nenhum truncamento.');

// Nota
define('LAN_DEMOBAR_GUIDE_DEMOS_NOTE_TITLE',         'Tabela do Banco de Dados:');
define('LAN_DEMOBAR_GUIDE_DEMOS_NOTE_TEXT',           'Os registros de demos são armazenados na tabela <code>{PREFIX}demobar_demos</code> (14 colunas). A interface CRUD de admin usa o padrão padrão do e107 <code>e_admin_ui</code> com edição inline, operações em lote e filtros de coluna para categoria e status.');


// =============================================================================
// Guia — Aba 5: Multissite
// =============================================================================

define('LAN_DEMOBAR_GUIDE_MULTI_TITLE',              'Integração Multissite');
define('LAN_DEMOBAR_GUIDE_MULTI_INTRO',              'O DemoBar foi projetado para funcionar perfeitamente com o plugin <strong>CaMer0n/multisite</strong> para e107. Ele lê a lista de sites a partir do multisite.json e adapta seu comportamento com base no site ativo.');

// Requisitos
define('LAN_DEMOBAR_GUIDE_MULTI_REQS_TITLE',         'Requisitos');
define('LAN_DEMOBAR_GUIDE_MULTI_REQ1',               'O plugin <strong>CaMer0n/multisite</strong> deve estar instalado e ativado.');
define('LAN_DEMOBAR_GUIDE_MULTI_REQ2',               'Pelo menos um site demo deve estar configurado no painel de administração multissite.');
define('LAN_DEMOBAR_GUIDE_MULTI_REQ3',               'Cada site demo deve ter seu próprio banco de dados (o plugin os cria automaticamente durante o provisionamento).');
define('LAN_DEMOBAR_GUIDE_MULTI_REQ4',               'As regras de reescrita do <code>.htaccess</code> devem estar configuradas (configuradas automaticamente pelo plugin multissite).');

// Como funciona
define('LAN_DEMOBAR_GUIDE_MULTI_HOW_TITLE',          'Como Funciona');
define('LAN_DEMOBAR_GUIDE_MULTI_HOW_DESC',           'Os seguintes componentes trabalham juntos para habilitar a navegação de demos multissite:');
define('LAN_DEMOBAR_GUIDE_MULTI_TH_COMPONENT',       'Componente');
define('LAN_DEMOBAR_GUIDE_MULTI_TH_ROLE',            'Função');
define('LAN_DEMOBAR_GUIDE_MULTI_ROW_JSON',           'Arquivo de configuração JSON que lista todos os sites demo com seus nomes, bancos de dados e caminhos de URL.');
define('LAN_DEMOBAR_GUIDE_MULTI_ROW_MATCH',          'Constante definida pelo plugin multissite contendo o slug do site atual (ex: "booking", "kreative").');
define('LAN_DEMOBAR_GUIDE_MULTI_ROW_INUSE',          'Constante booleana que indica se o multissite está redirecionando ativamente para um banco de dados demo. O DemoBar a utiliza para decidir se deve mostrar as setas de navegação.');
define('LAN_DEMOBAR_GUIDE_MULTI_ROW_HTACCESS',       'Reescreve os caminhos <code>/slug-demo/</code> para o handler multissite, habilitando URLs limpas para cada demo.');

// Auto-provisionamento
define('LAN_DEMOBAR_GUIDE_MULTI_PROV_TITLE',         'Auto-Provisionamento');
define('LAN_DEMOBAR_GUIDE_MULTI_PROV_DESC',          'Quando você cria um novo site demo através do painel de administração multissite, o DemoBar se registra automaticamente no novo banco de dados do demo. Isso garante que a barra apareça no novo demo sem configuração manual.');
define('LAN_DEMOBAR_GUIDE_MULTI_PROV_NOTE_TITLE',    'Herança de Preferências:');
define('LAN_DEMOBAR_GUIDE_MULTI_PROV_NOTE_TEXT',     'O texto da marca, URLs e configurações de CTA são sempre lidos do <strong>banco de dados do site principal</strong> em tempo de execução. Você só precisa configurá-los uma vez — serão herdados por todos os sites demo automaticamente.');


// =============================================================================
// Guia — Aba 5: Solução de Problemas
// =============================================================================

define('LAN_DEMOBAR_GUIDE_TROUBLE_TITLE',            'Solução de Problemas');
define('LAN_DEMOBAR_GUIDE_TROUBLE_INTRO',            'Abaixo estão problemas comuns e suas soluções.');

define('LAN_DEMOBAR_GUIDE_TROUBLE_Q1',               'O DemoBar não aparece em nenhuma página');
define('LAN_DEMOBAR_GUIDE_TROUBLE_A1',               'Certifique-se de que o plugin está instalado e ativado. Verifique se "Ativar DemoBar" está habilitado nas Configurações. Confirme que o arquivo <code>e_header.php</code> do plugin existe. Limpe o cache do e107 em Admin → Ferramentas → Cache.');

define('LAN_DEMOBAR_GUIDE_TROUBLE_Q2',               'As setas de navegação não aparecem nas páginas demo');
define('LAN_DEMOBAR_GUIDE_TROUBLE_A2',               'Verifique se o plugin multissite está instalado e se o <code>multisite.json</code> contém entradas de demo válidas. Confirme que a constante <code>e_MULTISITE_IN_USE</code> está sendo definida. Certifique-se de que a URL atual corresponde a um slug de demo configurado.');

define('LAN_DEMOBAR_GUIDE_TROUBLE_Q3',               'O nome da marca e botões CTA estão vazios nos demos');
define('LAN_DEMOBAR_GUIDE_TROUBLE_A3',               'O DemoBar lê esses valores do <strong>banco de dados do site principal</strong>. Certifique-se de ter configurado Texto da Marca, URL da Marca, URL do Código Fonte e URL de Contato nas configurações de admin do DemoBar do site principal (não do demo).');

define('LAN_DEMOBAR_GUIDE_TROUBLE_Q4',               'A barra aparece dentro da página em vez de fixa no topo/inferior');
define('LAN_DEMOBAR_GUIDE_TROUBLE_A4',               'Isso geralmente é um conflito de CSS. Verifique se o <code>demobar.css</code> está carregando corretamente (veja nas ferramentas de desenvolvedor do navegador → aba Rede). Certifique-se de que seu tema não sobrescreve <code>position: fixed</code> no elemento da barra. Limpe o cache do navegador e do e107.');

define('LAN_DEMOBAR_GUIDE_TROUBLE_Q5',               'O botão Admin não está visível');
define('LAN_DEMOBAR_GUIDE_TROUBLE_A5',               'O botão Admin só é visível para administradores logados. Verifique se você está logado com uma conta de administrador. Se você tem uma lista branca de IPs configurada, certifique-se de que seu IP atual está na lista.');

define('LAN_DEMOBAR_GUIDE_TROUBLE_Q6',               'Ocultei a barra e não consigo recuperá-la');
define('LAN_DEMOBAR_GUIDE_TROUBLE_A6',               'Pressione <strong>Ctrl+Shift+D</strong> para alternar a barra. Alternativamente, abra o console de desenvolvedor do seu navegador e execute: <code>localStorage.removeItem("demobar-hidden")</code> e recarregue a página.');

// Suporte
define('LAN_DEMOBAR_GUIDE_TROUBLE_SUPPORT_TITLE',    'Precisa de Mais Ajuda?');
define('LAN_DEMOBAR_GUIDE_TROUBLE_SUPPORT_TEXT',     'Visite os fóruns da comunidade e107 ou abra uma issue no repositório GitHub do plugin. Por favor inclua sua versão do e107, versão do PHP e quaisquer mensagens de erro relevantes do seu log de administração.');


// =============================================================================
// Mensagens flash
// =============================================================================

define('LAN_DEMOBAR_ADMIN_SAVED',           'Configurações do DemoBar salvas com sucesso.');
define('LAN_DEMOBAR_ADMIN_SAVE_ERROR',      'Erro ao salvar as configurações do DemoBar.');


// =============================================================================
// Demos CRUD — Menu Admin e Rótulos dos campos
// =============================================================================

define('LAN_DEMOBAR_ADMIN_DEMOS',                'Demos');
define('LAN_DEMOBAR_ADMIN_DEMOS_CREATE',         'Criar Demo');

define('LAN_DEMOBAR_FIELD_SLUG',                 'Slug');
define('LAN_DEMOBAR_FIELD_SLUG_HELP',            'Identificador único que corresponde ao padrão match no multisite.json (ex: bootstrap5, kreative)');
define('LAN_DEMOBAR_FIELD_THUMBNAIL',            'Miniatura');
define('LAN_DEMOBAR_FIELD_VERSION',              'Versão');
define('LAN_DEMOBAR_FIELD_RELEASE_DATE',         'Data de Lançamento');
define('LAN_DEMOBAR_FIELD_BUILT_WITH',           'Construído Com');
define('LAN_DEMOBAR_FIELD_INCLUDED_FILES',       'Arquivos Incluídos');
define('LAN_DEMOBAR_FIELD_LICENSE_TYPE',         'Tipo de Licença');
define('LAN_DEMOBAR_FIELD_LICENSE_URL',          'URL da Licença');
define('LAN_DEMOBAR_FIELD_DOWNLOAD_URL',         'URL de Download');


// =============================================================================
// Categorias de Demos — Opções do dropdown (chave no BD = valor em inglês)
// =============================================================================

define('LAN_DEMOBAR_CAT_BUSINESS',           'Negócios');
define('LAN_DEMOBAR_CAT_PORTFOLIO',          'Portfólio');
define('LAN_DEMOBAR_CAT_ADMIN',             'Administração');
define('LAN_DEMOBAR_CAT_EDUCATION',          'Educação');
define('LAN_DEMOBAR_CAT_ECOMMERCE',          'Comércio Eletrônico');
define('LAN_DEMOBAR_CAT_RESTAURANT',         'Restaurante');
define('LAN_DEMOBAR_CAT_MEDICAL',            'Médico');
define('LAN_DEMOBAR_CAT_COMING_SOON',        'Em Breve');
define('LAN_DEMOBAR_CAT_ONE_PAGE',           'Uma Página');
define('LAN_DEMOBAR_CAT_LANDING_PAGE',       'Página de Destino');
define('LAN_DEMOBAR_CAT_CORPORATE',          'Corporativo');
define('LAN_DEMOBAR_CAT_AGENCY',             'Agência');
define('LAN_DEMOBAR_CAT_TRAVEL',             'Viagens');
define('LAN_DEMOBAR_CAT_HOTEL',              'Hotel');
define('LAN_DEMOBAR_CAT_EVENTS',             'Eventos');
define('LAN_DEMOBAR_CAT_PHOTOGRAPHY',        'Fotografia');
define('LAN_DEMOBAR_CAT_PERSONAL',           'Pessoal');
define('LAN_DEMOBAR_CAT_RESUME',             'Currículo / CV');
define('LAN_DEMOBAR_CAT_REAL_ESTATE',        'Imóveis');
define('LAN_DEMOBAR_CAT_HEALTH',             'Saúde');
define('LAN_DEMOBAR_CAT_WEBSITE_TEMPLATES',  'Modelos de Sites');
define('LAN_DEMOBAR_CAT_CONSTRUCTION',       'Construção');
define('LAN_DEMOBAR_CAT_TRANSPORTATION',     'Transporte');
define('LAN_DEMOBAR_CAT_BLOG_MAGAZINE',      'Blog e Revista');
define('LAN_DEMOBAR_CAT_SAAS',               'SaaS');
