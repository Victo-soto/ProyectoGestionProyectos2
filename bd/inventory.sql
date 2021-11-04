-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2021 a las 12:21:50
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventory`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idcategoria` int(11) NOT NULL,
  `nombrecategoria` varchar(45) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `estado` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idcategoria`, `nombrecategoria`, `descripcion`, `estado`) VALUES
(1, 'juego', 'nuevo juego', 1),
(2, 'rerbt', 'ebthet', 1),
(3, 'etvet', 'tgevt', 1),
(4, 'etvet', 'bbbbbbbbbbbbbbbbbbbb', 1),
(5, 'v4tq4', 'q4tq4', 1),
(6, 'v4tq4q4t 34t', 'q4tq44t q34t34rvdtgw', 1),
(7, '46u3', '46y36y', 1),
(8, 'victor', 'eusebio', 1),
(9, 'lkkbk', 'oiguilgug', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idcliente` int(11) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `email` varchar(45) NOT NULL,
  `ruc` varchar(45) NOT NULL,
  `estado` int(2) NOT NULL,
  `deuda` double NOT NULL,
  `de` varchar(50) NOT NULL,
  `hasta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idcliente`, `nombres`, `apellidos`, `dni`, `telefono`, `direccion`, `email`, `ruc`, `estado`, `deuda`, `de`, `hasta`) VALUES
