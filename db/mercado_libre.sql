-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-08-2023 a las 13:51:09
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mercado_libre`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alimentos`
--

CREATE TABLE `alimentos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `precio` float NOT NULL,
  `descripcion` text NOT NULL,
  `id publicador` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `fecha de creacion` datetime NOT NULL,
  `fecha de eliminacion` datetime DEFAULT NULL,
  `estado` varchar(255) NOT NULL,
  `acepta mercadopago` tinyint(1) NOT NULL,
  `fotos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alimentos`
--

INSERT INTO `alimentos` (`id`, `titulo`, `precio`, `descripcion`, `id publicador`, `stock`, `fecha de creacion`, `fecha de eliminacion`, `estado`, `acepta mercadopago`, `fotos`) VALUES
(1, 'おーいお茶500ｍｌペットボトル／おちゃ', 3500, 'お弁当をご注文時に限りお茶を格安で販売いたします。\r\n\r\n【主なご利用用途】\r\n会議・セミナー・謝恩会・説明会など\r\n', 1, 500, '2023-08-04 14:25:18', '0000-00-00 00:00:00', 'Si', 1, 'drj44fkgi8.jpg'),
(2, 'もち', 0, 'お正月といえば「もち」。鏡もちにお汁粉、焼いて食べても煮て食べてもおいしいもちですが、日本一もちを購入している都市はどこなのでしょうか。今回は、総務省の家計調査をもとに、もちの購入量が多い地域をランキング化してみました。日本全体の人口が減少しているなか、意外なことにもちの購入量が増加している地域も見つけたので、その理由も含めて紹介します。また、もちの形の地域差についても解説していますので、ぜひチェックしてくださいね。', 1, 350, '2023-08-04 14:25:18', '2023-08-04 14:25:18', 'Fresco', 1, 'eddkvo34o.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL,
  `id producto` int(11) DEFAULT NULL,
  `id vehiculo` int(11) DEFAULT NULL,
  `id inmueblos` int(11) DEFAULT NULL,
  `id alimentos` int(11) DEFAULT NULL,
  `id servicios` int(11) DEFAULT NULL,
  `fecha alta` datetime NOT NULL,
  `fecha baja` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id`, `id producto`, `id vehiculo`, `id inmueblos`, `id alimentos`, `id servicios`, `fecha alta`, `fecha baja`) VALUES
