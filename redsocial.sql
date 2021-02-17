-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-02-2021 a las 00:40:08
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `redsocial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amistad`
--

CREATE TABLE `amistad` (
  `idAmistad` int(10) UNSIGNED NOT NULL,
  `apodo1` varchar(15) CHARACTER SET latin1 NOT NULL,
  `apodo2` varchar(15) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `amistad`
--

INSERT INTO `amistad` (`idAmistad`, `apodo1`, `apodo2`) VALUES
(1, 'matute', ''),
(2, '', 'matute'),
(3, 'chela', 'lucas'),
(4, 'lucas', 'chela'),
(5, 'matute', 'lucas'),
(6, 'lucas', 'matute');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `idFotos` int(11) NOT NULL,
  `apodo` varchar(15) CHARACTER SET latin1 NOT NULL,
  `NombreFoto` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `apodo` varchar(15) CHARACTER SET latin1 NOT NULL,
  `Nombre` varchar(15) CHARACTER SET latin1 NOT NULL,
  `Apellidos` varchar(15) CHARACTER SET latin1 NOT NULL,
  `Edad` int(11) NOT NULL,
  `Descripcion` varchar(100) CHARACTER SET latin1 NOT NULL,
  `FotoPerfil` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `CorreoElectronico` varchar(30) CHARACTER SET latin1 NOT NULL,
  `password` varchar(60) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`apodo`, `Nombre`, `Apellidos`, `Edad`, `Descripcion`, `FotoPerfil`, `CorreoElectronico`, `password`) VALUES
('chela', 'flaco', 'toti', 19, 'trabajador', 'img/chela/perfil.jpg', 'toti@gmail.com', '$2y$10$VgV1QEJV9lMJKSdixG/1ReMAiJWO1cXUn5oLQwDxBDDWXsVns/ppq'),
('lucas', 'matu', 'teran', 23, 'estudiante', 'img/lucas/perfil.jpg', 'maxi@gmail.com', '$2y$10$JWsFDCyUc3b4tVRDpQo1DOQ3YvMCPwuIC.v9GVbqF7tLvXIE3GyFe'),
('matute', 'maxi', 'teran', 23, 'estudiante', 'img/matute/perfil.jpg', 'matias@gmail.com', '$2y$10$HYDrsCZInI8Hm6LQCu.KoOCA1v7p7ukittT7UszNb4VclblUi8vaW'),
('qwer', 'HOTEL TRANSYLVA', 'tera', 20, 'dsgasgas', 'img/qwer/perfil.jpg', 'matias@gmail.com', '$2y$10$vQuvXpFhPWoHwlX1FHScZOlhgwGNVx78tvlOl1RwWyb4a4DxkGxzm');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `amistad`
--
ALTER TABLE `amistad`
  ADD PRIMARY KEY (`idAmistad`),
  ADD KEY `apodo1` (`apodo1`),
  ADD KEY `apodo2` (`apodo2`);

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`idFotos`),
  ADD KEY `apodo` (`apodo`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`apodo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `amistad`
--
ALTER TABLE `amistad`
  MODIFY `idAmistad` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
