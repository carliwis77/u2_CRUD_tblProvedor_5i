-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-10-2023 a las 08:43:27
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sabritas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provedor`
--

CREATE TABLE `provedor` (
  `id_producto` int(10) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `nombre_compania` varchar(50) NOT NULL,
  `contacto` int(20) NOT NULL,
  `region` varchar(50) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `codigo_postal` int(20) NOT NULL,
  `telefono` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `provedor`
--

INSERT INTO `provedor` (`id_producto`, `categoria`, `nombre_compania`, `contacto`, `region`, `pais`, `codigo_postal`, `telefono`) VALUES
(1, 'papitas', 'sabritas', 2147483647, 'Norte', 'México', 32098, 2147483647),
(2, 'papitas', 'sabritas', 2147483647, 'Norte', 'México', 32098, 2147483647),
(3, 'papitas', 'sabritas', 2147483647, 'Norte', 'México', 32098, 2147483647),
(4, 'papitas', 'sabritas', 2147483647, 'Norte', 'México', 32098, 2147483647),
(5, 'papitas', 'sabritas', 1112222, 'Norte', 'México', 32233, 2221111),
(6, 'papitas', 'sabritas', 2147483647, 'Norte', 'México', 32098, 2147483647);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `provedor`
--
ALTER TABLE `provedor`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `provedor`
--
ALTER TABLE `provedor`
  MODIFY `id_producto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
