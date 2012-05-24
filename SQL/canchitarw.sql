-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-05-2012 a las 17:07:47
-- Versión del servidor: 5.1.61
-- Versión de PHP: 5.3.5-1ubuntu7.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `canchitarw`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquiler`
--

CREATE TABLE IF NOT EXISTS `alquiler` (
  `idalquiler` int(11) NOT NULL AUTO_INCREMENT,
  `cancha` int(1) unsigned NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `indumentaria` tinyint(1) NOT NULL DEFAULT '0',
  `duchas` tinyint(1) NOT NULL DEFAULT '0',
  `confiteria` tinyint(1) NOT NULL DEFAULT '0',
  `clienteid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idalquiler`),
  UNIQUE KEY `cancha_UNIQUE` (`cancha`,`fecha`),
  KEY `fk_alquiler_cliente1` (`clienteid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `alquiler`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `idcategoria` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `nombre`) VALUES
(1, 'calzados'),
(2, 'pantalones'),
(3, 'pelotas'),
(4, 'camisetas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `idcliente` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `dni` varchar(45) NOT NULL,
  `fechanac` date NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `localidad` varchar(45) NOT NULL,
  `telcel` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `equipoid` int(11) DEFAULT NULL,
  PRIMARY KEY (`idcliente`),
  UNIQUE KEY `user_UNIQUE` (`user`),
  KEY `fk_Cliente_Equipo1` (`equipoid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='\n	\n					' AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idcliente`, `user`, `nombre`, `apellido`, `dni`, `fechanac`, `direccion`, `localidad`, `telcel`, `email`, `password`, `equipoid`) VALUES
(1, 'sebamach', 'sebastian', 'machado', '987987', '1984-09-13', 'la_casa_de_seba', '1', '45654', 'seba@seba.com', '202cb962ac59075b964b07152d234b70', NULL),
(2, 'kirardigo', 'gabriel', 'figueroa v', '65498777', '1989-03-16', 'la_casa_de_gabriel 78', '1 ', '454545', 'gabriel@gabriel.com', 'd9b1d7db4cd6e70935368a1efb10e377', NULL),
(3, 'matiasel20', 'matias', 'gensana', '4564444', '1984-12-25', 'playa loca', '3', '78787', 'gensan@gensana.com', '202cb962ac59075b964b07152d234b70', NULL),
(4, 'aspirozd', 'dario', 'aspiroz', '7878987', '1935-02-21', 'en frente de seros', '2', '7897878', 'aspirozd@aspirozd.com', '202cb962ac59075b964b07152d234b70', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE IF NOT EXISTS `compra` (
  `idcompra` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cantidad` int(10) unsigned NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `clienteid` int(10) unsigned DEFAULT NULL,
  `productoid` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`idcompra`),
  KEY `fk_Compra_Cliente1` (`clienteid`),
  KEY `fk_compra_producto1` (`productoid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `compra`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
  `idempleado` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `dni` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `fechanac` date NOT NULL,
  `telcel` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`idempleado`),
  UNIQUE KEY `usuario_UNIQUE` (`usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idempleado`, `nombre`, `apellido`, `dni`, `direccion`, `fechanac`, `telcel`, `usuario`, `password`, `email`) VALUES
(1, 'juan', 'perez', '123456789', 'en su casa', '1987-03-03', '123456789', 'master', '123', 'master@master.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE IF NOT EXISTS `equipo` (
  `idequipo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `torneoid` int(11) NOT NULL,
  PRIMARY KEY (`idequipo`),
  KEY `fk_Equipo_Torneo1` (`torneoid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `equipo`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `idproducto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `codigo` int(10) unsigned NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `modelo` varchar(45) NOT NULL,
  `tamanio` varchar(45) DEFAULT NULL,
  `precio` decimal(5,2) unsigned NOT NULL,
  `stock` varchar(45) NOT NULL,
  `categoriaid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idproducto`),
  KEY `fk_producto_categoria1` (`categoriaid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `producto`
--

INSERT INTO `producto` (`idproducto`, `codigo`, `descripcion`, `modelo`, `tamanio`, `precio`, `stock`, `categoriaid`) VALUES
(1, 123456789, 'pantalon_corto', 'playa', 'grande', '45.26', '4', 2),
(2, 1234567777, 'botin verde', 'del valle', '42', '199.99', '6', 1),
(3, 12365455, 'botines naranjas topper', 'nike', 'grande', '12.00', '8', 1),
(4, 6546666, 'pelota adida', 'adida nro 5', 'grande 5', '99.99', '4', 3),
(5, 7897789, 'camiseta de azul', 'topper', 'grande xl', '78.50', '3', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `torneo`
--

CREATE TABLE IF NOT EXISTS `torneo` (
  `idtorneo` int(11) NOT NULL AUTO_INCREMENT,
  `temporada` timestamp NULL DEFAULT NULL,
  `torneo` varchar(45) DEFAULT NULL,
  `campeon` varchar(45) NOT NULL,
  `subcampeon` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtorneo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `torneo`
--


--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `alquiler`
--
ALTER TABLE `alquiler`
  ADD CONSTRAINT `fk_alquiler_cliente1` FOREIGN KEY (`clienteid`) REFERENCES `cliente` (`idcliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_Cliente_Equipo1` FOREIGN KEY (`equipoid`) REFERENCES `equipo` (`idequipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `fk_Compra_Cliente1` FOREIGN KEY (`clienteid`) REFERENCES `cliente` (`idcliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_compra_producto1` FOREIGN KEY (`productoid`) REFERENCES `producto` (`idproducto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `fk_Equipo_Torneo1` FOREIGN KEY (`torneoid`) REFERENCES `torneo` (`idtorneo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_producto_categoria1` FOREIGN KEY (`categoriaid`) REFERENCES `categoria` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;
