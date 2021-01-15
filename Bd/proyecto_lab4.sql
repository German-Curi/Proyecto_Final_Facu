-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-01-2021 a las 22:37:34
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_lab4`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `ID_Alumno` int(10) UNSIGNED NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Tipo_Documento` varchar(50) NOT NULL,
  `Num_Documento` varchar(50) NOT NULL,
  `Edad` tinyint(10) UNSIGNED NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contrasenia` varchar(50) NOT NULL,
  `ID_Rol` int(10) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`ID_Alumno`, `Nombre`, `Apellido`, `Tipo_Documento`, `Num_Documento`, `Edad`, `Telefono`, `Email`, `Contrasenia`, `ID_Rol`) VALUES
(1, 'Juan', 'Perez', 'DNI', '15246924', 18, '1563215789', 'juan@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(2, 'Pedro', 'Martinez', 'DNI', '28465217', 20, '1536987152', 'pedro@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(3, 'Solange', 'Lopez', 'DNI', '21569841', 48, '1536974581', 'solange@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(4, 'Mariano', 'Gonzales', 'DNI', '90154782', 35, '1536212365', 'mariano@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(5, 'Federico', 'Gutierrez', 'DNI', '45217893', 34, '1522222222', 'federico@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(6, 'Luciana', 'Saenz', 'DNI', '45127845', 16, '1536541278', 'luciana@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(7, 'Rodrigo', 'Peña', 'DNI', '36984297', 27, '1532169874', 'rodrigo@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(8, 'Esteban', 'Perez', 'DNI', '47893215', 59, '1532147896', 'esteban@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(9, 'Raul', 'Rodriguez', 'Pasaporte', 'VE548721', 61, '1536478966', 'raul@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(10, 'Gabriela', 'Angelo', 'Pasaporte', '514526UK', 44, '1532147896', 'gabriela@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(11, 'Tomas', 'Zubizarreta', 'DNI', '45125895', 36, '1512345678', 'tomas@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(12, 'Jose', 'Roque', 'DNI', '45128745', 26, '1536985236', 'jose@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(13, 'Melina', 'Rosas', 'DNI', '65412871', 78, '1599999999', 'melina@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(14, 'Sofia', 'Alvarez', 'DNI', '41254785', 54, '1545214521', 'sofia@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(15, 'Zoyla', 'Diaz', 'DNI', '41257854', 61, '1536547893', 'leandro@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(16, 'Admin', 'Admin', 'DNI', '11111111', 11, '1111111111', 'admin@ic.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 3),
(17, 'german', 'curi', 'DNI', '38662084', 25, '1168874492', 'german@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(18, 'Osvaldo', 'Curi', 'DNI', '7736911', 77, '21948181', 'osvaldo@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(19, 'Andres', 'Gomez', 'DNI', '3866668', 21, '156988764', 'gomez@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(20, 'Antonella ', 'Carroso', 'DNI', '38662094', 27, '1168874492', 'antonella@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(21, 'norma', 'perez', 'DNI', '13123123', 60, '46239546', 'normas@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(22, 'Juan', 'Colla', 'Pasaporte', 'AAE4E1862', 26, '11689654723164', 'juanci@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(23, 'Matias', 'Franqueira', 'DNI', '38662083', 25, '15698594565', 'matias@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `ID_Curso` int(10) UNSIGNED NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Area` varchar(50) NOT NULL,
  `Valor` float(10,2) NOT NULL,
  `Imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`ID_Curso`, `Nombre`, `Descripcion`, `Area`, `Valor`, `Imagen`) VALUES
(1, 'Diseño Web', 'HTTP, HTML, CSS', 'Informatica', 1000.00, 'Diseño Web.jpg'),
(2, 'Programacion Web', 'HTTP, HTML, CSS, JavaScript, PHP', 'Informatica', 1500.00, 'Programacion Web.png'),
(3, 'Marketing Digital', 'Redes Sociales', 'Informatica', 2000.00, 'Marketing Digital.jpg'),
(4, 'Animacion 3D', 'Animacion en 3D', 'Informatica', 2500.00, 'Animación 3D.png'),
(5, 'Redes Nivel Inicial', 'Redes para principiantes', 'Informatica', 3000.00, 'redes1.jpg'),
(6, 'Redes Nivel Avanzado', 'Redes para los mas avanzados', 'Informatica', 3500.00, 'redes2.jpg'),
(7, 'Armado y Reparacion de PC', 'Armar y desarmar', 'Informatica', 4000.00, 'Armado y Reparacion de PC.jpg'),
(8, 'Office Nivel Inicial', 'Word, Excel, Power Point, Access para principiantes', 'Informatica', 4500.00, 'Word, Excel, Power Point 1.jpg'),
(9, 'Office Nivel Avanzado', 'Word, Excel, Power Point, Access para mas avanzados', 'Informatica', 5000.00, 'Word, Excel, Power Point 2.png'),
(10, 'Base de Datos', 'PHP, MySQL, SQL Server, Oracle', 'Informatica', 5500.00, 'PHP, MySQL, SQL Server, Oracle.png'),
(11, 'Reparacion de Celulares', 'No se hackea celulares', 'Informatica', 6000.00, 'Reparacion de Celulares.jpg'),
(12, 'Programacion Android', 'Como usar Android Studio sin prender fuego la CPU', 'Informatica', 6500.00, 'Programacion Android.png'),
(13, 'Ingles', 'Hello World', 'Idioma', 7000.00, 'Ingles.jpg'),
(14, 'Portugues', 'Ola Mundo', 'Idioma', 7500.00, 'Portugues.jpg'),
(15, 'Frances', 'Salut Monde', 'Idioma', 8000.00, 'Frances.jpg'),
(16, 'Aleman', 'Hallo Welt', 'Idioma', 5500.00, NULL),
(17, 'Italiano', ' Ciao mondo', 'Idioma', 4500.00, NULL),
(18, 'Tecnicas Digitales', 'Circuitos digitales', 'Electronica', 6500.00, NULL),
(19, 'Español', 'hola mundo', 'Idioma', 6000.00, NULL),
(26, 'Practicas Profesionales ', 'Es la encargada de evaluar la situación profesional de cada alumno', 'Informatica', 6500.00, NULL),
(28, 'Analisis Matematico', 'Principio de matematica basica', 'Exactas', 12000.00, NULL),
(29, 'Biologia ', 'Ciencias naturales', 'Exactas', 12000.00, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_facturas`
--

