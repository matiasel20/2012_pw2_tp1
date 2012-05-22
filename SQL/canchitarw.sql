-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-05-2012 a las 20:30:54
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `alquiler`
--

INSERT INTO `alquiler` (`idalquiler`, `cancha`, `fecha`, `indumentaria`, `duchas`, `confiteria`, `clienteid`) VALUES
(1, 1, '2012-05-20 12:00:00', 0, 0, 0, 1),
(2, 1, '2012-05-20 11:00:00', 0, 0, 0, 1),
(3, 1, '2012-05-20 15:00:00', 0, 0, 0, 1),
(4, 1, '2012-05-20 14:00:00', 0, 0, 0, 1),
(5, 1, '2012-05-20 16:00:00', 0, 0, 0, 1),
(6, 1, '2012-05-20 18:00:00', 0, 0, 0, 1),
(7, 1, '2012-05-20 17:00:00', 0, 0, 0, 1),
(8, 1, '2012-05-20 19:00:00', 0, 0, 0, 1),
(9, 1, '2012-05-20 13:00:00', 1, 0, 0, 1),
(10, 1, '2012-05-20 20:00:00', 0, 1, 0, 1),
(11, 1, '2012-05-22 11:00:00', 0, 0, 0, 1),
(12, 1, '2012-05-20 21:00:00', 0, 0, 1, 1),
(13, 1, '2012-05-21 22:00:00', 0, 0, 0, 3),
(14, 2, '2012-05-21 23:00:00', 0, 0, 0, 3),
(15, 3, '2012-05-22 12:00:00', 0, 0, 0, 3);

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
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `nombre`) VALUES
(1, 'calzados'),
(2, 'pelotas'),
(3, 'pantalones'),
(4, 'medias');

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
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idcliente`, `user`, `nombre`, `apellido`, `dni`, `fechanac`, `direccion`, `localidad`, `telcel`, `email`, `password`, `equipoid`) VALUES
(1, 'sebamach', 'sebastian', 'machado', '30000000', '0000-00-00', 'antartida', '1', '154', 'seba_rw84@hotmail.com', '202cb962ac59075b964b07152d234b70', NULL),
(2, 'matiasel20', 'matias', 'gensana', '6666666666', '0000-00-00', 'playa', '1 ', '155', 'matiasel20@hotmail.com', 'd9b1d7db4cd6e70935368a1efb10e377', NULL),
(3, 'kirardigo', 'gabriel', 'figueroa', '666', '0000-00-00', 'nose', '1', '155', 'kirardigo@yahoo.com.ar', '202cb962ac59075b964b07152d234b70', NULL),
(4, 'aspirozd', 'dario', 'aspiroz', '4444444444', '0000-00-00', 'conesa', '1', '1555445454', 'aspirozd@hotmail.com', '202cb962ac59075b964b07152d234b70', NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`idcompra`, `cantidad`, `fecha`, `clienteid`, `productoid`) VALUES
(1, 1, '2012-05-21 16:38:02', 2, 1),
(2, 1, '2012-05-21 16:38:10', 2, 1),
(3, 1, '2012-05-21 16:38:49', 2, 1),
(4, 1, '2012-05-21 16:38:56', 2, 2),
(7, 1, '2012-05-21 21:13:05', 2, 1),
(9, 1, '2012-05-21 21:16:30', 1, 2),
(10, 1, '2012-05-21 21:37:18', 1, 2),
(11, 1, '2012-05-21 21:40:43', 1, 2),
(12, 1, '2012-05-21 21:42:08', 1, 2),
(13, 1, '2012-05-21 21:45:44', 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
  `idempleado` int(11) NOT NULL AUTO_INCREMENT,
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
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idempleado`, `nombre`, `apellido`, `dni`, `direccion`, `fechanac`, `telcel`, `usuario`, `password`, `email`) VALUES
(1, 'juan', 'perez', '44555444', 'los alomos', '0000-00-00', '154667788', 'juanperez', '123', 'juanperez@hotmail.com');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idproducto`, `codigo`, `descripcion`, `modelo`, `tamanio`, `precio`, `stock`, `categoriaid`) VALUES
(1, 1234, 'pelota adidas', 'hajsgd45', 'grande 5', 190.66, '0', 2),
(2, 543543, 'pantaloncillos cortos', 'playa de verano 45', 'mediano', 30.00, '6', 3);

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
-- Restricciones para tablas volcadas
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
