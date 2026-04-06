/*
 * DemoBar Plugin — Esquema de base de datos
 *
 * Tablas:
 *   - demobar_demos: Registros de demos gestionados desde el Admin.
 *     Almacena metadatos (versión, fecha, built_with, licencia, etc.)
 *     que se muestran en el menú lateral de detalle y en el catálogo.
 *   - demobar_stats: Preparada para v1.4.0 (Analytics).
 *
 * El prefijo {PREFIX} se reemplaza automáticamente por e107 durante la instalación.
 */

CREATE TABLE `{PREFIX}demobar_demos` (
	`demo_id`             INT(10) UNSIGNED   NOT NULL AUTO_INCREMENT,
	`demo_slug`           VARCHAR(100)       NOT NULL DEFAULT ''   COMMENT 'Identificador URL-safe, coincide con match de multisite.json',
	`demo_name`           VARCHAR(255)       NOT NULL DEFAULT ''   COMMENT 'Nombre visible del demo',
	`demo_description`    TEXT                                     COMMENT 'Descripción del demo',
	`demo_category`       VARCHAR(100)       NOT NULL DEFAULT ''   COMMENT 'Categoría (Agency, Portfolio, eCommerce, etc.)',
	`demo_thumbnail`      VARCHAR(512)       NOT NULL DEFAULT ''   COMMENT 'Ruta o URL de la imagen de vista previa',
	`demo_version`        VARCHAR(20)        NOT NULL DEFAULT ''   COMMENT 'Versión actual del demo/tema',
	`demo_release_date`   VARCHAR(20)        NOT NULL DEFAULT ''   COMMENT 'Fecha de lanzamiento (YYYY-MM-DD)',
	`demo_built_with`     VARCHAR(255)       NOT NULL DEFAULT ''   COMMENT 'Tecnologías: Bootstrap 5, PHP 8, etc.',
	`demo_included_files` VARCHAR(255)       NOT NULL DEFAULT ''   COMMENT 'Archivos incluidos: Theme files, CSS, JS, etc.',
	`demo_license_type`   VARCHAR(100)       NOT NULL DEFAULT ''   COMMENT 'Tipo de licencia: GPL-3.0, MIT, etc.',
	`demo_license_url`    VARCHAR(512)       NOT NULL DEFAULT ''   COMMENT 'URL a la página de la licencia',
	`demo_download_url`   VARCHAR(512)       NOT NULL DEFAULT ''   COMMENT 'URL de descarga del demo/tema',
	`demo_order`          INT(10) UNSIGNED   NOT NULL DEFAULT 0    COMMENT 'Orden de visualización en el catálogo',
	`demo_active`         TINYINT(1) UNSIGNED NOT NULL DEFAULT 1   COMMENT '1=visible, 0=oculto',
	PRIMARY KEY (`demo_id`),
	UNIQUE KEY `idx_slug` (`demo_slug`),
	KEY `idx_category` (`demo_category`),
	KEY `idx_order` (`demo_order`),
	KEY `idx_active` (`demo_active`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `{PREFIX}demobar_stats` (
	`stat_id`        INT(10) UNSIGNED  NOT NULL AUTO_INCREMENT,
	`stat_demo`      VARCHAR(255)      NOT NULL DEFAULT ''  COMMENT 'Nombre del demo (match del multisite.json)',
	`stat_type`      VARCHAR(50)       NOT NULL DEFAULT 'visit' COMMENT 'Tipo de evento: visit, login, pageview',
	`stat_ip`        VARCHAR(45)       NOT NULL DEFAULT ''  COMMENT 'IP del visitante (IPv4 o IPv6)',
	`stat_useragent` VARCHAR(255)      NOT NULL DEFAULT ''  COMMENT 'User-Agent del navegador',
	`stat_referer`   VARCHAR(512)      NOT NULL DEFAULT ''  COMMENT 'URL de referencia',
	`stat_datestamp`  INT(10) UNSIGNED NOT NULL DEFAULT 0   COMMENT 'Timestamp UNIX del evento',
	PRIMARY KEY (`stat_id`),
	KEY `idx_demo`     (`stat_demo`),
	KEY `idx_type`     (`stat_type`),
	KEY `idx_datestamp` (`stat_datestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
