-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-06-2022 a las 05:05:46
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
-- Base de datos: `cliniclab`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `COD` int(11) NOT NULL,
  `CORREO` varchar(255) NOT NULL,
  `CONTRASENA` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`COD`, `CORREO`, `CONTRASENA`) VALUES
(1, 'hola1@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frec_cardiaca`
--

CREATE TABLE `frec_cardiaca` (
  `COD` int(11) NOT NULL,
  `RANGO_CARDIACO` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `frec_cardiaca`
--

INSERT INTO `frec_cardiaca` (`COD`, `RANGO_CARDIACO`) VALUES
(1, 'Bajo (10 Palpitaciones x Minuto)'),
(2, 'Muy alto (40 Palpitaciones x Minuto)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frec_respiratoria`
--

CREATE TABLE `frec_respiratoria` (
  `COD` int(11) NOT NULL,
  `RANGO_RESPIRATORIO` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `frec_respiratoria`
--

INSERT INTO `frec_respiratoria` (`COD`, `RANGO_RESPIRATORIO`) VALUES
(1, 'Bajo (10 Respiraciones x Minuto)'),
(3, 'Muy Alto (Hiperventilación)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_link`
--

CREATE TABLE `img_link` (
  `COD` int(11) NOT NULL,
  `RUTA` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `img_link`
--

INSERT INTO `img_link` (`COD`, `RUTA`) VALUES
(1, 'img/rcp.png'),
(2, 'img/hemlich.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maniobra`
--

CREATE TABLE `maniobra` (
  `COD` int(11) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `DESCRIPCION` varchar(255) NOT NULL,
  `IMG` int(11) NOT NULL,
  `TIPO_DOLOR` int(11) NOT NULL,
  `TIPO_URGENCIA` int(11) NOT NULL,
  `FREC_CARDIACA` int(11) NOT NULL,
  `FREC_RESPIRATORIA` int(11) NOT NULL,
  `CONCIENCIA` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `maniobra`
--

INSERT INTO `maniobra` (`COD`, `NOMBRE`, `DESCRIPCION`, `IMG`, `TIPO_DOLOR`, `TIPO_URGENCIA`, `FREC_CARDIACA`, `FREC_RESPIRATORIA`, `CONCIENCIA`) VALUES
(1, 'RCP', 'Pon tus manitos en la parte torácica de la persona, luego haz ligeras presiones en el pecho de manera perpendicular a su torso a un ritmo entre 90 110 rpm, ', 1, 1, 1, 1, 1, 1),
(2, 'Maniobra Hemlich', 'En el sector del pecho desde la clavícula a la altura de la segunda costilla realizar movimientos en presión de manera circular', 2, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sol_mod_maniobra`
--

CREATE TABLE `sol_mod_maniobra` (
  `COD` int(11) NOT NULL,
  `ADMINISTRADOR` int(11) NOT NULL,
  `MANIOBRA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sol_mod_tratamiento`
--

CREATE TABLE `sol_mod_tratamiento` (
  `COD` int(11) NOT NULL,
  `ADMINISTRADOR` int(11) NOT NULL,
  `TRATAMIENTO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_dolor`
--

CREATE TABLE `tipo_dolor` (
  `COD` int(11) NOT NULL,
  `DESC_DOLOR` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_dolor`
--

INSERT INTO `tipo_dolor` (`COD`, `DESC_DOLOR`) VALUES
(1, 'Punzante'),
(2, 'Intermitente'),
(3, 'Zonal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_urgencia`
--

CREATE TABLE `tipo_urgencia` (
  `COD` int(11) NOT NULL,
  `DESC_URGENCIA` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_urgencia`
--

INSERT INTO `tipo_urgencia` (`COD`, `DESC_URGENCIA`) VALUES
(1, 'Desmayo/Inconciencia'),
(3, 'Herida grave');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamiento`
--

CREATE TABLE `tratamiento` (
  `COD` int(11) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `DESCRIPCION` varchar(255) NOT NULL,
  `IMG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`COD`),
  ADD UNIQUE KEY `CORREO` (`CORREO`);

--
-- Indices de la tabla `frec_cardiaca`
--
ALTER TABLE `frec_cardiaca`
  ADD PRIMARY KEY (`COD`);

--
-- Indices de la tabla `frec_respiratoria`
--
ALTER TABLE `frec_respiratoria`
  ADD PRIMARY KEY (`COD`);

--
-- Indices de la tabla `img_link`
--
ALTER TABLE `img_link`
  ADD PRIMARY KEY (`COD`);

--
-- Indices de la tabla `maniobra`
--
ALTER TABLE `maniobra`
  ADD PRIMARY KEY (`COD`),
  ADD KEY `MANIOBRA_IMAGEN` (`IMG`),
  ADD KEY `MANIOBRA_TIPO_DOLOR` (`TIPO_DOLOR`),
  ADD KEY `MANIOBRA_TIPO_URGENCIA` (`TIPO_URGENCIA`),
  ADD KEY `MANIOBRA_FREC_CARDIACA` (`FREC_CARDIACA`),
  ADD KEY `MANIOBRA_FREC_RESPIRATORIA` (`FREC_RESPIRATORIA`);

--
-- Indices de la tabla `sol_mod_maniobra`
--
ALTER TABLE `sol_mod_maniobra`
  ADD PRIMARY KEY (`COD`),
  ADD KEY `SOLMODMAN_ADMINISTRADOR` (`ADMINISTRADOR`),
  ADD KEY `SOLMODMAN_MANIOBRA` (`MANIOBRA`);

--
-- Indices de la tabla `sol_mod_tratamiento`
--
ALTER TABLE `sol_mod_tratamiento`
  ADD PRIMARY KEY (`COD`),
  ADD KEY `SOLMODTRA_TRATAMIENTO` (`TRATAMIENTO`);

--
-- Indices de la tabla `tipo_dolor`
--
ALTER TABLE `tipo_dolor`
  ADD PRIMARY KEY (`COD`);

--
-- Indices de la tabla `tipo_urgencia`
--
ALTER TABLE `tipo_urgencia`
  ADD PRIMARY KEY (`COD`);

--
-- Indices de la tabla `tratamiento`
--
ALTER TABLE `tratamiento`
  ADD PRIMARY KEY (`COD`),
  ADD KEY `TRATAMIENTO_IMAGEN` (`IMG`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `COD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `frec_cardiaca`
--
ALTER TABLE `frec_cardiaca`
  MODIFY `COD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `frec_respiratoria`
--
ALTER TABLE `frec_respiratoria`
  MODIFY `COD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `img_link`
--
ALTER TABLE `img_link`
  MODIFY `COD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `maniobra`
--
ALTER TABLE `maniobra`
  MODIFY `COD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sol_mod_maniobra`
--
ALTER TABLE `sol_mod_maniobra`
  MODIFY `COD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sol_mod_tratamiento`
--
ALTER TABLE `sol_mod_tratamiento`
  MODIFY `COD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_dolor`
--
ALTER TABLE `tipo_dolor`
  MODIFY `COD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_urgencia`
--
ALTER TABLE `tipo_urgencia`
  MODIFY `COD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tratamiento`
--
ALTER TABLE `tratamiento`
  MODIFY `COD` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `maniobra`
--
ALTER TABLE `maniobra`
  ADD CONSTRAINT `MANIOBRA_FREC_CARDIACA` FOREIGN KEY (`FREC_CARDIACA`) REFERENCES `frec_cardiaca` (`COD`),
  ADD CONSTRAINT `MANIOBRA_FREC_RESPIRATORIA` FOREIGN KEY (`FREC_RESPIRATORIA`) REFERENCES `frec_respiratoria` (`COD`),
  ADD CONSTRAINT `MANIOBRA_IMAGEN` FOREIGN KEY (`IMG`) REFERENCES `img_link` (`COD`),
  ADD CONSTRAINT `MANIOBRA_TIPO_DOLOR` FOREIGN KEY (`TIPO_DOLOR`) REFERENCES `tipo_dolor` (`COD`),
  ADD CONSTRAINT `MANIOBRA_TIPO_URGENCIA` FOREIGN KEY (`TIPO_URGENCIA`) REFERENCES `tipo_urgencia` (`COD`);

--
-- Filtros para la tabla `sol_mod_maniobra`
--
ALTER TABLE `sol_mod_maniobra`
  ADD CONSTRAINT `SOLMODMAN_ADMINISTRADOR` FOREIGN KEY (`ADMINISTRADOR`) REFERENCES `administrador` (`COD`),
  ADD CONSTRAINT `SOLMODMAN_MANIOBRA` FOREIGN KEY (`MANIOBRA`) REFERENCES `maniobra` (`COD`);

--
-- Filtros para la tabla `sol_mod_tratamiento`
--
ALTER TABLE `sol_mod_tratamiento`
  ADD CONSTRAINT `SOLMODTRA_TRATAMIENTO` FOREIGN KEY (`TRATAMIENTO`) REFERENCES `tratamiento` (`COD`);

--
-- Filtros para la tabla `tratamiento`
--
ALTER TABLE `tratamiento`
  ADD CONSTRAINT `TRATAMIENTO_IMAGEN` FOREIGN KEY (`IMG`) REFERENCES `img_link` (`COD`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
