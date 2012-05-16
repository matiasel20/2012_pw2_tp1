-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-05-2012 a las 10:52:22
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
  `idAlquiler` int(11) NOT NULL AUTO_INCREMENT,
  `cancha` int(1) unsigned NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `indumentaria` tinyint(1) NOT NULL DEFAULT '0',
  `duchas` tinyint(1) NOT NULL DEFAULT '0',
  `confiteria` tinyint(1) NOT NULL DEFAULT '0',
  `Cliente_idcliente` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idAlquiler`,`Cliente_idcliente`),
  UNIQUE KEY `turno` (`fecha`,`cancha`),
  KEY `fk_Alquiler_Cliente1` (`Cliente_idcliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `alquiler`
--

INSERT INTO `alquiler` (`idAlquiler`, `cancha`, `fecha`, `indumentaria`, `duchas`, `confiteria`, `Cliente_idcliente`) VALUES
(2, 1, '2012-05-16 14:00:00', 0, 0, 0, 7),
(3, 1, '2012-05-16 15:00:00', 0, 0, 0, 7),
(6, 1, '2012-05-16 16:00:00', 0, 0, 0, 7),
(7, 1, '2012-05-16 17:00:00', 0, 0, 0, 7),
(8, 1, '2012-05-16 18:00:00', 0, 0, 0, 7),
(9, 1, '2012-05-16 19:00:00', 0, 0, 0, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `idcliente` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `dni` varchar(11) NOT NULL,
  `fechanac` date NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `localidad` varchar(45) NOT NULL,
  `telcel` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`idcliente`),
  UNIQUE KEY `user_UNIQUE` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='\n	\n					' AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idcliente`, `user`, `nombre`, `apellido`, `dni`, `fechanac`, `direccion`, `localidad`, `telcel`, `email`, `password`) VALUES
(7, 'mach', 'sebastian', 'machado', '333', '0000-00-00', 'san martin', 'rw', '555', 'seba@hotmail.com', '123'),
(9, 'yen', 'nani', 'gensana', '3333', '0000-00-00', 'pepe', 'ahh ', '333', 'matias@hotmail.com', '123'),
(10, 'xxx', 'nada', 'nadin', '9996', '2012-12-12', 'ap bel', 'trelew ', '3333333333333', 'ss@hotmail.com', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE IF NOT EXISTS `compra` (
  `idclienteCompra` int(10) unsigned NOT NULL,
  `cantidad` int(10) unsigned NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Producto_idProducto1` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idclienteCompra`),
  KEY `fk_Producto_copy1_has_Cliente_copy1_Cliente_copy11` (`idclienteCompra`),
  KEY `fk_Compra_Producto1` (`Producto_idProducto1`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
  `idEmpleado` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `dni` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `fechaNac` varchar(45) NOT NULL,
  `tel/cel` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `eMail` varchar(45) NOT NULL,
  PRIMARY KEY (`idEmpleado`),
  UNIQUE KEY `usuario_UNIQUE` (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `stock` int(45) NOT NULL,
  PRIMARY KEY (`idproducto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idproducto`, `codigo`, `descripcion`, `modelo`, `tamanio`, `precio`, `stock`) VALUES
(2, 0, 'pepe', 'dd', 'd', 0.00, 0),
(3, 99, 'pp', '8', '2', 4.00, 1),
(4, 99, 'pp', '8', '2', 4.00, 1),
(5, 99, 'pp', '8', '2', 4.00, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `torneo`
--

CREATE TABLE IF NOT EXISTS `torneo` (
  `idTorneo` int(11) NOT NULL AUTO_INCREMENT,
  `temporada` timestamp NULL DEFAULT NULL,
  `torneo` varchar(45) DEFAULT NULL,
  `campeon` varchar(45) NOT NULL,
  `subcampeon` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idTorneo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alquiler`
--
ALTER TABLE `alquiler`
  ADD CONSTRAINT `alquiler_ibfk_1` FOREIGN KEY (`Cliente_idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `fk_Compra_Producto1` FOREIGN KEY (`Producto_idProducto1`) REFERENCES `producto` (`idProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Producto_copy1_has_Cliente_copy1_Cliente_copy11` FOREIGN KEY (`idclienteCompra`) REFERENCES `cliente` (`idcliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
