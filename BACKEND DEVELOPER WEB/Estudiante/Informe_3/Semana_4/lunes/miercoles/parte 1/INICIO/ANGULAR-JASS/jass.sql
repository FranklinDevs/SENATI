-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2024 a las 15:21:33
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
-- Base de datos: `jass`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_jass`
--

CREATE TABLE `usuario_jass` (
  `codigo` int(8) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `dni` int(8) NOT NULL,
  `codigo_jass` varchar(5) NOT NULL,
  `nombre_jass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario_jass`
--

INSERT INTO `usuario_jass` (`codigo`, `nombre`, `apellidos`, `dni`, `codigo_jass`, `nombre_jass`) VALUES
(13, 'GAEL', 'CONDORI GUAMAN', 12345678, '8-L', 'licas'),
(14, 'HUGO', 'RAMIREZ FLORES', 12345679, '78-A', 'achoj'),
(15, 'OMAR', 'JARA HUAMAN', 12345677, '45-AC', 'achaya'),
(16, 'RAUL', 'JIMENEZ MAMANI', 12345671, '6-L', 'licas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario_jass`
--
ALTER TABLE `usuario_jass`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario_jass`
--
ALTER TABLE `usuario_jass`
  MODIFY `codigo` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
