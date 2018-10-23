-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-10-2018 a las 12:57:10
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

--
-- Volcado de datos para la tabla `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(13, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '', 1),
(14, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '', 2),
(15, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '', 3),
(16, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '', 4),
(17, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '', 1),
(18, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '', 2),
(19, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '', 3),
(20, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '', 4),
(21, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, '', 5),
(59, 8, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(60, 8, 'role_id', 'text', 'Role Id', 0, 1, 1, 1, 1, 1, NULL, 20),
(61, 8, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 2),
(62, 8, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required|unique\",\"messages\":{\"required\":\"This :attribute field is a must.\"}}}', 3),
(63, 8, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, '{\"display\":{\"contenedor\":\"2\"}}', 4),
(64, 8, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 5),
(65, 8, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 6),
(66, 8, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 7),
(67, 8, 'cedula', 'number', 'Cedula', 0, 0, 1, 1, 1, 1, NULL, 8),
(72, 8, 'sexo', 'select_dropdown', 'Sexo', 0, 0, 1, 1, 1, 1, '{\"default\":\"masculino\",\"options\":{\"masculino\":\"Masculino\",\"femenino\":\"Femenino\"},\"display\":{\"contenedor\":\"2\"}}', 14),
(73, 8, 'telefono_celular', 'number', 'Telefono Celular', 0, 0, 1, 1, 1, 1, NULL, 15),
(74, 8, 'telefono1', 'number', 'Telefono1', 0, 0, 1, 1, 1, 1, NULL, 16),
(75, 8, 'telefono2', 'number', 'Telefono2', 0, 0, 1, 1, 1, 1, NULL, 17),
(76, 8, 'rif', 'number', 'Rif', 0, 0, 1, 1, 1, 1, NULL, 9),
(77, 8, 'created_at', 'timestamp', 'Fecha de creación', 0, 0, 0, 0, 0, 0, NULL, 18),
(78, 8, 'updated_at', 'timestamp', 'Fecha de actualización', 0, 0, 0, 0, 0, 0, NULL, 19),
(79, 8, 'user_belongsto_role_relationship', 'relationship', 'rol', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"administradores\",\"pivot\":\"0\",\"taggable\":\"0\"}', 21),
(80, 8, 'user_belongstomany_role_relationship', 'relationship', 'roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 22),
(81, 8, 'primer_nombre', 'text', 'Primer Nombre', 0, 1, 1, 1, 1, 1, '{\"display\":{\"contenedor\":\"2\"}}', 10),
(82, 8, 'segundo_nombre', 'text', 'Segundo Nombre', 0, 0, 1, 1, 1, 1, '{\"display\":{\"contenedor\":\"2\"}}', 11),
(83, 8, 'primer_apellido', 'text', 'Primer Apellido', 0, 1, 1, 1, 1, 1, '{\"display\":{\"contenedor\":\"2\"}}', 12),
(84, 8, 'segundo_apellido', 'text', 'Segundo Apellido', 0, 0, 1, 1, 1, 1, '{\"display\":{\"contenedor\":\"2\"}}', 13);

--
-- Volcado de datos para la tabla `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2018-08-13 17:29:11', '2018-08-13 17:29:11'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2018-08-13 17:29:11', '2018-08-13 17:29:11'),
(8, 'users', 'users', 'User', 'Users', 'voyager-person', 'App\\User', 'TCG\\Voyager\\Policies\\UserPolicy', '\\App\\Http\\Controllers\\Voyager\\UserController', NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null}', '2018-10-21 17:52:04', '2018-10-21 17:52:04');

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2018-08-13 17:29:11', '2018-08-13 17:29:11');

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
(22, 1, 'Configuración', '', '_self', 'voyager-settings', '#000000', NULL, 7, '2018-08-14 01:41:36', '2018-08-22 00:57:28', NULL, '');

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

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('miguelangelmagdalena@gmail.com', '$2y$10$85Na1BK7JWhGlJFV.RHQL.A.Vo/ZTUcA..RT4BInU/.zt24qfAx6.', '2018-08-27 23:30:17');

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
(71, 'delete_parroquias', 'parroquias', '2018-08-14 05:04:41', '2018-08-14 05:04:41'),
(72, 'browse_users', 'users', '2018-10-21 17:52:04', '2018-10-21 17:52:04'),
(73, 'read_users', 'users', '2018-10-21 17:52:04', '2018-10-21 17:52:04'),
(74, 'edit_users', 'users', '2018-10-21 17:52:04', '2018-10-21 17:52:04'),
(75, 'add_users', 'users', '2018-10-21 17:52:04', '2018-10-21 17:52:04'),
(76, 'delete_users', 'users', '2018-10-21 17:52:04', '2018-10-21 17:52:04');

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
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(41, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1);

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrador', '2018-08-13 17:29:11', '2018-08-13 21:42:07'),
(2, 'user', 'Usuario Normal', '2018-08-13 17:29:11', '2018-08-22 16:31:38');

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

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `password`, `remember_token`, `settings`, `cedula`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `sexo`, `telefono_celular`, `telefono1`, `telefono2`, `rif`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', '$2y$10$Bdte22LQ7DMRxiAtojqoQeP6Ve3/22LFiFrXG8AVxFtn3DLjQRumq', 'WzDGsVUz4qA96NeFpRgrv134qCDszWn8G61xVXxTo8W7NyUU6oyd55ncjEak', '{\"locale\":\"es\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-13 17:29:13', '2018-08-13 18:48:45'),
(5, 2, 'Miguel Magdalena', 'miguelangelmagdalena@gmail.com', 'users/default.png', '$2y$10$LgaX888afDiNcSPcuEoB5.ArzXhNJytYLyw2cARc5Mw7HE.su/StK', '6pve11857dpcTUoM8mb1hrShGczZkRwrsf6Fd3xY0BcyV6p6mONrR21TkL0k', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-26 06:51:59', '2018-10-19 02:07:40'),
(6, 2, 'Miguel Magdalena', 'miguelaagdalena@gmail.com', 'users/default.png', '$2y$10$JnMMpyDmKHHbhh9z3m6Du.lxU77PI13CkV037xUGsfDEXf5sSii12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-27 01:19:34', '2018-08-27 01:19:34'),
(7, 2, 'Miguel Magdalena', 'miguel@gmail.com', 'users/default.png', '$2y$10$8wSRyK42S/pciCCbZThuaOjlHy3DTxTByU92REpZPeW77j/2v1VJa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'masculino', NULL, NULL, NULL, NULL, '2018-10-17 04:57:00', '2018-10-21 17:16:00'),
(9, 2, 'miguelangelmagdalena', 'miguelangelmagdalena2@gmail.com', 'users/default.png', '$2y$10$3netgq.rA7b09gz4VLb21u7KcoLvnhMQpfTLnZ9.5s16ogaOcBdQO', NULL, NULL, NULL, 'Miguel', 'Miguel', 'Magdalena', 'Magdalena', 'masculino', '4168239480', NULL, NULL, NULL, '2018-10-21 21:18:02', '2018-10-21 21:33:29'),
(10, 2, 'Silena Ybarra', 'silena@gmail.com', 'users/default.png', '$2y$10$TbQ1ObWtp3x0DwbX0Awc2u6HwR4bHE7bZHTDObfbAeeloOwsN.8L.', 'hvSXfy7164YbpPszjO4Yh9mYuLJa4S3CH0tpLn7oPOYbgkO5fZJ75FqkiRTn', NULL, NULL, NULL, NULL, NULL, NULL, 'femenino', NULL, NULL, NULL, NULL, '2018-10-21 22:21:13', '2018-10-22 02:37:58'),
(11, 2, 'nuevo', 'nuevo@gmail.com', 'users/default.png', '$2y$10$Asrr8vmJxoa1XuaSv0llgOGwA6on7HXdjAaiNrTBE5VMWXIkEssie', 'TQ49CJahchR8pnGACdQ0T0KB5ndKOvd78pQLo3bhlVVy9b3dq3dhZcocgI6P', NULL, '25409863', 'Nuevo', 'nuevo', 'Apellido', 'Apellido', 'masculino', '04168239481', '02128725355', '04265871213', '254098635', '2018-10-22 02:49:45', '2018-10-22 02:51:05');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
