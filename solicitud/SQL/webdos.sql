-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2020 a las 02:24:33
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `webdos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `DatoId` int(11) NOT NULL,
  `NombreCompleto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `FechaNacimineto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `EstadoProcedencia` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `CURP` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Edad` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `RFC` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Foto` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `EstadoCivil` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `NivelEstudios` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Salario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `NSS` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `EmpresaProcedencia` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`DatoId`, `NombreCompleto`, `FechaNacimineto`, `EstadoProcedencia`, `CURP`, `Edad`, `Fecha`, `RFC`, `Telefono`, `Foto`, `Direccion`, `EstadoCivil`, `NivelEstudios`, `Salario`, `NSS`, `EmpresaProcedencia`) VALUES
(10, 'Jose Daniel', '1998-09-09', 'CDMX', 'RAHD980909', '22', '11.19.20', 'RAHD980909', '5536987895', '/img/per1.png', 'Naucalpan', 'Soltero', 'Preparatoria', '12000', '12378945636', 'TESH');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`DatoId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `DatoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
