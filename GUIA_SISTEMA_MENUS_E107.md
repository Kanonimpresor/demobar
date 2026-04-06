# 📚 Guía Completa del Sistema de Menús en e107

> **Autor:** Documentación Técnica KreativeKey  
> **Fecha:** 16 de enero de 2026  
> **Versión e107:** 2.x  
> **Tema:** LandingZero2

---

## 📑 Índice

1. [¿Qué son los Menús en e107?](#1-qué-son-los-menús-en-e107)
2. [Arquitectura del Sistema de Menús](#2-arquitectura-del-sistema-de-menús)
3. [Tipos de Menús](#3-tipos-de-menús)
4. [Dónde se Crean los Menús](#4-dónde-se-crean-los-menús)
5. [Cómo se Aplican los Menús](#5-cómo-se-aplican-los-menús)
6. [Dónde son Referenciados para su Renderizado](#6-dónde-son-referenciados-para-su-renderizado)
7. [Templates de Menús](#7-templates-de-menús)
8. [Ejemplo Práctico: Process Cards](#8-ejemplo-práctico-process-cards)
9. [Archivos Clave del Sistema](#9-archivos-clave-del-sistema)
10. [Troubleshooting Común](#10-troubleshooting-común)

---

## 1. ¿Qué son los Menús en e107?

Los **menús** en e107 son componentes modulares que muestran contenido dinámico en diferentes áreas de tu sitio web. Pueden ser:

- 🔹 Listas de navegación
- 🔹 Widgets personalizados
- 🔹 Contenido de plugins
- 🔹 Custom Pages (Páginas Personalizadas)
- 🔹 Feeds de noticias
- 🔹 Formularios de login/registro
- 🔹 Cualquier contenido modular

**Ventajas:**
✅ Modularidad - Activa/desactiva fácilmente  
✅ Reutilización - Un mismo menú en múltiples layouts  
✅ Control de visibilidad - Por userclass y páginas específicas  
✅ Personalización - Templates y configuración avanzada

---

## 2. Arquitectura del Sistema de Menús

### 2.1 Flujo de Datos

```
┌─────────────────────────────────────────────────────────────┐
│                    BASE DE DATOS                             │
│  Tabla: e107_menus                                           │
│  ┌─────────────┬──────────────┬──────────────┬────────────┐ │
│  │ menu_id     │ menu_name    │ menu_location│ menu_path  │ │
│  │ menu_order  │ menu_class   │ menu_layout  │ menu_parms │ │
│  └─────────────┴──────────────┴──────────────┴────────────┘ │
└─────────────────────────────────────────────────────────────┘
                            ↓
┌─────────────────────────────────────────────────────────────┐
│              MENU MANAGER (Admin Backend)                    │
│  e107_handlers/menumanager_class.php                         │
│  - Activación/Desactivación                                  │
│  - Ordenamiento (drag & drop)                                │
│  - Configuración de visibilidad                              │
│  - Asignación de templates                                   │
└─────────────────────────────────────────────────────────────┘
                            ↓
┌─────────────────────────────────────────────────────────────┐
│                MENU CLASS (Frontend Rendering)               │
│  e107_handlers/menu_class.php                                │
│  - Carga datos desde DB                                      │
│  - Verifica permisos (userclass)                             │
│  - Carga archivo PHP del menú                                │
│  - Aplica template                                           │
│  - Renderiza output HTML                                     │
└─────────────────────────────────────────────────────────────┘
                            ↓
┌─────────────────────────────────────────────────────────────┐
│                   LAYOUT/THEME                               │
│  e107_themes/{theme}/layouts/{layout}.html                   │
│  Shortcode: {MENU=9: template=process-cards}                 │
└─────────────────────────────────────────────────────────────┘
                            ↓
┌─────────────────────────────────────────────────────────────┐
│                   OUTPUT HTML                                │
│  Contenido renderizado en el frontend                        │
└─────────────────────────────────────────────────────────────┘
```

### 2.2 Tabla de Base de Datos: `e107_menus`

| Campo           | Tipo           | Descripción                                    |
|-----------------|----------------|------------------------------------------------|
| `menu_id`       | INT (PK)       | ID único del menú                              |
| `menu_name`     | VARCHAR(100)   | Nombre del menú (ej: "login_menu")             |
| `menu_location` | TINYINT        | Área donde está asignado (1-10, 0=inactivo)    |
| `menu_order`    | TINYINT        | Orden de visualización en el área              |
| `menu_class`    | VARCHAR(255)   | UserClass permitida para ver el menú           |
| `menu_pages`    | TEXT           | Páginas específicas donde mostrar el menú      |
| `menu_path`     | VARCHAR(100)   | Ruta al directorio del plugin (ej: "news/")    |
| `menu_layout`   | VARCHAR(100)   | Layout específico (vacío = default)            |
| `menu_parms`    | TEXT           | Parámetros serializados del menú               |

**Ejemplo de registro:**

```sql
INSERT INTO e107_menus VALUES (
    9,                          -- menu_id
    'chapter_menu',             -- menu_name
    5,                          -- menu_location (área 5)
    3,                          -- menu_order (tercera posición)
    '0',                        -- menu_class (0 = todos)
    '',                         -- menu_pages (todas las páginas)
    'page/',                    -- menu_path
    '',                         -- menu_layout (default)
    'a:2:{s:7:"caption";s:12:"Cómo Trabajamos";s:8:"template";s:13:"process-cards"}'  -- menu_parms
);
```

---

## 3. Tipos de Menús

### 3.1 Menús de Plugin

Menús proporcionados por plugins instalados. Ubicados en:

```
e107_plugins/{plugin_name}/{menu_name}_menu.php
```

**Ejemplos:**

- `e107_plugins/login_menu/login_menu.php` - Formulario de login
- `e107_plugins/news/news_menu.php` - Listado de noticias
- `e107_plugins/online/online_menu.php` - Usuarios online
- `e107_plugins/search_menu/search_menu.php` - Buscador

**Estructura típica:**

```php
<?php
// e107_plugins/example/example_menu.php

if (!defined('e107_INIT')) { exit; }

$text = "<div class='example-menu'>";
$text .= "<h3>Mi Menú Personalizado</h3>";
$text .= "<p>Contenido dinámico aquí</p>";
$text .= "</div>";

e107::getRender()->tablerender("Título del Menú", $text, 'example-menu');
```

### 3.2 Menús de Custom Page

Menús creados desde páginas personalizadas. Gestionados desde:

```
Admin → Contenido → Páginas Personalizadas
```

Campos importantes:
- **Page ID:** Identificador único
- **Menu Name:** Nombre para referencia (ej: "chapter_menu")
- **Menu Title:** Título visible
- **Menu Template:** Template a aplicar (opcional)

**Almacenamiento:**  
Tabla: `e107_page`  
Columnas: `page_id`, `menu_name`, `menu_title`, `menu_text`, `menu_template`

### 3.3 Menús de Sistema (Core)

Menús básicos del sistema, ubicados en:

```
e107_core/
e107_plugins/siteinfo/
e107_plugins/user/
```

**Ejemplos:**

- `compliance_menu` - Cookies/GDPR
- `counter_menu` - Contador de visitas
- `powered_by_menu` - Badge de e107
- `userlanguage_menu` - Selector de idioma

---

## 4. Dónde se Crean los Menús

### 4.1 Admin Panel → Apariencia → Gestor de Menús

**Ruta:** `e107_admin/menus.php`

```
Admin → Apariencia → Gestor de Menús
```

**Funcionalidades:**

1. **Escanear Nuevos Menús**
   - Detecta automáticamente nuevos archivos `*_menu.php`
   - Detecta Custom Pages con `menu_name` asignado
   - Añade registros a la tabla `e107_menus`

2. **Activar/Desactivar Menús**
   - Arrastra menús desde "Inactive" a áreas 1-10
   - `menu_location = 0` → Inactivo
   - `menu_location = 1-10` → Activo en esa área

3. **Ordenar Menús**
   - Drag & drop dentro del área
   - Actualiza campo `menu_order`

4. **Configurar Menús**
   - Visibilidad (UserClass)
   - Páginas específicas
   - Parámetros personalizados (si tiene `e_menu.php`)

### 4.2 Admin Panel → Contenido → Páginas Personalizadas

**Ruta:** `e107_admin/cpage.php`

```
Admin → Contenido → Páginas Personalizadas → Crear Nueva Página
```

**Crear menú desde Custom Page:**

1. Marca checkbox "Create Menu"
2. Asigna **Menu Name** (ej: "chapter_menu")
3. Asigna **Menu Title** (ej: "Capítulos")
4. Selecciona **Menu Template** (opcional)
5. Escribe contenido en el editor
6. Guarda → Se crea registro en `e107_menus`

### 4.3 Crear Plugin con Menú Personalizado

**Estructura de Archivos:**

```
e107_plugins/
└── miplugin/
    ├── plugin.xml              # Metadatos del plugin
    ├── e_menu.php              # Configuración del menú (opcional)
    ├── miplugin_menu.php       # Lógica y renderizado
    └── languages/
        └── English/
            └── English_menu.php # Traducciones
```

**Ejemplo: `e_menu.php`**

```php
<?php
// e107_plugins/miplugin/e_menu.php

if (!defined('e107_INIT')) { exit; }

class miplugin_menu
{
    function __construct()
    {
        e107::lan('miplugin', 'menu', true);
    }

    /**
     * Campos de configuración para Menu Manager
     */
    public function config($menu='')
    {
        $fields = array();
        
        $fields['caption'] = array(
            'title'     => LAN_CAPTION,
            'type'      => 'text',
            'multilan'  => true,
            'writeParms'=> array('size'=>'xxlarge')
        );
        
        $fields['count'] = array(
            'title'     => "Cantidad de Items",
            'type'      => 'number',
            'writeParms'=> array('pattern'=>'[0-9]*', 'default'=>5)
        );
        
        $fields['template'] = array(
            'title'     => "Template",
            'type'      => 'dropdown',
            'writeParms'=> array(
                'optArray' => array(
                    'default'       => 'Por Defecto',
                    'cards'         => 'Tarjetas',
                    'list'          => 'Lista'
                )
            )
        );

        return $fields;
    }
}
```

**Ejemplo: `miplugin_menu.php`**

```php
<?php
// e107_plugins/miplugin/miplugin_menu.php

if (!defined('e107_INIT')) { exit; }

// Obtener parámetros configurados en Menu Manager
$parm = e107::unserialize($parm);
$caption = varset($parm['caption'], "Mi Plugin");
$count = intval(varset($parm['count'], 5));
$template = varset($parm['template'], 'default');

// Lógica del menú
$sql = e107::getDb();
$sql->select('mitabla', '*', "ORDER BY fecha DESC LIMIT {$count}");

$text = "<div class='miplugin-menu template-{$template}'>";

while($row = $sql->fetch())
{
    $text .= "<div class='item'>";
    $text .= "<h4>{$row['titulo']}</h4>";
    $text .= "<p>{$row['descripcion']}</p>";
    $text .= "</div>";
}

$text .= "</div>";

// Renderizar
e107::getRender()->tablerender($caption, $text, 'miplugin-menu');
```

---

## 5. Cómo se Aplican los Menús

### 5.1 Asignación en Menu Manager

**Proceso:**

1. Ve a: `Admin → Apariencia → Gestor de Menús`
2. Selecciona el **Layout** (Homepage, Default, Custom)
3. Arrastra menú desde "Inactive Menus" a un área (1-10)
4. Posiciona en el orden deseado
5. Haz clic en ⚙️ para configurar:
   - **Caption:** Título visible
   - **Visibility:** UserClass
   - **Custom Pages:** URL específicas
   - **Parameters:** Configuración avanzada

**Áreas de Menú:**

Las áreas dependen del theme. Ejemplo típico:

```
┌──────────────────────────────────────────┐
│            Header (Área 1)               │
├──────────────┬───────────────────────────┤
│  Sidebar     │   Content                 │
│  (Área 2)    │                           │
│              │   Área 5 (Middle)         │
│              │                           │
├──────────────┴───────────────────────────┤
│            Footer (Área 10)              │
└──────────────────────────────────────────┘
```

### 5.2 Asignación de Template

**Método 1: Desde Menu Manager**

1. En Menu Manager, haz clic en ⚙️ del menú
2. En "Parameters" → selecciona **Template**
3. Ejemplo: `process-cards`
4. Guarda cambios
5. Limpia caché: `e107_web/cache/`

**Método 2: Desde Custom Page**

1. Edita la Custom Page
2. En "Menu Template" → selecciona el template
3. Guarda cambios

**Método 3: Inline en Layout (avanzado)**

En el archivo de layout:

```html
<!-- Sin template (usa default) -->
{MENU=9}

<!-- Con template específico -->
{MENU=9: template=process-cards}

<!-- Con parámetros adicionales -->
{MENU=9: template=cards&count=4&style=modern}
```

---

## 6. Dónde son Referenciados para su Renderizado

### 6.1 Layouts del Theme

**Ubicación:**

```
e107_themes/{theme}/layouts/{layout}_layout.html
```

**Ejemplo: `homepage_layout.html`**

```html
<!DOCTYPE html>
<html>
<head>
    {SETSTYLE=landing}
</head>
<body>
    <!-- Header Area -->
    <header>
        {MENU=1}
    </header>
    
    <!-- Main Content -->
    <main>
        <section id="hero">
            {MENU=3}
        </section>
        
        <section id="features">
            <div class="container">
                <h2>Nuestros Servicios</h2>
                {MENU=5: template=service-cards}
            </div>
        </section>
        
        <section id="process">
            <div class="container-fluid">
                <h2>Cómo Trabajamos</h2>
                {MENU=9: template=process-cards}
            </div>
        </section>
        
        <!-- Sidebar -->
        <aside>
            {MENU=2}
        </aside>
    </main>
    
    <!-- Footer -->
    <footer>
        {MENU=10}
    </footer>
</body>
</html>
```

### 6.2 Renderizado por menu_class.php

**Archivo:** `e107_handlers/menu_class.php`

**Método principal:** `renderArea($area)`

```php
// Línea 583-615 (aproximado)
public function renderArea($parm = '')
{
    $tmp = explode('-', $parm);
    $area = intval($tmp[0]);
    
    // Obtener menús activos en esta área
    $menus = $this->getMenusForArea($area);
    
    foreach($menus as $row)
    {
        // Verificar userclass
        if(!check_class($row['menu_class']))
        {
            echo "<!-- Menu not rendered due to userclass settings -->";
            continue;
        }
        
        // Renderizar menú
        $this->renderMenu(
            $row['menu_path'],
            $row['menu_name'],
            $row['menu_parms']
        );
    }
}
```

**Método de renderizado:** `renderMenu($mpath, $mname, $parm)`

```php
// Línea 631-700 (aproximado)
public function renderMenu($mpath, $mname='', $parm = '', $return = false)
{
    // 1. Cargar parámetros
    $parm = e107::unserialize($parm);
    
    // 2. Custom Page Menu
    if(strpos($mpath, 'cpage-') === 0)
    {
        $pageId = str_replace('cpage-', '', $mpath);
        $page = e107::getDb()->retrieve('page', '*', "page_id={$pageId}");
        
        // 3. Aplicar template si existe
        if(!empty($page['menu_template']))
        {
            $template = e107::getCoreTemplate('menu', $page['menu_template']);
            $page_shortcodes->setVars($page)->wrapper('menu/'.$page['menu_template']);
            $text = e107::getParser()->parseTemplate($template, true, $page_shortcodes);
            
            e107::getRender()->tablerender($caption, $text, 'cmenu-'.$page['menu_template']);
        }
    }
    // 4. Plugin Menu
    else
    {
        $menuFile = e_PLUGIN . $mpath . $mname . '.php';
        
        if(file_exists($menuFile))
        {
            include($menuFile);
        }
    }
}
```

### 6.3 Shortcodes Disponibles

**En Layouts:**

| Shortcode                       | Descripción                          |
|---------------------------------|--------------------------------------|
| `{MENU=1}`                      | Renderiza área 1                     |
| `{MENU=9: template=cards}`      | Área 9 con template "cards"          |
| `{MENU=5: count=4&style=grid}`  | Área 5 con parámetros                |

**En Páginas/News:**

| Shortcode            | Descripción                              |
|----------------------|------------------------------------------|
| `{MENU_NAME=login}`  | Renderiza menú específico por nombre     |

---

## 7. Templates de Menús

### 7.1 Ubicación de Templates

**Orden de búsqueda:**

1. **Theme (prioridad):**  
   `e107_themes/{theme}/templates/menu_template.php`

2. **Core (fallback):**  
   `e107_core/templates/menu_template.php`

### 7.2 Estructura de un Template

**Archivo:** `e107_themes/LandingZero2/templates/menu_template.php`

```php
<?php
if (!defined('e107_INIT')) { exit; }

// Template: default
$MENU_TEMPLATE['default']['start'] = '<div class="cpage-menu {CMENUNAME}">';
$MENU_TEMPLATE['default']['body']  = '{CMENUBODY}';
$MENU_TEMPLATE['default']['end']   = '</div>';

// Template: button
$MENU_TEMPLATE['button']['start'] = '<div class="cpage-menu {CMENUNAME}">';
$MENU_TEMPLATE['button']['body']  = '<div>{CMENUBODY}</div>{CPAGEBUTTON}';
$MENU_TEMPLATE['button']['end']   = '</div>';

// Template: process-cards (PERSONALIZADO)
$MENU_TEMPLATE['process-cards']['start'] = '';
$MENU_TEMPLATE['process-cards']['body']  = '
    <div class="process-card">
        <div class="process-icon">
            <i class="{CMENUICON=css}"></i>
        </div>
        <div class="process-content">
            <h3>{CMENUTITLE}</h3>
            <p>{CMENUBODY}</p>
        </div>
    </div>';
$MENU_TEMPLATE['process-cards']['end'] = '';

// Template: image-text-button
$MENU_TEMPLATE['image-text-button']['start'] = '<div class="cpage-menu {CMENUNAME}">{SETIMAGE: w=360}';
$MENU_TEMPLATE['image-text-button']['body']  = '{CMENUIMAGE}{CMENUBODY}{CPAGEBUTTON}';
$MENU_TEMPLATE['image-text-button']['end']   = '</div>';
```

### 7.3 Shortcodes de Templates

**Shortcodes disponibles en Custom Page Menus:**

| Shortcode              | Descripción                                    | Ejemplo                         |
|------------------------|------------------------------------------------|---------------------------------|
| `{CMENUNAME}`          | Nombre del menú (class CSS)                    | `chapter_menu`                  |
| `{CMENUTITLE}`         | Título del menú                                | `Cómo Trabajamos`               |
| `{CMENUBODY}`          | Contenido/descripción                          | HTML del body                   |
| `{CMENUTEXT}`          | Alias de CMENUBODY                             | HTML del body                   |
| `{CMENUURL}`           | URL de la página                               | `/page.php?1`                   |
| `{CMENUICON}`          | Icono (raw)                                    | `ion-lightbulb-outline`         |
| `{CMENUICON=css}`      | Icono con clase CSS                            | `ion-lightbulb-outline`         |
| `{CMENUIMAGE}`         | Imagen principal                               | `<img src="...">`               |
| `{CMENUIMAGE=thumb}`   | Imagen en miniatura                            | `<img src="...thumb">`          |
| `{CPAGEBUTTON}`        | Botón "Leer más"                               | `<a href="...">Read More</a>`   |
| `{SETIMAGE: w=360}`    | Configurar dimensiones de imagen               | (control de tamaño)             |

### 7.4 Templates para Plugin Menus

**Ejemplo: News Menu Template**

**Archivo:** `e107_themes/{theme}/templates/news/news_menu_template.php`

```php
<?php
if (!defined('e107_INIT')) { exit; }

// Latest News Menu
$NEWS_MENU_TEMPLATE['latest']['start'] = '<ul class="nav nav-list news-menu-latest">';
$NEWS_MENU_TEMPLATE['latest']['item']  = '
    <li>
        <a class="e-menu-link" href="{NEWSURL}">
            {NEWSTITLE} {NEWSCOMMENTCOUNT}
        </a>
    </li>';
$NEWS_MENU_TEMPLATE['latest']['end'] = '</ul>';

// News Categories Menu
$NEWS_MENU_TEMPLATE['categories']['start'] = '<ul class="nav nav-list news-categories">';
$NEWS_MENU_TEMPLATE['categories']['item']  = '
    <li>
        <a href="{NEWSCATEGORYURL}">
            {NEWSCATEGORYNAME} ({NEWSCATEGORYCOUNT})
        </a>
    </li>';
$NEWS_MENU_TEMPLATE['categories']['end'] = '</ul>';
```

---

## 8. Ejemplo Práctico: Process Cards

### 8.1 Objetivo

Crear un menú de 4 tarjetas con:
- Icono
- Título
- Descripción

Debe integrarse con el sistema nativo de e107 (Custom Pages).

### 8.2 Paso 1: Crear Custom Pages

**Admin → Contenido → Páginas Personalizadas**

Crea 4 páginas con estos datos:

| Campo            | Página 1                  | Página 2                | Página 3                 | Página 4                 |
|------------------|---------------------------|-------------------------|--------------------------|--------------------------|
| **Title**        | Análisis de Necesidades   | Diseño Personalizado    | Desarrollo e Implementación | Soporte Continuo      |
| **Menu Name**    | `process_step_1`          | `process_step_2`        | `process_step_3`         | `process_step_4`         |
| **Menu Title**   | Análisis de Necesidades   | Diseño Personalizado    | Desarrollo               | Soporte                  |
| **Menu Text**    | Estudiamos tus necesidades... | Creamos diseños únicos... | Desarrollamos tu solución... | Te acompañamos siempre... |
| **Icon**         | `ion-lightbulb-outline`   | `ion-ios-color-palette` | `ion-code-slash`         | `ion-headset`            |
| **Menu Template**| `process-cards`           | `process-cards`         | `process-cards`          | `process-cards`          |
| **Create Menu**  | ✅ Yes                     | ✅ Yes                   | ✅ Yes                    | ✅ Yes                    |

### 8.3 Paso 2: Crear Template

**Archivo:** `e107_themes/LandingZero2/templates/menu_template.php`

```php
<?php
if (!defined('e107_INIT')) { exit; }

// ... otros templates ...

// Template: process-cards
$MENU_TEMPLATE['process-cards']['start'] = '';
$MENU_TEMPLATE['process-cards']['body']  = '
    <div class="process-card">
        <div class="process-icon">
            <i class="{CMENUICON=css}"></i>
        </div>
        <div class="process-content">
            <h3>{CMENUTITLE}</h3>
            <p>{CMENUBODY}</p>
        </div>
    </div>';
$MENU_TEMPLATE['process-cards']['end'] = '';
```

### 8.4 Paso 3: Crear CSS

**Archivo:** `e107_themes/LandingZero2/style_red.css`

```css
/* Process Cards Styles */
#four .process-card-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
    padding: 3rem 0;
}

#four .process-card {
    background: rgba(255, 255, 255, 0.95);
    border-radius: 12px;
    padding: 2.5rem 2rem;
    text-align: center;
    border-left: 4px solid #5b0d1a;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

#four .process-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 35px rgba(91, 13, 26, 0.2);
}

#four .process-icon {
    width: 70px;
    height: 70px;
    background: rgba(91, 13, 26, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
}

#four .process-icon i {
    font-size: 2rem;
    color: #5b0d1a;
}

#four .process-content h3 {
    font-size: 1.25rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 1rem;
}

#four .process-content p {
    font-size: 0.95rem;
    color: #7f8c8d;
    line-height: 1.6;
    margin: 0;
}

/* Responsive */
@media (max-width: 768px) {
    #four .process-card-container {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
}
```

### 8.5 Paso 4: Activar en Menu Manager

1. Ve a: `Admin → Apariencia → Gestor de Menús`
2. Selecciona layout: **Homepage**
3. Arrastra los 4 menús (`process_step_1` a `process_step_4`) al **Área 9**
4. Ordénalos: 1 → 2 → 3 → 4
5. Para cada uno, verifica en ⚙️:
   - Template: `process-cards`
   - Visibility: `Everyone (e_UC_PUBLIC)`

### 8.6 Paso 5: Referenciar en Layout

**Archivo:** `e107_themes/LandingZero2/layouts/homepage_layout.html`

```html
<section id="four" class="main style1">
    <div class="container-fluid">
        <header>
            <h2 class="text-center text-primary title-accent">
                {LAN=LAN_LZ_THEME_06}
            </h2>
        </header>
        
        <div class="process-card-container">
            {MENU=9: template=process-cards}
        </div>
    </div>
</section>
```

### 8.7 Paso 6: Limpiar Caché

```bash
# Opción 1: Manual
rm -rf e107_web/cache/*

# Opción 2: Admin Panel
Admin → Herramientas → Limpiar Caché → Limpiar Todo
```

### 8.8 Resultado Final

```html
<!-- HTML Renderizado -->
<section id="four" class="main style1">
    <div class="container-fluid">
        <header>
            <h2 class="text-center text-primary title-accent">
                Cómo Trabajamos
            </h2>
        </header>
        
        <div class="process-card-container">
            <!-- Card 1 -->
            <div class="process-card">
                <div class="process-icon">
                    <i class="ion-lightbulb-outline"></i>
                </div>
                <div class="process-content">
                    <h3>Análisis de Necesidades</h3>
                    <p>Estudiamos tus necesidades...</p>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="process-card">
                <div class="process-icon">
                    <i class="ion-ios-color-palette"></i>
                </div>
                <div class="process-content">
                    <h3>Diseño Personalizado</h3>
                    <p>Creamos diseños únicos...</p>
                </div>
            </div>
            
            <!-- Cards 3 y 4... -->
        </div>
    </div>
</section>
```

---

## 9. Archivos Clave del Sistema

### 9.1 Backend (Administración)

| Archivo                                    | Función                                       |
|--------------------------------------------|-----------------------------------------------|
| `e107_admin/menus.php`                     | Interfaz de Menu Manager                      |
| `e107_handlers/menumanager_class.php`      | Lógica de gestión de menús                    |
| `e107_admin/cpage.php`                     | Gestor de Custom Pages                        |
| `e107_handlers/db_table_admin_class.php`   | CRUD para tabla `e107_menus`                  |

### 9.2 Frontend (Renderizado)

| Archivo                                    | Función                                       |
|--------------------------------------------|-----------------------------------------------|
| `e107_handlers/menu_class.php`             | Clase principal de renderizado                |
| `e107_handlers/shortcode_class.php`        | Procesamiento de shortcodes                   |
| `e107_handlers/core_functions.php`         | Funciones auxiliares                          |

### 9.3 Templates

| Archivo                                         | Función                                  |
|-------------------------------------------------|------------------------------------------|
| `e107_core/templates/menu_template.php`         | Templates core por defecto               |
| `e107_themes/{theme}/templates/menu_template.php` | Templates personalizados del tema    |
| `e107_plugins/{plugin}/templates/{plugin}_menu_template.php` | Templates del plugin |

### 9.4 Archivos de Menú

| Patrón                                     | Descripción                                   |
|--------------------------------------------|-----------------------------------------------|
| `e107_plugins/{plugin}/{menu}_menu.php`    | Lógica y renderizado del menú                 |
| `e107_plugins/{plugin}/e_menu.php`         | Configuración avanzada (opcional)             |
| `e107_plugins/{plugin}/languages/*/menu.php` | Traducciones                                |

---

## 10. Troubleshooting Común

### ❌ Problema 1: Menú No Aparece

**Causas posibles:**

1. **Menú no activado**
   - Solución: Ve a Menu Manager y arrastra a un área activa

2. **UserClass incorrecta**
   - Solución: Verifica en ⚙️ → Visibility → Selecciona "Everyone"

3. **Layout no tiene shortcode**
   - Solución: Añade `{MENU=X}` en el archivo de layout

4. **Archivo no existe**
   - Solución: Verifica que el archivo `*_menu.php` exista

**Debugging:**

```php
// Añadir al inicio de tu *_menu.php
echo "<!-- MENU CARGADO: {$mname} -->";
```

### ❌ Problema 2: Template No Se Aplica

**Causas posibles:**

1. **Caché no limpiada**
   - Solución: `rm -rf e107_web/cache/*`

2. **Nombre incorrecto**
   - Solución: Verifica que el nombre coincida EXACTAMENTE

3. **Template no existe**
   - Solución: Verifica que esté definido en `menu_template.php`

4. **Sintaxis incorrecta**
   - Solución: Verifica comas y comillas

**Verificación:**

```php
// En menu_template.php
print_a($MENU_TEMPLATE); // Debug: muestra todos los templates
```

### ❌ Problema 3: Shortcodes No Funcionan

**Causas posibles:**

1. **Shortcode mal escrito**
   - ❌ `{cmenutitle}` (minúsculas)
   - ✅ `{CMENUTITLE}` (mayúsculas)

2. **Shortcode no disponible**
   - Solución: Verifica la lista de shortcodes disponibles

3. **Campo vacío en DB**
   - Solución: Verifica que la Custom Page tenga datos

**Lista de shortcodes válidos:**

```
Custom Page Menus:
{CMENUNAME}, {CMENUTITLE}, {CMENUBODY}, {CMENUTEXT},
{CMENUURL}, {CMENUICON}, {CMENUIMAGE}, {CPAGEBUTTON}

News Menus:
{NEWSTITLE}, {NEWSURL}, {NEWSSUMMARY}, {NEWSIMAGE},
{NEWSCOMMENTCOUNT}, {NEWSAUTHOR}, {NEWSDATE}

Generic:
{SETIMAGE: w=360&h=240&crop=1}
```

### ❌ Problema 4: Estilos No Se Aplican

**Causas posibles:**

1. **CSS no cargado**
   - Solución: Verifica en DevTools que el archivo CSS esté cargado

2. **Selectores incorrectos**
   - Solución: Inspecciona HTML y ajusta selectores

3. **Especificidad baja**
   - Solución: Aumenta especificidad o usa `!important`

**Debugging CSS:**

```css
/* Añadir border para visualizar */
.process-card {
    border: 2px solid red !important;
}
```

### ❌ Problema 5: Múltiples Menús No Renderizan

**Causa:** Solo renderiza el primero

**Solución:** Asegúrate que cada Custom Page:
1. Tenga `menu_name` ÚNICO
2. Esté marcada como "Create Menu"
3. Esté activada en Menu Manager
4. Tenga `menu_order` diferente (1, 2, 3, 4...)

**Verificación en DB:**

```sql
SELECT menu_id, menu_name, menu_location, menu_order
FROM e107_menus
WHERE menu_location = 9
ORDER BY menu_order;
```

---

## 📚 Recursos Adicionales

### Documentación Oficial

- **Developer Guide:** https://devguide.e107.org/
- **Forum:** https://e107.org/forum
- **GitHub:** https://github.com/e107inc/e107

### Archivos de Referencia en Este Proyecto

```
c:\wamp64\www\kreativekey\
├── e107_handlers/
│   ├── menu_class.php              # Renderizado frontend
│   ├── menumanager_class.php       # Gestión backend
│   └── shortcode_class.php         # Procesamiento shortcodes
├── e107_themes/LandingZero2/
│   ├── templates/menu_template.php # Templates personalizados
│   ├── layouts/homepage_layout.html # Layout con {MENU=X}
│   └── style_red.css               # Estilos de menús
└── e107_plugins/
    ├── news/e_menu.php             # Ejemplo configuración
    ├── page/e_menu.php             # Ejemplo Custom Pages
    └── _blank/                     # Template en blanco
```

### Comandos Útiles

```bash
# Escanear nuevos menús
# Admin → Apariencia → Gestor de Menús → "Scan for New Menus"

# Limpiar caché
rm -rf e107_web/cache/*

# Buscar menús en DB
cd /path/to/mysql
mysql -u root -p e107_db
SELECT * FROM e107_menus WHERE menu_layout = '';

# Buscar archivos de menú
find e107_plugins/ -name "*_menu.php"

# Verificar templates
grep -r "MENU_TEMPLATE\[" e107_themes/LandingZero2/
```

---

## 🎯 Checklist de Implementación

Al crear un nuevo menú, verifica:

- [ ] Archivo `*_menu.php` creado correctamente
- [ ] Opcional: `e_menu.php` para configuración avanzada
- [ ] Template definido en `menu_template.php` (si personalizado)
- [ ] CSS agregado al theme
- [ ] Escaneado en Menu Manager ("Scan for New Menus")
- [ ] Activado en área correspondiente
- [ ] Ordenado correctamente
- [ ] Visibility configurada
- [ ] Shortcode `{MENU=X}` añadido al layout
- [ ] Caché limpiada
- [ ] Testeado en frontend
- [ ] Responsive verificado
- [ ] Userclass testeada

---

## 📝 Notas Finales

**Mejores Prácticas:**

✅ Siempre limpia caché después de cambios en templates  
✅ Usa nombres descriptivos para `menu_name`  
✅ Documenta templates personalizados  
✅ Mantén CSS organizado por componente  
✅ Usa shortcodes en lugar de HTML hardcodeado  
✅ Testea en diferentes layouts y dispositivos  

**Errores Comunes a Evitar:**

❌ No limpiar caché  
❌ Usar caracteres especiales en `menu_name`  
❌ No verificar userclass  
❌ Templates con sintaxis incorrecta  
❌ Olvidar añadir `{MENU=X}` al layout  
❌ No activar menú en Menu Manager  

---

**Última actualización:** 16 de enero de 2026  
**Versión:** 1.0.0  
**Mantenedor:** KreativeKey Development Team

---

## 📧 Soporte

¿Tienes dudas? Contacta:
- **Email:** soporte@kreativekey.com
- **Forum e107:** https://e107.org/forum
- **GitHub Issues:** [Tu repositorio]

---

**© 2026 KreativeKey - Todos los derechos reservados**
