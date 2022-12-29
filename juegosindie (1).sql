-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-12-2021 a las 19:02:52
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `juegosindie`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `cate_codigo` varchar(20) NOT NULL,
  `cate_nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consola`
--

CREATE TABLE `consola` (
  `con_codigo` varchar(20) NOT NULL,
  `con_nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juego`
--

CREATE TABLE `juego` (
  `jue_codigo` int(10) NOT NULL,
  `jue_nombre` varchar(50) NOT NULL,
  `jue_calificacion` varchar(1) NOT NULL,
  `cate_codigo` varchar(20) NOT NULL,
  `jue_descripcion` varchar(1000) DEFAULT NULL,
  `con_codigo` varchar(25) NOT NULL,
  `jue_img` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listado`
--

CREATE TABLE `listado` (
  `list` int(10) NOT NULL,
  `jue_codigo` int(10) DEFAULT NULL,
  `usu_codigo` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `usu_codigo` int(2) NOT NULL,
  `rol` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usu_codigo` int(10) NOT NULL,
  `usu_nombre` varchar(50) NOT NULL,
  `usu_correo` varchar(100) NOT NULL,
  `usu_pass` varchar(255) NOT NULL,
  `tipo_usu` tinyint(1) NOT NULL DEFAULT 0,
  `rol_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usu_codigo`, `usu_nombre`, `usu_correo`, `usu_pass`, `tipo_usu`, `rol_id`) VALUES
(16, 'Antonio', 'antoniodiazabarca@hotmail.com', 'antonio', 0, 0),
(17, 'antonio10009', 'antodiaz@hotmail.com', '123456', 0, 0),
(19, 'Diego', 'diego@hotmail.com', '12345', 0, 0),
(20, 'Eduardo', 'eduardo@hotmail.com', '123456', 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cate_codigo`);

--
-- Indices de la tabla `consola`
--
ALTER TABLE `consola`
  ADD PRIMARY KEY (`con_codigo`);

--
-- Indices de la tabla `juego`
--
ALTER TABLE `juego`
  ADD PRIMARY KEY (`jue_codigo`),
  ADD KEY `cate1` (`cate_codigo`),
  ADD KEY `cons1` (`con_codigo`);

--
-- Indices de la tabla `listado`
--
ALTER TABLE `listado`
  ADD PRIMARY KEY (`list`),
  ADD KEY `jue1` (`jue_codigo`),
  ADD KEY `usu1` (`usu_codigo`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`usu_codigo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `juego`
--
ALTER TABLE `juego`
  MODIFY `jue_codigo` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `usu_codigo` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usu_codigo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `juego`
--
ALTER TABLE `juego`
  ADD CONSTRAINT `cate1` FOREIGN KEY (`cate_codigo`) REFERENCES `categoria` (`cate_codigo`),
  ADD CONSTRAINT `cons1` FOREIGN KEY (`con_codigo`) REFERENCES `consola` (`con_codigo`);

--
-- Filtros para la tabla `listado`
--
ALTER TABLE `listado`
  ADD CONSTRAINT `jue1` FOREIGN KEY (`jue_codigo`) REFERENCES `juego` (`jue_codigo`),
  ADD CONSTRAINT `usu1` FOREIGN KEY (`usu_codigo`) REFERENCES `usuario` (`usu_codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
