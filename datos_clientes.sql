-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2023 a las 05:38:06
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formulario_crud_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_clientes`
--

CREATE TABLE `datos_clientes` (
  `id` int(11) NOT NULL,
  `Nombre_Completo:` varchar(20) NOT NULL,
  `Fecha_de_nacimiento:` varchar(11) NOT NULL,
  `Género:` varchar(20) NOT NULL,
  `Dirección:` varchar(20) NOT NULL,
  `Número_de_teléfono:` text NOT NULL,
  `Email:` text NOT NULL,
  `¿Motivo_de_la_consulta?` text NOT NULL,
  `Mensaje:` text NOT NULL,
  `¿Esta_en_tratamiento_medico?` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos_clientes`
--

INSERT INTO `datos_clientes` (`id`, `Nombre_Completo:`, `Fecha_de_nacimiento:`, `Género:`, `Dirección:`, `Número_de_teléfono:`, `Email:`, `¿Motivo_de_la_consulta?`, `Mensaje:`, `¿Esta_en_tratamiento_medico?`) VALUES
(45, 'Dayana Andrea', '02/11/1995', 'Femenino', 'calle 86 sur # 77 l ', '3103126589', 'andreaortiz9410@gmail.com', 'Transtorno depresivo', 'Requiero Terapia asistida con perro puesto que sufro de depresión', 'Si');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_clientes`
--
ALTER TABLE `datos_clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_clientes`
--
ALTER TABLE `datos_clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
