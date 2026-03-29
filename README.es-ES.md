#### Elija su idioma abajo / Choose your language below / Escolha o seu idioma abaixo

[![Language-English](https://img.shields.io/badge/Language-English-blue)](README.md)
[![Language-Português](https://img.shields.io/badge/Language-Português-green)](README.pt-PT.md)
[![Language-Español](https://img.shields.io/badge/Language-Español-red)](README.es-ES.md)

---

# DemoBar — Plugin para e107 CMS

> Barra de navegación persistente para entornos de demostración multisitio, inspirada en [BootstrapMade](https://bootstrapmade.com/demo/Arsha/). Diseñada para mostrar páginas de aterrizaje, temas y plugins desde una única instalación de e107 potenciada por el plugin [multisite](https://github.com/CaMer0n/multisite).

[![e107 CMS](https://img.shields.io/badge/e107-v2.3.3+-blue)](https://e107.org)
[![PHP](https://img.shields.io/badge/PHP-8.0+-purple)](https://php.net)
[![License](https://img.shields.io/badge/License-GPL--3.0-green)](LICENSE)

## Descripción General

DemoBar inyecta una barra fija superior en todos los sitios dentro de una instalación multisitio de e107. Lee el catálogo de sitios desde `multisite.json` (generado por el plugin multisite de CaMer0n) y muestra navegación entre demos activos, indicadores de estado y botones de llamada a la acción — todo sin modificar archivos del core de e107.

### Arquitectura

```
agencia-sitio.com/              ← Sitio principal (portafolio de la agencia)
agencia-sitio.com/demos/        ← Página de catálogo visual (cuadrícula auto-generada)
agencia-sitio.com/demo-arsha/   ← Demo 1 (con barra flotante)
agencia-sitio.com/demo-saas/    ← Demo 2 (con barra flotante)
agencia-sitio.com/demo-plugin/  ← Demo 3 (con barra flotante)
```

### Cómo Funciona

1. El hook **e_header.php** inyecta el CSS/JS de la barra en cada página del frontend
2. Lee `multisite.json` desde `e_SYSTEM_BASE` para construir la navegación de demos
3. Identifica el demo actual mediante la constante `e_MULTISITE_MATCH`
4. Renderiza una barra fija responsiva con Bootstrap 5
5. El administrador puede configurar el comportamiento, colores y enlaces CTA desde el panel de administración
6. Tarea cron opcional para reiniciar bases de datos de demostración

## Requisitos

| Requisito | Versión |
|---|---|
| e107 CMS | ≥ 2.3.3 |
| PHP | ≥ 8.0 |
| [plugin multisite](https://github.com/CaMer0n/multisite) | Instalado y configurado |
| MySQL / MariaDB | ≥ 5.7 / ≥ 10.3 |

## Instalación

1. Copiar la carpeta `demobar/` a `e107_plugins/`
2. Ir a **Admin → Gestor de Plugins** e instalar "DemoBar"
3. Asegurar que el [plugin multisite](https://github.com/CaMer0n/multisite) está instalado y `multisite.json` existe en `e107_system/`
4. Configurar la barra desde **Admin → DemoBar → Configuración**

## Funcionalidades

### v1.0.1 — Correcciones y Guía de Usuario (Actual)

- [x] **Reescritura CSS v2.0** — demobar.css completamente reescrito con layout flex y breakpoints responsivos
- [x] **Preferencias cross-database** — `loadPrefs()` lee configuración de marca/CTA desde la BD principal, garantizando consistencia en todos los demos
- [x] **Navegación inteligente** — Flechas solo en páginas demo; sitio principal muestra botón "▶ Ver Demos"
- [x] **Botón solo admin** — Botón Admin restringido vía `check_class(e_UC_ADMIN)`
- [x] **Guía de Usuario** — 5 pestañas admin (Resumen, Configuración, Uso, Multisite, Resolución de problemas) usando patrón template + shortcodes + CSS separado
- [x] **Atajo de teclado** — `Ctrl+Shift+D` para alternar visibilidad (estado guardado en localStorage)

### v1.0.0 — MVP

- [x] **Barra de navegación persistente** — Barra fija superior inyectada vía hook `e_header.php`
- [x] **Auto-descubrimiento de demos** — Lee sitios activos desde `multisite.json`
- [x] **Indicador de demo actual** — Resalta qué demo está visualizando el visitante
- [x] **Botones CTA** — Enlaces configurables "Ver Código Fuente" (GitHub) y "Contacto"
- [x] **Navegación Anterior/Siguiente** — Navegar entre demos secuencialmente
- [x] **Toggle de ocultar barra** — Los visitantes pueden colapsar la barra (almacenado en localStorage)
- [x] **Panel de configuración admin** — Configurar colores, texto de marca, URLs CTA, visibilidad
- [x] **3 idiomas** — Inglés, Español, Portugués
- [x] **Guard de seguridad** — Verificación `e107_INIT` en todos los archivos PHP
- [x] **Restricción IP admin** — Áreas admin de demos restringidas por lista blanca IP

### v1.1.0 — Reinicio de Demos (Planificado)

- [ ] Sistema de snapshots SQL — Guardar estado inicial de BD por sitio demo
- [ ] Botón de reinicio manual — Restauración con un clic desde panel admin
- [ ] Auto-reinicio vía cron — Programar reinicios periódicos (ej: cada 6 horas)
- [ ] Trigger de evento reset — Evento `demobar_demo_reset` para que otros plugins se enganchen

### v1.2.0 — Página de Catálogo (Planificado)

- [ ] Página pública `/demos/` — Cuadrícula visual de todos los demos activos
- [ ] Captura automática de pantalla — Generación de miniaturas por demo
- [ ] Filtro por tipo — Página de aterrizaje, Tema, Plugin, SaaS
- [ ] Etiquetas de categoría desde esquema extendido de `multisite.json`

### v1.3.0 — Analíticas y Seguridad (Planificado)

- [ ] Contador de visitas por demo — Tabla `demobar_stats` en BD principal
- [ ] Modo solo lectura — Prevenir modificaciones públicas en sitios demo
- [ ] Limitación de tasa — Throttling de intentos de login en áreas admin de demos
- [ ] Integración Cloudflare Turnstile — Protección anti-bot en formularios de demos

## Opciones de Configuración

| Preferencia | Tipo | Defecto | Descripción |
|---|---|---|---|
| `demobar_active` | booleano | `1` | Activar/desactivar la barra globalmente |
| `demobar_brand_text` | texto | `"Demos"` | Texto de marca en el lado izquierdo |
| `demobar_brand_url` | url | `""` | URL al hacer clic en la marca |
| `demobar_bg_color` | texto | `"#343a40"` | Color de fondo de la barra |
| `demobar_text_color` | texto | `"#ffffff"` | Color del texto de la barra |
| `demobar_cta_source_url` | url | `""` | URL del botón "Ver Código Fuente" (GitHub) |
| `demobar_cta_source_text` | texto | `"Source Code"` | Etiqueta del botón "Ver Código Fuente" |
| `demobar_cta_contact_url` | url | `""` | URL del botón "Contacto" |
| `demobar_cta_contact_text` | texto | `"Contact Us"` | Etiqueta del botón de contacto |
| `demobar_show_prevnext` | booleano | `1` | Mostrar flechas Anterior/Siguiente |
| `demobar_show_hide_toggle` | booleano | `1` | Permitir que visitantes oculten la barra |
| `demobar_admin_ip_whitelist` | textarea | `""` | IPs con acceso a áreas admin de demos |
| `demobar_position` | desplegable | `"top"` | Posición: arriba o abajo |

## Desarrollo

### Compilar y Probar

```bash
cd e107_tests
composer update
./vendor/bin/codecept run unit tests/unit/plugins/demobar/
```

### Estándares de Código

- Sintaxis PHP 8.0+, indentación de 4 espacios
- Todos los servicios vía API estática `e107::` — nunca instanciar handlers directamente
- Todas las cadenas vía constantes `LAN_DEMOBAR_*` — sin texto hardcodeado
- Comentarios de código en español, código y constantes en inglés
- Todo archivo PHP inicia con `if (!defined('e107_INIT')) { exit; }`

## Licencia

GPL-3.0 — Misma licencia que e107 CMS.

## Créditos

- **Infraestructura multisite**: [CaMer0n/multisite](https://github.com/CaMer0n/multisite) por Cameron (contribuidor del core de e107)
- **Inspiración UI**: [Barra de demo de BootstrapMade](https://bootstrapmade.com/demo/Arsha/)
- **Framework**: [e107 CMS](https://e107.org)
