#### Escolha o seu idioma abaixo / Choose your language below / Elija su idioma abajo

[![Language-English](https://img.shields.io/badge/Language-English-blue)](README.md)
[![Language-Português](https://img.shields.io/badge/Language-Português-green)](README.pt-PT.md)
[![Language-Español](https://img.shields.io/badge/Language-Español-red)](README.es-ES.md)

---

# DemoBar — Plugin para e107 CMS

> Barra de navegação persistente para ambientes de demonstração multissite, inspirada no [BootstrapMade](https://bootstrapmade.com/demo/Arsha/). Projetada para exibir páginas de destino, temas e plugins a partir de uma única instalação e107 alimentada pelo plugin [multisite](https://github.com/CaMer0n/multisite).

[![e107 CMS](https://img.shields.io/badge/e107-v2.3.3+-blue)](https://e107.org)
[![PHP](https://img.shields.io/badge/PHP-8.0+-purple)](https://php.net)
[![License](https://img.shields.io/badge/License-GPL--3.0-green)](LICENSE)

## Visão Geral

O DemoBar injeta uma barra fixa superior em todos os sites dentro de uma instalação multissite do e107. Ele lê o catálogo de sites a partir do `multisite.json` (gerado pelo plugin multisite do CaMer0n) e exibe navegação entre demos ativos, indicadores de status e botões de chamada para ação — tudo sem modificar arquivos do core do e107.

### Arquitetura

```
agencia-site.com/               ← Site principal (portfólio da agência)
agencia-site.com/demos/          ← Página de catálogo visual (grade auto-gerada)
agencia-site.com/demo-arsha/     ← Demo 1 (com barra flutuante)
agencia-site.com/demo-saas/      ← Demo 2 (com barra flutuante)
agencia-site.com/demo-plugin/    ← Demo 3 (com barra flutuante)
```

### Como Funciona

1. O hook **e_header.php** injeta o CSS/JS da barra em cada página do frontend
2. Lê o `multisite.json` a partir de `e_SYSTEM_BASE` para construir a navegação de demos
3. Identifica o demo atual através da constante `e_MULTISITE_MATCH`
4. Renderiza uma barra fixa responsiva com Bootstrap 5
5. O administrador pode configurar o comportamento, cores e links CTA pelo painel de administração
6. Tarefa cron opcional para redefinir bancos de dados de demonstração

## Requisitos

| Requisito | Versão |
|---|---|
| e107 CMS | ≥ 2.3.3 |
| PHP | ≥ 8.0 |
| [plugin multisite](https://github.com/CaMer0n/multisite) | Instalado e configurado |
| MySQL / MariaDB | ≥ 5.7 / ≥ 10.3 |

## Instalação

1. Copie a pasta `demobar/` para `e107_plugins/`
2. Vá em **Admin → Gerenciador de Plugins** e instale "DemoBar"
3. Certifique-se de que o [plugin multisite](https://github.com/CaMer0n/multisite) está instalado e que `multisite.json` existe em `e107_system/`
4. Configure a barra em **Admin → DemoBar → Configurações**

## Funcionalidades

### v1.0.1 — Correções e Guia do Utilizador (Atual)

- [x] **Reescrita CSS v2.0** — demobar.css completamente reescrito com layout flex e breakpoints responsivos
- [x] **Preferências cross-database** — `loadPrefs()` lê configurações de marca/CTA do BD principal, garantindo consistência em todos os demos
- [x] **Navegação inteligente** — Setas apenas em páginas demo; site principal mostra botão "▶ Ver Demos"
- [x] **Botão apenas admin** — Botão Admin restrito via `check_class(e_UC_ADMIN)`
- [x] **Guia do Utilizador** — 5 separadores admin (Visão Geral, Configuração, Utilização, Multissite, Resolução de Problemas) usando padrão template + shortcodes + CSS separado
- [x] **Atalho de teclado** — `Ctrl+Shift+D` para alternar visibilidade (estado guardado no localStorage)

### v1.0.0 — MVP

- [x] **Barra de navegação persistente** — Barra fixa superior injetada via hook `e_header.php`
- [x] **Auto-descoberta de demos** — Lê sites ativos do `multisite.json`
- [x] **Indicador de demo atual** — Destaca qual demo o visitante está visualizando
- [x] **Botões CTA** — Links configuráveis "Ver Código Fonte" (GitHub) e "Contato"
- [x] **Navegação Anterior/Próximo** — Navegar entre demos sequencialmente
- [x] **Toggle para ocultar barra** — Visitantes podem colapsar a barra (armazenado no localStorage)
- [x] **Painel de configuração admin** — Configurar cores, texto da marca, URLs CTA, visibilidade
- [x] **3 idiomas** — Inglês, Espanhol, Português
- [x] **Guard de segurança** — Verificação `e107_INIT` em todos os arquivos PHP
- [x] **Restrição IP admin** — Áreas admin dos demos restritas por lista branca de IP

### v1.1.0 — Redefinição de Demos (Planejado)

- [ ] Sistema de snapshots SQL — Salvar estado inicial do BD por site demo
- [ ] Botão de redefinição manual — Restauração com um clique pelo painel admin
- [ ] Auto-redefinição via cron — Programar redefinições periódicas (ex: a cada 6 horas)
- [ ] Trigger de evento reset — Evento `demobar_demo_reset` para outros plugins se conectarem

### v1.2.0 — Página de Catálogo (Planejado)

- [ ] Página pública `/demos/` — Grade visual de todos os demos ativos
- [ ] Captura automática de tela — Geração de miniaturas por demo
- [ ] Filtro por tipo — Página de destino, Tema, Plugin, SaaS
- [ ] Tags de categoria do esquema estendido do `multisite.json`

### v1.3.0 — Analytics e Segurança (Planejado)

- [ ] Contador de visitas por demo — Tabela `demobar_stats` no BD principal
- [ ] Modo somente leitura — Prevenir modificações públicas nos sites demo
- [ ] Limitação de taxa — Throttling de tentativas de login em áreas admin dos demos
- [ ] Integração Cloudflare Turnstile — Proteção anti-bot em formulários dos demos

## Opções de Configuração

| Preferência | Tipo | Padrão | Descrição |
|---|---|---|---|
| `demobar_active` | booleano | `1` | Ativar/desativar a barra globalmente |
| `demobar_brand_text` | texto | `"Demos"` | Texto da marca no lado esquerdo |
| `demobar_brand_url` | url | `""` | URL ao clicar na marca |
| `demobar_bg_color` | texto | `"#343a40"` | Cor de fundo da barra |
| `demobar_text_color` | texto | `"#ffffff"` | Cor do texto da barra |
| `demobar_cta_source_url` | url | `""` | URL do botão "Ver Código Fonte" (GitHub) |
| `demobar_cta_source_text` | texto | `"Source Code"` | Rótulo do botão "Ver Código Fonte" |
| `demobar_cta_contact_url` | url | `""` | URL do botão "Contato" |
| `demobar_cta_contact_text` | texto | `"Contact Us"` | Rótulo do botão de contato |
| `demobar_show_prevnext` | booleano | `1` | Mostrar setas Anterior/Próximo |
| `demobar_show_hide_toggle` | booleano | `1` | Permitir que visitantes ocultem a barra |
| `demobar_admin_ip_whitelist` | textarea | `""` | IPs com acesso às áreas admin dos demos |
| `demobar_position` | dropdown | `"top"` | Posição: topo ou inferior |

## Desenvolvimento

### Compilar e Testar

```bash
cd e107_tests
composer update
./vendor/bin/codecept run unit tests/unit/plugins/demobar/
```

### Padrões de Código

- Sintaxe PHP 8.0+, indentação de 4 espaços
- Todos os serviços via API estática `e107::` — nunca instanciar handlers diretamente
- Todas as strings via constantes `LAN_DEMOBAR_*` — sem texto hardcoded
- Comentários de código em espanhol, código e constantes em inglês
- Todo arquivo PHP inicia com `if (!defined('e107_INIT')) { exit; }`

## Licença

GPL-3.0 — Mesma licença do e107 CMS.

## Créditos

- **Infraestrutura multisite**: [CaMer0n/multisite](https://github.com/CaMer0n/multisite) por Cameron (contribuidor do core do e107)
- **Inspiração UI**: [Barra de demo do BootstrapMade](https://bootstrapmade.com/demo/Arsha/)
- **Framework**: [e107 CMS](https://e107.org)
