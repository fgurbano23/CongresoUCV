-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-02-2018 a las 19:29:12
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `congresoucv`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_participantes`
--

CREATE TABLE `registro_participantes` (
  `nombre_participante` varchar(40) NOT NULL,
  `empresa` varchar(40) NOT NULL,
  `ci_participante` varchar(8) NOT NULL,
  `correo_participante` varchar(40) NOT NULL,
  `telefono_celular` varchar(10) NOT NULL,
  `telefono_habitacion` varchar(10) NOT NULL,
  `tipo_pago` varchar(3) NOT NULL,
  `id_pago` varchar(20) NOT NULL,
  `fecha_pago` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro_participantes`
--

INSERT INTO `registro_participantes` (`nombre_participante`, `empresa`, `ci_participante`, `correo_participante`, `telefono_celular`, `telefono_habitacion`, `tipo_pago`, `id_pago`, `fecha_pago`) VALUES
('FELIX URBANO', '', '25369306', 'FELIXGABUR@YAHOO.COM', '0412827911', '0212633653', 'TRA', '001231021340001', '2018-12-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_patrocinante`
--

CREATE TABLE `registro_patrocinante` (
  `nombre_patrocinante` varchar(40) NOT NULL,
  `empresa_patrocinante` varchar(40) NOT NULL,
  `id_patrocinante` varchar(10) NOT NULL,
  `correo_patrocinante` varchar(40) NOT NULL,
  `telefono_contacto` varchar(10) NOT NULL,
  `tipo_pago` varchar(3) NOT NULL,
  `id_pago` varchar(20) NOT NULL,
  `fecha_pago` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro_patrocinante`
--

INSERT INTO `registro_patrocinante` (`nombre_patrocinante`, `empresa_patrocinante`, `id_patrocinante`, `correo_patrocinante`, `telefono_contacto`, `tipo_pago`, `id_pago`, `fecha_pago`) VALUES
('aaaa aaaa', 'aaa', '1121212', 'SADSAD@MAIL.COM', '2122121', 'DEP', '1212121', '2121-12-12'),
('adasdsad sadsadsa', 'sadasdasdas', '12312323', 'asdasda@fdgf.com', 'wwqeeqweq', 'DEP', 'qweqweqwe', '1323-02-12'),
('asdad dawd', 'dsadsdd', '123245432', 'dsaad@dsdsa.com', '1231232', 'DEP', '12313213', '2332-02-11'),
('SUJETO PRUEBA', 'MI EMPRESA FANTASMA', '12341', 'UNCORREOFANTASMA@GMAIL.COM', '0412412315', 'DEP', '1212121', '2001-08-12'),
('ejemplo uno', '2321', '312311', 'asds@yahoo.com', '23123', 'DEP', '213123', '0031-02-21'),
('FELIXG GDF', 'ASDA', 'DSADSA', 'DSDSAD@YAHOO.COM', 'SADDSA', 'on', 'DSAADS', '0011-11-01'),
('dadad sadasd', '2sadasd', 'sadasd', 'dasda@yahoo.com', '1231231231', 'DEP', 'sdadas', '0332-02-11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro_participantes`
--
ALTER TABLE `registro_participantes`
  ADD PRIMARY KEY (`ci_participante`);

--
-- Indices de la tabla `registro_patrocinante`
--
ALTER TABLE `registro_patrocinante`
  ADD PRIMARY KEY (`id_patrocinante`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
