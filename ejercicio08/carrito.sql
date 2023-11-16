-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 15-11-2023 a las 23:43:24
-- Versión del servidor: 5.7.33
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carrito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `opcion` varchar(200) NOT NULL,
  `opciones` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `imagen`, `opcion`, `opciones`) VALUES
(1, 'enfermera', '6.99', 'enfermera.jpg', 'color', 'rojo'),
(2, 'profesora', '5.99', 'profesora.jpg', 'asignatura', 'ingles'),
(3, 'perritos', '4.99', 'perritos.jpg', 'color', 'negro'),
(4, 'gatitos', '4.99', 'gatitos.jpg', 'color', 'negro'),
(9, 'Chupetes', '1.99', 'IMG-20121011-WA0011.jpg', 'color', 'azul'),
(10, 'Campanas', '1.99', 'IMG-20121011-WA0010.jpg', 'color', 'azul'),
(11, 'Cestito', '1.99', 'IMG-20121011-WA0015.jpg', 'color', 'amarillo'),
(12, 'Camping', '1.99', 'IMG-20121011-WA0014.jpg', 'color', 'amarillo'),
(13, 'Cochecito', '2.99', 'IMG-20121011-WA0000.jpg', 'color', 'amarillo'),
(14, 'Flores', '1.99', 'IMG-20121011-WA0018.jpg', 'color', 'amarillo'),
(15, 'Vestidito', '1.99', 'IMG-20121011-WA0008.jpg', 'color', 'amarillo'),
(16, 'Packs', '3.99', 'IMG-20121011-WA0013.jpg', 'color', 'amarillo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
