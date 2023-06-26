-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-02-2020 a las 20:30:12
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rares`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ltd`
--

CREATE TABLE `ltd` (
  `ID` int(11) NOT NULL,
  `Imagen` mediumtext CHARACTER SET utf8 NOT NULL,
  `Nombre` mediumtext CHARACTER SET utf8 NOT NULL,
  `Valor` int(11) NOT NULL,
  `Descripcion` mediumtext CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ltd`
--

INSERT INTO `ltd` (`ID`, `Imagen`, `Nombre`, `Valor`, `Descripcion`) VALUES
(0, 'https://static.habbo-happy.net/img/furni/big/669911685865372.gif', 'Habbo Cola', 140, 'Hehehehehe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `megas`
--

CREATE TABLE `megas` (
  `ID` int(11) NOT NULL,
  `Imagen` mediumtext CHARACTER SET utf8 NOT NULL,
  `Nombre` mediumtext CHARACTER SET utf8 NOT NULL,
  `Valor` int(11) NOT NULL,
  `Descripcion` mediumtext CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `megas`
--

INSERT INTO `megas` (`ID`, `Imagen`, `Nombre`, `Valor`, `Descripcion`) VALUES
(108, 'https://bigcatalogo.net/templates/BCV1/images/furnis/454.png', 'Turbina', 100, 'Â¡Pura potencia!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rares`
--

CREATE TABLE `rares` (
  `ID` int(11) NOT NULL,
  `Imagen` mediumtext NOT NULL,
  `Nombre` mediumtext NOT NULL,
  `Valor` int(11) NOT NULL,
  `Descripcion` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rares`
--

INSERT INTO `rares` (`ID`, `Imagen`, `Nombre`, `Valor`, `Descripcion`) VALUES
(193, 'https://bigcatalogo.net/templates/BCV1/images/furnis/4600.png', 'Caldero de Oro', 50, 'En algÃºn lugar... mÃ¡s allÃ¡ del arcoiris...');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ltd`
--
ALTER TABLE `ltd`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `megas`
--
ALTER TABLE `megas`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `rares`
--
ALTER TABLE `rares`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `megas`
--
ALTER TABLE `megas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT de la tabla `rares`
--
ALTER TABLE `rares`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
