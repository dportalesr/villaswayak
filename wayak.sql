-- Adminer 3.6.1 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = 'SYSTEM';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `albumimgs`;
CREATE TABLE `albumimgs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `album_id` int(10) unsigned DEFAULT NULL,
  `src` varchar(255) NOT NULL,
  `portada` tinyint(1) DEFAULT '0',
  `descripcion` text,
  `orden` int(10) unsigned DEFAULT '0',
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `albums`;
CREATE TABLE `albums` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `activo` tinyint(1) DEFAULT '1',
  `albumimg_count` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `albums` (`id`, `nombre`, `slug`, `activo`, `albumimg_count`, `created`) VALUES
(1,	'Villas Jaal-H&aacute;',	'1_villas-jaal-ha',	1,	3,	'2012-11-07 13:26:42'),
(2,	'Villas Naay-H&aacute;',	'2_villas-naay-ha',	1,	3,	'2012-11-07 13:27:05'),
(3,	'Departamentos (Desarrollo)',	'3_departamentos-desarrollo',	1,	3,	'2012-11-07 13:28:04'),
(4,	'Penthouse (Desarrollo)',	'4_penthouse-desarrollo',	1,	3,	'2012-11-07 13:28:57'),
(5,	'Amenidades',	'5_amenidades',	1,	3,	'2012-11-07 13:31:31'),
(6,	'Pentgarden',	'6_pentgarden',	1,	3,	'2012-11-07 13:32:19'),
(7,	'Departamentos (PALM)',	'7_departamentos-palm',	1,	3,	'2012-11-07 13:32:40'),
(8,	'Penthouse (PALM)',	'8_penthouse-palm',	1,	3,	'2012-11-07 13:33:02'),
(9,	'Desarrollo (Galer&iacute;a General)',	'9_desarrollo-galeria-general',	1,	5,	'2012-11-07 13:33:55'),
(10,	'PALM (Galer&iacute;a General)',	'10_palm-galeria-general',	1,	3,	'2012-11-07 13:37:15');

DROP TABLE IF EXISTS `carousels`;
CREATE TABLE `carousels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `src` varchar(255) DEFAULT '',
  `enlace` varchar(255) DEFAULT NULL,
  `descripcion` text,
  `activo` tinyint(1) DEFAULT '1',
  `orden` int(10) unsigned DEFAULT '0',
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `carousels` (`id`, `src`, `enlace`, `descripcion`, `activo`, `orden`, `created`) VALUES
(1,	'upload/01.jpg',	NULL,	NULL,	1,	1,	'2012-08-27 01:58:08'),
(2,	'upload/02.jpg',	NULL,	NULL,	1,	2,	'2012-08-27 01:58:08'),
(3,	'upload/03.jpg',	NULL,	NULL,	1,	3,	'2012-08-27 01:58:08'),
(4,	'upload/04.jpg',	NULL,	NULL,	1,	4,	'2012-08-27 01:58:08');

DROP TABLE IF EXISTS `eventimgs`;
CREATE TABLE `eventimgs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `event_id` int(10) unsigned DEFAULT NULL,
  `src` varchar(255) NOT NULL,
  `portada` tinyint(1) DEFAULT '0',
  `descripcion` text,
  `orden` int(10) unsigned DEFAULT '0',
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `descripcion` text,
  `activo` tinyint(1) DEFAULT '1',
  `fecha` datetime DEFAULT NULL,
  `orden` int(10) unsigned DEFAULT '0',
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellidos` varchar(255) DEFAULT NULL,
  `master` tinyint(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `username`, `password`, `nombre`, `apellidos`, `master`, `created`) VALUES
(1,	'pulsem',	'327d3429df2c4512edc07ed9e948aa75f5d14f50',	'Master',	NULL,	1,	'2010-01-01 00:00:00'),
(2,	'admin',	'd033e22ae348aeb5660fc2140aec35850c4da997',	'Master',	NULL,	1,	'2010-01-01 00:00:00');

-- 2012-11-07 14:30:02
