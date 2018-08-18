-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2018 at 05:59 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiendaonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `articulos`
--

CREATE TABLE `articulos` (
  `codigo` int(11) NOT NULL,
  `marca` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detalle` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `cantidad` int(20) DEFAULT NULL,
  `imagen` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `articulos`
--

INSERT INTO `articulos` (`codigo`, `marca`, `detalle`, `precio`, `cantidad`, `imagen`) VALUES
(1, 'Treintaycinco', 'Cerveza La Pelona', 0, 6, './img/products/LaPelona.png'),
(2, 'Cervecera del Centro', 'Ambar Premium Pilsner', 0, 8, './img/products/PremiumPilsner.jpg'),
(3, 'Beer Designers', 'Cuernejo', 0, 11, './img/products/Cuernejo.jpg'),
(4, 'Treintaycinco', 'Lora', 0, 3, './img/products/Lora.jpg'),
(5, 'Beer Designers', 'Buyote', 0, 7, './img/products/Buyote.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `carrito`
--

CREATE TABLE `carrito` (
  `idcarro` int(20) NOT NULL,
  `fechacarrito` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `carrito`
--

INSERT INTO `carrito` (`idcarro`, `fechacarrito`) VALUES
(123, '2018-08-17 21:32:44'),
(1234, '2018-08-17 16:21:31'),
(114610450, '2018-08-17 21:12:00'),
(117570581, '2018-08-17 16:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `compras`
--

CREATE TABLE `compras` (
  `id` int(20) NOT NULL,
  `id_usuario` int(20) DEFAULT NULL,
  `id_articulo` int(20) DEFAULT NULL,
  `fecha_compra` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `compras`
--

INSERT INTO `compras` (`id`, `id_usuario`, `id_articulo`, `fecha_compra`) VALUES
(1, 123, 1, '2018-08-08 00:00:00'),
(2, 117570581, 3, '2018-08-17 21:51:28'),
(3, 117570581, 1, '2018-08-17 21:51:28'),
(4, 117570581, 5, '2018-08-17 21:51:28'),
(5, 117570581, 1, '2018-08-17 21:56:12'),
(6, 117570581, 1, '2018-08-17 21:56:12');

-- --------------------------------------------------------

--
-- Table structure for table `itemcarrito`
--

CREATE TABLE `itemcarrito` (
  `iditemcarro` int(40) NOT NULL,
  `codigoproducto` int(11) NOT NULL,
  `cantidad` int(2) NOT NULL DEFAULT '1',
  `fechaitem` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idcarrito` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `cedula` int(20) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellidos` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` int(20) DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombre_de_usuario` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contrasena` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rol` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`cedula`, `nombre`, `apellidos`, `telefono`, `email`, `nombre_de_usuario`, `contrasena`, `rol`) VALUES
(123, 'test', 'test', 123, 'test@gmail.com', 'tes', '202cb962ac59075b964b07152d234b70', 'comun'),
(1234, 'Test2', 'Ape2', 123487, 'test2@email.com', '1234', '202cb962ac59075b964b07152d234b70', 'comun '),
(114610450, 'Cristhiam', 'Mena Sosa', 83037155, 'cristhiammena@gmail.com', 'cris', '202cb962ac59075b964b07152d234b70', 'admin'),
(117570581, 'Jose', 'A', 123, 'qwe@email.com', 'Josepab00', '202cb962ac59075b964b07152d234b70', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`idcarro`);

--
-- Indexes for table `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itemcarrito`
--
ALTER TABLE `itemcarrito`
  ADD PRIMARY KEY (`iditemcarro`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cedula`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articulos`
--
ALTER TABLE `articulos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `itemcarrito`
--
ALTER TABLE `itemcarrito`
  MODIFY `iditemcarro` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
