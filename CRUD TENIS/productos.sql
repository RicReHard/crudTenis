-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-09-2023 a las 06:52:09
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
-- Base de datos: `tennis_marca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(4) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` text NOT NULL,
  `categoria` varchar(10) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `descripcion`, `categoria`, `precio`) VALUES
(1, 'Tenis Nike	', 'Los tenis deportivos Nike para hombres son la elección perfecta para cualquier actividad deportiva. Cuentan con tecnología de amortiguación Air Max para una comodidad inigualable. ', 'Deportes', 299.999),
(2, 'Tenis Adidas      ', 'Experimenta la excelencia en cada paso con estos zapatos de tenis Adidas de alta calidad. Diseñados para un rendimiento superior en la cancha. ', 'Deportes ', 399.999),
(3, 'Tenis Puma', 'Estos tenis Puma son sinónimo de estilo y comodidad. Su diseño elegante los convierte en la elección perfecta para lucir genial mientras practicas deportes. ', 'Deportes', 259.999),
(4, 'Tenis Reebok ', 'Los tenis deportivos Reebok para mujeres ofrecen un ajuste perfecto y soporte para cualquier actividad. Combinan moda y función de manera excepcional. ', 'Deportes', 239.999),
(5, 'Tenis Asics       ', 'Estos calzados de tenis Asics cuentan con tecnología avanzada de gel para una absorción de impactos superior. Ideales para un rendimiento óptimo en la cancha. ', 'Deportes', 349.999),
(6, 'Tenis New Balance ', 'Los tenis New Balance ofrecen una comodidad excepcional gracias a su diseño ergonómico y su suela resistente. Ideales para entrenamientos intensos. ', 'Deportes', 519.999),
(7, 'Tenis Converse    ', 'Los clásicos tenis Converse de lona son un icono de la moda urbana. Son cómodos y versátiles, ideales para un estilo casual. | ', 'Deportes', 329.999),
(8, 'Tenis Skechers    ', 'Estos zapatos de tenis Skechers están diseñados con amortiguación de espuma viscoelástica para una comodidad insuperable durante todo el día. ', 'Deportes', 139.999),
(9, 'Tenis Vans        ', 'Logra un look casual y moderno con estos estilosos tenis Vans. Su diseño clásico es perfecto para cualquier ocasión. ', 'Deportes', 569.999),
(10, 'Tenis Salomon     ', 'Los tenis de trail Salomon son ideales para aventuras al aire libre. Ofrecen tracción y protección en terrenos exigentes. ', 'Deportes', 329.999);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