(1, 1, NULL, NULL, 2, NULL, '2023-08-04 10:20:44', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Computacion'),
(2, 'Bebés'),
(3, 'Belleza'),
(4, 'Cuidado personal'),
(5, 'Video  juegos'),
(6, 'Construccion'),
(7, 'Deportes'),
(8, 'Libros'),
(9, 'Ropa y accesorios'),
(10, 'Salud y equipamento medico'),
(11, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id`, `nombre`) VALUES
(1, 'La Pampa '),
(2, 'San Miguel de Tucumán'),
(3, 'Nequen  '),
(4, 'San Salvador de Jujuy'),
(5, 'Ushuaia'),
(6, 'C.A.B.A'),
(7, 'Resistencia'),
(8, 'Cochabamba'),
(9, 'Tokio'),
(10, 'Paris');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id` int(11) NOT NULL,
  `id comprador` int(11) DEFAULT NULL,
  `id producto vendido` int(11) DEFAULT NULL,
  `id vehiculo comprado` int(11) DEFAULT NULL,
  `id inmueble comprado` int(11) DEFAULT NULL,
  `id usuario vendedor` int(11) NOT NULL,
  `precio total de compra` int(11) NOT NULL,
  `fecha de compra` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cupones`
--

CREATE TABLE `cupones` (
  `id cupon` int(11) NOT NULL,
  `descuento` int(11) NOT NULL,
  `compra minima` int(11) NOT NULL,
  `compra maxima` int(11) NOT NULL,
  `vencimiento` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE `favoritos` (
  `id` int(11) NOT NULL,
  `id usuario` int(11) NOT NULL,
  `id producto favorito` int(11) DEFAULT NULL,
  `id vehiculo favorito` int(11) DEFAULT NULL,
  `id inmueble favorito` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `filtro-producto`
--

CREATE TABLE `filtro-producto` (
  `id` int(11) NOT NULL,
  `id producto` int(11) NOT NULL,
  `id vehiculo` int(11) NOT NULL,
  `id servicios` int(11) NOT NULL,
  `id inmueble` int(11) NOT NULL,
  `id filtro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `filtros`
--

CREATE TABLE `filtros` (
  `id` int(11) NOT NULL,
  `filtro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `filtros`
--

INSERT INTO `filtros` (`id`, `filtro`) VALUES
(4, 'Comida'),
(5, 'Cocina'),
(6, 'Juguetes'),
(7, '0km'),
(8, 'Muebles'),
(9, 'Jardin'),
(10, 'Electrodomesticos'),
(11, 'Utensilios'),
(12, 'Limpieza'),
(13, 'Utiles escolares');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formas de pago`
--

CREATE TABLE `formas de pago` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `id fotos` int(11) NOT NULL,
  `identificar` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formas de pago`
--

INSERT INTO `formas de pago` (`id`, `titulo`, `id fotos`, `identificar`) VALUES
(1, 'Efectivo', 1, 1),
(2, 'Credito', 2, 0),
(3, 'Debito', 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `tamanio` int(11) NOT NULL,
  `tamanio maximo` int(11) NOT NULL,
  `calidad` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles`
--

CREATE TABLE `inmuebles` (
  `id` int(11) NOT NULL,
  `id sitio` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtitulo` varchar(255) NOT NULL,
  `id vendedor` int(11) NOT NULL,
  `id categoria` int(11) NOT NULL,
  `id tienda oficial` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `precio base` int(11) NOT NULL,
  `id moneda` int(11) NOT NULL,
  `cantidad inicial` int(11) NOT NULL,
  `cantidad disponible` int(11) NOT NULL,
  `cantidad vendida` int(11) NOT NULL,
  `modo compra` varchar(255) NOT NULL,
  `fecha publicacion` datetime NOT NULL,
  `fecha de eliminacion` datetime DEFAULT NULL,
  `condicion` varchar(255) NOT NULL,
  `miniatura` varchar(255) NOT NULL,
  `id fotos` int(11) NOT NULL,
  `id video` int(11) NOT NULL,
  `acepta mercado pago` tinyint(1) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

CREATE TABLE `ofertas` (
  `id` int(11) NOT NULL,
  `id producto` int(11) NOT NULL,
  `id vehiculo` int(11) NOT NULL,
  `id inmuebles` int(11) NOT NULL,
  `id alimentos` int(11) NOT NULL,
  `id servicios` int(11) NOT NULL,
  `fecha alta` datetime NOT NULL,
  `fecha baja` datetime NOT NULL,
  `oferta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `nombre`) VALUES
(1, 'Argentina'),
(2, 'Bolivia'),
(3, 'Francia'),
(4, 'Japon'),
(5, 'Corea del Sur'),
(6, 'Italia'),
(7, 'Alemania'),
(8, 'Australia'),
(9, 'Egipto'),
(10, 'EE.UU.'),
(11, 'Rusia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `id usuarios` int(11) NOT NULL,
  `saldo` float NOT NULL,
  `fecha prestamo` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`id usuarios`, `saldo`, `fecha prestamo`) VALUES
(1, 120000, '2023-08-04 15:44:31'),
(2, 21000, '2023-08-04 15:44:31'),
(3, 32001, '2023-08-04 15:44:45'),
(4, 13420, '2023-08-04 15:44:45'),
(5, 51200, '2023-08-04 15:45:12'),
(6, 32500, '2023-08-04 15:45:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` float NOT NULL,
  `id publicador` int(11) NOT NULL,
  `detalles` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `fecha de creacion` datetime NOT NULL,
  `fecha de eliminacion` datetime DEFAULT NULL,
  `acepta mercadopago` tinyint(1) NOT NULL,
  `fotos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `id publicador`, `detalles`, `stock`, `estado`, `fecha de creacion`, `fecha de eliminacion`, `acepta mercadopago`, `fotos`) VALUES
(1, 'Telefono Celular (usado)', 10500, 2, 'Telefono poco usado (no robado) tiene detalles minimos', 1, 'poco uso', '2023-08-04 14:51:46', NULL, 1, '17102023.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `id fotos` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sitios`
--

CREATE TABLE `sitios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripciones`
--

CREATE TABLE `suscripciones` (
  `id` int(11) NOT NULL,
  `id usuarios` int(11) NOT NULL,
  `fecha compra suscripcion` datetime NOT NULL,
  `fecha vencimiento` datetime NOT NULL,
  `beneficios` varchar(255) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiendas`
--

CREATE TABLE `tiendas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `oficial` tinyint(1) NOT NULL,
  `id productos` int(11) NOT NULL,
  `id vehiculo` int(11) NOT NULL,
  `id inmuebles` int(11) NOT NULL,
  `id servicios` int(11) NOT NULL,
  `fecha de creacion` datetime NOT NULL,
  `fecha de eliminacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario-cupones`
--

CREATE TABLE `usuario-cupones` (
  `id` int(11) NOT NULL,
  `id usuario` int(11) NOT NULL,
  `id cupon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo electronico` varchar(255) NOT NULL,
  `contrasenia` varchar(255) NOT NULL,
  `saldo en la cuenta` int(11) NOT NULL,
  `foto de perfil` varchar(255) NOT NULL,
  `fecha de creacion` datetime NOT NULL,
  `fecha de eliminacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo electronico`, `contrasenia`, `saldo en la cuenta`, `foto de perfil`, `fecha de creacion`, `fecha de eliminacion`) VALUES
(1, 'Oshiro', 'luca@gmail.com', 'mglv123', 75000, 'luca-se-la-come.jpg', '2023-08-04 14:42:45', NULL),
(3, 'elPepe', 'elpepitogamer@gmail.com', '123qwerty', 123456789, 'dkfgd3879tyf9gufigh.webp', '2023-08-04 14:45:37', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `tipo combustible` varchar(30) NOT NULL,
  `descripcion` text NOT NULL,
  `kilometros` int(255) NOT NULL,
  `id publicador` int(255) NOT NULL,
  `detalles` text NOT NULL,
  `stock` int(11) NOT NULL,
  `fecha de creacion` datetime NOT NULL,
  `fecha de eliminacion` datetime DEFAULT NULL,
  `precio` int(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `acepta mercadopago` tinyint(1) NOT NULL,
  `fotos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id`, `titulo`, `color`, `tipo combustible`, `descripcion`, `kilometros`, `id publicador`, `detalles`, `stock`, `fecha de creacion`, `fecha de eliminacion`, `precio`, `estado`, `acepta mercadopago`, `fotos`) VALUES
(1, 'Tesla', 'Azul', 'Electrico', 'El Tesla Model Y es un SUV compacto y 100% eléctrico, del segmento D, fabricado por Tesla. Se trata de la versión crossover del Tesla Model 3, con quien comparte tecnología, plataforma, mecánicas y un 75% de los componentes.', 0, 1, 'El Tesla Model Y se presentó en marzo de 2019, aunque no llegó a España hasta 2021. El precio del Tesla Model Y parte desde 51.200 euros, un precio bastante más contenido que el del Tesla Model X. El Tesla Model Y se caracteriza por sus 7 plazas y por contar con una gran batería de iones de litio que le proporciona una autonomía eléctrica de entre 430 y 533 kilómetros, dependiendo de la versión. El Tesla Model Y se fabrica en las instalaciones de Tesla en California, así como en la Gigafactory de Shanghái (China) y la de Berlín.', 100, '2023-08-04 15:21:44', NULL, 23147, 'En buen estado, nuevecito.', 1, 'kfnvugi5758ur8bfrui54.jpg'),
(2, 'Audi', 'Rojo', 'V-Power', 'Es un auto Audi.', 0, 2, 'Auto de cuatro puertas. Comodo para cualquiera.', 121, '2023-08-04 15:30:06', NULL, 120000, 'En venta', 1, 'audipromax.jpg'),
(3, 'Toyota', 'Amarillo', 'V-Power', 'Auto nuevo y limpio', 0, 4, 'Auto de cuatro puertas importado de China.', 220, '2023-08-04 15:33:13', NULL, 210500, 'En venta', 0, 'ebfbefshebfkseoAD.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alimentos`
--
ALTER TABLE `alimentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cupones`
--
ALTER TABLE `cupones`
  ADD PRIMARY KEY (`id cupon`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `filtro-producto`
--
ALTER TABLE `filtro-producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `filtros`
--
ALTER TABLE `filtros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `formas de pago`
--
ALTER TABLE `formas de pago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`id usuarios`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sitios`
--
ALTER TABLE `sitios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tiendas`
--
ALTER TABLE `tiendas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario-cupones`
--
ALTER TABLE `usuario-cupones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alimentos`
--
ALTER TABLE `alimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cupones`
--
ALTER TABLE `cupones`
  MODIFY `id cupon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `filtro-producto`
--
ALTER TABLE `filtro-producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `filtros`
--
ALTER TABLE `filtros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `formas de pago`
--
ALTER TABLE `formas de pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `id usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sitios`
--
ALTER TABLE `sitios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tiendas`
--
ALTER TABLE `tiendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario-cupones`
--
ALTER TABLE `usuario-cupones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
