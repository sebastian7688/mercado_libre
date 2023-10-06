-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-10-2023 a las 15:50:24
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
-- Base de datos: `p-chan`
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
  `id_publicador` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `fecha_de_creacion` datetime NOT NULL,
  `fecha_de_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(255) NOT NULL,
  `acepta_mercadopago` tinyint(1) NOT NULL,
  `fotos` varchar(255) NOT NULL,
  `directorio` varchar(30) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alimentos`
--

INSERT INTO `alimentos` (`id`, `titulo`, `precio`, `descripcion`, `id_publicador`, `stock`, `fecha_de_creacion`, `fecha_de_eliminacion`, `estado`, `acepta_mercadopago`, `fotos`, `directorio`, `tag_id`) VALUES
(1, 'おーいお茶500ｍｌペットボトル／おちゃ', 3500, 'お弁当をご注文時に限りお茶を格安で販売いたします。\r\n\r\n【主なご利用用途】\r\n会議・セミナー・謝恩会・説明会など\r\n', 1, 500, '2023-08-04 14:25:18', '0000-00-00 00:00:00', 'Si', 1, 'jugo_baggio.png', 'alimentos', 2),
(2, 'もち', 0, 'お正月といえば「もち」。鏡もちにお汁粉、焼いて食べても煮て食べてもおいしいもちですが、日本一もちを購入している都市はどこなのでしょうか。今回は、総務省の家計調査をもとに、もちの購入量が多い地域をランキング化してみました。日本全体の人口が減少しているなか、意外なことにもちの購入量が増加している地域も見つけたので、その理由も含めて紹介します。また、もちの形の地域差についても解説していますので、ぜひチェックしてくださいね。', 1, 350, '2023-08-04 14:25:18', '2023-08-04 14:25:18', 'Fresco', 1, 'havanna-alfajores.jpg', 'alimentos', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `id_vehiculo` int(11) DEFAULT NULL,
  `id_inmueblos` int(11) DEFAULT NULL,
  `id_alimentos` int(11) DEFAULT NULL,
  `id_servicios` int(11) DEFAULT NULL,
  `fecha_alta` datetime NOT NULL,
  `fecha_baja` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id`, `id_producto`, `id_vehiculo`, `id_inmueblos`, `id_alimentos`, `id_servicios`, `fecha_alta`, `fecha_baja`) VALUES
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
  `id_comprador` int(11) DEFAULT NULL,
  `id_producto_vendido` int(11) DEFAULT NULL,
  `id_vehiculo_comprado` int(11) DEFAULT NULL,
  `id_inmueble_comprado` int(11) DEFAULT NULL,
  `id_usuario_vendedor` int(11) NOT NULL,
  `precio_total_compra` int(11) NOT NULL,
  `fecha_de_compra` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cupones`
--

CREATE TABLE `cupones` (
  `id_cupon` int(11) NOT NULL,
  `descuento` int(11) NOT NULL,
  `compra_minima` int(11) NOT NULL,
  `compra_maxima` int(11) NOT NULL,
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
  `id_usuario` int(11) NOT NULL,
  `id_producto_favorito` int(11) DEFAULT NULL,
  `id_vehiculo_favorito` int(11) DEFAULT NULL,
  `id_inmueble_favorito` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `filtro-producto`
--

CREATE TABLE `filtro-producto` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_vehiculo` int(11) NOT NULL,
  `id_servicios` int(11) NOT NULL,
  `id_inmueble` int(11) NOT NULL,
  `id_filtro` int(11) NOT NULL
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
  `id_fotos` int(11) NOT NULL,
  `identificar` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formas de pago`
--

INSERT INTO `formas de pago` (`id`, `titulo`, `id_fotos`, `identificar`) VALUES
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
  `tamanio_maximo` int(11) NOT NULL,
  `calidad` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles`
--

CREATE TABLE `inmuebles` (
  `id` int(11) NOT NULL,
  `id_sitio` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtitulo` varchar(255) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_tienda_oficial` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `precio_base` int(11) NOT NULL,
  `id_moneda` int(11) NOT NULL,
  `cantidad_inicial` int(11) NOT NULL,
  `cantidad_disponible` int(11) NOT NULL,
  `cantidad_vendida` int(11) NOT NULL,
  `modo_compra` varchar(255) NOT NULL,
  `fecha_de_creacion` datetime NOT NULL,
  `fecha_de_eliminacion` datetime DEFAULT NULL,
  `condicion` varchar(255) NOT NULL,
  `miniatura` varchar(255) NOT NULL,
  `id_fotos` int(11) NOT NULL,
  `id_video` int(11) NOT NULL,
  `acepta_mercado_pago` tinyint(1) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `fotos` varchar(255) NOT NULL,
  `directorio` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inmuebles`
--

INSERT INTO `inmuebles` (`id`, `id_sitio`, `titulo`, `subtitulo`, `id_vendedor`, `id_categoria`, `id_tienda_oficial`, `precio`, `precio_base`, `id_moneda`, `cantidad_inicial`, `cantidad_disponible`, `cantidad_vendida`, `modo_compra`, `fecha_de_creacion`, `fecha_de_eliminacion`, `condicion`, `miniatura`, `id_fotos`, `id_video`, `acepta_mercado_pago`, `descripcion`, `tag_id`, `fotos`, `directorio`) VALUES
(1, 2, 'Departamento de lujo!!!', 'Compralo ya!!Pta d mrd', 1, 2, 1, 3213213, 122331, 1, 121240, 3, 1, 'Digital', '2023-09-08 13:54:47', NULL, 'Tener el dinero, ser un miembro de los anunakis y tener 2 gatos', 'Hola', 2, 3, 1, 'Casa de 3 pisos, 4 habitaciones en cada una, 2 baños, 2 cocinas y una terraza', 3, 'casa1.jpg', 'inmuebles'),
(2, 4, 'Castillo embrujado', 'Si aparece un fantasma nos encargamos de cagarlo a trompadas por vos', 2, 3, 4, 213123, 46751, 1, 42423, 2, 2, 'Digital', '2023-09-08 13:54:47', NULL, 'Haber peleado con fantasmas de antemano, poder volar y haber ganado un torneo de candy crush', 'Mr Beast compra casa embrujada (no creeras lo que ocurre)', 2, 3, 1, 'CASTILLO EMBRUJADO con varias habitaciones, cocina, baños y jacuzzi', 3, 'casa2.jpg', 'inmuebles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

CREATE TABLE `ofertas` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_vehiculo` int(11) NOT NULL,
  `id_inmuebles` int(11) NOT NULL,
  `id_alimentos` int(11) NOT NULL,
  `id_servicios` int(11) NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `fecha_baja` datetime NOT NULL,
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
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(255) NOT NULL,
  `usuario_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `image` text NOT NULL,
  `fecha_alta` datetime DEFAULT NULL,
  `fecha_baja` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `usuario_id`, `image`, `fecha_alta`, `fecha_baja`) VALUES
(1, '2', 'Bocchi.jpg', '2023-02-16 18:39:07', NULL),
(2, '1', 'lilith.jpg', '2023-02-28 18:37:35', NULL),
(3, '1', 'org_2.png', '2023-02-28 18:40:48', NULL),
(4, '3', 'th_1.jfif', '2023-02-28 18:41:01', NULL),
(5, '3', 'evergarden.png', '2023-02-28 18:41:14', NULL),
(6, '2', 'giphy.gif', '2023-02-28 20:55:07', NULL),
(7, '1', 'Isaac.gif', '2023-02-26 13:33:17', NULL),
(8, '2', 'th.jpeg', '2023-02-26 15:08:33', NULL),
(9, '1', 'icon-anime-11.jpg', '2023-02-28 18:54:29', NULL),
(10, '3', 'guilherme-machado-padoru.jpg', '2023-02-28 20:58:48', NULL),
(11, '1', 'front_20230223_014807.png', '2023-02-28 21:07:11', NULL),
(12, '1', '45156494.gif', '2023-03-01 20:11:59', NULL),
(13, '1', 'mona-loading-dark.gif', '2023-03-01 20:12:40', NULL),
(14, '1', '227300_screenshots_20230428204548_1.jpg', '2023-09-15 11:27:46', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `id_usuarios` int(11) NOT NULL,
  `saldo` float NOT NULL,
  `fecha_prestamo` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`id_usuarios`, `saldo`, `fecha_prestamo`) VALUES
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
  `id_publicador` int(11) NOT NULL,
  `detalles` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `fecha_de_creacion` datetime NOT NULL,
  `fecha_de_eliminacion` datetime DEFAULT NULL,
  `acepta_mercadopago` tinyint(1) NOT NULL,
  `fotos` varchar(255) NOT NULL,
  `directorio` varchar(30) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `id_publicador`, `detalles`, `stock`, `estado`, `fecha_de_creacion`, `fecha_de_eliminacion`, `acepta_mercadopago`, `fotos`, `directorio`, `tag_id`) VALUES
(1, 'Telefono Celular (usado)', 10500, 2, 'Telefono poco usado (no robado) tiene detalles minimos', 1, 'poco uso', '2023-08-04 14:51:46', NULL, 1, 'iPhone14.jpg', 'productos', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `id_fotos` int(11) NOT NULL,
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
  `id_usuarios` int(11) NOT NULL,
  `fecha_compra_suscripcion` datetime NOT NULL,
  `fecha_vencimiento` datetime NOT NULL,
  `beneficios` varchar(255) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `tag` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tags`
--

INSERT INTO `tags` (`id`, `tag`) VALUES
(1, 'todos'),
(2, 'alimentos'),
(3, 'inmuebles'),
(4, 'vehiculos'),
(5, 'productos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tag_post`
--

CREATE TABLE `tag_post` (
  `id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `fecha_alta` datetime DEFAULT NULL,
  `fecha_baja` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tag_post`
--

INSERT INTO `tag_post` (`id`, `tag_id`, `post_id`, `fecha_alta`, `fecha_baja`) VALUES
(1, 2, 1, '2023-02-28 19:34:55', NULL),
(2, 2, 2, '2023-02-28 21:14:20', NULL),
(3, 2, 3, '2023-03-01 18:18:49', NULL),
(4, 2, 4, '2023-03-01 18:19:21', NULL),
(5, 2, 5, '2023-03-01 18:20:01', NULL),
(6, 2, 6, '2023-03-01 18:20:34', NULL),
(7, 3, 7, '2023-03-01 18:20:43', NULL),
(8, 4, 8, '2023-03-01 18:21:39', NULL),
(9, 2, 9, '2023-03-01 18:22:18', NULL),
(10, 2, 10, '2023-03-01 18:22:29', NULL),
(11, 2, 11, '2023-03-01 18:22:39', NULL),
(12, 5, 6, '2023-03-01 19:30:55', NULL),
(13, 5, 7, '2023-03-01 19:36:40', NULL),
(14, 2, 12, '2023-03-01 20:17:08', NULL),
(15, 5, 12, '2023-03-01 20:17:32', NULL),
(16, 4, 13, '2023-03-01 20:17:49', NULL),
(17, 5, 13, '2023-03-01 20:18:02', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiendas`
--

CREATE TABLE `tiendas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `oficial` tinyint(1) NOT NULL,
  `id_productos` int(11) NOT NULL,
  `id_vehiculo` int(11) NOT NULL,
  `id_inmuebles` int(11) NOT NULL,
  `id_servicios` int(11) NOT NULL,
  `fecha_de_creacion` datetime NOT NULL,
  `fecha_de_eliminacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario-cupones`
--

CREATE TABLE `usuario-cupones` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_cupon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `contrasenia` varchar(32) NOT NULL,
  `saldo_en_cuenta` int(255) NOT NULL,
  `foto_de_perfil` varchar(255) NOT NULL,
  `correo_electronico` varchar(255) NOT NULL,
  `fecha_de_creacion` datetime DEFAULT NULL,
  `fecha_de_eliminacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `contrasenia`, `saldo_en_cuenta`, `foto_de_perfil`, `correo_electronico`, `fecha_de_creacion`, `fecha_de_eliminacion`) VALUES
(1, 'reichsacht', '5eb3c70fb1c47a19a7b6674092c19fc0', 0, 'default3.png', 'hratzeld@gmail.com', '2023-02-26 15:37:31', NULL),
(2, 'Matayoshi', '5eb3c70fb1c47a19a7b6674092c19fc0', 0, '', 'sdmatayoshi@gmail.com', '2023-02-27 12:40:10', NULL),
(3, 'kamuofujino', '5eb3c70fb1c47a19a7b6674092c19fc0', 0, '', 'kamuofujino@gmail.com', '2023-02-27 20:13:54', NULL),
(4, 'sdmatayoshi', '41f5d469289efa58df6a726273313439', 0, '', 'sdmatayoshi@gmail.com', '2023-02-28 19:19:21', NULL),
(5, 'elpepe', 'e10adc3949ba59abbe56e057f20f883e', 0, '', 'pepito@gmail.com', '2023-08-11 08:17:23', NULL),
(6, 'asdf', '912ec803b2ce49e4a541068d495ab570', 0, '', 'asdf@asdf', '2023-08-11 08:39:48', NULL),
(7, 'qwer', '962012d09b8170d912f0669f6d7d9d07', 0, 'default.jpg', 'qwer@qwer', '2023-08-11 08:41:28', NULL),
(8, 'soy gay', '6b17f84c3e6e074b8a8c6de69a8cf25b', 0, 'default1.png', 'lucaoshiro@gmail.com', '2023-08-11 08:57:45', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `tipo_combustible` varchar(30) NOT NULL,
  `descripcion` text NOT NULL,
  `kilometros` int(255) NOT NULL,
  `id_publicador` int(255) NOT NULL,
  `detalles` text NOT NULL,
  `stock` int(11) NOT NULL,
  `fecha_de_creacion` datetime NOT NULL,
  `fecha_de_eliminacion` datetime DEFAULT NULL,
  `precio` int(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `acepta_mercadopago` tinyint(1) NOT NULL,
  `fotos` varchar(255) NOT NULL,
  `directorio` varchar(30) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id`, `titulo`, `color`, `tipo_combustible`, `descripcion`, `kilometros`, `id_publicador`, `detalles`, `stock`, `fecha_de_creacion`, `fecha_de_eliminacion`, `precio`, `estado`, `acepta_mercadopago`, `fotos`, `directorio`, `tag_id`) VALUES
(1, 'Tesla', 'Azul', 'Electrico', 'El Tesla Model Y es un SUV compacto y 100% eléctrico, del segmento D, fabricado por Tesla. Se trata de la versión crossover del Tesla Model 3, con quien comparte tecnología, plataforma, mecánicas y un 75% de los componentes.', 0, 1, 'El Tesla Model Y se presentó en marzo de 2019, aunque no llegó a España hasta 2021. El precio del Tesla Model Y parte desde 51.200 euros, un precio bastante más contenido que el del Tesla Model X. El Tesla Model Y se caracteriza por sus 7 plazas y por contar con una gran batería de iones de litio que le proporciona una autonomía eléctrica de entre 430 y 533 kilómetros, dependiendo de la versión. El Tesla Model Y se fabrica en las instalaciones de Tesla en California, así como en la Gigafactory de Shanghái (China) y la de Berlín.', 100, '2023-08-04 15:21:44', NULL, 23147, 'En buen estado, nuevecito.', 1, 'tesla.jpg', 'vehiculos', 4),
(2, 'Audi', 'Rojo', 'V-Power', 'Es un auto Audi.', 0, 2, 'Auto de cuatro puertas. Comodo para cualquiera.', 121, '2023-08-04 15:30:06', NULL, 120000, 'En venta', 1, 'audi.jpg', 'vehiculos', 4),
(3, 'Toyota', 'Amarillo', 'V-Power', 'Auto nuevo y limpio', 0, 4, 'Auto de cuatro puertas importado de China.', 220, '2023-08-04 15:33:13', NULL, 210500, 'En venta', 0, 'toyota.jpg', 'vehiculos', 4);

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
  ADD PRIMARY KEY (`id_cupon`);

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
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`id_usuarios`);

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
-- Indices de la tabla `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tag_post`
--
ALTER TABLE `tag_post`
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
  MODIFY `id_cupon` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tag_post`
--
ALTER TABLE `tag_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
