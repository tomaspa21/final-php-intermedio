-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-03-2023 a las 16:20:13
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_intermedio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `pd_nombre` varchar(25) NOT NULL,
  `pd_principal` varchar(70) NOT NULL,
  `pd_postre` varchar(70) NOT NULL,
  `pd_estado` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `pd_nombre`, `pd_principal`, `pd_postre`, `pd_estado`) VALUES
(1, 'Lucas', 'Ravioles', 'Volcan de Chocolate', 'Listo para Entregar'),
(2, 'Tomas', 'Ravioles', 'Tiramisu', 'Listo para Entregar'),
(3, 'Harry', 'Langostinos al Ajillo', 'Frutillas con Crema', 'Listo para Entregar'),
(4, 'prueba', 'Langostinos al Ajillo', 'Helado', 'En Proceso'),
(5, 'prueba', 'Bife de Chorizo', 'Tres Leches', 'En Proceso');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
