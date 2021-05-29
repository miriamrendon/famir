-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2021 a las 20:59:04
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carrito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `imagen` varchar(30) NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `descripcion`, `imagen`, `precio`) VALUES
(1, 'Sueter odry verde', 'ima/sueter1.jpeg', 125),
(2, 'Blusa Algodon', 'ima/algodon1.jpeg', 170),
(3, 'Blusa floreada unitalla (Ch/M)', 'ima/floreada1.jpeg', 130),
(4, 'Blusa floreada unitalla (Ch/M)', 'ima/floreada2.jpeg', 130),
(5, 'Conjunto Disney', 'ima/disney1.jpeg', 135),
(6, 'Conjunto Disney', 'ima/disney2.jpeg', 135),
(7, 'Conjunto Disney', 'ima/disney3.jpeg', 135),
(8, 'Conjunto Disney', 'ima/disney4.jpeg', 165),
(9, 'Conjunto ', 'ima/conjunto1.jpeg', 160),
(10, 'Conjunto ', 'ima/conjunto2.jpeg', 160),
(11, 'Conjunto ', 'ima/conjunto3.jpeg', 160),
(12, 'Blusa floreada unitalla (Ch/M)', 'ima/floreada3.jpeg', 130),
(13, 'Pantalon rayado ', 'ima/panta4.jpeg', 120),
(14, 'Pantalon cuadrado', 'ima/panta5.jpeg', 120),
(15, 'Pantalon cuadrado', 'ima/panta6.jpeg', 120),
(16, 'Pantalon', 'ima/panta7.jpeg', 135),
(17, 'Vestido de cuadros', 'ima/vestido1.jpeg', 120),
(18, 'Blusa floreada unitalla (Ch/M)', 'ima/floreada4.jpeg', 130),
(19, 'Sueter mariposa unitalla (Ch/M/G)', 'ima/sueter2.jpeg', 200),
(20, 'Blusa trenza unitalla (Ch/M)', 'ima/blusa1.jpeg', 165),
(21, 'Blusa manga encaje talla G', 'ima/blusa2.jpeg', 200),
(22, 'Body cierre encaje talla M', 'ima/body.jpeg', 220),
(23, 'Blusa poliester unitalla (Ch/M)', 'ima/blusa3.jpeg', 165),
(24, 'Blusa encaje botones talla M', 'ima/blusa4.jpeg', 200),
(25, 'Blusa encaje flores talla unitalla (Ch/M)', 'ima/blusa5.jpeg', 200),
(26, 'Blusa floreada unitalla (Ch/M)', 'ima/blusa6.jpeg', 200),
(27, 'Shorts mezclilla con cierre talla Ch', 'ima/sh1.jpeg', 250),
(28, 'Vestido Mezclilla talla M', 'ima/vestido22.jpeg', 250),
(29, 'Vestido Mezclilla talla M', 'ima/vestido3.jpeg', 280),
(30, 'Shorts mezclilla M', 'ima/sh2.jpeg', 200),
(31, 'Peto short mezclilla unitalla (Ch/M)', 'ima/p.jpeg', 280),
(32, 'Vestido mezclilla unitalla (Ch/M/G)', 'ima/vestido4.jpeg', 280),
(33, 'Vestido corto mezclilla detalles bordado ', 'ima/vestido5.jpeg', 280),
(34, 'Vestido mezclilla mesh unitalla (Ch/M)', 'ima/v6.jpeg', 250),
(35, 'Pijama Sexy', 'ima/pijama1.jpg', 150),
(36, 'Pijama Sexy', 'ima/pijama2.jpg', 150),
(37, 'Pijama Sexy', 'ima/pijama3.jpg', 150),
(38, 'Pijama Sexy', 'ima/pijama4.jpg', 150),
(39, 'Pijama Sexy', 'ima/pijama5.jpg', 150),
(40, 'Lenceria', 'ima/lenceria1.jpg', 200),
(41, 'Lenceria tipo colegial', 'ima/lenceria2.jpg', 200),
(42, 'Lenceria floreada', 'ima/lenceria3.jpg', 165),
(43, 'Lenceria floreada', 'ima/lenceria4.jpg', 165),
(44, 'Lenceria Floreada', 'ima/lenceria5.jpg', 165),
(45, 'Lenceria negra', 'ima/lenceria8.jpg', 200),
(46, 'Lenceria Sexy Unitalla', 'ima/l1.jpeg', 200),
(47, 'Lenceria Sexy Unitalla', 'ima/l2.jpeg', 200),
(48, 'Lenceria Sexy Unitalla', 'ima/l3.jpeg', 200),
(49, 'Conjunto Rojo Talla Ch', 'ima/conr.jpeg', 250),
(50, 'Conjunto Unitalla (Ch/M)', 'ima/conb.jpeg', 250),
(51, 'Lenceria Transparencias Unitalla (Ch/M)', 'ima/len1.jpeg', 200),
(52, 'Conjunto Floreado Unitalla (Ch/M)', 'ima/conf.jpeg', 250),
(53, 'Conjunto Talla Ch', 'ima/con1.jpeg', 300),
(54, 'Lenceria Sexy Unitalla', 'ima/len3.jpeg', 200),
(55, 'Blusa Unitalla (Ch/M/G)', 'ima/bl.jpeg', 220),
(56, 'Conjunto Floreado Unitalla (Ch/M)', 'ima/con3.jpeg', 270),
(57, 'Conjunto Unitalla (Ch/M)', 'ima/con2.jpeg', 250),
(58, 'Pantalon Verde Unitalla (Ch/M)', 'ima/pa1.jpeg', 300),
(59, 'Lenceria Sexy Unitalla', 'ima/len2.jpeg', 200),
(60, 'Lenceria Sexy Unitalla', 'ima/len4.jpeg', 200),
(61, 'Pantalon Blanco Unitalla (Ch/M)', 'ima/pa2.jpeg', 320),
(62, 'Pijama Luna Unitalla', 'ima/pi2.jpeg', 200),
(63, 'Pijama Unitalla', 'ima/pi1.jpeg', 200),
(64, 'Falda Unitalla (Ch/M)', 'ima/fa1.jpeg', 280),
(65, 'Falda Unitalla (Ch/M)', 'ima/fa2.jpeg', 280),
(66, 'Vestido Unitalla (Ch/M/G)', 'ima/ves1.jpeg', 300),
(67, 'Vestido Unitalla (Ch/M/G)', 'ima/ves2.jpeg', 290),
(68, 'Falda Unitalla (Ch/M)', 'ima/fa3.jpeg', 300);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idVenta` int(11) NOT NULL,
  `totalVenta` double NOT NULL,
  `ivaVenta` double NOT NULL,
  `numProductos` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`idVenta`, `totalVenta`, `ivaVenta`, `numProductos`, `Fecha`, `hora`) VALUES
(1, 1183.2, 163.2, 7, '2021-05-21', '20:00:11'),
(2, 539.4, 74.4, 3, '2021-05-21', '20:02:51'),
(3, 156.6, 21.6, 1, '2021-05-21', '20:08:27'),
(4, 382.8, 52.8, 2, '2021-05-21', '20:12:08'),
(5, 568.4, 78.4, 3, '2021-05-21', '20:26:36'),
(6, 150.8, 20.8, 1, '2021-05-25', '12:15:01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`idVenta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `idVenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
