-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-11-2019 a las 14:40:01
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema-infocentro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `add_curso`
--

DROP TABLE IF EXISTS `add_curso`;
CREATE TABLE IF NOT EXISTS `add_curso` (
  `id_add_curso` int(11) NOT NULL AUTO_INCREMENT,
  `curso_id` int(11) NOT NULL,
  `persona_id` int(11) NOT NULL,
  PRIMARY KEY (`id_add_curso`),
  KEY `curso_id` (`curso_id`),
  KEY `persona_id` (`persona_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `add_curso_estudiante`
--

DROP TABLE IF EXISTS `add_curso_estudiante`;
CREATE TABLE IF NOT EXISTS `add_curso_estudiante` (
  `id_add` int(11) NOT NULL AUTO_INCREMENT,
  `alumno_basica_id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  PRIMARY KEY (`id_add`),
  KEY `add_curso_estudiante_ibfk_3` (`curso_id`),
  KEY `add_curso_estudiante_ibfk_4` (`alumno_basica_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `add_curso_estudiante`
--

INSERT INTO `add_curso_estudiante` (`id_add`, `alumno_basica_id`, `curso_id`) VALUES
(7, 23, 23),
(8, 23, 24),
(9, 25, 23),
(10, 25, 23),
(11, 24, 23),
(12, 23, 23),
(13, 23, 23),
(14, 23, 27),
(15, 24, 26),
(16, 25, 28);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

DROP TABLE IF EXISTS `alumno`;
CREATE TABLE IF NOT EXISTS `alumno` (
  `id_alum` int(20) NOT NULL AUTO_INCREMENT,
  `dni_alum` int(10) NOT NULL,
  `nombres_alum` varchar(80) NOT NULL,
  `apellidos_alum` varchar(80) NOT NULL,
  `genero_alum` varchar(10) NOT NULL,
  `edad_alum` int(10) DEFAULT NULL,
  `fecha_nac` date NOT NULL,
  `cod_institucion` int(11) NOT NULL,
  `cod_carrera` int(11) NOT NULL,
  `estado` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_alum`),
  KEY `cod_institucion` (`cod_institucion`,`cod_carrera`),
  KEY `cod_carrera` (`cod_carrera`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alum`, `dni_alum`, `nombres_alum`, `apellidos_alum`, `genero_alum`, `edad_alum`, `fecha_nac`, `cod_institucion`, `cod_carrera`, `estado`) VALUES
(2, 1450152325, 'Emilio Yankuam', 'Senguana Wisuma', 'Masculino', 19, '2019-11-04', 1, 3, 1),
(3, 1450152378, 'Emilio', 'snguana', 'Masculino', NULL, '2019-11-11', 2, 3, 1),
(4, 1450152367, 'Emilio', 'snguana', 'Masculino', NULL, '2019-11-11', 2, 3, 1),
(5, 1450178687, 'Josefina Mamas', 'Senguana Wisuma', 'Femenino', NULL, '2000-01-04', 8, 3, 1),
(6, 1450178686, 'Milady', 'Llumitaxi', 'Masculino', NULL, '2019-11-04', 2, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_basica`
--

DROP TABLE IF EXISTS `alumno_basica`;
CREATE TABLE IF NOT EXISTS `alumno_basica` (
  `id_alumno_s` int(11) NOT NULL AUTO_INCREMENT,
  `dni_alum_s` int(11) NOT NULL,
  `nombres_alum_s` varchar(50) NOT NULL,
  `apellidos_alumn_s` varchar(50) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `edad` int(10) DEFAULT NULL,
  `fech_nac` date NOT NULL,
  `institucion_id` int(11) NOT NULL,
  `grado_id` int(11) NOT NULL,
  `estado` varchar(15) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_alumno_s`),
  KEY `institucion_id` (`institucion_id`),
  KEY `grado_id` (`grado_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno_basica`
--

INSERT INTO `alumno_basica` (`id_alumno_s`, `dni_alum_s`, `nombres_alum_s`, `apellidos_alumn_s`, `genero`, `edad`, `fech_nac`, `institucion_id`, `grado_id`, `estado`) VALUES
(18, 1450152325, 'Emilio Yankuam', 'Senguana Wisuma', 'Masculino', 19, '2000-01-06', 8, 3, '1'),
(20, 1450172637, 'Josefina Mamas', 'Senguana Wisuma', 'Femenino', 19, '2000-01-04', 1, 1, '1'),
(22, 1450172456, 'Nelcida Anasat', 'Senguana Wisuma', 'Femenino', 14, '2005-03-08', 9, 3, '1'),
(23, 1450152323, 'MILADY CABRERA', 'CELIA YULI', 'Femenino', 20, '2017-08-01', 7, 2, '1'),
(24, 1450152326, 'CEVALLOS NARANJA', 'JUAN VILLACIS', 'Masculino', 3, '2017-05-01', 7, 2, '1'),
(25, 145015234, 'Emilio Yankuam', 'senguana', 'nasculino', 19, '2019-11-03', 7, 2, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

DROP TABLE IF EXISTS `carrera`;
CREATE TABLE IF NOT EXISTS `carrera` (
  `id_carrera` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_carrera` varchar(80) NOT NULL,
  PRIMARY KEY (`id_carrera`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id_carrera`, `nombre_carrera`) VALUES
(3, 'Primero de Bachillerato '),
(4, 'Segundo de Bachillerato');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificado`
--

DROP TABLE IF EXISTS `certificado`;
CREATE TABLE IF NOT EXISTS `certificado` (
  `id_certificado` int(15) NOT NULL AUTO_INCREMENT,
  `configuracion_id` int(15) NOT NULL,
  `add_curso_id` int(15) NOT NULL,
  `representante_id` int(15) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_certificado`),
  KEY `configuracion_id` (`configuracion_id`),
  KEY `add_curso_id` (`add_curso_id`),
  KEY `representante_id` (`representante_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

DROP TABLE IF EXISTS `configuracion`;
CREATE TABLE IF NOT EXISTS `configuracion` (
  `id_conf` int(11) NOT NULL AUTO_INCREMENT,
  `entidad` varchar(100) NOT NULL,
  `imagen_fondo` text NOT NULL,
  `imagen1` text NOT NULL,
  `imagen2` text NOT NULL,
  `imagen3` text NOT NULL,
  `imagen4` text NOT NULL,
  PRIMARY KEY (`id_conf`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`id_conf`, `entidad`, `imagen_fondo`, `imagen1`, `imagen2`, `imagen3`, `imagen4`) VALUES
(17, 'INFOCENTRO', '../upload/34ed387fe94036f6efec766c73810c55.jpg', '../upload/d9eacd6f9874435f9a197edcda5d2364.jpg', '../upload/56957945f9617c8e196e7577fdd72471.jpg', '../upload/9fba4d3bd9a2083753d9e62d1ac04e5c.jpg', '../upload/620ffdaa0332c5f9fd332ad0bca9ec1f.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

DROP TABLE IF EXISTS `curso`;
CREATE TABLE IF NOT EXISTS `curso` (
  `id_curso` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_curso` varchar(150) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `total_horas` int(10) NOT NULL,
  `docente_id` int(11) NOT NULL,
  PRIMARY KEY (`id_curso`),
  KEY `curso_ibfk_1` (`docente_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id_curso`, `nombre_curso`, `fecha_inicio`, `fecha_fin`, `total_horas`, `docente_id`) VALUES
(23, 'PROGRAMACIÓN JAVA', '2019-03-04', '2020-02-22', 25, 3),
(24, 'PROGRAMACIÓN BASICA PHP', '2019-06-03', '2019-11-30', 40, 3),
(25, 'HTML', '2019-03-04', '2020-03-29', 20, 1),
(26, 'PHP', '2019-11-07', '2019-11-30', 40, 1),
(27, 'PHP', '2019-11-07', '2019-11-30', 40, 1),
(28, 'JS', '2019-11-07', '2019-11-30', 40, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

DROP TABLE IF EXISTS `docente`;
CREATE TABLE IF NOT EXISTS `docente` (
  `id_docente` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `telefono` int(10) NOT NULL,
  `genero` varchar(30) NOT NULL,
  PRIMARY KEY (`id_docente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`id_docente`, `nombre`, `apellido`, `correo`, `telefono`, `genero`) VALUES
(1, 'Emilio Yankuam', 'Senguana Wisuma', 'emilio.senguana@itsae.edu.ec', 997780813, 'Masculino'),
(3, 'Danis Ignacio', 'Manchu Tumink', 'danis.manchu@itsae.edue.c', 99708014, 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

DROP TABLE IF EXISTS `grado`;
CREATE TABLE IF NOT EXISTS `grado` (
  `id_grado` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(80) NOT NULL,
  PRIMARY KEY (`id_grado`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`id_grado`, `descripcion`) VALUES
(1, 'Primero de Básica'),
(2, 'Segundo de Básica'),
(3, 'Tercero de Basica'),
(4, 'Cuarto de Básica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

DROP TABLE IF EXISTS `institucion`;
CREATE TABLE IF NOT EXISTS `institucion` (
  `id_institucion` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_institucion` varchar(100) NOT NULL,
  PRIMARY KEY (`id_institucion`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`id_institucion`, `nombre_institucion`) VALUES
(1, 'LUZ DE AMERICA'),
(2, 'Escuela Nueva Loja'),
(7, 'JARAMILLO'),
(8, 'ELOY ALFARO'),
(9, 'ANTONIO SAMANIEGO'),
(10, 'BENIGNO RIVAS'),
(11, 'ALONSO VITERRY GARRIDO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

DROP TABLE IF EXISTS `personas`;
CREATE TABLE IF NOT EXISTS `personas` (
  `id_per` int(11) NOT NULL AUTO_INCREMENT,
  `nombres_per` varchar(50) NOT NULL,
  `apellidos_per` varchar(50) NOT NULL,
  `genero_per` varchar(10) NOT NULL,
  PRIMARY KEY (`id_per`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesion`
--

DROP TABLE IF EXISTS `profesion`;
CREATE TABLE IF NOT EXISTS `profesion` (
  `id_profesion` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_profesion` varchar(50) NOT NULL,
  PRIMARY KEY (`id_profesion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profesion`
--

INSERT INTO `profesion` (`id_profesion`, `nombre_profesion`) VALUES
(1, 'Tecnologo(a)'),
(2, 'Ingeniero(a)'),
(3, 'Licenciado(a)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representante`
--

DROP TABLE IF EXISTS `representante`;
CREATE TABLE IF NOT EXISTS `representante` (
  `id_repre` int(11) NOT NULL AUTO_INCREMENT,
  `dni_repre` int(10) UNSIGNED NOT NULL,
  `nombres_repre` varchar(50) NOT NULL,
  `apellidos_repre` varchar(50) NOT NULL,
  `telefono_repre` int(10) UNSIGNED NOT NULL,
  `cod_profesion` int(11) NOT NULL,
  `genero` varchar(15) NOT NULL,
  PRIMARY KEY (`id_repre`),
  KEY `cod_profesion` (`cod_profesion`)
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `representante`
--

INSERT INTO `representante` (`id_repre`, `dni_repre`, `nombres_repre`, `apellidos_repre`, `telefono_repre`, `cod_profesion`, `genero`) VALUES
(123, 1450152325, 'Emilio', 'Senguana', 99707717, 1, 'Masculino'),
(127, 1450152325, 'Emilio', 'Senguana', 99707717, 1, 'Masculino'),
(128, 1450178636, 'emil', 'Emilio', 9970708, 1, 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usua` int(10) NOT NULL AUTO_INCREMENT,
  `dni_usua` int(10) DEFAULT NULL,
  `nombre_usua` varchar(50) DEFAULT NULL,
  `apellido_usua` varchar(50) DEFAULT NULL,
  `correo_usua` varchar(100) NOT NULL,
  `genero_usua` varchar(10) DEFAULT NULL,
  `username_usua` varchar(50) NOT NULL,
  `password_usua` varchar(200) NOT NULL,
  `date_agregado` date DEFAULT NULL,
  `estado` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_usua`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usua`, `dni_usua`, `nombre_usua`, `apellido_usua`, `correo_usua`, `genero_usua`, `username_usua`, `password_usua`, `date_agregado`, `estado`) VALUES
(1, 1450152325, 'Emilio', 'Senguana', 'emilio.senguana@itsae.edu.ec', 'Masculino', 'admin', '$2y$10$FlIH0ZouvtvNW/wfqtGBMeG4w7BQ36BsMcWauP3JdFgR9U4Z6.yBW', '2019-11-19', 1),
(3, 1450152399, 'Emilio Yankuam', 'Senguana Emilio', 'emilio.senguana2019@itsae.edu.ec', 'Masculino', 'emilio2019', '$2y$10$SC0vVwATE5vL1Ocg3Ldh5O/QSyhl9oZP2P2Qqe2ACzfnuWd9n3yie', '2019-11-27', 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `add_curso`
--
ALTER TABLE `add_curso`
  ADD CONSTRAINT `add_curso_ibfk_1` FOREIGN KEY (`curso_id`) REFERENCES `curso` (`id_curso`),
  ADD CONSTRAINT `add_curso_ibfk_2` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id_per`);

--
-- Filtros para la tabla `add_curso_estudiante`
--
ALTER TABLE `add_curso_estudiante`
  ADD CONSTRAINT `add_curso_estudiante_ibfk_3` FOREIGN KEY (`curso_id`) REFERENCES `curso` (`id_curso`) ON UPDATE CASCADE,
  ADD CONSTRAINT `add_curso_estudiante_ibfk_4` FOREIGN KEY (`alumno_basica_id`) REFERENCES `alumno_basica` (`id_alumno_s`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`cod_institucion`) REFERENCES `institucion` (`id_institucion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumno_ibfk_2` FOREIGN KEY (`cod_carrera`) REFERENCES `carrera` (`id_carrera`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `alumno_basica`
--
ALTER TABLE `alumno_basica`
  ADD CONSTRAINT `grado_id` FOREIGN KEY (`grado_id`) REFERENCES `grado` (`id_grado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `institucion_id` FOREIGN KEY (`institucion_id`) REFERENCES `institucion` (`id_institucion`);

--
-- Filtros para la tabla `certificado`
--
ALTER TABLE `certificado`
  ADD CONSTRAINT `certificado_ibfk_1` FOREIGN KEY (`configuracion_id`) REFERENCES `configuracion` (`id_conf`),
  ADD CONSTRAINT `certificado_ibfk_2` FOREIGN KEY (`add_curso_id`) REFERENCES `add_curso_estudiante` (`id_add`),
  ADD CONSTRAINT `certificado_ibfk_3` FOREIGN KEY (`representante_id`) REFERENCES `representante` (`id_repre`);

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`docente_id`) REFERENCES `docente` (`id_docente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `representante`
--
ALTER TABLE `representante`
  ADD CONSTRAINT `representante_ibfk_1` FOREIGN KEY (`cod_profesion`) REFERENCES `profesion` (`id_profesion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
