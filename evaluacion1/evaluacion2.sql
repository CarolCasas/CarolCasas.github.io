-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-03-2023 a las 02:07:14
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `evaluacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comida`
--

CREATE TABLE `comida` (
  `id` int(11) NOT NULL,
  `platillo` text NOT NULL,
  `precio` int(11) NOT NULL,
  `descuento` int(11) NOT NULL,
  `calidad` varchar(200) NOT NULL,
  `caducidad` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comida`
--

INSERT INTO `comida` (`id`, `platillo`, `precio`, `descuento`, `calidad`, `caducidad`) VALUES
(1, 'Caldo de rata', 1500, 2, 'Calidad 6/10', '2024-02-26'),
(2, 'Caldo de pollo', 1200, 10, 'Calidad 10/10', '2021-05-24'),
(3, 'Caldo de res', 999, 15, 'Calidad 2/10', '2005-05-23'),
(4, 'Pollo a la crema', 500, 50, 'Caliadd 8/10', '2002-03-23'),
(5, 'Bistexxx', 20000, 0, 'Calidad ????', '0000-00-00'),
(6, 'Polloxxx', 50000, 0, 'Calidad 10/10', '0000-00-00'),
(7, 'Enchiladas', 120, 0, 'Calidad 2/10', '2003-04-23'),
(8, 'Esquite', 50, 50, 'Calidad 9/10', '2015-03-23'),
(9, 'Pescado al vapor', 150, 15, 'Calidad 6/10', '2003-07-23'),
(10, 'pata de perro', 400, 40, 'Calidad 4/10', '2012-08-26'),
(11, 'Tripas asadas', 350, 66, 'Calidad 4/10', '2022-07-29'),
(12, 'Sushi', 666, 66, 'calidad 666/666', '0000-00-00'),
(13, 'Pozole', 222, 25, 'Calidad 10/10', '2005-01-23'),
(14, 'Pollito asado', 200, 30, 'Calidad 7/10', '2031-12-23'),
(15, 'Menudo', 566, 12, 'Calidad 3/10', '2013-09-23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comida`
--
ALTER TABLE `comida`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comida`
--
ALTER TABLE `comida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