CREATE TABLE `detalle_facturas` (
  `Serie_Factura` varchar(5) NOT NULL,
  `Numero_Factura` int(10) NOT NULL,
  `ID_Inscripciones` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_facturas`
--

INSERT INTO `detalle_facturas` (`Serie_Factura`, `Numero_Factura`, `ID_Inscripciones`) VALUES
('A', 1, 7),
('C', 2, 8),
('B', 3, 9),
('A', 4, 10),
('B', 5, 11),
('A', 6, 12),
('B', 7, 13),
('B', 8, 14),
('A', 9, 15),
('B', 10, 16),
('A', 11, 17),
('A', 12, 18),
('B', 13, 19),
('B', 14, 20),
('A', 15, 21),
('A', 16, 22),
('B', 17, 23),
('A', 18, 24),
('A', 19, 25),
('B', 21, 27),
('A', 22, 28);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dias`
--

CREATE TABLE `dias` (
  `ID_Dia` int(10) UNSIGNED NOT NULL,
  `Dia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dias`
--

INSERT INTO `dias` (`ID_Dia`, `Dia`) VALUES
(1, 'Lunes'),
(2, 'Martes'),
(3, 'Miercoles'),
(4, 'Jueves'),
(5, 'Viernes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `Serie_Factura` varchar(5) NOT NULL,
  `Numero_Factura` int(10) NOT NULL,
  `Fecha` date NOT NULL,
  `ID_Alumno` int(10) UNSIGNED NOT NULL,
  `Forma_Pago` varchar(80) NOT NULL,
  `ID_tarjeta` int(10) UNSIGNED DEFAULT NULL,
  `monto_total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`Serie_Factura`, `Numero_Factura`, `Fecha`, `ID_Alumno`, `Forma_Pago`, `ID_tarjeta`, `monto_total`) VALUES
('A', 1, '2020-06-30', 6, 'Efectivo', NULL, '1500.00'),
('A', 4, '2020-07-02', 18, 'Efectivo', NULL, '2000.00'),
('A', 6, '2020-10-09', 17, 'Tarjeta', 6, '1000.00'),
('A', 9, '2020-11-21', 17, 'Efectivo', NULL, '3500.00'),
('A', 11, '2020-11-21', 17, 'Efectivo', NULL, '4500.00'),
('A', 12, '2020-11-21', 21, 'Efectivo', NULL, '1000.00'),
('A', 15, '2020-11-27', 17, 'Tarjeta', 11, '5500.00'),
('A', 16, '2020-11-27', 22, 'Efectivo', NULL, '7500.00'),
('A', 18, '2020-11-28', 17, 'Efectivo', NULL, '6000.00'),
('A', 19, '2020-12-16', 17, 'Tarjeta', 12, '5000.00'),
('A', 22, '2020-12-18', 18, 'Efectivo', NULL, '7000.00'),
('B', 3, '2020-07-02', 17, 'Efectivo', NULL, '3000.00'),
('B', 5, '2020-07-02', 18, 'Tarjeta', 4, '1000.00'),
('B', 7, '2020-10-10', 6, 'Tarjeta', 7, '2500.00'),
('B', 8, '2020-11-21', 17, 'Tarjeta', 3, '2000.00'),
('B', 10, '2020-11-21', 17, 'Tarjeta', 8, '7000.00'),
('B', 13, '2020-11-21', 21, 'Tarjeta', 9, '2000.00'),
('B', 14, '2020-11-21', 17, 'Tarjeta', 10, '2500.00'),
('B', 17, '2020-11-28', 23, 'Efectivo', NULL, '6500.00'),
('B', 21, '2020-12-18', 18, 'Tarjeta', 13, '2500.00'),
('C', 2, '2020-06-30', 17, 'Tarjeta', 1, '1500.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciones`
--

CREATE TABLE `inscripciones` (
  `ID_Inscripciones` int(10) UNSIGNED NOT NULL,
  `ID_Alumno` int(10) UNSIGNED NOT NULL,
  `ID_Curso` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inscripciones`
--

INSERT INTO `inscripciones` (`ID_Inscripciones`, `ID_Alumno`, `ID_Curso`) VALUES
(1, 3, 1),
(2, 3, 5),
(3, 6, 10),
(4, 6, 14),
(5, 10, 11),
(6, 10, 12),
(7, 6, 2),
(8, 17, 2),
(9, 17, 5),
(10, 18, 3),
(11, 18, 1),
(12, 17, 1),
(13, 6, 4),
(14, 17, 3),
(15, 17, 6),
(16, 17, 13),
(17, 17, 8),
(18, 21, 1),
(19, 21, 3),
(20, 17, 4),
(21, 17, 16),
(22, 22, 14),
(23, 23, 18),
(24, 17, 19),
(25, 17, 9),
(27, 18, 4),
(28, 18, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciones_cursos`
--

CREATE TABLE `inscripciones_cursos` (
  `ID_Inscripciones` int(10) UNSIGNED NOT NULL,
  `ID_Curso` int(10) UNSIGNED NOT NULL,
  `ID_Turno` int(10) UNSIGNED NOT NULL,
  `ID_Dia` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inscripciones_cursos`
--

INSERT INTO `inscripciones_cursos` (`ID_Inscripciones`, `ID_Curso`, `ID_Turno`, `ID_Dia`) VALUES
(1, 1, 1, 1),
(2, 5, 2, 2),
(3, 10, 3, 3),
(4, 14, 3, 4),
(5, 11, 1, 5),
(6, 12, 3, 2),
(7, 2, 1, 2),
(8, 2, 1, 3),
(9, 5, 1, 2),
(10, 3, 2, 3),
(11, 1, 1, 3),
(12, 1, 1, 1),
(13, 4, 2, 4),
(14, 3, 1, 4),
(15, 6, 1, 5),
(16, 13, 2, 2),
(17, 8, 3, 2),
(18, 1, 1, 1),
(19, 3, 2, 3),
(20, 4, 2, 1),
(21, 16, 3, 1),
(22, 14, 3, 4),
(23, 18, 1, 4),
(24, 19, 2, 3),
(25, 9, 2, 4),
(27, 4, 3, 1),
(28, 13, 2, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `ID_Profesor` int(10) UNSIGNED NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Tipo_Documento` varchar(50) NOT NULL,
  `Num_Documento` varchar(50) NOT NULL,
  `Edad` tinyint(10) UNSIGNED NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contrasenia` varchar(50) NOT NULL,
  `ID_Rol` int(10) UNSIGNED NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`ID_Profesor`, `Nombre`, `Apellido`, `Tipo_Documento`, `Num_Documento`, `Edad`, `Telefono`, `Email`, `Contrasenia`, `ID_Rol`) VALUES
(1, 'Diego', 'Torres', 'DNI', '15246924', 50, '1563215789', 'diego@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2),
(2, 'Laura', 'Gomez', 'DNI', '28465217', 51, '1536987152', 'laura@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2),
(3, 'Dario', 'Sanchez', 'DNI', '21569841', 52, '1536974581', 'dario@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2),
(4, 'Sandra', 'Lazante', 'DNI', '90154782', 53, '1536212365', 'sandra@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2),
(5, 'Susana', 'Mendez', 'DNI', '45217893', 54, '1522222222', 'susana@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2),
(6, 'Juan', 'Bonelli', 'DNI', '45127845', 49, '1536541278', 'juan@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2),
(7, 'Mario', 'Lopez', 'DNI', '36984297', 48, '1532169874', 'mario@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2),
(8, 'Liliana', 'Franqueira', 'Pasaporte', '515646545645', 59, '11685564553', 'Liliana@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2),
(9, 'hector', 'rodriguez', 'DNI', '1231413412', 47, '12312312312', 'hector@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2),
(10, 'pedro', 'chavez', 'DNI', '389464594', 56, '4632597874', 'pedroc@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2),
(11, 'Julian', 'Galante', 'DNI', '123123123', 39, '435353453', 'julian@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2),
(13, 'Julio', 'Cortez', 'DNI', '654654654', 65, '46239546', 'julioc@ic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores_cursos`
--

CREATE TABLE `profesores_cursos` (
  `ID_Profesor` int(10) UNSIGNED NOT NULL,
  `ID_Curso` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesores_cursos`
--

INSERT INTO `profesores_cursos` (`ID_Profesor`, `ID_Curso`) VALUES
(1, 1),
(1, 2),
(2, 3),
(2, 4),
(3, 5),
(3, 6),
(4, 7),
(4, 8),
(4, 15),
(5, 9),
(5, 10),
(6, 11),
(6, 12),
(7, 13),
(7, 14),
(8, 16),
(8, 17),
(9, 19),
(9, 26),
(10, 29),
(13, 28);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `ID_Rol` int(10) UNSIGNED NOT NULL,
  `Nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`ID_Rol`, `Nombre`) VALUES
(1, 'Alumno'),
(2, 'Profesor'),
(3, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjetas`
--

CREATE TABLE `tarjetas` (
  `ID_tarjeta` int(10) UNSIGNED NOT NULL,
  `Marca` varchar(20) NOT NULL,
  `Num_Tarjeta` bigint(16) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tarjetas`
--

INSERT INTO `tarjetas` (`ID_tarjeta`, `Marca`, `Num_Tarjeta`) VALUES
(1, 'Mastercard', 6556464564646545),
(3, 'Visa', 9999999999999999),
(4, 'Visa', 1654564168548945),
(6, 'Visa', 2315645646544654),
(7, 'Visa', 1165464974644654),
(8, 'Mastercard', 3456343453453783),
(9, 'Mastercard', 4654561896446546),
(10, 'Visa', 5454654564564654),
(11, 'Visa', 1465146646464456),
(12, 'Visa', 5346523156242564),
(13, 'Visa', 5656544479498494);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE `turnos` (
  `ID_Turno` int(10) UNSIGNED NOT NULL,
  `Turno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`ID_Turno`, `Turno`) VALUES
(1, 'Mañana'),
(2, 'Tarde'),
(3, 'Noche');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`ID_Alumno`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`ID_Curso`);

--
-- Indices de la tabla `detalle_facturas`
--
ALTER TABLE `detalle_facturas`
  ADD PRIMARY KEY (`Serie_Factura`,`Numero_Factura`),
  ADD KEY `ID_Inscripciones` (`ID_Inscripciones`);

--
-- Indices de la tabla `dias`
--
ALTER TABLE `dias`
  ADD PRIMARY KEY (`ID_Dia`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`Serie_Factura`,`Numero_Factura`),
  ADD KEY `ID_Alumno` (`ID_Alumno`);

--
-- Indices de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD PRIMARY KEY (`ID_Inscripciones`),
  ADD KEY `ID_Alumno` (`ID_Alumno`),
  ADD KEY `ID_Curso` (`ID_Curso`);

--
-- Indices de la tabla `inscripciones_cursos`
--
ALTER TABLE `inscripciones_cursos`
  ADD PRIMARY KEY (`ID_Inscripciones`,`ID_Curso`),
  ADD KEY `ID_Curso` (`ID_Curso`),
  ADD KEY `ID_Turno` (`ID_Turno`),
  ADD KEY `ID_Dia` (`ID_Dia`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`ID_Profesor`);

--
-- Indices de la tabla `profesores_cursos`
--
ALTER TABLE `profesores_cursos`
  ADD PRIMARY KEY (`ID_Profesor`,`ID_Curso`),
  ADD KEY `ID_Curso` (`ID_Curso`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID_Rol`);

--
-- Indices de la tabla `tarjetas`
--
ALTER TABLE `tarjetas`
  ADD PRIMARY KEY (`ID_tarjeta`);

--
-- Indices de la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD PRIMARY KEY (`ID_Turno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `ID_Alumno` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `ID_Curso` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `dias`
--
ALTER TABLE `dias`
  MODIFY `ID_Dia` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  MODIFY `ID_Inscripciones` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `ID_Profesor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `ID_Rol` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tarjetas`
--
ALTER TABLE `tarjetas`
  MODIFY `ID_tarjeta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `turnos`
--
ALTER TABLE `turnos`
  MODIFY `ID_Turno` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_facturas`
--
ALTER TABLE `detalle_facturas`
  ADD CONSTRAINT `detalle_facturas_ibfk_1` FOREIGN KEY (`Serie_Factura`,`Numero_Factura`) REFERENCES `facturas` (`Serie_Factura`, `Numero_Factura`),
  ADD CONSTRAINT `detalle_facturas_ibfk_2` FOREIGN KEY (`ID_Inscripciones`) REFERENCES `inscripciones` (`ID_Inscripciones`);

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `facturas_ibfk_1` FOREIGN KEY (`ID_Alumno`) REFERENCES `alumnos` (`ID_Alumno`);

--
-- Filtros para la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD CONSTRAINT `inscripciones_ibfk_1` FOREIGN KEY (`ID_Alumno`) REFERENCES `alumnos` (`ID_Alumno`),
  ADD CONSTRAINT `inscripciones_ibfk_2` FOREIGN KEY (`ID_Curso`) REFERENCES `cursos` (`ID_Curso`);

--
-- Filtros para la tabla `inscripciones_cursos`
--
ALTER TABLE `inscripciones_cursos`
  ADD CONSTRAINT `inscripciones_cursos_ibfk_1` FOREIGN KEY (`ID_Inscripciones`) REFERENCES `inscripciones` (`ID_Inscripciones`),
  ADD CONSTRAINT `inscripciones_cursos_ibfk_2` FOREIGN KEY (`ID_Curso`) REFERENCES `cursos` (`ID_Curso`),
  ADD CONSTRAINT `inscripciones_cursos_ibfk_3` FOREIGN KEY (`ID_Turno`) REFERENCES `turnos` (`ID_Turno`),
  ADD CONSTRAINT `inscripciones_cursos_ibfk_4` FOREIGN KEY (`ID_Dia`) REFERENCES `dias` (`ID_Dia`);

--
-- Filtros para la tabla `profesores_cursos`
--
ALTER TABLE `profesores_cursos`
  ADD CONSTRAINT `profesores_cursos_ibfk_1` FOREIGN KEY (`ID_Profesor`) REFERENCES `profesores` (`ID_Profesor`),
  ADD CONSTRAINT `profesores_cursos_ibfk_2` FOREIGN KEY (`ID_Curso`) REFERENCES `cursos` (`ID_Curso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
