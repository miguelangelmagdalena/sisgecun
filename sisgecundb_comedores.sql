-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2018 a las 02:39:30
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sisgecundb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `users_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aireacondicionados`
--

CREATE TABLE `aireacondicionados` (
  `id` int(11) NOT NULL,
  `estatus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capacidad_enfiramiento` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `comedores_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacenes_productos`
--

CREATE TABLE `almacenes_productos` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `comedores_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bandejas`
--

CREATE TABLE `bandejas` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `observacion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cantidad_bandejas_servidas` int(11) DEFAULT NULL,
  `cantidad_gramaje_total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `comedores_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bandeja_productos`
--

CREATE TABLE `bandeja_productos` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bandejas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `productos_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `id` int(11) NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comedores`
--

CREATE TABLE `comedores` (
  `id` int(11) NOT NULL,
  `codigosica` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estatus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacidad_atencion` int(11) NOT NULL,
  `cantidad_estudiantes_desayuno` int(11) NOT NULL,
  `cantidad_Estudiantes_almuerzo` int(11) NOT NULL,
  `cantidad_Estudiantes_cena` int(11) NOT NULL,
  `menu_establecido` tinyint(1) DEFAULT NULL,
  `cant_Estudiantes_femenino_discap` int(11) DEFAULT NULL,
  `cant_estudiantes_masculino_discap` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `instituciones_id` int(11) NOT NULL,
  `descripciones_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comedor_envio_producto`
--

CREATE TABLE `comedor_envio_producto` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `envios_productos_id` int(11) NOT NULL,
  `comedores_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comedor_producto`
--

CREATE TABLE `comedor_producto` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `envios_productos_id` int(11) NOT NULL,
  `productos_id` int(11) NOT NULL,
  `productos_Categoria_idCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comedor_responsable`
--

CREATE TABLE `comedor_responsable` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `comedores_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comedor_usuario`
--

CREATE TABLE `comedor_usuario` (
  `id` int(11) NOT NULL,
  `cargo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_responsable` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unidad_institucion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `comedores_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuraciones`
--

CREATE TABLE `configuraciones` (
  `id` int(11) NOT NULL,
  `configuracion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `administradores_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\",\"taggable\":\"0\"}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(12, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(13, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '', 1),
(14, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '', 2),
(15, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '', 3),
(16, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '', 4),
(17, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '', 1),
(18, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '', 2),
(19, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '', 3),
(20, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '', 4),
(21, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, '', 5),
(22, 1, 'role_id', 'text', 'Role', 0, 1, 1, 1, 1, 1, NULL, 9),
(57, 7, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(58, 7, 'nombre', 'text', 'Nombre', 1, 1, 1, 1, 1, 1, NULL, 2),
(59, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(60, 9, 'nombre', 'text', 'Nombre', 1, 1, 1, 1, 1, 1, NULL, 2),
(63, 12, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(65, 12, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 4),
(66, 12, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 5),
(67, 13, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(69, 13, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, NULL, 4),
(70, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 5),
(71, 14, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(73, 14, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, NULL, 4),
(74, 14, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 5),
(75, 12, 'estado', 'text', 'Estado', 1, 1, 1, 0, 0, 0, NULL, 2),
(76, 12, 'iso_3166_2', 'hidden', 'Iso 3166 2', 0, 0, 0, 0, 0, 0, NULL, 3),
(84, 13, 'municipio_belongsto_state_relationship', 'relationship', 'Estado', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\State\",\"table\":\"states\",\"type\":\"belongsTo\",\"column\":\"id_estado\",\"key\":\"id\",\"label\":\"estado\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 3),
(85, 13, 'municipio', 'text', 'Municipio', 1, 1, 1, 1, 1, 1, NULL, 2),
(86, 13, 'id_estado', 'text', 'Id Estado', 1, 1, 1, 1, 1, 1, NULL, 6),
(87, 14, 'parroquia_belongsto_municipio_relationship', 'relationship', 'municipios', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Municipio\",\"table\":\"municipios\",\"type\":\"belongsTo\",\"column\":\"id_municipio\",\"key\":\"id\",\"label\":\"municipio\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 3),
(88, 14, 'parroquia', 'text', 'Parroquia', 1, 1, 1, 1, 1, 1, NULL, 2),
(89, 14, 'id_municipio', 'text', 'Id Municipio', 0, 1, 1, 1, 1, 1, NULL, 6),
(90, 1, 'user_belongsto_state_relationship', 'relationship', 'Estados', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\State\",\"table\":\"states\",\"type\":\"belongsTo\",\"column\":\"id_estado\",\"key\":\"id\",\"label\":\"estado\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 13),
(91, 1, 'user_belongsto_municipio_relationship', 'relationship', 'Municipios', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Municipio\",\"table\":\"municipios\",\"type\":\"belongsTo\",\"column\":\"id_municipio\",\"key\":\"id\",\"label\":\"municipio\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 14),
(92, 1, 'user_belongsto_parroquia_relationship', 'relationship', 'Parroquias', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Parroquia\",\"table\":\"parroquias\",\"type\":\"belongsTo\",\"column\":\"id_parroquia\",\"key\":\"id\",\"label\":\"parroquia\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 15),
(93, 1, 'id_estado', 'text', 'Id Estado', 0, 1, 1, 1, 1, 1, NULL, 11),
(94, 1, 'id_municipio', 'text', 'Id Municipio', 0, 1, 1, 1, 1, 1, NULL, 12),
(95, 1, 'id_parroquia', 'text', 'Id Parroquia', 0, 1, 1, 1, 1, 1, NULL, 13),
(107, 12, 'state_hasmany_municipio_relationship', 'relationship', 'municipios', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Municipio\",\"table\":\"municipios\",\"type\":\"hasMany\",\"column\":\"id_estado\",\"key\":\"id\",\"label\":\"municipio\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 6),
(108, 13, 'municipio_hasmany_parroquia_relationship', 'relationship', 'parroquias', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Parroquia\",\"table\":\"parroquias\",\"type\":\"hasMany\",\"column\":\"id_municipio\",\"key\":\"id_municipio\",\"label\":\"parroquia\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 7),
(110, 12, 'state_hasmany_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\User\",\"table\":\"users\",\"type\":\"hasMany\",\"column\":\"id_estado\",\"key\":\"name\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(1) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', '\\App\\Http\\Controllers\\Voyager\\UserController', 'Este Bread de User tiene una vista y un controllador custom.', 1, 1, '{\"order_column\":null,\"order_display_column\":null}', '2018-08-13 17:29:11', '2018-08-21 07:23:09'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2018-08-13 17:29:11', '2018-08-13 17:29:11'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2018-08-13 17:29:11', '2018-08-13 17:29:11'),
(7, 'ciudad', 'ciudad', 'Ciudad', 'Ciudades', NULL, 'App\\Ciudad', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"nombre\",\"order_display_column\":\"nombre\"}', '2018-08-14 01:21:30', '2018-08-14 01:30:59'),
(9, 'ciudades', 'ciudades', 'Ciudade', 'Ciudades', NULL, 'App\\Ciudad', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-08-14 01:36:15', '2018-08-14 01:36:15'),
(12, 'states', 'states', 'Estado', 'Estados', NULL, 'App\\State', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"estado\",\"order_display_column\":\"estado\"}', '2018-08-14 03:18:03', '2018-08-14 05:25:08'),
(13, 'municipios', 'municipios', 'Municipio', 'Municipios', NULL, 'App\\Municipio', NULL, NULL, NULL, 1, 1, '{\"order_column\":\"id\",\"order_display_column\":\"municipio\"}', '2018-08-14 04:33:28', '2018-08-14 07:31:03'),
(14, 'parroquias', 'parroquias', 'Parroquia', 'Parroquias', NULL, 'App\\Parroquia', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null}', '2018-08-14 05:04:41', '2018-08-14 07:37:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripciones`
--

CREATE TABLE `descripciones` (
  `id` int(11) NOT NULL,
  `tiene_cuarto_frio` tinyint(1) DEFAULT NULL,
  `cuarto_frio_operativo` tinyint(1) DEFAULT NULL,
  `capacidad_cuartofrio` int(11) DEFAULT NULL,
  `tiene_cuarto_congelacion` tinyint(1) DEFAULT NULL,
  `capacidad_cuarto_congelacion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuarto_congelacion_operativo` tinyint(1) DEFAULT NULL,
  `tiene_utensilios` tinyint(1) DEFAULT NULL,
  `cantidad_platos` int(11) DEFAULT NULL,
  `cantidad_cubiertos` int(11) DEFAULT NULL,
  `cantidad_vasos` int(11) DEFAULT NULL,
  `tienen_extintores` tinyint(1) DEFAULT NULL,
  `cantidad_extintores` int(11) DEFAULT NULL,
  `extintores_operativo` tinyint(1) DEFAULT NULL,
  `tanquilla_agualluvia` tinyint(1) NOT NULL,
  `tanquilla_aguapotable` tinyint(1) NOT NULL,
  `tanquilla_aguaresidual` tinyint(1) NOT NULL,
  `tanquilla_electricidad` tinyint(1) NOT NULL,
  `medidor_electricidad` tinyint(1) DEFAULT NULL,
  `sum_aguapotable` tinyint(1) DEFAULT NULL,
  `iluminacion_natural` tinyint(1) NOT NULL,
  `iluminacion_artificial` tinyint(1) NOT NULL,
  `electricidad_110` tinyint(1) NOT NULL,
  `electricidad_220` tinyint(1) NOT NULL,
  `internet` tinyint(1) NOT NULL,
  `extension` tinyint(1) NOT NULL,
  `linea_directa` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `despachar_responsables`
--

CREATE TABLE `despachar_responsables` (
  `id` int(11) NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellido` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono_celular` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envios_productos`
--

CREATE TABLE `envios_productos` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `MPPEUCT_id` int(11) NOT NULL,
  `productos_recibidos_id` int(11) NOT NULL,
  `productos_enviados_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instituciones`
--

CREATE TABLE `instituciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siglas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rif` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `matricula_estudiantil` int(11) NOT NULL,
  `cantidad_matricula_femeninca` int(11) NOT NULL,
  `cantidad_matricula_masculino` int(11) NOT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo_electronico` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_postal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion_estado`
--

CREATE TABLE `institucion_estado` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `instituciones_id` int(11) NOT NULL,
  `estados_id` int(11) NOT NULL,
  `estados_Region_idRegion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2018-08-13 17:29:11', '2018-08-13 17:29:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Panel de Control', '', '_self', 'voyager-home', '#000000', NULL, 1, '2018-08-13 17:29:11', '2018-08-22 00:58:01', 'voyager.dashboard', 'null'),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2018-08-13 17:29:11', '2018-08-22 00:57:28', 'voyager.media.index', NULL),
(3, 1, 'Usuarios', '', '_self', 'voyager-person', '#000000', NULL, 3, '2018-08-13 17:29:11', '2018-08-22 00:57:28', 'voyager.users.index', 'null'),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 4, '2018-08-13 17:29:11', '2018-08-22 00:57:28', 'voyager.roles.index', NULL),
(5, 1, 'Herramientas', '', '_self', 'voyager-tools', '#000000', NULL, 6, '2018-08-13 17:29:11', '2018-08-22 00:57:28', NULL, ''),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2018-08-13 17:29:11', '2018-08-14 01:41:54', 'voyager.menus.index', NULL),
(7, 1, 'Base de Datos', '', '_self', 'voyager-data', '#000000', 5, 2, '2018-08-13 17:29:11', '2018-08-14 01:41:54', 'voyager.database.index', 'null'),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2018-08-13 17:29:11', '2018-08-14 01:41:54', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2018-08-13 17:29:11', '2018-08-14 01:41:54', 'voyager.bread.index', NULL),
(10, 1, 'Configuración del Sitio', '', '_self', 'voyager-settings', '#000000', 22, 1, '2018-08-13 17:29:11', '2018-08-21 16:58:36', 'voyager.settings.index', 'null'),
(14, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2018-08-13 17:29:14', '2018-08-14 01:41:54', 'voyager.hooks', NULL),
(22, 1, 'Configuración', '', '_self', 'voyager-settings', '#000000', NULL, 7, '2018-08-14 01:41:36', '2018-08-22 00:57:28', NULL, ''),
(23, 1, 'Estados', '', '_self', NULL, '#000000', 26, 1, '2018-08-14 03:18:04', '2018-08-21 16:34:45', 'voyager.states.index', 'null'),
(24, 1, 'Municipios', '', '_self', NULL, NULL, 26, 2, '2018-08-14 04:33:28', '2018-08-21 16:34:46', 'voyager.municipios.index', NULL),
(25, 1, 'Parroquias', '', '_self', NULL, NULL, 26, 3, '2018-08-14 05:04:41', '2018-08-21 16:34:47', 'voyager.parroquias.index', NULL),
(27, 1, 'Estados', '/admin/states', '_self', NULL, '#000000', 22, 2, '2018-08-21 16:42:19', '2018-08-21 16:48:46', NULL, ''),
(28, 1, 'Municipios', '/admin/municipios', '_self', NULL, '#000000', 22, 3, '2018-08-21 16:43:33', '2018-08-21 16:48:46', NULL, ''),
(29, 1, 'Parroquias', '/admin/parroquias', '_self', NULL, '#000000', 22, 4, '2018-08-21 16:43:48', '2018-08-21 16:48:46', NULL, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_10_15_012204_create_administradores_table', 1),
(2, '2018_10_15_012204_create_aireacondicionados_table', 1),
(3, '2018_10_15_012204_create_almacenes_productos_table', 1),
(4, '2018_10_15_012204_create_bandeja_productos_table', 1),
(5, '2018_10_15_012204_create_bandejas_table', 1),
(6, '2018_10_15_012204_create_categorias_table', 1),
(7, '2018_10_15_012204_create_ciudades_table', 1),
(8, '2018_10_15_012204_create_comedor_envio_producto_table', 1),
(9, '2018_10_15_012204_create_comedor_producto_table', 1),
(10, '2018_10_15_012204_create_comedor_responsable_table', 1),
(11, '2018_10_15_012204_create_comedor_usuario_table', 1),
(12, '2018_10_15_012204_create_comedores_table', 1),
(13, '2018_10_15_012204_create_configuraciones_table', 1),
(14, '2018_10_15_012204_create_data_rows_table', 1),
(15, '2018_10_15_012204_create_data_types_table', 1),
(16, '2018_10_15_012204_create_descripciones_table', 1),
(17, '2018_10_15_012204_create_despachar_responsables_table', 1),
(18, '2018_10_15_012204_create_envios_productos_table', 1),
(19, '2018_10_15_012204_create_estados_table', 1),
(20, '2018_10_15_012204_create_institucion_estado_table', 1),
(21, '2018_10_15_012204_create_instituciones_table', 1),
(22, '2018_10_15_012204_create_menu_items_table', 1),
(23, '2018_10_15_012204_create_menus_table', 1),
(24, '2018_10_15_012204_create_mppeuct_table', 1),
(25, '2018_10_15_012204_create_municipios_table', 1),
(26, '2018_10_15_012204_create_nutricionistas_table', 1),
(27, '2018_10_15_012204_create_parroquias_table', 1),
(28, '2018_10_15_012204_create_password_resets_table', 1),
(29, '2018_10_15_012204_create_permission_role_table', 1),
(30, '2018_10_15_012204_create_permissions_table', 1),
(31, '2018_10_15_012204_create_porciones_table', 1),
(32, '2018_10_15_012204_create_productos_despachados_table', 1),
(33, '2018_10_15_012204_create_productos_enviados_table', 1),
(34, '2018_10_15_012204_create_productos_recibidos_table', 1),
(35, '2018_10_15_012204_create_productos_table', 1),
(36, '2018_10_15_012204_create_regiones_table', 1),
(37, '2018_10_15_012204_create_roles_table', 1),
(38, '2018_10_15_012204_create_settings_table', 1),
(39, '2018_10_15_012204_create_solicitudes_productos_table', 1),
(40, '2018_10_15_012204_create_tipo_bandeja_table', 1),
(41, '2018_10_15_012204_create_translations_table', 1),
(42, '2018_10_15_012204_create_user_roles_table', 1),
(43, '2018_10_15_012204_create_users_table', 1),
(44, '2018_10_15_012206_add_foreign_keys_to_administradores_table', 1),
(45, '2018_10_15_012206_add_foreign_keys_to_aireacondicionados_table', 1),
(46, '2018_10_15_012206_add_foreign_keys_to_almacenes_productos_table', 1),
(47, '2018_10_15_012206_add_foreign_keys_to_bandeja_productos_table', 1),
(48, '2018_10_15_012206_add_foreign_keys_to_bandejas_table', 1),
(49, '2018_10_15_012206_add_foreign_keys_to_categorias_table', 1),
(50, '2018_10_15_012206_add_foreign_keys_to_comedor_envio_producto_table', 1),
(51, '2018_10_15_012206_add_foreign_keys_to_comedor_producto_table', 1),
(52, '2018_10_15_012206_add_foreign_keys_to_comedor_responsable_table', 1),
(53, '2018_10_15_012206_add_foreign_keys_to_comedor_usuario_table', 1),
(54, '2018_10_15_012206_add_foreign_keys_to_comedores_table', 1),
(55, '2018_10_15_012206_add_foreign_keys_to_configuraciones_table', 1),
(56, '2018_10_15_012206_add_foreign_keys_to_data_rows_table', 1),
(57, '2018_10_15_012206_add_foreign_keys_to_envios_productos_table', 1),
(58, '2018_10_15_012206_add_foreign_keys_to_institucion_estado_table', 1),
(59, '2018_10_15_012206_add_foreign_keys_to_menu_items_table', 1),
(60, '2018_10_15_012206_add_foreign_keys_to_mppeuct_table', 1),
(61, '2018_10_15_012206_add_foreign_keys_to_municipios_table', 1),
(62, '2018_10_15_012206_add_foreign_keys_to_nutricionistas_table', 1),
(63, '2018_10_15_012206_add_foreign_keys_to_parroquias_table', 1),
(64, '2018_10_15_012206_add_foreign_keys_to_permission_role_table', 1),
(65, '2018_10_15_012206_add_foreign_keys_to_productos_despachados_table', 1),
(66, '2018_10_15_012206_add_foreign_keys_to_productos_table', 1),
(67, '2018_10_15_012206_add_foreign_keys_to_regiones_table', 1),
(68, '2018_10_15_012206_add_foreign_keys_to_solicitudes_productos_table', 1),
(69, '2018_10_15_012206_add_foreign_keys_to_tipo_bandeja_table', 1),
(70, '2018_10_15_012206_add_foreign_keys_to_user_roles_table', 1),
(71, '2018_10_15_012206_add_foreign_keys_to_users_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mppeuct`
--

CREATE TABLE `mppeuct` (
  `id` int(11) NOT NULL,
  `cargo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dependencia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `users_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ciudades_id` int(11) NOT NULL,
  `estados_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nutricionistas`
--

CREATE TABLE `nutricionistas` (
  `id` int(11) NOT NULL,
  `estatus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `comedores_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parroquias`
--

CREATE TABLE `parroquias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `municipios_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('miguelangelmagdalena@gmail.com', '$2y$10$85Na1BK7JWhGlJFV.RHQL.A.Vo/ZTUcA..RT4BInU/.zt24qfAx6.', '2018-08-27 23:30:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2018-08-13 17:29:11', '2018-08-13 17:29:11'),
(2, 'browse_bread', NULL, '2018-08-13 17:29:11', '2018-08-13 17:29:11'),
(3, 'browse_database', NULL, '2018-08-13 17:29:11', '2018-08-13 17:29:11'),
(4, 'browse_media', NULL, '2018-08-13 17:29:11', '2018-08-13 17:29:11'),
(5, 'browse_compass', NULL, '2018-08-13 17:29:11', '2018-08-13 17:29:11'),
(6, 'browse_menus', 'menus', '2018-08-13 17:29:11', '2018-08-13 17:29:11'),
(7, 'read_menus', 'menus', '2018-08-13 17:29:11', '2018-08-13 17:29:11'),
(8, 'edit_menus', 'menus', '2018-08-13 17:29:11', '2018-08-13 17:29:11'),
(9, 'add_menus', 'menus', '2018-08-13 17:29:11', '2018-08-13 17:29:11'),
(10, 'delete_menus', 'menus', '2018-08-13 17:29:11', '2018-08-13 17:29:11'),
(11, 'browse_roles', 'roles', '2018-08-13 17:29:11', '2018-08-13 17:29:11'),
(12, 'read_roles', 'roles', '2018-08-13 17:29:11', '2018-08-13 17:29:11'),
(13, 'edit_roles', 'roles', '2018-08-13 17:29:11', '2018-08-13 17:29:11'),
(14, 'add_roles', 'roles', '2018-08-13 17:29:11', '2018-08-13 17:29:11'),
(15, 'delete_roles', 'roles', '2018-08-13 17:29:11', '2018-08-13 17:29:11'),
(16, 'browse_users', 'users', '2018-08-13 17:29:11', '2018-08-13 17:29:11'),
(17, 'read_users', 'users', '2018-08-13 17:29:11', '2018-08-13 17:29:11'),
(18, 'edit_users', 'users', '2018-08-13 17:29:11', '2018-08-13 17:29:11'),
(19, 'add_users', 'users', '2018-08-13 17:29:11', '2018-08-13 17:29:11'),
(20, 'delete_users', 'users', '2018-08-13 17:29:11', '2018-08-13 17:29:11'),
(21, 'browse_settings', 'settings', '2018-08-13 17:29:11', '2018-08-13 17:29:11'),
(22, 'read_settings', 'settings', '2018-08-13 17:29:11', '2018-08-13 17:29:11'),
(23, 'edit_settings', 'settings', '2018-08-13 17:29:11', '2018-08-13 17:29:11'),
(24, 'add_settings', 'settings', '2018-08-13 17:29:11', '2018-08-13 17:29:11'),
(25, 'delete_settings', 'settings', '2018-08-13 17:29:11', '2018-08-13 17:29:11'),
(41, 'browse_hooks', NULL, '2018-08-13 17:29:14', '2018-08-13 17:29:14'),
(57, 'browse_states', 'states', '2018-08-14 03:18:04', '2018-08-14 03:18:04'),
(58, 'read_states', 'states', '2018-08-14 03:18:04', '2018-08-14 03:18:04'),
(59, 'edit_states', 'states', '2018-08-14 03:18:04', '2018-08-14 03:18:04'),
(60, 'add_states', 'states', '2018-08-14 03:18:04', '2018-08-14 03:18:04'),
(61, 'delete_states', 'states', '2018-08-14 03:18:04', '2018-08-14 03:18:04'),
(62, 'browse_municipios', 'municipios', '2018-08-14 04:33:28', '2018-08-14 04:33:28'),
(63, 'read_municipios', 'municipios', '2018-08-14 04:33:28', '2018-08-14 04:33:28'),
(64, 'edit_municipios', 'municipios', '2018-08-14 04:33:28', '2018-08-14 04:33:28'),
(65, 'add_municipios', 'municipios', '2018-08-14 04:33:28', '2018-08-14 04:33:28'),
(66, 'delete_municipios', 'municipios', '2018-08-14 04:33:28', '2018-08-14 04:33:28'),
(67, 'browse_parroquias', 'parroquias', '2018-08-14 05:04:41', '2018-08-14 05:04:41'),
(68, 'read_parroquias', 'parroquias', '2018-08-14 05:04:41', '2018-08-14 05:04:41'),
(69, 'edit_parroquias', 'parroquias', '2018-08-14 05:04:41', '2018-08-14 05:04:41'),
(70, 'add_parroquias', 'parroquias', '2018-08-14 05:04:41', '2018-08-14 05:04:41'),
(71, 'delete_parroquias', 'parroquias', '2018-08-14 05:04:41', '2018-08-14 05:04:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(18, 2),
(19, 1),
(19, 2),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(57, 1),
(58, 1),
(62, 1),
(63, 1),
(67, 1),
(68, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `porciones`
--

CREATE TABLE `porciones` (
  `id` int(11) NOT NULL,
  `gramaje` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `porciones_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_despachados`
--

CREATE TABLE `productos_despachados` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `despachar_responsables_id` int(11) NOT NULL,
  `productos_enviados_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_enviados`
--

CREATE TABLE `productos_enviados` (
  `id` int(11) NOT NULL,
  `fecha_envio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_recibidos`
--

CREATE TABLE `productos_recibidos` (
  `id` int(11) NOT NULL,
  `fecha_recibido` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regiones`
--

CREATE TABLE `regiones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `estados_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrador', '2018-08-13 17:29:11', '2018-08-13 21:42:07'),
(2, 'user', 'Usuario Normal', '2018-08-13 17:29:11', '2018-08-22 16:31:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'SISGECUN', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Sistema de Gestión de Comedores Universitarios', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', 'settings\\August2018\\DY6KB1YZVehHPkcX5tUa.png', '', 'image', 3, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', 'settings\\August2018\\WieQGCbhtUWsfrBoqjxk.jpg', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'SISGECUN', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Sistema de Gestión de Comedores Universitarios', '', 'text', 1, 'Admin'),
(8, 'admin.loader', 'Admin Loader', 'settings\\August2018\\i5z3sGsAVpp7ZKVslK2k.gif', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', 'settings\\August2018\\qLKejwSLI6e9gU2jiP5M.png', '', 'image', 2, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 4, 'Admin'),
(12, 'admin.bg_login', 'Background Login', 'linear-gradient(to right, #4b7fd5 , #2a2856)', NULL, 'code_editor', 6, 'Admin'),
(13, 'admin.bg_home_body_panel', 'Background Home', '#F9F9F9', NULL, 'code_editor', 7, 'Admin'),
(14, 'admin.footer_description', 'Footer Description', 'Sistema de Gestión de Comedores Universitarios', NULL, 'code_editor', 8, 'Admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes_productos`
--

CREATE TABLE `solicitudes_productos` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `envios_productos_id` int(11) NOT NULL,
  `comedores_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_bandeja`
--

CREATE TABLE `tipo_bandeja` (
  `id` int(11) NOT NULL,
  `tipo_bandeja` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'desayuno, almuerzo, merienda, cena',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bandejas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2018-08-13 17:29:14', '2018-08-13 17:29:14'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2018-08-13 17:29:14', '2018-08-13 17:29:14'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2018-08-13 17:29:14', '2018-08-13 17:29:14'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2018-08-13 17:29:14', '2018-08-13 17:29:14'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2018-08-13 17:29:14', '2018-08-13 17:29:14'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2018-08-13 17:29:14', '2018-08-13 17:29:14'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2018-08-13 17:29:14', '2018-08-13 17:29:14'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2018-08-13 17:29:14', '2018-08-13 17:29:14'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2018-08-13 17:29:14', '2018-08-13 17:29:14'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2018-08-13 17:29:14', '2018-08-13 17:29:14'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2018-08-13 17:29:14', '2018-08-13 17:29:14'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2018-08-13 17:29:14', '2018-08-13 17:29:14'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2018-08-13 17:29:14', '2018-08-13 17:29:14'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2018-08-13 17:29:14', '2018-08-13 17:29:14'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2018-08-13 17:29:14', '2018-08-13 17:29:14'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2018-08-13 17:29:14', '2018-08-13 17:29:14'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2018-08-13 17:29:14', '2018-08-13 17:29:14'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2018-08-13 17:29:14', '2018-08-13 17:29:14'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2018-08-13 17:29:14', '2018-08-13 17:29:14'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2018-08-13 17:29:14', '2018-08-13 17:29:14'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2018-08-13 17:29:14', '2018-08-13 17:29:14'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2018-08-13 17:29:14', '2018-08-13 17:29:14'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2018-08-13 17:29:14', '2018-08-13 17:29:14'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2018-08-13 17:29:14', '2018-08-13 17:29:14'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2018-08-13 17:29:14', '2018-08-13 17:29:14'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2018-08-13 17:29:14', '2018-08-13 17:29:14'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2018-08-13 17:29:14', '2018-08-13 17:29:14'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2018-08-13 17:29:14', '2018-08-13 17:29:14'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2018-08-13 17:29:14', '2018-08-13 17:29:14'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2018-08-13 17:29:14', '2018-08-13 17:29:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `cedula` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primer nombre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `segundo nombre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primer apellido` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `segundo apellido` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono_celular` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rif` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `password`, `remember_token`, `settings`, `cedula`, `primer nombre`, `segundo nombre`, `primer apellido`, `segundo apellido`, `sexo`, `telefono_celular`, `telefono1`, `telefono2`, `rif`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', '$2y$10$Bdte22LQ7DMRxiAtojqoQeP6Ve3/22LFiFrXG8AVxFtn3DLjQRumq', 'VnY0RSCl8fSE28RP4F7RGSaabonM6vtaPgF8CeCkQ1UlSyA1I1QFFR7s4WaK', '{\"locale\":\"es\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-13 17:29:13', '2018-08-13 18:48:45'),
(5, 2, 'Miguel Magdalena', 'miguelmagdalena@gmail.com', 'users/default.png', '$2y$10$FqU0hTDwBsB3Fngl7jN8Fue1kfP/nmmQblOsIQu2uF6C.gm2DHbPK', '6pve11857dpcTUoM8mb1hrShGczZkRwrsf6Fd3xY0BcyV6p6mONrR21TkL0k', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-26 06:51:59', '2018-08-26 06:51:59'),
(6, 2, 'Miguel Magdalena', 'miguelaagdalena@gmail.com', 'users/default.png', '$2y$10$JnMMpyDmKHHbhh9z3m6Du.lxU77PI13CkV037xUGsfDEXf5sSii12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-27 01:19:34', '2018-08-27 01:19:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_administradores_users1` (`users_id`);

--
-- Indices de la tabla `aireacondicionados`
--
ALTER TABLE `aireacondicionados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_aireacondicionados_comedores1` (`comedores_id`);

--
-- Indices de la tabla `almacenes_productos`
--
ALTER TABLE `almacenes_productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_almacenes_productos_comedores1` (`comedores_id`);

--
-- Indices de la tabla `bandejas`
--
ALTER TABLE `bandejas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bandejas_comedores1` (`comedores_id`);

--
-- Indices de la tabla `bandeja_productos`
--
ALTER TABLE `bandeja_productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bandeja_productos_bandejas1` (`bandejas_id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_categorias_productos1` (`productos_id`);

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comedores`
--
ALTER TABLE `comedores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comedores_instituciones1` (`instituciones_id`),
  ADD KEY `fk_comedores_descripciones1` (`descripciones_id`);

--
-- Indices de la tabla `comedor_envio_producto`
--
ALTER TABLE `comedor_envio_producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comedor_envio_producto_envios_productos1` (`envios_productos_id`),
  ADD KEY `fk_comedor_envio_producto_comedores1` (`comedores_id`);

--
-- Indices de la tabla `comedor_producto`
--
ALTER TABLE `comedor_producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comedor_producto_envios_productos1` (`envios_productos_id`),
  ADD KEY `fk_comedor_producto_productos1` (`productos_id`);

--
-- Indices de la tabla `comedor_responsable`
--
ALTER TABLE `comedor_responsable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comedor_responsable_users1` (`users_id`),
  ADD KEY `fk_comedor_responsable_comedores1` (`comedores_id`);

--
-- Indices de la tabla `comedor_usuario`
--
ALTER TABLE `comedor_usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comedor_usuario_users1` (`users_id`),
  ADD KEY `fk_comedor_usuario_comedores1` (`comedores_id`);

--
-- Indices de la tabla `configuraciones`
--
ALTER TABLE `configuraciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_configuraciones_administradores1` (`administradores_id`);

--
-- Indices de la tabla `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indices de la tabla `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indices de la tabla `descripciones`
--
ALTER TABLE `descripciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `despachar_responsables`
--
ALTER TABLE `despachar_responsables`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `envios_productos`
--
ALTER TABLE `envios_productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_envios_productos_MPPEUCT1` (`MPPEUCT_id`),
  ADD KEY `fk_envios_productos_productos_recibidos1` (`productos_recibidos_id`),
  ADD KEY `fk_envios_productos_productos_enviados1` (`productos_enviados_id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `instituciones`
--
ALTER TABLE `instituciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `institucion_estado`
--
ALTER TABLE `institucion_estado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_institucion_estado_instituciones1` (`instituciones_id`),
  ADD KEY `fk_institucion_estado_estados1` (`estados_id`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indices de la tabla `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mppeuct`
--
ALTER TABLE `mppeuct`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_MPPEUCT_users1` (`users_id`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_municipios_ciudades1` (`ciudades_id`),
  ADD KEY `fk_municipios_estados1` (`estados_id`);

--
-- Indices de la tabla `nutricionistas`
--
ALTER TABLE `nutricionistas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_nutricionistas_users1` (`users_id`),
  ADD KEY `fk_nutricionistas_comedores1` (`comedores_id`);

--
-- Indices de la tabla `parroquias`
--
ALTER TABLE `parroquias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_parroquias_municipios1` (`municipios_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indices de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indices de la tabla `porciones`
--
ALTER TABLE `porciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_productos_porciones1` (`porciones_id`);

--
-- Indices de la tabla `productos_despachados`
--
ALTER TABLE `productos_despachados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_producto_enviado_despachar_responsable_despachar_responsab1` (`despachar_responsables_id`),
  ADD KEY `fk_producto_enviado_despachar_responsable_productos_enviados1` (`productos_enviados_id`);

--
-- Indices de la tabla `productos_enviados`
--
ALTER TABLE `productos_enviados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_recibidos`
--
ALTER TABLE `productos_recibidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `regiones`
--
ALTER TABLE `regiones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_regiones_estados1` (`estados_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indices de la tabla `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indices de la tabla `solicitudes_productos`
--
ALTER TABLE `solicitudes_productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_solicitudes_productos_envios_productos1` (`envios_productos_id`),
  ADD KEY `fk_solicitudes_productos_comedores1` (`comedores_id`);

--
-- Indices de la tabla `tipo_bandeja`
--
ALTER TABLE `tipo_bandeja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Tipo_Bandeja_bandejas1` (`bandejas_id`);

--
-- Indices de la tabla `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT de la tabla `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD CONSTRAINT `fk_administradores_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `aireacondicionados`
--
ALTER TABLE `aireacondicionados`
  ADD CONSTRAINT `fk_aireacondicionados_comedores1` FOREIGN KEY (`comedores_id`) REFERENCES `comedores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `almacenes_productos`
--
ALTER TABLE `almacenes_productos`
  ADD CONSTRAINT `fk_almacenes_productos_comedores1` FOREIGN KEY (`comedores_id`) REFERENCES `comedores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `bandejas`
--
ALTER TABLE `bandejas`
  ADD CONSTRAINT `fk_bandejas_comedores1` FOREIGN KEY (`comedores_id`) REFERENCES `comedores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `bandeja_productos`
--
ALTER TABLE `bandeja_productos`
  ADD CONSTRAINT `fk_bandeja_productos_bandejas1` FOREIGN KEY (`bandejas_id`) REFERENCES `bandejas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `fk_categorias_productos1` FOREIGN KEY (`productos_id`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comedores`
--
ALTER TABLE `comedores`
  ADD CONSTRAINT `fk_comedores_descripciones1` FOREIGN KEY (`descripciones_id`) REFERENCES `descripciones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comedores_instituciones1` FOREIGN KEY (`instituciones_id`) REFERENCES `instituciones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comedor_envio_producto`
--
ALTER TABLE `comedor_envio_producto`
  ADD CONSTRAINT `fk_comedor_envio_producto_comedores1` FOREIGN KEY (`comedores_id`) REFERENCES `comedores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comedor_envio_producto_envios_productos1` FOREIGN KEY (`envios_productos_id`) REFERENCES `envios_productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comedor_producto`
--
ALTER TABLE `comedor_producto`
  ADD CONSTRAINT `fk_comedor_producto_envios_productos1` FOREIGN KEY (`envios_productos_id`) REFERENCES `envios_productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comedor_producto_productos1` FOREIGN KEY (`productos_id`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comedor_responsable`
--
ALTER TABLE `comedor_responsable`
  ADD CONSTRAINT `fk_comedor_responsable_comedores1` FOREIGN KEY (`comedores_id`) REFERENCES `comedores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comedor_responsable_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comedor_usuario`
--
ALTER TABLE `comedor_usuario`
  ADD CONSTRAINT `fk_comedor_usuario_comedores1` FOREIGN KEY (`comedores_id`) REFERENCES `comedores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comedor_usuario_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `configuraciones`
--
ALTER TABLE `configuraciones`
  ADD CONSTRAINT `fk_configuraciones_administradores1` FOREIGN KEY (`administradores_id`) REFERENCES `administradores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `envios_productos`
--
ALTER TABLE `envios_productos`
  ADD CONSTRAINT `fk_envios_productos_MPPEUCT1` FOREIGN KEY (`MPPEUCT_id`) REFERENCES `mppeuct` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_envios_productos_productos_enviados1` FOREIGN KEY (`productos_enviados_id`) REFERENCES `productos_enviados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_envios_productos_productos_recibidos1` FOREIGN KEY (`productos_recibidos_id`) REFERENCES `productos_recibidos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `institucion_estado`
--
ALTER TABLE `institucion_estado`
  ADD CONSTRAINT `fk_institucion_estado_estados1` FOREIGN KEY (`estados_id`) REFERENCES `estados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_institucion_estado_instituciones1` FOREIGN KEY (`instituciones_id`) REFERENCES `instituciones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `mppeuct`
--
ALTER TABLE `mppeuct`
  ADD CONSTRAINT `fk_MPPEUCT_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD CONSTRAINT `fk_municipios_ciudades1` FOREIGN KEY (`ciudades_id`) REFERENCES `ciudades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_municipios_estados1` FOREIGN KEY (`estados_id`) REFERENCES `estados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `nutricionistas`
--
ALTER TABLE `nutricionistas`
  ADD CONSTRAINT `fk_nutricionistas_comedores1` FOREIGN KEY (`comedores_id`) REFERENCES `comedores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nutricionistas_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `parroquias`
--
ALTER TABLE `parroquias`
  ADD CONSTRAINT `fk_parroquias_municipios1` FOREIGN KEY (`municipios_id`) REFERENCES `municipios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_productos_porciones1` FOREIGN KEY (`porciones_id`) REFERENCES `porciones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos_despachados`
--
ALTER TABLE `productos_despachados`
  ADD CONSTRAINT `fk_producto_enviado_despachar_responsable_despachar_responsab1` FOREIGN KEY (`despachar_responsables_id`) REFERENCES `despachar_responsables` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_producto_enviado_despachar_responsable_productos_enviados1` FOREIGN KEY (`productos_enviados_id`) REFERENCES `productos_enviados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `regiones`
--
ALTER TABLE `regiones`
  ADD CONSTRAINT `fk_regiones_estados1` FOREIGN KEY (`estados_id`) REFERENCES `estados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `solicitudes_productos`
--
ALTER TABLE `solicitudes_productos`
  ADD CONSTRAINT `fk_solicitudes_productos_comedores1` FOREIGN KEY (`comedores_id`) REFERENCES `comedores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_solicitudes_productos_envios_productos1` FOREIGN KEY (`envios_productos_id`) REFERENCES `envios_productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tipo_bandeja`
--
ALTER TABLE `tipo_bandeja`
  ADD CONSTRAINT `fk_Tipo_Bandeja_bandejas1` FOREIGN KEY (`bandejas_id`) REFERENCES `bandejas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Filtros para la tabla `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