(1, 'victor', 'eusebio soto', '73515797', '967089485', 'av los olivos 34', 'veusebiosotogmail.com', '1654441', 1, 0, '', ''),
(2, 'sheila gaudencia', 'rga', 'agr', 'ra', 'rgr', 'r ga', 'rgar', 1, 0, '', ''),
(3, 'b6', '535', 'wr ', ' 35 ', ' t 5', 't g5', 'w55', 1, 0, '', ''),
(4, 'e rgr', 'grg e', 'r g', ' rgq', 'r gqer', 'r gare', 'rg r', 1, 0, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleentrada`
--

CREATE TABLE `detalleentrada` (
  `cantidad` int(11) NOT NULL,
  `precio` double NOT NULL,
  `identrada` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleventas`
--

CREATE TABLE `detalleventas` (
  `cantidad` int(11) NOT NULL,
  `preciounitario` double NOT NULL,
  `idventa` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE `entradas` (
  `identrada` int(11) NOT NULL,
  `numfactura` varchar(45) NOT NULL,
  `fecha` date NOT NULL,
  `totalcompra` double NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idproveedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idproducto` int(11) NOT NULL,
  `idproveedor` int(11) NOT NULL,
  `idcategoria` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `cantidad` varchar(45) NOT NULL,
  `unidadmedida` varchar(50) NOT NULL,
  `preciocompra` varchar(45) NOT NULL,
  `precioventa` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idproducto`, `idproveedor`, `idcategoria`, `nombre`, `cantidad`, `unidadmedida`, `preciocompra`, `precioventa`, `descripcion`, `estado`) VALUES
(1, 3, 8, 'dfx', '1', 'kilogramos', '44.0', '66.0', 'vsf', '1'),
(2, 3, 2, 'rrw', '3', 'kilogramos', '55.0', '77.0', 'hbf', '1'),
(3, 1, 4, 'gvr', '4', 'kilogramos', '66.0', '99.0', 'hfhfhf', '1'),
(4, 1, 4, 'jabon', '3', 'Sobres', '5.0', '66.0', '', '1'),
(5, 3, 6, 'gd', '1', 'kilogramos', '77.0', '88.0', 'ggd', '1'),
(6, 3, 6, 'nuevo', '1', 'kilogramos', '77.0', '88.0', 'ggd', '0'),
(7, 3, 4, 'dfx', '1', 'kilogramos', '44.0', '66.0', 'vsf', '1'),
(8, 3, 8, 'dfx', '1', 'kilogramos', '44.0', '66.0', 'vsf', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `idproveedor` int(11) NOT NULL,
  `nomcompania` varchar(45) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `ciudad` varchar(45) NOT NULL,
  `region` varchar(45) NOT NULL,
  `pais` varchar(45) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `paginaprincipal` varchar(100) NOT NULL,
  `estado` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`idproveedor`, `nomcompania`, `direccion`, `ciudad`, `region`, `pais`, `telefono`, `paginaprincipal`, `estado`) VALUES
(1, 'fs ', 'g sfg ', 'f sfsf', 'f sdfg', ' dsfs', ' dfs', ' sfg ', 1),
(2, 'f sdgs', 'g s', ' gsfs', 'f s ', 'g trh', 'th rt', 'rt hr', 1),
(3, 'victor sac', 'av san fernado 102', 'huanuco', 'huanuco', 'lima', '935745612', 'www.com', 1),
(26, 'nj', 'ryjr', 'ryj', 'ry', 'ry', 'ry', 'rnyj', 1),
(27, 'nj', 'ryjr', 'ryj', 'ry', 'ry', 'ry', 'rnyj', 1),
(28, 'nj', 'ryjr', 'ryj', 'ry', 'ry', 'ry', 'rnyj', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `cargo` varchar(45) NOT NULL,
  `direccion` varchar(70) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `nombreusuario` varchar(50) NOT NULL,
  `password` varchar(70) NOT NULL,
  `estado` int(2) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `nombres`, `apellidos`, `dni`, `correo`, `cargo`, `direccion`, `telefono`, `nombreusuario`, `password`, `estado`, `foto`) VALUES
(1, 'sheila', 'huaman leon', '', '', 'gad', 'd f', ' f adf', 'fadf', '', 1, ''),
(2, 'victor soto', 'eusebio soto', '', '', 'admin', 'av san francisco', '967089485', 'vicsoto', '1234', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idventa` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `numboleta` varchar(70) NOT NULL,
  `fecha` date NOT NULL,
  `totalventa` double NOT NULL,
  `estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `detalleentrada`
--
ALTER TABLE `detalleentrada`
  ADD KEY `fk_detalleentrada_entradas1_idx` (`identrada`),
  ADD KEY `fk_detalleentrada_productos1_idx` (`idproducto`);

--
-- Indices de la tabla `detalleventas`
--
ALTER TABLE `detalleventas`
  ADD KEY `fk_detalleventas_ventas1_idx` (`idventa`),
  ADD KEY `fk_detalleventas_productos1_idx` (`idproducto`);

--
-- Indices de la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`identrada`),
  ADD KEY `fk_entradas_usuarios1_idx` (`idusuario`),
  ADD KEY `fk_entradas_proveedores1_idx` (`idproveedor`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idproducto`),
  ADD KEY `fk_productos_proveedores1_idx` (`idproveedor`),
  ADD KEY `fk_productos_categorias1_idx` (`idcategoria`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`idproveedor`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`idventa`),
  ADD KEY `fk_ventas_usuarios_idx` (`idusuario`),
  ADD KEY `fk_ventas_clientes1_idx` (`idcliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `entradas`
--
ALTER TABLE `entradas`
  MODIFY `identrada` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `idproveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `idventa` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalleentrada`
--
ALTER TABLE `detalleentrada`
  ADD CONSTRAINT `fk_detalleentrada_entradas1` FOREIGN KEY (`identrada`) REFERENCES `entradas` (`identrada`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detalleentrada_productos1` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalleventas`
--
ALTER TABLE `detalleventas`
  ADD CONSTRAINT `fk_detalleventas_productos1` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detalleventas_ventas1` FOREIGN KEY (`idventa`) REFERENCES `ventas` (`idventa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD CONSTRAINT `fk_entradas_proveedores1` FOREIGN KEY (`idproveedor`) REFERENCES `proveedores` (`idproveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_entradas_usuarios1` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_productos_categorias1` FOREIGN KEY (`idcategoria`) REFERENCES `categorias` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_productos_proveedores1` FOREIGN KEY (`idproveedor`) REFERENCES `proveedores` (`idproveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `fk_ventas_clientes1` FOREIGN KEY (`idcliente`) REFERENCES `clientes` (`idcliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ventas_usuarios` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
