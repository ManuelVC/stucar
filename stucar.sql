-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 25-04-2016 a las 15:53:02
-- Versión del servidor: 5.5.41-log
-- Versión de PHP: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `stucar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camionetas`
--

CREATE TABLE IF NOT EXISTS `camionetas` (
`id` int(11) NOT NULL,
  `marca` varchar(45) NOT NULL,
  `capacidad` int(11) DEFAULT NULL,
  `ac` varchar(2) DEFAULT NULL,
  `television` varchar(2) DEFAULT NULL,
  `audio` varchar(2) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `camionetas`
--

INSERT INTO `camionetas` (`id`, `marca`, `capacidad`, `ac`, `television`, `audio`, `descripcion`, `created_at`, `update_at`) VALUES
(1, 'Nissan NV-350', 15, 'si', 'si', 'si', 'Es la camioneta tipo van para pasajeros más exitosa. Por durabilidad y calidad con capacidad de 15 pasajeros.', '2016-04-22 01:58:44', NULL),
(2, 'Nissan NV-200', 5, 'si', 'no', 'si', 'Capacidad de 5 pasajeros comodamente sentados con aire acondicionado y musica. Un costo menor a diferencia de las demas vans', '2016-04-22 01:58:44', NULL),
(3, 'Toyota Hiace', 15, 'si', 'si', 'si', 'Cuenta con un gran espacio para transportar hasta 15 pasajeros comodamente sentados y aire acondicionado en la parte trasera. ', '2016-04-22 01:58:44', NULL),
(4, 'Mercedez Sprinter', 23, 'si', 'si', 'si', 'Amplio y acogedor: la combinación de confort, dimensiones generosas y variabilidad hace del habitáculo de la nueva Sprinter Pasaje un espacio agradable para un máximo de 23 personas.', '2016-04-22 01:58:44', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
`id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidoP` varchar(45) NOT NULL,
  `apellidoM` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colectivos`
--

CREATE TABLE IF NOT EXISTS `colectivos` (
`id` int(11) NOT NULL,
  `origen` varchar(45) NOT NULL,
  `destino` varchar(45) NOT NULL,
  `tarifa` double NOT NULL,
  `oficina_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colonias`
--

CREATE TABLE IF NOT EXISTS `colonias` (
`id` int(11) NOT NULL,
  `colonia` varchar(45) NOT NULL,
  `municipio_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `colonias`
--

INSERT INTO `colonias` (`id`, `colonia`, `municipio_id`, `created_at`, `update_at`) VALUES
(1, 'Centro Ixtapa', 2, '2016-04-09 01:41:32', NULL),
(2, 'Bobadilla', 2, '2016-04-22 01:51:11', NULL),
(3, 'Aurora', 2, '2016-04-22 01:51:11', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE IF NOT EXISTS `contactos` (
`id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) NOT NULL,
  `comentario` varchar(500) NOT NULL,
  `fecha` date NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directos`
--

CREATE TABLE IF NOT EXISTS `directos` (
`id` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `costo` double NOT NULL,
  `codigo` varchar(8) NOT NULL,
  `fechaSalida` date NOT NULL,
  `vigencia` date NOT NULL,
  `status` varchar(15) NOT NULL,
  `ruta_id` int(11) DEFAULT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE IF NOT EXISTS `empleados` (
`id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidoP` varchar(45) NOT NULL,
  `apellidoM` varchar(45) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `ife` varchar(13) NOT NULL,
  `nLicencia` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especiales`
--

CREATE TABLE IF NOT EXISTS `especiales` (
`id` int(11) NOT NULL,
  `nPersonas` int(11) NOT NULL,
  `fechaSalida` date NOT NULL,
  `fechaDevolucion` date NOT NULL,
  `costo` double NOT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especial_renta`
--

CREATE TABLE IF NOT EXISTS `especial_renta` (
  `especial_id` int(11) NOT NULL DEFAULT '0',
  `renta_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
`id` int(11) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `estado`, `created_at`, `update_at`) VALUES
(1, 'Jalisco', '2016-04-09 01:40:41', '2016-04-08 05:00:00'),
(3, 'Aguascalientes', '2015-11-25 11:05:51', '2015-11-25 11:05:51'),
(4, 'Baja California', '2015-11-25 11:07:38', '2015-11-26 17:34:52'),
(5, 'Baja California Sur', '2015-11-25 11:07:56', '2015-11-25 11:07:56'),
(6, 'Campeche', '2015-11-25 11:08:09', '2015-11-25 11:08:09'),
(7, 'Chiapas', '2015-11-25 11:08:22', '2015-11-25 11:08:22'),
(8, 'Chihuahua', '2015-11-25 11:08:36', '2015-11-25 11:08:36'),
(9, 'Coahuila', '2015-11-25 11:08:46', '2015-11-25 11:08:46'),
(10, 'Colima', '2015-11-25 11:08:58', '2015-11-25 11:08:58'),
(11, 'Distrito Federal', '2015-11-25 11:09:09', '2015-11-25 11:09:09'),
(12, 'Durango', '2015-11-25 11:09:19', '2015-11-25 11:09:19'),
(13, 'Estado de México', '2015-11-25 11:09:31', '2015-11-25 11:09:31'),
(14, 'Guanajuato', '2015-11-25 11:09:42', '2015-11-25 11:09:42'),
(15, 'Guerrero', '2015-11-25 11:09:53', '2015-11-25 11:09:53'),
(16, 'Hidalgo', '2015-11-25 11:10:05', '2015-11-25 11:10:05'),
(18, 'Michoacán', '2015-11-25 11:10:27', '2015-11-25 11:10:27'),
(19, 'Morelos', '2015-11-25 11:10:38', '2015-11-25 11:10:38'),
(20, 'Nayarit', '2015-11-25 11:10:49', '2015-11-25 11:10:49'),
(21, 'Nuevo León', '2015-11-25 11:11:00', '2015-11-25 11:11:00'),
(22, 'Oaxaca', '2015-11-25 11:11:11', '2015-11-25 11:11:11'),
(23, 'Puebla', '2015-11-25 11:11:22', '2015-11-25 11:11:22'),
(24, 'Querétaro', '2015-11-25 11:11:33', '2015-11-25 11:11:33'),
(25, 'Quintana Roo', '2015-11-25 11:11:44', '2015-11-25 11:11:44'),
(26, 'San Luis Potosí', '2015-11-25 11:11:55', '2015-11-25 11:11:55'),
(27, 'Sinaloa', '2015-11-25 11:12:04', '2015-11-25 11:12:04'),
(28, 'Sonora', '2015-11-25 11:12:14', '2015-11-25 11:12:14'),
(29, 'Tabasco', '2015-11-25 11:12:25', '2015-11-25 11:12:25'),
(30, 'Tamaulipas', '2015-11-25 11:12:36', '2015-11-25 11:12:36'),
(31, 'Tlaxcala', '2015-11-25 11:12:46', '2015-11-25 11:12:46'),
(32, 'Veracruz', '2015-11-25 11:12:57', '2015-11-25 11:12:57'),
(33, 'Yucatán', '2015-11-25 11:13:07', '2015-11-25 11:13:07'),
(34, 'Zacatecas', '2015-11-25 11:13:20', '2015-11-25 11:13:20'),
(35, 'Prueba', '2015-11-26 17:28:38', '2015-11-26 17:28:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE IF NOT EXISTS `horarios` (
`id` int(11) NOT NULL,
  `salida` varchar(45) NOT NULL,
  `llegada` varchar(45) NOT NULL,
  `ruta_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
`id` int(11) NOT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  `camioneta_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `imagen`, `camioneta_id`) VALUES
(1, 'nv350.jpg', 1),
(2, 'nv200.jpg', 2),
(3, 'hiace.png', 3),
(7, 'not-found.png', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugares`
--

CREATE TABLE IF NOT EXISTS `lugares` (
`id` int(11) NOT NULL,
  `lugar` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `lugares`
--

INSERT INTO `lugares` (`id`, `lugar`, `created_at`, `update_at`) VALUES
(1, 'Puerto Vallarta', '2016-04-22 01:54:50', NULL),
(2, 'Melaque', '2016-04-22 01:54:50', NULL),
(3, 'Tomatlan', '2016-04-22 01:54:50', NULL),
(4, 'La Huerta', '2016-04-22 01:54:50', NULL),
(5, 'Guadalajara', '2016-04-22 01:54:50', NULL),
(6, 'Cihuatlan', '2016-04-22 01:54:50', NULL),
(7, 'Bahia de Banderas', '2016-04-22 01:54:50', NULL),
(8, 'El Tuito', '2016-04-22 01:54:50', NULL),
(9, 'Jose Maria Pino Suarez', '2016-04-22 01:54:50', NULL),
(10, 'El Tule', '2016-04-22 01:54:50', NULL),
(11, 'Nuevo Vallarta', '2016-04-22 01:54:50', NULL),
(12, 'Mascota', '2016-04-22 01:54:50', NULL),
(13, 'Talpa de Allende', '2016-04-22 01:54:50', NULL),
(14, 'Tequila', '2016-04-22 01:54:50', NULL),
(15, 'Autlan', '2016-04-22 01:54:50', NULL),
(16, 'Perula', '2016-04-22 01:54:50', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE IF NOT EXISTS `municipios` (
`id` int(11) NOT NULL,
  `municipio` varchar(45) NOT NULL,
  `estado_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id`, `municipio`, `estado_id`, `created_at`, `update_at`) VALUES
(2, 'Puerto Vallarta', 1, '2016-04-22 01:49:43', NULL),
(3, 'Guadalajara', 1, '2016-04-22 01:49:43', NULL),
(4, 'Tepic', 20, '2016-04-22 01:49:43', NULL),
(5, 'Tomatlan', 1, '2016-04-22 01:49:43', NULL),
(6, 'La Huerta', 1, '2016-04-22 01:49:43', NULL),
(7, 'Colima', 10, '2016-04-22 01:49:43', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oficinas`
--

CREATE TABLE IF NOT EXISTS `oficinas` (
`id` int(11) NOT NULL,
  `numero` varchar(2) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `colonia_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oficina_ruta`
--

CREATE TABLE IF NOT EXISTS `oficina_ruta` (
  `oficina_id` int(11) NOT NULL DEFAULT '0',
  `ruta_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operadores`
--

CREATE TABLE IF NOT EXISTS `operadores` (
`id` int(11) NOT NULL,
  `camioneta_id` int(11) DEFAULT NULL,
  `empleado_id` int(11) DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operador_ruta`
--

CREATE TABLE IF NOT EXISTS `operador_ruta` (
  `operador_id` int(11) NOT NULL DEFAULT '0',
  `ruta_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rentas`
--

CREATE TABLE IF NOT EXISTS `rentas` (
`id` int(11) NOT NULL,
  `costo` double NOT NULL,
  `operador_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
`id` int(11) NOT NULL,
  `rol` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`, `created_at`, `update_at`) VALUES
(1, 'administrador', '2016-04-08 20:18:12', '2016-04-08 05:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE IF NOT EXISTS `rutas` (
`id` int(11) NOT NULL,
  `origen` varchar(45) NOT NULL,
  `destino` varchar(45) NOT NULL,
  `tarifa` double NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidoP` varchar(45) NOT NULL,
  `apellidoM` varchar(45) NOT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `direccion` varchar(45) NOT NULL,
  `colonia_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `nombre`, `apellidoP`, `apellidoM`, `telefono`, `direccion`, `colonia_id`, `role_id`, `created_at`, `update_at`) VALUES
(1, 'manuel.161293@gmail.com', 'manuel', 'Manuel ', 'Valdovinos', 'Carrazco', '3228887465', 'galeana #252', 1, 1, '2016-04-09 01:42:29', '2016-04-08 05:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `camionetas`
--
ALTER TABLE `camionetas`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `colectivos`
--
ALTER TABLE `colectivos`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_colectivos_oficinas1_idx` (`oficina_id`);

--
-- Indices de la tabla `colonias`
--
ALTER TABLE `colonias`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_colonias_municipios1_idx` (`municipio_id`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `directos`
--
ALTER TABLE `directos`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_viajesDirectos_rutas1_idx` (`ruta_id`), ADD KEY `fk_viajesDirectos_clientes1_idx` (`cliente_id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `especiales`
--
ALTER TABLE `especiales`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_especiales_clientes1_idx` (`cliente_id`);

--
-- Indices de la tabla `especial_renta`
--
ALTER TABLE `especial_renta`
 ADD PRIMARY KEY (`especial_id`,`renta_id`), ADD KEY `fk_especiales_has_rentas_rentas1_idx` (`renta_id`), ADD KEY `fk_especiales_has_rentas_especiales1_idx` (`especial_id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_horarios_rutas1_idx` (`ruta_id`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_imagenes_camionetas1_idx` (`camioneta_id`);

--
-- Indices de la tabla `lugares`
--
ALTER TABLE `lugares`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_municipios_estados1_idx` (`estado_id`);

--
-- Indices de la tabla `oficinas`
--
ALTER TABLE `oficinas`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_oficinas_colonias1_idx` (`colonia_id`);

--
-- Indices de la tabla `oficina_ruta`
--
ALTER TABLE `oficina_ruta`
 ADD PRIMARY KEY (`oficina_id`,`ruta_id`), ADD KEY `fk_oficinas_has_rutas_rutas1_idx` (`ruta_id`), ADD KEY `fk_oficinas_has_rutas_oficinas1_idx` (`oficina_id`);

--
-- Indices de la tabla `operadores`
--
ALTER TABLE `operadores`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_camionetas_choferes_camionetas1_idx` (`camioneta_id`), ADD KEY `fk_operadores_empleados1_idx` (`empleado_id`);

--
-- Indices de la tabla `operador_ruta`
--
ALTER TABLE `operador_ruta`
 ADD PRIMARY KEY (`operador_id`,`ruta_id`), ADD KEY `fk_operadores_has_rutas_rutas1_idx` (`ruta_id`), ADD KEY `fk_operadores_has_rutas_operadores1_idx` (`operador_id`);

--
-- Indices de la tabla `rentas`
--
ALTER TABLE `rentas`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_rentas_operadores1_idx` (`operador_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rutas`
--
ALTER TABLE `rutas`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_usuarios_colonias1_idx` (`colonia_id`), ADD KEY `fk_usuarios_roles1_idx` (`role_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `camionetas`
--
ALTER TABLE `camionetas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `colectivos`
--
ALTER TABLE `colectivos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `colonias`
--
ALTER TABLE `colonias`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `directos`
--
ALTER TABLE `directos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `especiales`
--
ALTER TABLE `especiales`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `lugares`
--
ALTER TABLE `lugares`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `oficinas`
--
ALTER TABLE `oficinas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `operadores`
--
ALTER TABLE `operadores`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rentas`
--
ALTER TABLE `rentas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `rutas`
--
ALTER TABLE `rutas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `colectivos`
--
ALTER TABLE `colectivos`
ADD CONSTRAINT `fk_colectivos_oficinas1` FOREIGN KEY (`oficina_id`) REFERENCES `oficinas` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `colonias`
--
ALTER TABLE `colonias`
ADD CONSTRAINT `fk_colonias_municipios1` FOREIGN KEY (`municipio_id`) REFERENCES `municipios` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `directos`
--
ALTER TABLE `directos`
ADD CONSTRAINT `fk_viajesDirectos_clientes1` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
ADD CONSTRAINT `fk_viajesDirectos_rutas1` FOREIGN KEY (`ruta_id`) REFERENCES `rutas` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `especiales`
--
ALTER TABLE `especiales`
ADD CONSTRAINT `fk_especiales_clientes1` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `especial_renta`
--
ALTER TABLE `especial_renta`
ADD CONSTRAINT `fk_especiales_has_rentas_especiales1` FOREIGN KEY (`especial_id`) REFERENCES `especiales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `fk_especiales_has_rentas_rentas1` FOREIGN KEY (`renta_id`) REFERENCES `rentas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `horarios`
--
ALTER TABLE `horarios`
ADD CONSTRAINT `fk_horarios_rutas1` FOREIGN KEY (`ruta_id`) REFERENCES `rutas` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
ADD CONSTRAINT `fk_imagenes_camionetas1` FOREIGN KEY (`camioneta_id`) REFERENCES `camionetas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `municipios`
--
ALTER TABLE `municipios`
ADD CONSTRAINT `fk_municipios_estados1` FOREIGN KEY (`estado_id`) REFERENCES `estados` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `oficinas`
--
ALTER TABLE `oficinas`
ADD CONSTRAINT `fk_oficinas_colonias1` FOREIGN KEY (`colonia_id`) REFERENCES `colonias` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `oficina_ruta`
--
ALTER TABLE `oficina_ruta`
ADD CONSTRAINT `fk_oficinas_has_rutas_oficinas1` FOREIGN KEY (`oficina_id`) REFERENCES `oficinas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `fk_oficinas_has_rutas_rutas1` FOREIGN KEY (`ruta_id`) REFERENCES `rutas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `operadores`
--
ALTER TABLE `operadores`
ADD CONSTRAINT `fk_camionetas_choferes_camionetas1` FOREIGN KEY (`camioneta_id`) REFERENCES `camionetas` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
ADD CONSTRAINT `fk_operadores_empleados1` FOREIGN KEY (`empleado_id`) REFERENCES `empleados` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `operador_ruta`
--
ALTER TABLE `operador_ruta`
ADD CONSTRAINT `fk_operadores_has_rutas_operadores1` FOREIGN KEY (`operador_id`) REFERENCES `operadores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `fk_operadores_has_rutas_rutas1` FOREIGN KEY (`ruta_id`) REFERENCES `rutas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `rentas`
--
ALTER TABLE `rentas`
ADD CONSTRAINT `fk_rentas_operadores1` FOREIGN KEY (`operador_id`) REFERENCES `operadores` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
ADD CONSTRAINT `fk_usuarios_colonias1` FOREIGN KEY (`colonia_id`) REFERENCES `colonias` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
ADD CONSTRAINT `fk_usuarios_roles1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
