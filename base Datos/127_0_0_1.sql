-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-01-2024 a las 20:44:12
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
-- Base de datos: `petshappy`
--
CREATE DATABASE IF NOT EXISTS `petshappy` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `petshappy`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agendarcitas`
--

CREATE TABLE `agendarcitas` (
  `CitaID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `AgendadorID` int(11) DEFAULT NULL,
  `FechaHoraDisponible` datetime DEFAULT NULL,
  `Precio` int(11) DEFAULT NULL,
  `Estado` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `agendarcitas`
--

INSERT INTO `agendarcitas` (`CitaID`, `UserID`, `AgendadorID`, `FechaHoraDisponible`, `Precio`, `Estado`) VALUES
(22, 49, 57, '2023-11-03 02:00:00', 300000, 1),
(23, 49, NULL, '2023-11-29 14:59:00', 15030, 0),
(48, 57, NULL, '2024-01-25 17:30:00', 100000, 0),
(49, 57, NULL, '2024-01-30 08:42:00', 50000, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privilegios`
--

CREATE TABLE `privilegios` (
  `PrivilegioID` int(11) NOT NULL,
  `Nombre_privilegio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `privilegios`
--

INSERT INTO `privilegios` (`PrivilegioID`, `Nombre_privilegio`) VALUES
(1, 'Paseador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `UserID` int(11) NOT NULL,
  `PrivilegioID` int(11) NOT NULL,
  `Estado_cita` int(1) NOT NULL DEFAULT 0,
  `Username` varchar(20) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Nombres` varchar(100) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `Edad` varchar(2) NOT NULL,
  `Cedula` varchar(10) NOT NULL,
  `Ciudad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`UserID`, `PrivilegioID`, `Estado_cita`, `Username`, `Email`, `Password`, `Nombres`, `Apellidos`, `Edad`, `Cedula`, `Ciudad`) VALUES
(39, 1, 0, 'bryowl', 'brayan.mejia@gmail.com', '$2y$10$4j/G4pUCF5cXBrpVuD/QVe67945EXhJBWrwgFoepvG5KDXVdOUG.i', 'brayan', 'vallejo mejia', '22', '1000396034', 'itagui'),
(40, 2, 0, 'pepe', 'pepe@gmail.com', '$2y$10$XJ0f8LGIkEI9t93iDAz9Y.RyWUkJoEv4R5QylWVNWz1NvoxF2xVtO', 'traje', 'pep', '15', '5654959', 'itagui'),
(41, 2, 0, 'lorezo', 'lorezo@hotmail.com', '$2y$10$Og.7qiU3qk8Pk8bm4f2.yeG1/ryGOvIyI2VXV6WbufnEqImSrxIK.', 'lorez', 'lis', '56', '6477357', 'metrallo'),
(42, 2, 0, 'felipe', 'pipe69@hot.com', '$2y$10$0wMTYL319HvJvxeT1YB7m.4G8JZjuDhTzS2fJUv9qr6D0ysLtNhk2', 'lelele', 'lala', '45', '546464', 'bello'),
(43, 1, 0, 'yuliana', 'yuli@hotmail.com', '$2y$10$W5LJT2k21ZAZNABa0TzOIeP2mgJkfA6gf9emA0VO/CBCupqwEw2ce', 'yuli', 'hernandez', '69', '4686846', 'salgar'),
(44, 2, 0, 'jonathan 77', 'alan@gmail', '$2y$10$dbSwQ90jV3D8AwPXPywu6uZ5SlmSnvkIp4K5D9FhU6VM7jA.cq5EW', 'alan', 'lopez', '29', '518351', 'medallo'),
(45, 2, 0, 'lupe', 'soldadocaido@gmail.org', '$2y$10$B5VEg1PWiTcM34T1pM/fieFMCk1qMD05edY1m6y3.vA0qacqKC3pq', 'lupe', 'londono', '2', '101011011', 'chupamentepesco'),
(46, 2, 0, 'hectorhd', 'hdmaya@gmail.com', '$2y$10$eqmTTZwr.bj9PtNAcs6D5.0OyIN9DAmHi6cnZd47UV1gyxOFm.zy6', 'hector', 'maya', '40', '6969696969', 'bello'),
(47, 2, 0, 'jmariana', 'maria19@hmail.com', '$2y$10$/4hyf2jXQRIKl/DnNYq36e99PUcSYjRP/geSBcwWtqvVdbcAResMC', 'mari', 'vallejo', '15', '12345678', 'itagui'),
(48, 2, 0, 'loezo', 'loezo@gmial.com', '$2y$10$kKhObVNku/aDOsWz6XV81eYQGtL/4z9r2BqblgA787b8UgSv4cagq', 'lorenzo', 'lopre', '25', '1654646', 'cali'),
(49, 1, 0, 'rolo', 'rolo45@gmail.com', '$2y$10$54MEvyVEFaVz/L0T6DJh4eMSL4FrH15fx3u/fXkTJPS7NkOgqlqeK', 'rolito', 'pan', '15', '1591156', 'belen'),
(57, 2, 1, 'Gobernante31', 'gobernante31@gmail.com', '$2y$10$6qqVoJfDDncX81hSgslt3eT5UG16qr5iZmM.6g/0vSgb109MnHYqq', 'Emmanuel', 'Calle', '10', '1000101000', 'Medellin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agendarcitas`
--
ALTER TABLE `agendarcitas`
  ADD PRIMARY KEY (`CitaID`),
  ADD KEY `PaseadorID` (`UserID`),
  ADD KEY `UsuarioID` (`AgendadorID`);

--
-- Indices de la tabla `privilegios`
--
ALTER TABLE `privilegios`
  ADD PRIMARY KEY (`PrivilegioID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `PrivilegioID` (`PrivilegioID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agendarcitas`
--
ALTER TABLE `agendarcitas`
  MODIFY `CitaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `privilegios`
--
ALTER TABLE `privilegios`
  MODIFY `PrivilegioID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agendarcitas`
--
ALTER TABLE `agendarcitas`
  ADD CONSTRAINT `PaseadorID` FOREIGN KEY (`UserID`) REFERENCES `usuarios` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `UsuarioID` FOREIGN KEY (`AgendadorID`) REFERENCES `usuarios` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `PrivilegioID` FOREIGN KEY (`PrivilegioID`) REFERENCES `privilegios` (`PrivilegioID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
