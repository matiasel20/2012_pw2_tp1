-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-05-2012 a las 20:40:43
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `canchita2`
--
CREATE DATABASE `canchita2` DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci;
USE `canchita2`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `idproductos` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `codigo` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `precio` float NOT NULL,
  PRIMARY KEY (`idproductos`),
  UNIQUE KEY `idproductos_UNIQUE` (`idproductos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuarios` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `apellido` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `pass` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`idusuarios`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `nombre`, `apellido`, `pass`) VALUES
(1, 'sebastian', 'machado', 'machado'),
(2, 'matias', 'gensana', 'gensana'),
(5, 'dario', 'aspiroz', 'aspiroz'),
(6, 'gabriel', 'figueroa', 'figueroa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
