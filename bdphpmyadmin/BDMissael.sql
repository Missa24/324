-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-10-2024 a las 03:20:34
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdmissael`
--
CREATE DATABASE IF NOT EXISTS `bdmissael` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bdmissael`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catastro`
--
-- Creación: 03-10-2024 a las 20:22:29
--

CREATE TABLE `catastro` (
  `id` int(11) NOT NULL,
  `zona` varchar(50) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `superficie` decimal(10,2) DEFAULT NULL,
  `distrito` varchar(20) DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `codigo_catastral` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `catastro`
--

INSERT INTO `catastro` (`id`, `zona`, `direccion`, `superficie`, `distrito`, `fecha_registro`, `usuario_id`, `codigo_catastral`) VALUES
(1, 'hol', 'hol', 0.00, 'hola', '2023-02-15', 2, '12020'),
(2, 'Zona Este', 'Calle Luna 789', 800.00, 'Distrito 3', '2021-08-10', 1, '20201'),
(5, '5', 'Calle González 654', 1800.00, '2', '2023-05-15', 5, '20000002'),
(6, '6', 'Calle Ruiz 987', 2500.00, '3', '2023-06-01', 6, '30000002'),
(7, '7', 'Av. Herrera 123', 1300.00, '1', '2023-07-12', 7, '10000003'),
(8, '8', 'Calle Vargas 456', 1600.00, '2', '2023-08-20', 8, '20000003');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distrito`
--
-- Creación: 04-10-2024 a las 21:29:00
--

CREATE TABLE `distrito` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `distrito`
--

INSERT INTO `distrito` (`id`, `nombre`) VALUES
(1, 'Centro Histórico'),
(2, 'San Miguel'),
(3, 'Miraflores'),
(4, 'La Florida'),
(5, 'El Alto'),
(6, 'Achumani'),
(7, 'Calacoto'),
(8, 'Obrajes'),
(9, 'Villa San Antonio'),
(10, 'Laja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--
-- Creación: 03-10-2024 a las 15:08:11
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre_rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre_rol`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--
-- Creación: 05-10-2024 a las 00:55:41
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `paterno` varchar(50) NOT NULL,
  `materno` varchar(50) NOT NULL,
  `ci` varchar(20) NOT NULL,
  `rol_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `password`, `nombre`, `paterno`, `materno`, `ci`, `rol_id`) VALUES
(1, 'admin', 'admin', 'Juan', 'Perez', 'Garcia', '12345678', 1),
(2, 'user1', 'user1', 'Maria', 'Lopez', 'Ramirez', '87654321', 2),
(4, 'User4', 'User4', 'Ana', 'Torres', 'Fernández', '32165487', 2),
(5, 'User5', 'User5', 'Luis', 'González', 'Morales', '78945612', 2),
(6, 'User6', 'User6', 'Patricia', 'Ruiz', 'Torres', '65498721', 2),
(7, 'User7', 'User7', 'Pedro', 'Herrera', 'Jiménez', '98765432', 2),
(8, 'User8', 'User8', 'Laura', 'Vargas', 'Castillo', '12378945', 2),
(10, 'user9', 'user9', 'user9', 'user9', 'user9', '12589', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona`
--
-- Creación: 04-10-2024 a las 21:29:00
--

CREATE TABLE `zona` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `distrito_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `zona`
--

INSERT INTO `zona` (`id`, `nombre`, `distrito_id`) VALUES
(1, 'Zona 16 de Julio', 1),
(2, 'Zona Central', 1),
(3, 'Zona Santa Rosa', 2),
(4, 'Zona La Cañada', 2),
(5, 'Zona San Juan', 3),
(6, 'Zona San Jorge', 3),
(7, 'Zona La Paz', 4),
(8, 'Zona Los Pinos', 4),
(9, 'Zona Villa Fatima', 5),
(10, 'Zona El Tejar', 5),
(11, 'Zona La Ladera', 6),
(12, 'Zona Valle de la Luna', 6),
(13, 'Zona Calacoto', 7),
(14, 'Zona San Miguel', 7),
(15, 'Zona Obrajes', 8),
(16, 'Zona Villa San Antonio', 9),
(17, 'Zona Laja', 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catastro`
--
ALTER TABLE `catastro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `distrito`
--
ALTER TABLE `distrito`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `ci` (`ci`),
  ADD KEY `rol_id` (`rol_id`);

--
-- Indices de la tabla `zona`
--
ALTER TABLE `zona`
  ADD PRIMARY KEY (`id`),
  ADD KEY `distrito_id` (`distrito_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catastro`
--
ALTER TABLE `catastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `distrito`
--
ALTER TABLE `distrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `zona`
--
ALTER TABLE `zona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `catastro`
--
ALTER TABLE `catastro`
  ADD CONSTRAINT `catastro_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`);

--
-- Filtros para la tabla `zona`
--
ALTER TABLE `zona`
  ADD CONSTRAINT `zona_ibfk_1` FOREIGN KEY (`distrito_id`) REFERENCES `distrito` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
