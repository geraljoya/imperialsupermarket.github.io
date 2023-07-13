-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2018 a las 15:59:42
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `productos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alqueria`
--

CREATE TABLE `alqueria` (
  `id_alqueria` int(100) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `nombre` varchar(2000) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `precio` int(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alqueria`
--

INSERT INTO `alqueria` (`id_alqueria`, `tipo`, `nombre`, `imagen`, `precio`, `descripcion`) VALUES
(1, 'lacteos2', 'leche', 'img/img/entera_alqueria.png', 2700, 'Entera x 1100');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banano`
--

CREATE TABLE `banano` (
  `id` int(100) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `nombre` varchar(2000) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `precio` int(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `banano`
--

INSERT INTO `banano` (`id`, `tipo`, `nombre`, `imagen`, `precio`, `descripcion`) VALUES
(1, 'frutas2', 'frutas', 'img/img/banano.png', 1300, 'Banano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deslactosada`
--

CREATE TABLE `deslactosada` (
  `id_deslactosada` int(100) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `nombre` varchar(2000) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `precio` int(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `deslactosada`
--

INSERT INTO `deslactosada` (`id_deslactosada`, `tipo`, `nombre`, `imagen`, `precio`, `descripcion`) VALUES
(1, 'lacteos1', 'leche', 'img/img/alqueria_deslactosada.png', 3000, 'Deslactosada x 1100');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frijol`
--

CREATE TABLE `frijol` (
  `id` int(100) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `nombre` varchar(2000) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `precio` int(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `frijol`
--

INSERT INTO `frijol` (`id`, `tipo`, `nombre`, `imagen`, `precio`, `descripcion`) VALUES
(1, 'grano2', 'frijol', 'img/img/frijol.png', 4200, 'Frijol x Lb ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frutas`
--

CREATE TABLE `frutas` (
  `id` int(100) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `nombre` varchar(2000) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `precio` int(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `frutas`
--

INSERT INTO `frutas` (`id`, `tipo`, `nombre`, `imagen`, `precio`, `descripcion`) VALUES
(1, 'frutas1', 'frutas', 'img/img/tomate.png', 2200, 'Tomate');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `leche`
--

CREATE TABLE `leche` (
  `id` int(100) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `nombre` varchar(2000) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `precio` int(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `leche`
--

INSERT INTO `leche` (`id`, `tipo`, `nombre`, `imagen`, `precio`, `descripcion`) VALUES
(1, 'lacteos4', 'leche', 'img/img/entera_alpina.png', 2700, 'Alpina Entera x 1100');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lenteja`
--

CREATE TABLE `lenteja` (
  `id` int(100) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `nombre` varchar(2000) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `precio` int(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lenteja`
--

INSERT INTO `lenteja` (`id`, `tipo`, `nombre`, `imagen`, `precio`, `descripcion`) VALUES
(1, 'grano3', 'lenteja', 'img/img/lenteja.png', 4200, 'Lenteja x Lb');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mandarina`
--

CREATE TABLE `mandarina` (
  `id` int(100) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `nombre` varchar(2000) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `precio` int(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mandarina`
--

INSERT INTO `mandarina` (`id`, `tipo`, `nombre`, `imagen`, `precio`, `descripcion`) VALUES
(1, 'frutas3', 'frutas', 'img/img/mandarina.png', 1900, 'Mandarina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mustang`
--

CREATE TABLE `mustang` (
  `id` int(100) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `nombre` varchar(2000) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `precio` int(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mustang`
--

INSERT INTO `mustang` (`id`, `tipo`, `nombre`, `imagen`, `precio`, `descripcion`) VALUES
(1, 'bebidas1', 'cigarro', 'img/img/mustang.png', 3200, 'Mustang x 1/2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nectar`
--

CREATE TABLE `nectar` (
  `id` int(100) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `nombre` varchar(2000) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `precio` int(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nectar`
--

INSERT INTO `nectar` (`id`, `tipo`, `nombre`, `imagen`, `precio`, `descripcion`) VALUES
(1, 'bebidas3', 'trago', 'img/img/nectar.png', 14000, 'Nectar x 1/2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasta`
--

CREATE TABLE `pasta` (
  `id` int(100) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `nombre` varchar(2000) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `precio` int(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pasta`
--

INSERT INTO `pasta` (`id`, `tipo`, `nombre`, `imagen`, `precio`, `descripcion`) VALUES
(1, 'grano1', 'pasta', 'img/img/spageti.png', 1700, 'Spageti x 1/2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poker`
--

CREATE TABLE `poker` (
  `id` int(100) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `nombre` varchar(2000) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `precio` int(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `poker`
--

INSERT INTO `poker` (`id`, `tipo`, `nombre`, `imagen`, `precio`, `descripcion`) VALUES
(1, 'bebidas5', 'pola', 'img/img/poker.png', 2200, 'Poker lata x und');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alqueria`
--
ALTER TABLE `alqueria`
  ADD PRIMARY KEY (`id_alqueria`);

--
-- Indices de la tabla `banano`
--
ALTER TABLE `banano`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `deslactosada`
--
ALTER TABLE `deslactosada`
  ADD PRIMARY KEY (`id_deslactosada`);

--
-- Indices de la tabla `frijol`
--
ALTER TABLE `frijol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `frutas`
--
ALTER TABLE `frutas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `leche`
--
ALTER TABLE `leche`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lenteja`
--
ALTER TABLE `lenteja`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mandarina`
--
ALTER TABLE `mandarina`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mustang`
--
ALTER TABLE `mustang`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nectar`
--
ALTER TABLE `nectar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pasta`
--
ALTER TABLE `pasta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `poker`
--
ALTER TABLE `poker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alqueria`
--
ALTER TABLE `alqueria`
  MODIFY `id_alqueria` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `banano`
--
ALTER TABLE `banano`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `deslactosada`
--
ALTER TABLE `deslactosada`
  MODIFY `id_deslactosada` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `frijol`
--
ALTER TABLE `frijol`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `frutas`
--
ALTER TABLE `frutas`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `leche`
--
ALTER TABLE `leche`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `lenteja`
--
ALTER TABLE `lenteja`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `mandarina`
--
ALTER TABLE `mandarina`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `mustang`
--
ALTER TABLE `mustang`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `nectar`
--
ALTER TABLE `nectar`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pasta`
--
ALTER TABLE `pasta`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `poker`
--
ALTER TABLE `poker`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
