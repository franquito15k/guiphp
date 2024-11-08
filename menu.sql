-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2024 a las 20:36:12
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ucp2024`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `idMenu` int(11) NOT NULL,
  `nombre_ejercicio` varchar(50) NOT NULL,
  `modulo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`idMenu`, `nombre_ejercicio`, `modulo`) VALUES
(1, 'ejercicio1', 'pagina1'),
(2, 'ejercicio2', 'variable'),
(3, 'ejercico3', 'variable string'),
(4, 'ejercicio4', 'act4'),
(5, 'ejercicio5', 'act5'),
(6, 'ejercicio6', 'act6'),
(7, 'ejercicio7', 'act7'),
(8, 'ejercicio8', 'act8'),
(9, 'ejercicio9', 'act9.1'),
(10, 'ejercicio10', 'act10.1'),
(11, 'ejercicio11', 'act11.1'),
(12, 'ejercicio12', 'act12.1'),
(13, 'ejercicio13', 'act13'),
(14, 'ejercicio14', 'act14'),
(15, 'ejercicio15', 'act15'),
(16, 'ejercicio16', 'act16'),
(17, 'ejercicio17', 'act17'),
(18, 'ejercicio18', 'act18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idMenu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `idMenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
