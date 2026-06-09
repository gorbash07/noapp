-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2026 at 02:16 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemadenomina`
--

-- --------------------------------------------------------

--
-- Table structure for table `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` bigint NOT NULL,
  `cedula` varchar(15) NOT NULL,
  `rif` varchar(15) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `sexo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `estado_civil` varchar(50) DEFAULT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `direccion` text,
  `cargo` varchar(50) DEFAULT NULL,
  `departamento` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `cedula`, `rif`, `nombres`, `apellidos`, `fecha_nacimiento`, `sexo`, `estado_civil`, `telefono`, `email`, `direccion`, `cargo`, `departamento`) VALUES
(10, '12345', 'j-12345', 'Ejemplo1', 'ejemplo1', '2007-06-13', 'F', 'Concubinato', '12345', 'ejemplo1@gmail.com', 'Casa 1', 'Conserje', 'Limpieza'),
(11, '67890', 'j-67890', 'Ejemplo2', 'ejemplo2', '2026-06-07', 'M', 'Viudo/a', '67890', 'ejemplo2@gmail.com', 'Casa 2', 'Conserje', 'Limpieza'),
(12, '54321', 'j-54321', 'Ejemplo3', 'ejemplo3', '2000-01-20', 'M', 'Concubinato', '54321', 'ejemplo3@gmail.com', 'Casa 3', 'Conserje', 'Limpieza'),
(13, '09876', 'j-09876', 'Ejemplo4', 'ejemplo4', '1996-07-26', 'F', 'Casado/a', '09876', 'ejemplo4@gmail.com', 'Casa 4', 'Conserje', 'Limpieza');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`),
  ADD UNIQUE KEY `cedula` (`cedula`),
  ADD UNIQUE KEY `rif` (`rif`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
