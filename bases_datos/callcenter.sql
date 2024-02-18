-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 18-02-2024 a las 02:45:58
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `callcenter`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bills`
--

CREATE TABLE `bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `numero_compra` bigint(20) UNSIGNED NOT NULL,
  `numero_factura` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `bills`
--

INSERT INTO `bills` (`id`, `numero_compra`, `numero_factura`, `created_at`, `updated_at`) VALUES
(1, 6, 3563, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(2, 2, 9188, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(3, 8, 3027, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(4, 5, 6207, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(5, 3, 3367, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(6, 10, 9281, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(7, 7, 2700, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(8, 9, 9065, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(9, 1, 730, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(10, 4, 6983, '2024-02-18 00:38:07', '2024-02-18 00:38:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `buys`
--

CREATE TABLE `buys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cod_llamada` bigint(20) UNSIGNED NOT NULL,
  `numero` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `medioPago` varchar(255) NOT NULL,
  `pers_autoriz` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `buys`
--

INSERT INTO `buys` (`id`, `cod_llamada`, `numero`, `fecha`, `medioPago`, `pers_autoriz`, `created_at`, `updated_at`) VALUES
(2, 10, '+34 932 395867', '2023-08-29', 'Transferencia', 'Silvia Mayorga', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(4, 6, '+34 932 197165', '2023-02-25', 'Tarjeta', 'D. Antonio Velasco Segundo', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(5, 4, '+34 972248095', '2023-04-15', 'Transferencia', 'Ona Mena Hijo', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(6, 3, '+34 953-297133', '2023-07-24', 'Tarjeta', 'Sr. Jorge Armijo', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(7, 7, '+34 943 514745', '2023-08-23', 'Transferencia', 'Iker Montes', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(8, 1, '+34 970 83 9420', '2023-09-08', 'Transferencia', 'Jesús Franco', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(9, 2, '+34 949 74 4243', '2024-01-30', 'Tarjeta', 'Luisa Rosado Hijo', '2024-02-18 00:38:07', '2024-02-18 00:38:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calls`
--

CREATE TABLE `calls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `numero_documento_contacto_id` bigint(20) UNSIGNED NOT NULL,
  `operador_id` bigint(20) UNSIGNED NOT NULL,
  `numero_telefono` int(11) NOT NULL,
  `fecha_llamada` date NOT NULL,
  `hora_llamada` time NOT NULL,
  `numero_linea_interno` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `calls`
--

INSERT INTO `calls` (`id`, `numero_documento_contacto_id`, `operador_id`, `numero_telefono`, `fecha_llamada`, `hora_llamada`, `numero_linea_interno`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 955031062, '1989-10-20', '10:36:46', 900633714, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(2, 7, 6, 707124244, '2017-07-21', '19:42:54', 764566422, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(3, 7, 9, 419944603, '1981-03-10', '03:48:44', 468258608, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(4, 5, 3, 701741244, '1970-12-10', '19:21:06', 677150490, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(6, 4, 6, 476746972, '2007-05-29', '04:01:05', 353561773, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(7, 2, 8, 936605908, '1981-08-24', '08:29:31', 892973180, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(10, 8, 9, 434302216, '2018-10-02', '15:29:19', 549692513, '2024-02-18 00:38:07', '2024-02-18 00:38:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `claims`
--

CREATE TABLE `claims` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `operador_id` bigint(20) UNSIGNED NOT NULL,
  `cod_estado` bigint(20) UNSIGNED NOT NULL,
  `numero` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `claims`
--

INSERT INTO `claims` (`id`, `operador_id`, `cod_estado`, `numero`, `created_at`, `updated_at`) VALUES
(1, 15, 1, 73, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(2, 8, 1, 50, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(3, 20, 2, 47, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(4, 18, 1, 67, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(5, 15, 1, 49, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(6, 2, 3, 37, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(7, 20, 1, 76, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(8, 1, 3, 80, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(9, 18, 2, 69, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(10, 8, 3, 85, '2024-02-18 00:38:07', '2024-02-18 00:38:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cod_llamada` bigint(20) UNSIGNED NOT NULL,
  `num_reclamo` bigint(20) UNSIGNED NOT NULL,
  `item` varchar(255) NOT NULL,
  `texto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`id`, `cod_llamada`, `num_reclamo`, `item`, `texto`, `created_at`, `updated_at`) VALUES
(1, 4, 49, '4000398', 'Qui deserunt excepturi aut velit possimus exercitationem ut.', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(3, 7, 76, '6521190', 'Non doloribus suscipit velit ducimus quidem libero tenetur voluptatem iste ut.', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(5, 3, 67, '3105917', 'Commodi est unde porro autem aut sed rerum repudiandae neque in occaecati.', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(6, 6, 49, '5659439', 'Cum et autem eum ex officiis qui placeat alias vitae.', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(7, 1, 76, '1256872', 'Optio beatae sed impedit voluptatum atque nemo qui enim dolore quos error consequatur impedit dolorum.', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(9, 2, 67, '1265379', 'Harum dolores sequi iste perferendis in dignissimos.', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(10, 10, 76, '0574467', 'Alias quaerat qui dicta illum voluptas est repellendus sapiente.', '2024-02-18 00:38:07', '2024-02-18 00:38:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `numero_documento` varchar(255) NOT NULL,
  `tipo_documento` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `calle` varchar(255) NOT NULL,
  `numero_domicilio` int(11) NOT NULL,
  `cod_postal` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contacts`
--

INSERT INTO `contacts` (`id`, `numero_documento`, `tipo_documento`, `nombre`, `apellidos`, `calle`, `numero_domicilio`, `cod_postal`, `created_at`, `updated_at`) VALUES
(1, '27961912F', 'NIF', 'Alex Jasso', 'Del Río', 'Travessera Andreu', 6, 73922, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(2, '05555629W', 'DNI', 'Dario Andreu', 'Montalvo', 'Travesía María Carmen', 17, 13871, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(3, '52987582K', 'DNI', 'Ing. Andrés Cervantes', 'Soliz', 'Calle Noa', 42, 90764, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(4, '56243772D', 'DNI', 'Lic. Ona Zambrano Segundo', 'Segovia', 'Carrer Rentería', 8, 81058, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(5, '42916392W', 'DNI', 'Óscar Henríquez', 'Escribano', 'Rúa Padrón', 10, 65934, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(6, '37268401Y', 'DNI', 'Lidia Mireles Segundo', 'Aranda', 'Ruela Raquel', 1, 51959, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(7, '38967441J', 'NIF', 'Vega Madrigal Tercero', 'Abad', 'Ruela Javier', 33, 91564, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(8, '36357240J', 'DNI', 'Iker Arevalo Segundo', 'Arellano', 'Plaza Gallego', 40, 13608, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(10, '67493078S', 'DNI', 'Pau Castellanos', 'Villanueva', 'Calle Rosario', 22, 75351, '2024-02-18 00:38:07', '2024-02-18 00:38:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item_bills`
--

CREATE TABLE `item_bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `numero_factura` bigint(20) UNSIGNED NOT NULL,
  `codigo_producto` bigint(20) UNSIGNED NOT NULL,
  `item` varchar(255) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `item_bills`
--

INSERT INTO `item_bills` (`id`, `numero_factura`, `codigo_producto`, `item`, `cantidad`, `created_at`, `updated_at`) VALUES
(1, 3, 5, '4330389', 925, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(2, 10, 4, '8207608', 614, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(3, 8, 5, '2618213', 376, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(4, 1, 2, '7268883', 635, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(5, 2, 5, '5716537', 642, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(6, 1, 2, '1256872', 395, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(7, 6, 4, '9194538', 758, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(8, 5, 2, '7605880', 800, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(9, 10, 6, '1265379', 807, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(10, 4, 8, '4484087', 41, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(11, 10, 7, '0574467', 423, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(12, 2, 1, '6085314', 572, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(13, 8, 2, '3105917', 688, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(14, 4, 8, '0211733', 988, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(15, 8, 8, '4935712', 860, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(16, 5, 2, '4000398', 103, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(17, 10, 6, '6521190', 366, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(18, 6, 2, '5659439', 103, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(19, 6, 5, '4170384', 894, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(20, 8, 7, '1980308', 889, '2024-02-18 00:38:07', '2024-02-18 00:38:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juniors`
--

CREATE TABLE `juniors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `operator_id` bigint(20) UNSIGNED NOT NULL,
  `antiguedad` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `juniors`
--

INSERT INTO `juniors` (`id`, `operator_id`, `antiguedad`, `created_at`, `updated_at`) VALUES
(1, 12, '11 años con 10 meses', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(2, 16, '15 años con 10 meses', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(3, 17, '7 años con 10 meses', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(4, 7, '17 años con 10 meses', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(5, 19, '7 años con 5 meses', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(6, 4, '21 años con 1 meses', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(7, 11, '6 años con 1 meses', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(8, 13, '19 años con 10 meses', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(9, 3, '17 años con 5 meses', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(10, 9, '0 años con 1 meses', '2024-02-18 00:38:07', '2024-02-18 00:38:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_03_221659_create_states_table', 1),
(6, '2024_02_03_221701_create_contacts_table', 1),
(7, '2024_02_03_221730_create_products_table', 1),
(8, '2024_02_03_231727_create_operators_table', 1),
(9, '2024_02_04_000235_create_juniors_table', 1),
(10, '2024_02_04_000247_create_seniors_table', 1),
(11, '2024_02_04_000632_add_fk_to_juniors_table', 1),
(12, '2024_02_04_000647_add_fk_to_seniors_table', 1),
(13, '2024_02_04_004314_create_calls_table', 1),
(14, '2024_02_04_010745_add_fk_to_operators_table', 1),
(15, '2024_02_04_012140_create_claims_table', 1),
(16, '2024_02_04_012555_add_fk_to_claims_table', 1),
(17, '2024_02_07_173705_create_comments_table', 1),
(18, '2024_02_07_174049_create_buys_table', 1),
(19, '2024_02_07_174227_add_fk_to_comments_table', 1),
(20, '2024_02_09_155801_add_fk_to_buys_table', 1),
(21, '2024_02_09_171424_add_fk_to_calls_table', 1),
(22, '2024_02_09_182722_create_bills_table', 1),
(23, '2024_02_10_170824_add_fk_to_bills_table', 1),
(24, '2024_02_10_175613_create_item_bills_table', 1),
(25, '2024_02_10_175630_add_fk_to_item_bills_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operators`
--

CREATE TABLE `operators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_coordinador` bigint(20) UNSIGNED DEFAULT NULL,
  `numero_documento` int(11) NOT NULL,
  `tipo_documento` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `operators`
--

INSERT INTO `operators` (`id`, `id_coordinador`, `numero_documento`, `tipo_documento`, `nombre`, `apellido`, `fecha_ingreso`, `created_at`, `updated_at`) VALUES
(1, 2, 6, 'NIF', 'Adrián', 'Sola', '2018-05-16', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(2, NULL, 96, 'NIF', 'Marco', 'Collado', '2000-10-09', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(3, 7, 7, 'DNI', 'Alejandro', 'Arribas', '2006-08-27', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(4, 2, 11, 'NIF', 'Diana', 'Zapata', '2003-01-16', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(5, 7, 24, 'DNI', 'Ana', 'Pastor', '2013-10-08', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(6, 2, 26, 'DNI', 'Mateo', 'Melgar', '1999-09-10', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(7, NULL, 10, 'DNI', 'Esther', 'Delrío', '2006-04-18', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(8, 7, 14, 'DNI', 'Gael', 'Luis', '2000-06-10', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(9, 2, 50, 'DNI', 'Ana Isabel', 'Olivárez', '2024-01-11', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(10, 7, 55, 'DNI', 'Martina', 'Lucio', '2020-01-15', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(11, 2, 82, 'DNI', 'Ariadna', 'Ybarra', '2017-12-24', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(12, 7, 31, 'DNI', 'Gonzalo', 'Segura', '2012-03-23', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(13, 2, 97, 'NIF', 'Roberto', 'Marrero', '2004-03-24', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(14, 7, 80, 'DNI', 'María Pilar', 'Alcántar', '2003-01-25', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(15, 2, 95, 'NIF', 'Pol', 'Colunga', '2005-05-30', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(16, 7, 85, 'NIF', 'Noa', 'Venegas', '2008-03-26', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(17, 2, 3, 'DNI', 'Pilar', 'Arroyo', '2016-04-06', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(18, 7, 67, 'DNI', 'Alejandra', 'Galarza', '2015-12-04', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(19, 2, 56, 'NIF', 'Juana', 'Urías', '2016-08-23', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(20, 7, 81, 'NIF', 'Juan', 'Medrano', '2009-04-14', '2024-02-18 00:38:07', '2024-02-18 00:38:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `descripcion` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `codigo`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'CA55889501', 'Velit qui.', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(2, 'CA3481846', 'Recusandae est.', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(3, 'CA25056086', 'Tempora non dolor.', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(4, 'CA62860140', 'Doloribus eum modi.', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(5, 'CA64373254', 'Qui perferendis est.', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(6, 'CA75837849', 'Omnis in odio sed.', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(7, 'CA89945103', 'Fugit et non velit.', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(8, 'CA77092082', 'Quod eaque est.', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(9, 'CA75048185', 'Aspernatur sed est.', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(10, 'CA5757693', 'Eius placeat et aut.', '2024-02-18 00:38:07', '2024-02-18 00:38:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seniors`
--

CREATE TABLE `seniors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `operator_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `seniors`
--

INSERT INTO `seniors` (`id`, `operator_id`, `created_at`, `updated_at`) VALUES
(1, 2, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(2, 6, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(3, 20, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(4, 8, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(5, 1, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(6, 5, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(7, 18, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(8, 14, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(9, 15, '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(10, 10, '2024-02-18 00:38:07', '2024-02-18 00:38:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `states`
--

INSERT INTO `states` (`id`, `codigo`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'R1001', 'RESUELTO', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(2, 'R1002', 'EN EVOLUCIÓN', '2024-02-18 00:38:07', '2024-02-18 00:38:07'),
(3, 'R1003', 'SIN ANALIZAR', '2024-02-18 00:38:07', '2024-02-18 00:38:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bills_numero_factura_unique` (`numero_factura`),
  ADD KEY `bills_numero_compra_foreign` (`numero_compra`);

--
-- Indices de la tabla `buys`
--
ALTER TABLE `buys`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `buys_numero_unique` (`numero`),
  ADD KEY `buys_cod_llamada_foreign` (`cod_llamada`);

--
-- Indices de la tabla `calls`
--
ALTER TABLE `calls`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `calls_numero_telefono_unique` (`numero_telefono`),
  ADD KEY `calls_numero_documento_contacto_id_foreign` (`numero_documento_contacto_id`),
  ADD KEY `calls_operador_id_foreign` (`operador_id`);

--
-- Indices de la tabla `claims`
--
ALTER TABLE `claims`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `claims_numero_unique` (`numero`),
  ADD KEY `claims_operador_id_foreign` (`operador_id`),
  ADD KEY `claims_cod_estado_foreign` (`cod_estado`);

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `comments_item_unique` (`item`),
  ADD KEY `comments_cod_llamada_foreign` (`cod_llamada`),
  ADD KEY `comments_num_reclamo_foreign` (`num_reclamo`);

--
-- Indices de la tabla `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_numero_documento_unique` (`numero_documento`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `item_bills`
--
ALTER TABLE `item_bills`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `item_bills_item_unique` (`item`),
  ADD KEY `item_bills_numero_factura_foreign` (`numero_factura`),
  ADD KEY `item_bills_codigo_producto_foreign` (`codigo_producto`);

--
-- Indices de la tabla `juniors`
--
ALTER TABLE `juniors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `juniors_operator_id_foreign` (`operator_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `operators`
--
ALTER TABLE `operators`
  ADD PRIMARY KEY (`id`),
  ADD KEY `operators_id_coordinador_foreign` (`id_coordinador`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_codigo_unique` (`codigo`);

--
-- Indices de la tabla `seniors`
--
ALTER TABLE `seniors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seniors_operator_id_foreign` (`operator_id`);

--
-- Indices de la tabla `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `states_codigo_unique` (`codigo`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `buys`
--
ALTER TABLE `buys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `calls`
--
ALTER TABLE `calls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `claims`
--
ALTER TABLE `claims`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `item_bills`
--
ALTER TABLE `item_bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `juniors`
--
ALTER TABLE `juniors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `operators`
--
ALTER TABLE `operators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `seniors`
--
ALTER TABLE `seniors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_numero_compra_foreign` FOREIGN KEY (`numero_compra`) REFERENCES `bills` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `buys`
--
ALTER TABLE `buys`
  ADD CONSTRAINT `buys_cod_llamada_foreign` FOREIGN KEY (`cod_llamada`) REFERENCES `calls` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `calls`
--
ALTER TABLE `calls`
  ADD CONSTRAINT `calls_numero_documento_contacto_id_foreign` FOREIGN KEY (`numero_documento_contacto_id`) REFERENCES `contacts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `calls_operador_id_foreign` FOREIGN KEY (`operador_id`) REFERENCES `operators` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `claims`
--
ALTER TABLE `claims`
  ADD CONSTRAINT `claims_cod_estado_foreign` FOREIGN KEY (`cod_estado`) REFERENCES `states` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `claims_operador_id_foreign` FOREIGN KEY (`operador_id`) REFERENCES `operators` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_cod_llamada_foreign` FOREIGN KEY (`cod_llamada`) REFERENCES `calls` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_num_reclamo_foreign` FOREIGN KEY (`num_reclamo`) REFERENCES `claims` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `item_bills`
--
ALTER TABLE `item_bills`
  ADD CONSTRAINT `item_bills_codigo_producto_foreign` FOREIGN KEY (`codigo_producto`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_bills_numero_factura_foreign` FOREIGN KEY (`numero_factura`) REFERENCES `bills` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `juniors`
--
ALTER TABLE `juniors`
  ADD CONSTRAINT `juniors_operator_id_foreign` FOREIGN KEY (`operator_id`) REFERENCES `operators` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `operators`
--
ALTER TABLE `operators`
  ADD CONSTRAINT `operators_id_coordinador_foreign` FOREIGN KEY (`id_coordinador`) REFERENCES `operators` (`id`);

--
-- Filtros para la tabla `seniors`
--
ALTER TABLE `seniors`
  ADD CONSTRAINT `seniors_operator_id_foreign` FOREIGN KEY (`operator_id`) REFERENCES `operators` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
