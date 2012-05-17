-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 17-05-2012 a las 04:14:24
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `escuelas`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `datos_escuela`
-- 

CREATE TABLE `datos_escuela` (
  `id_esc` int(11) NOT NULL,
  `nom_esc` tinytext NOT NULL,
  `zona_esc` int(10) NOT NULL,
  `sector` int(10) NOT NULL,
  `director` tinytext NOT NULL,
  `telefono` int(20) default NULL,
  `pag_web` tinytext,
  `email` varchar(30) default NULL,
  `p_estudios` text NOT NULL,
  `id_enlace` int(11) default NULL,
  `cct` varchar(20) default NULL,
  PRIMARY KEY  (`id_esc`),
  KEY `id_enlace` (`id_enlace`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `datos_escuela`
-- 

INSERT INTO `datos_escuela` VALUES 
(4, 'ES 354-11 LIC. BENITO JUÁREZ', 1, 1, 'MARÍA DEMETRIA HORTENSIA MÈNDEZ G.', 55602520, NULL, NULL, '', NULL, '15DES0011Y'),
(5, 'ES 354-17 BENEMÉRITO DE LAS AMÉRICAS', 1, 1, 'RICARDO RAFAEL CENICEROS GONZÁLEZ', 55721554, NULL, NULL, '', NULL, '15DES0017S'),
(6, 'ES 354-50 HÉROES DE LA LIBERTAD', 1, 1, 'ROBERTO CASTAÑEDA GARCÌA', 53933702, NULL, NULL, '', NULL, '15DES0050Z'),
(7, 'ES 354-60 ROSARIO CASTELLANOS', 1, 1, 'FELIPA FLORES RENDÓN', 53490550, NULL, NULL, '', NULL, '15DES0060G'),
(8, 'ES 354-42 JOSÉ MARTÍ', 2, 1, 'RANULFO BARAQUIEL RUIZ GARCÌA', 53013002, NULL, NULL, '', NULL, '15DES0042R'),
(9, 'ES 354-48 HUÉMAC', 2, 1, 'CLAUDIO VERA GRESS', 52931774, NULL, NULL, '', NULL, '15DES0048L'),
(10, 'ES 354-68 ESTADO DE MÉXICO', 2, 1, 'MARIA DOLORES BLANDINA MARTÌNEZ GONZÁLEZ', 53121801, NULL, NULL, '', NULL, '15DES0068Z'),
(11, 'ES 354-126 FRANCISCO GONZÁLEZ BOCANEGRA', 2, 1, 'GLORIA GÒMEZ CASTRO', 53029446, NULL, NULL, '', NULL, '15DES0251X'),
(12, 'ES 354-218 SOR JUANA INÉS DE LA CRUZ', 2, 1, 'XÒCHIL AZALIA PINEDA SOTELO', 52955211, NULL, NULL, '', NULL, '15DES0340Q'),
(13, 'ES 354-34 LAURO AGUIRRE', 4, 1, 'ROBERTO MONTOYA CITALAN', 53075569, NULL, NULL, '', NULL, '15DES0034I'),
(14, 'ES 354-100 MAHATMA GANDHI', 4, 1, 'LIDIA BERDEJA DÌAZ', 53013451, NULL, NULL, '', NULL, '15DES0221C'),
(15, 'ES 354-101 LIBERTADORES DE AMÉRICA', 4, 1, 'JOSÈ LUIS DÌAZ DE LA CRUZ', 53003080, NULL, NULL, '', NULL, '15DES022B'),
(16, 'ES 354-119 OTILIO MONTAÑO', 4, 1, 'JAVIER ESPINO PÉREZ', 53024672, NULL, NULL, '', NULL, '15DES025V'),
(17, 'ES 754-5 PRIMERO DE MAYO', 5, 1, 'MARÍA INÉS SALGADO ÁLVAREZ', 53181167, NULL, NULL, '', NULL, '15DSN0005V'),
(18, 'ES 354-118 RICARDO FLORES MAGÓN', 5, 1, 'CARLOS CARMELO RAMIREZ BELIO', 89080210, NULL, NULL, '', NULL, '15DES0239B'),
(19, 'ES 354-125 JESUS ROMERO FLORES', 5, 1, 'JOSÈ OROPEZA BARRERA', 53162111, NULL, NULL, '', NULL, '15DES0250Y');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `p_enlace`
-- 

CREATE TABLE `p_enlace` (
  `id_enlace` int(11) NOT NULL,
  `p_espanol` int(255) NOT NULL,
  `p_matematicas` int(255) NOT NULL,
  `p_geografia` int(255) NOT NULL,
  PRIMARY KEY  (`id_enlace`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `p_enlace`
-- 


-- 
-- Filtros para las tablas descargadas (dump)
-- 

-- 
-- Filtros para la tabla `datos_escuela`
-- 
ALTER TABLE `datos_escuela`
  ADD CONSTRAINT `datos_escuela_ibfk_1` FOREIGN KEY (`id_enlace`) REFERENCES `p_enlace` (`id_enlace`);
