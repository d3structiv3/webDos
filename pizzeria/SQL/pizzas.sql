-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2020 a las 03:52:43
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
-- Base de datos: `pizzas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pizzas`
--

CREATE TABLE `pizzas` (
  `PizzaId` int(11) NOT NULL,
  `pizzanombre` varchar(200) NOT NULL,
  `precio` varchar(200) NOT NULL,
  `TamanioId` int(11) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pizzas`
--

INSERT INTO `pizzas` (`PizzaId`, `pizzanombre`, `precio`, `TamanioId`, `img`) VALUES
(1, 'Peperoni', '120', 1, 'https://placeralplato.com/files/2016/01/Pizza-con-pepperoni-640x480.jpg?width=1200&enable=upscale'),
(2, 'Salami', '220', 2, 'https://okdiario.com/img/2019/01/10/pizza-con-salami.jpg'),
(3, 'Carnes frias', '320', 3, 'https://img77.uenicdn.com/image/upload/v1571775303/business/boris-pizza/a944acd6-c782-4e1d-bb69-8b04b8b1c60f.jpg'),
(4, 'Hawaiana', '220', 2, 'https://cdn.kiwilimon.com/recetaimagen/11116/th5-640x426-1328.jpg'),
(5, 'Queso', '320', 3, 'https://bc.marfeelcache.com/statics/i/ps/i0.wp.com/irecetasfaciles.com/wp-content/uploads/2019/08/pizza-de-jamon-queso-y-tocino.jpg?fit=900%2C574&ssl=1&width=1200&enable=upscale'),
(6, 'Vegana', '150', 1, 'https://t2.rg.ltmcdn.com/es/images/5/2/4/img_pizza_vegetariana_casera_12425_600.jpg'),
(7, 'Vegetariana', '240', 1, 'https://mx.hola.com/imagenes/cocina/recetas/20200120158493/pizza-casera-vegetal/0-770-783/pizza-vegetariana-m.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tamanios`
--

CREATE TABLE `tamanios` (
  `TamanioId` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tamanios`
--

INSERT INTO `tamanios` (`TamanioId`, `nombre`) VALUES
(1, 'Chica'),
(2, 'Mediana '),
(3, 'Grande');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `VentaId` int(11) NOT NULL,
  `total` varchar(100) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `colonia` varchar(100) NOT NULL,
  `cp` varchar(100) NOT NULL,
  `metodo_pago` varchar(100) NOT NULL,
  `PizzaId` int(11) NOT NULL,
  `nombrecliente` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`VentaId`, `total`, `calle`, `colonia`, `cp`, `metodo_pago`, `PizzaId`, `nombrecliente`) VALUES
(1, '220', 'Colina de los fresnos ', 'El corralirto', '53667', 'Efectivo', 2, 'Jose Daniel'),
(2, '320', 'Colina dorada', 'La universal', '53667', 'Tarjeta', 3, 'Daniel'),
(3, '120', 'Colina azul', 'La cuspide', '53669', 'Tarjeta', 1, 'Jose');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pizzas`
--
ALTER TABLE `pizzas`
  ADD PRIMARY KEY (`PizzaId`),
  ADD KEY `TamanioId` (`TamanioId`);

--
-- Indices de la tabla `tamanios`
--
ALTER TABLE `tamanios`
  ADD PRIMARY KEY (`TamanioId`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`VentaId`),
  ADD KEY `PizzaId` (`PizzaId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pizzas`
--
ALTER TABLE `pizzas`
  MODIFY `PizzaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tamanios`
--
ALTER TABLE `tamanios`
  MODIFY `TamanioId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `VentaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pizzas`
--
ALTER TABLE `pizzas`
  ADD CONSTRAINT `pizzas_ibfk_1` FOREIGN KEY (`TamanioId`) REFERENCES `tamanios` (`TamanioId`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`PizzaId`) REFERENCES `pizzas` (`PizzaId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
