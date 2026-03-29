# Changelog

All notable changes to the DemoBar plugin for e107 CMS will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Planned for v1.1.0
- SQL snapshot system for demo database reset
- Manual reset button in admin panel
- Cron-based auto-reset (configurable interval)
- `demobar_demo_reset` event trigger

### Planned for v1.2.0
- `/demos/` public catalog page with visual grid
- Screenshot auto-capture per demo
- Filter demos by type (Landing Page, Theme, Plugin, SaaS)

### Planned for v1.3.0
- Visit counter per demo (demobar_stats table)
- Read-only mode for demo sites
- Rate limiting on demo admin login
- Cloudflare Turnstile integration


## [1.0.1] - 2026-03-28

### Fixed
- **CSS corruption** — Complete rewrite of `demobar.css` v2.0.0; the previous file had two versions merged line-by-line, causing the bar to render inside the page instead of fixed
- **CTA buttons missing in demos** — Brand URL, Source Code URL, and Contact URL were empty in demo databases; added `loadPrefs()` method to `demobar_class.php` that reads preferences from the main site database via cross-database SQL query
- **Navigation arrows on main site** — Arrows no longer show when the visitor is not on a demo; replaced with a "▶ View Demos" button linking to the first available demo
- **Admin button visible to all users** — Wrapped Admin button in `check_class(e_UC_ADMIN)` so only logged-in administrators can see it

### Added
- **User Guide page** — Complete admin guide with 5 tabs (Overview, Configuration, Usage, Multisite, Troubleshooting) using the template + shortcodes + CSS separation of concerns pattern
  - `templates/demobar_guide_template.php` — HTML with `{DEMOBAR_GUIDE_*}` shortcode placeholders
  - `shortcodes/batch/demobar_guide_shortcodes.php` — i18n-ready text via `defset()` with English fallback
  - `css/demobar_admin.css` — Isolated guide styles prefixed with `.demobar-guide`
- **`loadPrefs()` method** — New method in `demobar_class.php` for cross-database preference reading in multisite environments
- **"View Demos" button** — Shows on the main site instead of navigation arrows, linking to the first demo

### Changed
- **`guidePage()` rewrite** — Replaced manual tab HTML and `_guideContent()` switch/case with `e107::getTemplate()` + `e107::getScBatch()` + `e107::getForm()->tabs()` pattern (BS3/BS4/BS5 compatible)
- **Demobar layout** — Redesigned CSS v2.0.0 with flex layout, responsive breakpoints at 768px/480px, and improved visual hierarchy

## [1.0.0] - 2026-03-27

### Added
- **Plugin manifest** (`plugin.xml`) — Full e107 plugin descriptor with admin links, prefs, and metadata
- **Persistent navigation bar** — Fixed top bar injected via `e_header.php` hook on all frontend pages
- **Auto-discovery of demos** — Reads active sites from `multisite.json` in `e_SYSTEM_BASE`
- **Current demo indicator** — Highlights the active demo using `e_MULTISITE_MATCH` constant
- **Previous/Next navigation** — Sequential browsing between demos
- **CTA buttons** — Configurable "View Source" and "Contact" links with admin-editable URLs
- **Hide bar toggle** — Visitors can collapse the bar; state saved in sessionStorage
- **Admin settings panel** (`admin_config.php`) — Full `e_admin_dispatcher` + `e_admin_ui` implementation
  - Bar colors (background, text)
  - Brand text and URL
  - CTA button labels and URLs
  - Show/hide previous/next arrows
  - Toggle bar visibility
  - Admin IP whitelist for demo sites
  - Bar position (top/bottom)
- **Core logic class** (`includes/demobar_class.php`) — Reads `multisite.json`, builds demo list, renders bar HTML
- **Frontend templates** (`templates/demobar_template.php`) — Separated HTML from logic
- **Shortcodes** (`e_shortcode.php`) — `{DEMOBAR_NAV}` for manual bar placement
- **SEF URL routing** (`e_url.php`) — Routes for `/demos/` catalog page
- **Event listeners** (`e_event.php`) — Login event hook for admin IP restriction on demo sites
- **Cron task stub** (`e_cron.php`) — Prepared structure for v1.1.0 demo reset feature
- **Dashboard widget** (`e_dashboard.php`) — Shows active demo count in admin dashboard
- **Database schema** (`demobar_sql.php`) — `demobar_stats` table for visit tracking (prepared for v1.3.0)
- **Install/upgrade/uninstall** (`demobar_setup.php`) — Clean lifecycle management
- **CSS styles** (`css/demobar.css`) — Bootstrap 5 compatible, responsive bar styles
- **JavaScript** (`js/demobar.js`) — Toggle visibility with sessionStorage persistence
- **3-language support** — English, Spanish, Portuguese (frontend + admin strings)
- **Security** — `e107_INIT` guard on all PHP files, admin IP whitelist enforcement
- **Documentation** — Complete README.md (EN), README.es-ES.md (ES), README.pt-PT.md (PT)
