-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-12-2022 a las 22:52:23
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id_paciente` int(12) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `edad` int(6) NOT NULL,
  `sintoma` varchar(60) NOT NULL,
  `sala` varchar(12) NOT NULL,
  `fecha_registro` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id_paciente`, `nombre`, `edad`, `sintoma`, `sala`, `fecha_registro`) VALUES
(1, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(2, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(3, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(4, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(5, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(6, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(7, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(8, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(9, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(10, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(11, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(12, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(13, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(14, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(15, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(16, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(17, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(18, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(19, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(20, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(21, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(22, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(23, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(24, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(25, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(26, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(27, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(28, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(29, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(30, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(31, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(32, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(33, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(34, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(35, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(36, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(37, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(38, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(39, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(40, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(41, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(42, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(43, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(44, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(45, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(46, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(47, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(48, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(49, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(50, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(51, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(52, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(53, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(54, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(55, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(56, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(57, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(58, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(59, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(60, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(61, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(62, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(63, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(64, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(65, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(66, 'Pablo Abarca', 26, 'Fiebre Alta', '4E', 28),
(67, 'Antonio', 22, 'Fiebre Alta', '4E', 28),
(68, 'Antonio', 22, 'Fiebre Alta', '4E', 28);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id_paciente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id_paciente` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
