-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2024 a las 00:55:40
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
-- Base de datos: `tarea_nº_02`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulante`
--

CREATE TABLE `postulante` (
  `codigo_postulante` int(30) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(35) NOT NULL,
  `celular` varchar(9) NOT NULL,
  `carrera` varchar(30) NOT NULL,
  `genero` varchar(30) NOT NULL,
  `ganancia` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `postulante`
--

INSERT INTO `postulante` (`codigo_postulante`, `dni`, `nombres`, `apellidos`, `celular`, `carrera`, `genero`, `ganancia`) VALUES
(1001, '76012151', 'Franklin', 'Borda', '945645861', 'Ingenieria de Software con I.A', 'Masculino', 2000),
(1002, '76012152', 'Brayan', 'Cutipa', '945645862', 'Arquitectura', 'Masculino', 3000),
(1003, '76012153', 'Delia', 'Borda ', '932541664', 'Administración', 'Femenino', 60000),
(1004, '76012154', 'Dante', 'Olivares', '945645865', 'Ingenieria de Software con I.A', 'Masculino', 400000),
(1005, '76012155', 'Carla', 'Betancud', '932541666', 'Medicina', 'Femenino', 50000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `postulante`
--
ALTER TABLE `postulante`
  ADD PRIMARY KEY (`codigo_postulante`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `postulante`
--
ALTER TABLE `postulante`
  MODIFY `codigo_postulante` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
