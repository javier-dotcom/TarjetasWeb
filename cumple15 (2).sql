-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2024 a las 19:10:14
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

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id`, `nombre`, `apellido`, `id_evento`, `celiaco`, `vegetariano`) VALUES
(4, 'uu', 'yyy', 6, b'1', b'0'),
(5, 'Leo', 'Paris', 6, b'0', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dress_code_new`
--

CREATE TABLE `dress_code_new` (
  `id` int(11) NOT NULL,
  `texto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `dress_code_new`
--

INSERT INTO `dress_code_new` (`id`, `texto`) VALUES
(1, 'Formal para la noche.'),
(2, 'Casual chic para <br>un ambiente relajado.'),
(3, 'Etiqueta negra,<br> vístete para impresionar.'),
(4, 'Vibras de verano,<br> atuendos coloridos.'),
(5, 'Casual de negocios, <br>cómodo pero profesional.'),
(6, 'Tema vintage, vístete<br> de tu época favorita.'),
(7, 'Ropa de playa, <br>celebración junto al mar.'),
(8, 'Fiesta de disfraces,<br> deja brillar tu creatividad.'),
(9, 'Atuendo deportivo<br> para actividades divertidas.'),
(10, 'Noche glamorosa, brilla y destácate.');

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
  `imagen_cumpleanera1` longblob DEFAULT NULL,
  `imagen_cumpleanera2` longblob DEFAULT NULL,
  `imagen_cumpleanera3` longblob DEFAULT NULL,
  `imagen_cumpleanera4` longblob DEFAULT NULL,
  `imagen_cumpleanera5` longblob DEFAULT NULL,
  `fondo` varchar(255) DEFAULT NULL,
  `id_frase_para_asistencia` int(11) DEFAULT NULL,
  `id_frase_para_canciones` int(11) DEFAULT NULL,
  `id_frase_para_mensaje` int(11) DEFAULT NULL,
  `id_dress_code` int(2) NOT NULL,
  `id_frase_para_regalo` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `nombre_cumpleanera`, `fecha_evento`, `hora_evento`, `lugar_evento`, `direccion_evento`, `imagen_cumpleanera1`, `imagen_cumpleanera2`, `imagen_cumpleanera3`, `imagen_cumpleanera4`, `imagen_cumpleanera5`, `fondo`, `id_frase_para_asistencia`, `id_frase_para_canciones`, `id_frase_para_mensaje`, `id_dress_code`, `id_frase_para_regalo`) VALUES
(6, 'Antu-Malen', '2024-05-25', '20:03:00', 'Salon Algo', 'Mitre 3994', 0x68747470733a2f2f64726976652e676f6f676c652e636f6d2f7468756d626e61696c3f69643d3153426c6d6878395446456f6771765a6f6e73686c39724b63624162653973416e, 0x68747470733a2f2f64726976652e676f6f676c652e636f6d2f7468756d626e61696c3f69643d31555a6b46746f517862644e4e2d576b5f71674a4d705a50386b722d33625a6150, 0x68747470733a2f2f64726976652e676f6f676c652e636f6d2f7468756d626e61696c3f69643d314f4f77716739684a4f6f453462706c49705436353358464a7a544153435f4232, 0x68747470733a2f2f64726976652e676f6f676c652e636f6d2f7468756d626e61696c3f69643d31694f776657305632636966596846754b567833566c626f6445304f7161477564, 0x68747470733a2f2f64726976652e676f6f676c652e636f6d2f7468756d626e61696c3f69643d3143626c4a31627a653069744c634b42646a524c67413341676d59785566454459, '24', 1, 2, 3, 6, 4),
(7, 'Antu-Malen', '2024-05-25', '20:03:00', 'Salon Algo', 'Mitre 3994', NULL, NULL, NULL, NULL, NULL, '2', 1, 2, 3, 4, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frases_para_asistencia`
--

CREATE TABLE `frases_para_asistencia` (
  `id` int(11) NOT NULL,
  `texto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `frases_para_asistencia`
--

INSERT INTO `frases_para_asistencia` (`id`, `texto`) VALUES
(1, '¡Hola! Estoy feliz de celebrar mi cumpleaños con vos. Unite a mí para compartir momentos especiales en mi fiesta. ¡No te lo pierdas! ¡Te espero con ganas para disfrutar juntos! Confirma asistencia abajo.'),
(2, '¡Hola! Mi cumpleaños se acerca y quiero celebrarlo vos. Vení a compartir momentos especiales en mi fiesta. ¡No te lo pierdas! ¡Te espero con emoción para celebrar juntos! Confirma asistencia abajo.'),
(3, '¡Hola! Estoy feliz de celebrar mi cumpleaños y quiero que estés ahí. Vení a compartir momentos inolvidables en mi fiesta. ¡No faltes! ¡Te espero con ilusión para celebrar juntos! Confirma asistencia abajo.'),
(4, '¡Hola! Mi cumpleaños será pronto y quiero que formes parte. Vení a disfrutar de momentos especiales en mi fiesta. ¡No te lo pierdas! ¡Te espero con entusiasmo para celebrar juntos! Confirma asistencia abajo.'),
(5, '¡Hola! Mi cumpleaños se acerca y quiero que celebres conmigo. Vení a disfrutar de momentos únicos en mi fiesta. ¡No te lo pierdas! ¡Te espero con emoción para celebrar juntos! Confirma asistencia abajo.'),
(6, '¡Hola! Estoy emocionada por mi cumpleaños y quiero que estés presente. Vení a compartir alegría y momentos únicos en mi fiesta. ¡No faltes! ¡Te espero con ansias para celebrar juntos! Confirma asistencia abajo.'),
(7, '¡Hola! Quiero celebrar mi cumpleaños contigo. Unite a la fiesta y comparte momentos únicos. ¡No faltes! ¡Te espero con ilusión para celebrar juntos este día especial! Confirma asistencia abajo.'),
(8, '¡Hola! Celebro mi cumpleaños y me encantaría que vinieras a disfrutar de momentos únicos en mi fiesta. ¡No faltes! ¡Te espero con alegría para celebrar juntos! Confirma asistencia abajo.'),
(9, '¡Hola! Celebro mi cumpleaños y quiero que seas parte de este día especial. Te invito a compartir alegría y momentos inolvidables en mi fiesta. ¡No faltes! ¡Te espero con entusiasmo para celebrar juntos! Confirma asistencia abajo.'),
(10, '¡Hola! Celebro mi cumpleaños y quiero que formes parte de este día especial. Vení a compartir alegría y momentos únicos en mi fiesta. ¡No faltes! ¡Te espero con entusiasmo para celebrar juntos! Confirma asistencia abajo.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frases_para_canciones`
--

CREATE TABLE `frases_para_canciones` (
  `id` int(11) NOT NULL,
  `texto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `frases_para_canciones`
--

INSERT INTO `frases_para_canciones` (`id`, `texto`) VALUES
(1, '¡Para hacer mi cumple aún más divertido, me encantaría que elijan una canción especial para que podamos disfrutar juntos en la fiesta! ¡Será genial compartir nuestros temas favoritos! Espero verlos allí y bailar al ritmo de su selección musical.'),
(2, '¡Para que mi cumple sea más especial, elijan una canción que les guste para disfrutar juntos en la fiesta! ¡Será genial compartir nuestros temas favoritos! Espero verlos allí y bailar con su selección musical.'),
(3, '¡Para hacer mi fiesta de cumpleaños más divertida, me encantaría que elijan una canción especial para disfrutar juntos! ¡Será increíble compartir nuestros temas favoritos! Espero verlos allí y bailar al ritmo de su selección musical. '),
(4, '¡Para que mi cumpleaños sea aún más divertido, elijan una canción especial para disfrutar juntos en la fiesta! ¡Será genial compartir nuestros temas favoritos! Espero verlos allí y bailar con su selección musical. No olviden dejar su canción elegida aquí '),
(5, '¡Para hacer mi cumple más especial, me encantaría que elijan una canción para que podamos disfrutar juntos en la fiesta! ¡Será genial compartir nuestros temas favoritos! Espero verlos allí y bailar al ritmo de su selección musical. '),
(6, '¡Para que mi fiesta de cumpleaños sea más divertida, elijan una canción especial para disfrutar juntos! ¡Será genial compartir nuestros temas favoritos! Espero verlos allí y bailar al ritmo de su selección musical.'),
(7, '¡Para hacer mi cumple más divertido, me encantaría que elijan una canción especial para disfrutar juntos en la fiesta! ¡Será genial compartir nuestros temas favoritos! Espero verlos allí y bailar al ritmo de su selección musical.'),
(8, '¡Para que mi cumple sea más emocionante, elijan una canción especial para disfrutar juntos en la fiesta! ¡Será genial compartir nuestros temas favoritos! Espero verlos allí y bailar con su selección musical.'),
(9, '¡Para hacer mi fiesta de cumpleaños más divertida, me encantaría que elijan una canción especial para disfrutar juntos! ¡Será genial compartir nuestros temas favoritos! Espero verlos allí y bailar al ritmo de su selección musical.'),
(10, '¡Para que mi cumple sea aún más divertido, elijan una canción especial para disfrutar juntos en la fiesta! ¡Será increíble compartir nuestros temas favoritos! Espero verlos allí y bailar al ritmo de su selección musical.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frases_para_mensaje`
--

CREATE TABLE `frases_para_mensaje` (
  `id` int(11) NOT NULL,
  `texto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `frases_para_mensaje`
--

INSERT INTO `frases_para_mensaje` (`id`, `texto`) VALUES
(1, '¡Tu presencia hace de este día algo muy especial! Por favor, deja un mensaje para Bianca y comparte tus mejores deseos y recuerdos. Nos encantaría saber cómo Bianca ha tocado tu vida y qué momentos especiales has compartido con ella.'),
(2, '¡Estamos emocionados de celebrar con ustedes! Deja un mensaje para Bianca y comparte tus mejores deseos. Nos encantaría saber cómo Bianca ha impactado tu vida y qué momentos especiales has compartido con ella.'),
(3, '¡Hoy es un día especial gracias a ti! Por favor, deja un mensaje para Bianca y comparte tus recuerdos y deseos. Queremos saber cómo Bianca ha sido parte de tu vida y qué momentos inolvidables han vivido juntos.'),
(4, '¡Gracias por unirte a esta celebración! Deja un mensaje para Bianca con tus mejores deseos y recuerdos. Nos encantaría saber cómo Bianca ha tocado tu vida y qué momentos especiales han compartido juntos.'),
(5, '¡Celebremos juntos este día especial! Deja un mensaje para Bianca y comparte tus recuerdos y deseos. Queremos saber cómo Bianca ha sido parte de tu vida y qué momentos inolvidables han vivido juntos.'),
(6, '¡Tu presencia hace de este día algo muy especial! Por favor, deja un mensaje para Bianca y comparte tus mejores deseos. Nos encantaría saber cómo Bianca ha tocado tu vida y qué momentos especiales han compartido.'),
(7, '¡Hagamos de este día algo inolvidable! Deja un mensaje para Bianca y comparte tus mejores deseos y recuerdos. Queremos saber cómo Bianca ha sido parte de tu vida y qué momentos especiales han compartido juntos.'),
(8, '¡Hoy es un día para recordar! Por favor, deja un mensaje para Bianca y comparte tus mejores deseos y recuerdos. Nos encantaría saber cómo Bianca ha tocado tu vida y qué momentos especiales has compartido con ella.'),
(9, '¡Gracias por ser parte de esta celebración! Deja un mensaje para Bianca y comparte tus mejores recuerdos y deseos. Queremos saber cómo Bianca ha sido parte de tu vida y qué momentos especiales han vivido juntos.'),
(10, '¡Tu presencia hace este día aún más especial! Por favor, deja un mensaje para Bianca y comparte tus mejores deseos y recuerdos. Nos encantaría saber cómo Bianca ha tocado tu vida y qué momentos especiales has compartido con ella.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frase_para_regalo`
--

CREATE TABLE `frase_para_regalo` (
  `id` int(11) NOT NULL,
  `texto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `frase_para_regalo`
--

INSERT INTO `frase_para_regalo` (`id`, `texto`) VALUES
(1, 'Tu presencia es el mejor regalo, pero si deseas contribuir con un presente, una ayuda monetaria será muy apreciada.'),
(2, 'Si piensas en regalarme algo, no te preocupes por envoltorios. Una pequeña contribución para mi futura aventura será maravillosa.'),
(3, 'Agradezco tu cariño y apoyo. Si decides hacer un obsequio, una contribución económica me ayudará a alcanzar mis sueños.'),
(4, 'El mayor regalo es tenerte conmigo en este día especial. Si consideras hacer un presente, una ayuda económica será bienvenida.'),
(5, 'Tu presencia es lo más importante para mí. Si deseas hacer un regalo, una aportación monetaria será de gran ayuda para mis futuros proyectos.'),
(6, 'Estoy ahorrando para un sueño futuro. Si piensas en un regalo, una pequeña contribución a mi fondo de sueños será muy apreciada.'),
(7, 'Tu compañía es el mejor regalo. Si decides darme algo más, una contribución monetaria será muy apreciada y bien utilizada.'),
(8, 'Lo que más deseo es compartir este día contigo. Si además quieres hacerme un obsequio, una ayuda económica sería maravillosa para mis planes futuros.'),
(9, 'Tu presencia en mi celebración es el mejor obsequio. Si deseas contribuir, una ayuda económica será muy apreciada.'),
(10, 'El mayor regalo es tu compañía en este día especial. Si deseas hacer un obsequio, una ayuda monetaria será bienvenida.');

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

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `texto`, `nombre`, `apellido`, `id_evento`) VALUES
(1, '3ed1ed|3d', '', '', 6),
(2, 'rgqrgq5ggqgq', '123e', '13e21', 6),
(3, 'wwrryyytyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyywwrryyytyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyywwrryyytyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyywwrryyytyye2rwwwwwwwwwwwwwwwwwwwwwwwwrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrhhhhhhhhhhhhhhhfff45', '', '', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas_musicales`
--

CREATE TABLE `temas_musicales` (
  `id` int(11) NOT NULL,
  `nombre_solicitante` varchar(255) NOT NULL,
  `nombre_cancion` varchar(255) NOT NULL,
  `cantante` varchar(255) NOT NULL,
  `id_evento` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `temas_musicales`
--

INSERT INTO `temas_musicales` (`id`, `nombre_solicitante`, `nombre_cancion`, `cantante`, `id_evento`) VALUES
(1, 'Martin', 'Algo', 'inxs', 6),
(2, 'Leo', 'Bombon asesino', 'Los Palmeras', 6),
(3, 'Leo', 'Bombon', 'Los ', 6);

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
-- Indices de la tabla `dress_code_new`
--
ALTER TABLE `dress_code_new`
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
-- Indices de la tabla `frase_para_regalo`
--
ALTER TABLE `frase_para_regalo`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `dress_code_new`
--
ALTER TABLE `dress_code_new`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `frases_para_asistencia`
--
ALTER TABLE `frases_para_asistencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `frases_para_canciones`
--
ALTER TABLE `frases_para_canciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `frases_para_mensaje`
--
ALTER TABLE `frases_para_mensaje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `frase_para_regalo`
--
ALTER TABLE `frase_para_regalo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `temas_musicales`
--
ALTER TABLE `temas_musicales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
