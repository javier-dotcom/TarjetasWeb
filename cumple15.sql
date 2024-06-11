-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2024 a las 15:51:39
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cumple15`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `celiaco` bit(1) DEFAULT b'0',
  `vegetariano` bit(1) DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dress_code`
--

CREATE TABLE `dress_code` (
  `id` int(11) NOT NULL,
  `texto1` varchar(255) DEFAULT NULL,
  `texto2` varchar(255) DEFAULT NULL,
  `texto3` varchar(255) DEFAULT NULL,
  `texto4` varchar(255) DEFAULT NULL,
  `texto5` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `nombre_cumpleanera` varchar(255) NOT NULL,
  `fecha_evento` date NOT NULL,
  `hora_evento` time NOT NULL,
  `lugar_evento` varchar(255) NOT NULL,
  `direccion_evento` varchar(255) NOT NULL,
  `imagen_cumpleanera1` varchar(255) DEFAULT NULL,
  `imagen_cumpleanera2` varchar(255) DEFAULT NULL,
  `imagen_cumpleanera3` varchar(255) DEFAULT NULL,
  `imagen_cumpleanera4` varchar(255) DEFAULT NULL,
  `imagen_cumpleanera5` varchar(255) DEFAULT NULL,
  `fondo` varchar(255) DEFAULT NULL,
  `id_frase_para_asistencia` int(11) DEFAULT NULL,
  `id_frase_para_canciones` int(11) DEFAULT NULL,
  `id_frase_para_mensaje` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frases_para_asistencia`
--

CREATE TABLE `frases_para_asistencia` (
  `id` int(11) NOT NULL,
  `texto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frases_para_canciones`
--

CREATE TABLE `frases_para_canciones` (
  `id` int(11) NOT NULL,
  `texto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frases_para_mensaje`
--

CREATE TABLE `frases_para_mensaje` (
  `id` int(11) NOT NULL,
  `texto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL,
  `texto` text NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `id_evento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas_musicales`
--

CREATE TABLE `temas_musicales` (
  `id` int(11) NOT NULL,
  `nombre_solicitante` varchar(255) NOT NULL,
  `nombre_cancion` varchar(255) NOT NULL,
  `cantante` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_evento` (`id_evento`);

--
-- Indices de la tabla `dress_code`
--
ALTER TABLE `dress_code`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_frase_para_asistencia` (`id_frase_para_asistencia`),
  ADD KEY `fk_frase_para_canciones` (`id_frase_para_canciones`),
  ADD KEY `fk_frase_para_mensaje` (`id_frase_para_mensaje`);

--
-- Indices de la tabla `frases_para_asistencia`
--
ALTER TABLE `frases_para_asistencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `frases_para_canciones`
--
ALTER TABLE `frases_para_canciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `frases_para_mensaje`
--
ALTER TABLE `frases_para_mensaje`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_evento` (`id_evento`);

--
-- Indices de la tabla `temas_musicales`
--
ALTER TABLE `temas_musicales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dress_code`
--
ALTER TABLE `dress_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `frases_para_asistencia`
--
ALTER TABLE `frases_para_asistencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `frases_para_canciones`
--
ALTER TABLE `frases_para_canciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `frases_para_mensaje`
--
ALTER TABLE `frases_para_mensaje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `temas_musicales`
--
ALTER TABLE `temas_musicales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `asistencia_ibfk_1` FOREIGN KEY (`id_evento`) REFERENCES `eventos` (`id`);

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `fk_frase_para_asistencia` FOREIGN KEY (`id_frase_para_asistencia`) REFERENCES `frases_para_asistencia` (`id`),
  ADD CONSTRAINT `fk_frase_para_canciones` FOREIGN KEY (`id_frase_para_canciones`) REFERENCES `frases_para_canciones` (`id`),
  ADD CONSTRAINT `fk_frase_para_mensaje` FOREIGN KEY (`id_frase_para_mensaje`) REFERENCES `frases_para_mensaje` (`id`);

--
-- Filtros para la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD CONSTRAINT `fk_evento` FOREIGN KEY (`id_evento`) REFERENCES `eventos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
