-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2023 a las 02:50:11
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
-- Base de datos: `Tienda_Online`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `color` varchar(50) NOT NULL,
  `existencia` int(11) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `medida` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Productos`
--

INSERT INTO `Productos` (`id`, `nombre`, `precio`, `descripcion`, `color`, `existencia`, `marca`, `medida`) VALUES
(1, 'Apple AirPods Pro', 5500, 'Apple AirPods Pro (Segunda generación)', 'Blanco', 55, 'Apple', '3,09 x 2,18 x 2,4 cm'),
(2, 'El verano en que me enamoré', 214, 'Belly nunca ha sido la clase de chica a la que le pasan cosas. Año tras año, sus vacaciones transcurren en la casa de la playa pero los chicos apenas se dan cuenta de lo mucho que se fija en ellos. Cada verano, Belly desea que eso cambie. Y, esta vez, lo hará: este será el verano en que Belly se vol', 'Aqua', 100, 'Editorial Planeta Mexicana, S.A. de C.V.', '14.99 x 1.78 x 22.61 cm'),
(3, 'El verano en que me enamoré', 214, 'Belly nunca ha sido la clase de chica a la que le pasan cosas.Cada verano, Belly desea que eso cambie. Y, esta vez, lo hará: este será el verano en que Belly se volverá guapa, el verano en que se enamorará… aunque también será el verano en el que todo cambiará. Para bien, y para mal.', 'Aqua', 100, 'Editorial Planeta Mexicana, S.A. de C.V.', '14.99 x 1.78 x 22.61 cm'),
(4, 'chamarra de esquí impermeable', 634, 'chamarra de esquí impermeable para hombre, resistente al viento, rompevientos de lluvia, chamarra de nieve cálido con capucha', 'Gris', 3, 'MOERDENG', 'Se ajusta conforme a la talla marcada'),
(5, 'iPhone 14 Pro MAX', 28999, 'Cámara gran angular de 48 MP para una resolución hasta 4 veces mayor', 'Morado Oscuro', 87, 'Apple', '6.7 Pulgadas'),
(6, 'Café Soluble', 104, 'Producto de calidad', 'Café', 1, 'Nescafé', '200g'),
(7, 'Alexa', 999, 'Tu asistente lista para ayudarte ', 'Negro', 97, 'Amazon', 'Pequeño'),
(8, 'Smartwatch', 2772, 'Fitbit Versa 2 Smartwatch de Fitness, Incluye Correas S y L', 'Negro', 5, 'Versa', 'Pequeño'),
(9, 'Smart Tv', 13500, 'TV', 'Negro', 4, 'Samsung', '65');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Productos`
--
ALTER TABLE `Productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Productos`
--
ALTER TABLE `Productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
