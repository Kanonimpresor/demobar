/*
 * DemoBar Plugin — Esquema de base de datos
 *
 * Tabla preparada para v1.3.0 (Analytics).
 * En v1.0.0 se crea la estructura pero permanece vacía.
 *
 * El prefijo {PREFIX} se reemplaza automáticamente por e107 durante la instalación.
 */

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
