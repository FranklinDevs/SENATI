-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2024 a las 02:42:30
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
-- Base de datos: `colegio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaciones`
--

CREATE TABLE `asignaciones` (
  `id_asignacion` int(11) NOT NULL,
  `id_profesor` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `fecha_asignacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asignaciones`
--

INSERT INTO `asignaciones` (`id_asignacion`, `id_profesor`, `id_materia`, `fecha_asignacion`) VALUES
(1, 1, 1, '2022-01-01'),
(2, 2, 2, '2022-02-15'),
(3, 3, 3, '2021-11-10'),
(4, 4, 4, '2023-04-22'),
(5, 5, 5, '2022-06-20'),
(6, 6, 6, '2022-09-05'),
(7, 7, 7, '2020-04-12'),
(8, 8, 8, '2022-07-18'),
(9, 9, 9, '2021-12-12'),
(10, 10, 10, '2023-08-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `id_calificacion` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `nota` decimal(10,0) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `calificaciones`
--

INSERT INTO `calificaciones` (`id_calificacion`, `id_estudiante`, `id_materia`, `nota`, `fecha_registro`) VALUES
(1, 1, 1, 14, '2024-11-27 01:20:51'),
(2, 2, 2, 20, '2024-11-27 01:20:51'),
(3, 3, 3, 15, '2024-11-27 01:21:25'),
(4, 4, 4, 18, '2024-11-27 01:21:25'),
(5, 5, 5, 11, '2024-11-27 01:22:12'),
(6, 6, 6, 20, '2024-11-27 01:22:12'),
(7, 7, 7, 19, '2024-11-27 01:22:49'),
(8, 8, 8, 17, '2024-11-27 01:22:49'),
(9, 9, 9, 20, '2024-11-27 01:23:13'),
(10, 10, 10, 20, '2024-11-27 01:23:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id_estudiante` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id_estudiante`, `nombre`, `apellido`, `fecha_nacimiento`) VALUES
(1, 'Franklin', 'Borda', '2003-07-29'),
(2, 'Delia', 'Borda quispe', '2011-07-22'),
(3, 'Luis', 'Martinez', '2009-03-30'),
(4, 'Maria', 'Rodriguez', '2012-10-10'),
(5, 'Pedro', 'Lopez', '2010-02-01'),
(6, 'Clara', 'Sanchez', '2011-11-15'),
(7, 'Carla', 'Fernandez', '2008-08-22'),
(8, 'Manuel', 'Garcia', '2010-12-17'),
(9, 'Isabel', 'Herrera', '2009-09-29'),
(10, 'Jorge', 'Diaz', '2012-01-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id_materia` int(11) NOT NULL,
  `nombre_materia` varchar(100) NOT NULL,
  `codigo_materia` varchar(10) NOT NULL,
  `grado` int(11) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materia`, `nombre_materia`, `codigo_materia`, `grado`, `descripcion`) VALUES
(1, 'Matematicas', 'MAT001', 1, 'Calculo, algebra,geometria'),
(2, 'Lengua', 'LEG001', 1, 'Gramatica, lectura, escritura'),
(3, 'Ciencias', 'CIE001', 1, 'Biologia, fisica, Quimica'),
(4, 'Historia', 'HIS001', 1, 'Historia antigua, medieval, moderna'),
(5, 'Ingles', 'ING001', 2, 'Lectura, escritura, conversacion'),
(6, 'Geografia', 'GEO001', 2, 'Estudio de mapas, clima, paisajes'),
(7, 'Musica', 'MUS001', 3, 'Teoria musical, instrumentos'),
(8, 'Arte', 'ART001', 3, 'Dibujo, pintura, escultura'),
(9, 'Física', 'FIS001', 4, 'leyes de la física, experimentos'),
(10, 'Tecnología', 'TEC001', 4, 'Informática, programación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE `matricula` (
  `id_matricula` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `fecha_matricula` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `matricula`
--

INSERT INTO `matricula` (`id_matricula`, `id_estudiante`, `id_materia`, `fecha_matricula`) VALUES
(1, 1, 1, '2023-11-01'),
(2, 2, 2, '2023-12-01'),
(3, 3, 3, '2023-11-02'),
(4, 4, 4, '2023-11-02'),
(5, 5, 5, '2023-11-02'),
(6, 6, 6, '2023-11-02'),
(7, 7, 7, '2023-11-02'),
(8, 8, 8, '2023-11-02'),
(9, 9, 9, '2023-11-02'),
(10, 10, 10, '2023-11-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `id_profesor` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `telefono` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id_profesor`, `nombre`, `apellido`, `telefono`) VALUES
(1, 'Laura', 'Martinez', 945645862),
(2, 'Carlos', 'Perez', 555321789),
(3, 'Gabriela', 'Gomez', 555654321),
(4, 'Fernando', 'Lopez', 555987645),
(5, 'Marta', 'Ruiz', 555112345),
(6, 'Jose', 'Sanchez', 555987123),
(7, 'Ana', 'Diaz', 555321654),
(8, 'Pedro', 'Fernandez', 555456789),
(9, 'Pilar', 'Ruiz', 555654987),
(10, 'Sergio', 'Torres', 555123987);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignaciones`
--
ALTER TABLE `asignaciones`
  ADD PRIMARY KEY (`id_asignacion`);

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`id_calificacion`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id_estudiante`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indices de la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`id_matricula`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id_profesor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignaciones`
--
ALTER TABLE `asignaciones`
  MODIFY `id_asignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `id_calificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id_estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `matricula`
--
ALTER TABLE `matricula`
  MODIFY `id_matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id_profesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
