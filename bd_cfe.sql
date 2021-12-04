-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2021 a las 21:24:26
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_cfe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administracion`
--

CREATE TABLE `administracion` (
  `gefes_de_area` varchar(50) NOT NULL,
  `supervisores` varchar(50) NOT NULL,
  `empleados_generales` varchar(50) NOT NULL,
  `turno` varchar(50) NOT NULL,
  `contadores` varchar(50) NOT NULL,
  `ingenieros_de_software` varchar(50) NOT NULL,
  `codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administracion`
--

INSERT INTO `administracion` (`gefes_de_area`, `supervisores`, `empleados_generales`, `turno`, `contadores`, `ingenieros_de_software`, `codigo`) VALUES
('Manuel Reyes', 'Hector Moreno', 'Vero Ramirez', '1', 'David Ramirez', '', 32695),
('Manuel Reyes', 'Hector Moreno', 'Vero Ramirez', '1', 'David Ramirez', 'Jose Tarango', 32697);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `rfc` varchar(50) NOT NULL,
  `razon` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`nombre`, `apellido`, `fecha`, `rfc`, `razon`, `correo`, `codigo`) VALUES
('José Alberto', 'Mendoza Tarango', '2021-11-27', 'JOSEMBP290804', 'Pago Servicio Electrico Local 1', 'correo@correo.com', 4),
('José Alberto ', 'Mendoza Tarango', '2021-11-27', 'JOSEMBP290804', 'Pago Servicio Electrico Local 1', 'correo@correo.com', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_empleados`
--

CREATE TABLE `pago_empleados` (
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(10) NOT NULL,
  `fecha_ultimo_pago` date NOT NULL,
  `ultimo_pago` varchar(50) NOT NULL,
  `cuenta_bancaria` int(50) NOT NULL,
  `codigo` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pago_empleados`
--

INSERT INTO `pago_empleados` (`nombre`, `direccion`, `telefono`, `fecha_ultimo_pago`, `ultimo_pago`, `cuenta_bancaria`, `codigo`) VALUES
('José Alberto Mendoza Tarango', 'San Mateo', 2147483647, '2004-08-29', '$2894', 5579, 32698);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_empleados`
--

CREATE TABLE `registro_empleados` (
  `codigo` int(9) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `telefono` int(50) NOT NULL,
  `rfc` varchar(50) NOT NULL,
  `fecha-nacimiento` date NOT NULL,
  `fecha-registro` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro_empleados`
--

INSERT INTO `registro_empleados` (`codigo`, `nombre`, `apellido`, `telefono`, `rfc`, `fecha-nacimiento`, `fecha-registro`) VALUES
(1, 'Tarango', '6561876027', 0, '29/08/2004', '0000-00-00', '32695'),
(32696, 'Zoe', 'Mendoza', 1234567890, 'rfc1234', '2011-08-01', '30/11/2021');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administracion`
--
ALTER TABLE `administracion`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `pago_empleados`
--
ALTER TABLE `pago_empleados`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `registro_empleados`
--
ALTER TABLE `registro_empleados`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administracion`
--
ALTER TABLE `administracion`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32699;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pago_empleados`
--
ALTER TABLE `pago_empleados`
  MODIFY `codigo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32699;

--
-- AUTO_INCREMENT de la tabla `registro_empleados`
--
ALTER TABLE `registro_empleados`
  MODIFY `codigo` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32697;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
