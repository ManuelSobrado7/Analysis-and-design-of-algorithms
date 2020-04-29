-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-04-2020 a las 06:32:45
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
Base de datos: `amfru`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--


Base de datos: `amfru`

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `Cantidad` int(11) NOT NULL,
  `Fecha` varchar(15) NOT NULL,
  `Valor_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `precio`, `descripcion`, `id_usuario`, `Cantidad`, `Fecha`, `Valor_total`) VALUES
(5, 'Roscon', 500, 'Ahora si', 1, 40, '2020-04-09', 20000),
(6, 'Pan', 200, 'Hola', 1, 40, '2020-04-09', 8000),
(7, 'Leche', 2000, 'Hola', 1, 10, '2020-04-09', 20000),
(8, 'Jugo', 1000, 'hola\n', 1, 5, '2020-04-09', 5000),
(9, 'Gaseosa', 3000, 'hola\n', 1, 10, '2020-04-09', 30000),
(10, 'Helado', 1.5, 'Hola', 1, 54, '2020-04-09', 81);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `descripcion`) VALUES
(1, 'Tiene permisos'),
(2, 'Cliente'),
(3, 'Proveedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `nombre_usuario` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `nombre_usuario`, `password`, `correo`, `telefono`, `id_rol`) VALUES
(1, 'Manuel', 'Albarran', 'Root', 'pass', 'Manuel.gv2012@gmail.com', 2147483647, 1),
(2, 'Pepito', 'Perez', 'Pepito123', '123456', 'pepito@gmail.com', 2147483647, 2),
(3, 'Sevin', 'Villanueva', 'Sevin123', '123456', 'pepito@gmail.com', 2147483647, 3),
(500, 'Manuel', 'Prueba', 'Prueba123', 'password', 'correo', 777, 2),
(45321, 'probando11', 'probando11', 'probando11', 'probando11', 'probando11', 12323, 2),
(123154, 'Manuel', 'Albarran', 'Manuel Albarran', 'pass', 'manuel.gv2012', 2147483647, 2),
(785542, 'probando4444', 'probando4444', 'probando4444', 'probando4444', 'probando4444', 213453, 2),
(789465, 'Prueba1', 'Prueba', 'Prueba123', 'anp0', 'manuell', 521432, 2),
(123456787, 'Probando', 'probando', 'probando', 'probando', 'probando', 2147483647, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
