-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 03-09-2020 a las 11:25:04
-- Versión del servidor: 10.3.24-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `farojeqn_bdpjhuanuco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistenciacursos`
--

CREATE TABLE `asistenciacursos` (
  `id` int(10) NOT NULL,
  `curso` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `dni` int(10) NOT NULL,
  `apenom` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `celular` int(9) NOT NULL,
  `fechareg` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `horaini` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `horafin` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `certificados` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `detalles` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `asistenciacursos`
--

INSERT INTO `asistenciacursos` (`id`, `curso`, `dni`, `apenom`, `correo`, `celular`, `fechareg`, `horaini`, `horafin`, `certificados`, `detalles`) VALUES
(1, 'xxx', 43801670, 'Palpa Collazos Edgar', 'epalpac@pj.gob.pe', 962662500, '13/08/2020', '10:00', '12:00', 'si', ''),
(2, 'ingles', 654987211, 'Fresia', 'epalpac@pj.gob.pe', 962662500, '25-08-2020', '', '', '', ''),
(3, 'ingles', 43801670, 'Palpa Collazos Edgar', 'epalpac@pj.gob.pe', 962662500, '25-08-2020', '', '', '', ''),
(4, 'mate', 654987211, 'Fresia', 'epalpac@pj.gob.pe', 962662500, '25-08-2020', '', '', '', ''),
(5, 'ingeles', 11111111, 'james', 'james', 987654321, '25-08-2020', '', '', '', ''),
(6, 'informatica', 43801670, 'Palpa Collazos Edgar', 'epalpac@pj.gob.pe', 962662500, '26-08-2020', '', '', '', ''),
(7, 'ingles', 22222222, 'hola', 'hola@gmail.com', 654321, '26-08-2020', '', '', '', ''),
(8, 'ingles', 43801670, 'Palpa Collazos Edgar', 'epalpac@pj.gob.pe', 962662500, '26-08-2020', '', '', '', ''),
(9, 'NCPP', 999999999, 'sdfsdf', 'sdfsdf', 2432525, '26-08-2020', '', '', '', ''),
(10, 'PHP', 43801670, 'Palpa Collazos Edgar', 'epalpac@pj.gob.pe', 962662500, '31-08-2020', '', '', '', ''),
(11, 'MySql', 67676767, 'octubre', 'octubre', 987654321, '31-08-2020', '', '', '', ''),
(12, 'PHP', 77777777, 'ddddddd', 'rrrrrr', 2147483647, '01-09-2020', '', '', '', ''),
(13, 'MySql', 43801670, 'Palpa Collazos Edgar', 'epalpac@pj.gob.pe', 962662500, '02-09-2020', '', '', '', ''),
(14, 'PHP', 88888888, 'sdfsdf', 'sfsdfd@dfsdfsdf', 2147483647, '02-09-2020', '', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistenciacursos`
--
ALTER TABLE `asistenciacursos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistenciacursos`
--
ALTER TABLE `asistenciacursos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
