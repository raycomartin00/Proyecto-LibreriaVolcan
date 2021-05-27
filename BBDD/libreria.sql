-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 27-05-2021 a las 13:34:17
-- Versión del servidor: 5.7.32-0ubuntu0.18.04.1
-- Versión de PHP: 7.3.25-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Editoriales`
--

CREATE TABLE `Editoriales` (
  `id_editorial` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `cod_postal` int(10) NOT NULL,
  `telefono` int(30) NOT NULL,
  `persona_encargada` varchar(50) NOT NULL,
  `observaciones` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Editoriales`
--

INSERT INTO `Editoriales` (`id_editorial`, `nombre`, `direccion`, `cod_postal`, `telefono`, `persona_encargada`, `observaciones`) VALUES
(1, 'Anaya', 'Calle Juan Ignacio Luca de Tena 15', 35820, 928143456, 'Paco', NULL),
(2, 'Santillana', 'Paseo San Juan Bosco, 62', 35570, 928457643, 'Juan', NULL),
(3, 'Edelvives', 'Calle Tamasite, Puerto del Rosario', 35610, 928795678, 'Lucía', NULL),
(4, 'Susaeta', 'Las Torres Las Palmas de Gran Canaria', 35630, 928457644, 'Laura', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Libros`
--

CREATE TABLE `Libros` (
  `id_libro` int(255) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `observaciones` varchar(200) DEFAULT NULL,
  `imagen` varchar(300) DEFAULT NULL,
  `precio` float NOT NULL,
  `id_editorial` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Libros`
--

INSERT INTO `Libros` (`id_libro`, `isbn`, `nombre`, `observaciones`, `imagen`, `precio`, `id_editorial`) VALUES
(1, '978-92-8001-4214-3', 'Lengua 1º eso', NULL, 'https://static.carrefour.es/hd_510x_/crs/cdn_static/catalog/hd/358309_00_1.jpg', 22.5, 1),
(2, '92-1-112548-0', 'Lengua 2º eso', NULL, 'https://1.bp.blogspot.com/-cZEZv6LPWg4/WpQ2BoPzGMI/AAAAAAAAF0c/ju7ChJHQ6Co9Ko4wbmOi2DPEdwIjxbA0QCLcBGAs/s1600/9788468040073.jpg', 21.65, 1),
(3, '87-89809-10-6', 'Lengua 3º eso', NULL, 'https://images-na.ssl-images-amazon.com/images/I/91bIodDqA+L.jpg', 19.95, 1),
(4, '84-667-1618-1', 'Matematicas 1º eso', NULL, 'https://3.bp.blogspot.com/-ElohhhCyN1I/WOOFYjCqVJI/AAAAAAAACYs/9eSmY_oQOTYU317MN9LRFw77_1ITz9rNACLcB/s1600/9788467852349.jpg', 20.5, 2),
(5, '84-667-1718-1', 'Matematicas 2º eso', NULL, 'https://images-na.ssl-images-amazon.com/images/I/71VyO8J9asL.jpg', 28.75, 2),
(6, '89-667-1618-1', 'Matematicas 3º eso', NULL, 'https://www.agapea.com/Santillana-Educacion-S-L-/Matematicas-aplicadas-3-ESO-i6n12000941.jpg', 15.85, 2),
(7, '984-667-1618-1', 'Ingles 1º eso', NULL, 'https://images-na.ssl-images-amazon.com/images/I/41H4ruwspaL._SX360_BO1,204,203,200_.jpg', 13, 3),
(8, '84-667-1618-45', 'Ingles 2º eso', NULL, 'https://www.educaciongratuita.es/imagenes/contenido/educacion-secundaria-obligatoria/libros/2-eso/ingles/libro-de-ingles-2-eso.jpg', 27.95, 3),
(9, '84-667-1639-1', 'Ingles 3º eso', NULL, 'https://www.educaciongratuita.es/imagenes/contenido/educacion-secundaria-obligatoria/libros/3-eso/ingles/libro-de-ingles-3-eso.jpg', 26.99, 3),
(10, '84-547-1618-1', 'Tecnología 1º Eso', NULL, 'https://images-na.ssl-images-amazon.com/images/I/81gtRcU8QIL.jpg', 34.95, 4),
(11, '654-667-1618-1', 'Tecnología 2º Eso', NULL, 'https://www.mheducation.es/media/catalog/product/cache/84c63a40cf0771f03c9446b22a7e0f08/9/7/9788448185077.jpeg', 35, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('raycomartin00@gmail.com', '$2y$10$09iOMqpYyauxVyPU4.E3UeL5QOMJmz0F3ZQe9eTxekcc2HPsrP93q', '2021-03-12 18:03:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Reservas`
--

CREATE TABLE `Reservas` (
  `id_reserva` int(255) NOT NULL,
  `id_users` bigint(11) NOT NULL,
  `fecha_reserva` date DEFAULT NULL,
  `fecha_aviso` date DEFAULT NULL,
  `fecha_recoge` date DEFAULT NULL,
  `observaciones` varchar(255) DEFAULT NULL,
  `estado` varchar(50) NOT NULL DEFAULT 'Pendiente'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Reservas`
--

INSERT INTO `Reservas` (`id_reserva`, `id_users`, `fecha_reserva`, `fecha_aviso`, `fecha_recoge`, `observaciones`, `estado`) VALUES
(2, 0, '2019-12-08', '2019-12-09', '2019-12-10', NULL, 'Pendiente'),
(3, 0, '2020-10-08', '2020-10-09', '2020-10-10', NULL, 'Pendiente'),
(6, 2, NULL, NULL, NULL, NULL, 'Pendiente'),
(7, 2, NULL, NULL, NULL, NULL, 'Pendiente'),
(9, 2, '2020-12-20', NULL, NULL, NULL, 'Pendiente'),
(10, 2, '2021-01-08', NULL, NULL, NULL, 'Pendiente'),
(11, 2, '2021-01-08', NULL, NULL, NULL, 'Pendiente'),
(12, 2, '2021-01-08', NULL, NULL, NULL, 'Pendiente'),
(13, 2, '2021-01-08', NULL, NULL, NULL, 'Pendiente'),
(14, 2, '2021-01-09', NULL, NULL, NULL, 'Pendiente'),
(15, 2, '2021-01-09', NULL, NULL, NULL, 'Pendiente'),
(16, 2, '2020-12-21', NULL, NULL, NULL, 'Pendiente'),
(17, 2, '2021-01-09', NULL, NULL, NULL, 'Pendiente'),
(18, 2, '2021-01-09', NULL, NULL, NULL, 'Pendiente'),
(19, 2, '2021-01-09', NULL, NULL, NULL, 'Pendiente'),
(20, 2, '2021-01-09', NULL, NULL, NULL, 'Pendiente'),
(21, 2, '2021-01-09', NULL, NULL, NULL, 'Pendiente'),
(22, 2, '2021-01-09', NULL, NULL, NULL, 'Pendiente'),
(23, 2, '2021-01-09', NULL, NULL, NULL, 'Pendiente'),
(24, 2, '2021-01-09', NULL, NULL, NULL, 'Pendiente'),
(25, 2, '2021-01-09', NULL, NULL, NULL, 'Pendiente'),
(26, 2, '2021-01-09', NULL, NULL, NULL, 'Pendiente'),
(27, 2, '2021-01-09', NULL, NULL, NULL, 'Pendiente'),
(28, 2, '2021-01-09', NULL, NULL, NULL, 'Pendiente'),
(29, 2, '2021-01-09', NULL, NULL, NULL, 'Pendiente'),
(30, 2, '2021-01-09', NULL, NULL, NULL, 'Pendiente'),
(31, 2, '2021-01-09', NULL, NULL, NULL, 'Pendiente'),
(32, 2, '2021-01-09', NULL, NULL, NULL, 'Pendiente'),
(33, 2, '2021-01-09', NULL, NULL, NULL, 'Pendiente'),
(34, 2, '2021-01-09', NULL, NULL, NULL, 'Pendiente'),
(35, 2, '2021-01-09', NULL, NULL, NULL, 'Pendiente'),
(36, 2, '2021-01-09', NULL, NULL, NULL, 'Pendiente'),
(37, 2, '2021-01-09', NULL, NULL, NULL, 'Pendiente'),
(38, 2, '2021-01-09', NULL, NULL, NULL, 'Pendiente'),
(39, 2, '2021-01-09', NULL, NULL, NULL, 'Pendiente'),
(40, 2, '2021-01-09', NULL, NULL, NULL, 'Pendiente'),
(41, 2, '2021-01-09', NULL, NULL, NULL, 'Pendiente'),
(42, 2, '2021-01-09', NULL, NULL, NULL, 'Pendiente'),
(43, 2, '2021-01-10', NULL, NULL, NULL, 'Pendiente'),
(44, 2, '2021-01-10', NULL, NULL, NULL, 'Pendiente'),
(45, 3, '2021-01-10', NULL, NULL, NULL, 'Pendiente'),
(46, 2, '2021-01-10', NULL, NULL, NULL, 'Pendiente'),
(47, 2, '2021-01-10', NULL, NULL, NULL, 'Pendiente'),
(48, 3, '2021-01-10', NULL, NULL, NULL, 'Pendiente'),
(49, 3, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(50, 3, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(51, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(52, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(53, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(54, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(55, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(56, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(57, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(58, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(59, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(60, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(61, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(62, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(63, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(64, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(65, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(66, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(67, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(68, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(69, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(70, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(71, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(72, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(73, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(74, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(75, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(76, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(77, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(78, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(79, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(80, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(81, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(82, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(83, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(84, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(85, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(86, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(87, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(88, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(89, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(90, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(91, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(92, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(93, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(94, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(95, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(96, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(97, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(98, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(99, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(100, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(101, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(102, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(103, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(104, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(105, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(106, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(107, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(108, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(109, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(110, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(111, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(112, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(113, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(114, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(115, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(116, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(117, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(118, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(119, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(120, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(121, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(122, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(123, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(124, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(125, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(126, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(127, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(128, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(129, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(130, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(131, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(132, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(133, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(134, 2, '2021-01-11', NULL, NULL, NULL, 'Pendiente'),
(135, 3, '2021-01-12', NULL, NULL, NULL, 'Pendiente'),
(136, 3, '2021-01-13', NULL, NULL, NULL, 'Pendiente'),
(137, 4, '2021-01-13', NULL, NULL, NULL, 'Pendiente'),
(138, 4, '2021-01-14', NULL, NULL, NULL, 'Pendiente'),
(139, 4, '2021-01-14', NULL, NULL, NULL, 'Pendiente'),
(140, 4, '2021-01-14', NULL, NULL, NULL, 'Pendiente'),
(141, 5, '2021-01-14', NULL, NULL, NULL, 'Pendiente'),
(142, 5, '2021-01-14', NULL, NULL, NULL, 'Pendiente'),
(143, 5, '2021-01-14', NULL, NULL, NULL, 'Pendiente'),
(144, 5, '2021-01-14', NULL, NULL, NULL, 'Pendiente'),
(145, 5, '2021-01-14', NULL, NULL, NULL, 'Pendiente'),
(146, 5, '2021-01-14', NULL, NULL, NULL, 'Pendiente'),
(147, 5, '2021-01-14', NULL, NULL, NULL, 'Pendiente'),
(148, 5, '2021-01-14', NULL, NULL, NULL, 'Pendiente'),
(149, 4, '2021-01-14', NULL, NULL, NULL, 'Pendiente'),
(150, 4, '2021-01-14', NULL, NULL, NULL, 'Pendiente'),
(151, 4, '2021-01-14', NULL, NULL, NULL, 'Recogido'),
(152, 4, '2021-01-14', NULL, NULL, NULL, 'Recogido'),
(153, 4, '2021-01-14', NULL, NULL, NULL, 'Recogido'),
(154, 4, '2021-01-14', NULL, NULL, NULL, 'Recogido'),
(155, 2, '2021-01-16', NULL, NULL, NULL, 'Recogido'),
(157, 2, '2021-01-17', NULL, NULL, NULL, 'Pendiente'),
(159, 3, '2021-01-28', NULL, NULL, NULL, 'Pendiente'),
(160, 4, '2021-03-12', NULL, NULL, NULL, 'Avisado'),
(161, 4, '2021-03-13', NULL, NULL, NULL, 'Avisado'),
(162, 2, '2021-03-17', NULL, NULL, NULL, 'Recogido'),
(163, 2, '2021-03-16', NULL, NULL, NULL, 'Avisado'),
(170, 4, '2021-03-19', NULL, NULL, NULL, 'Recogido'),
(226, 2, '2021-03-20', NULL, NULL, NULL, 'Avisado'),
(227, 4, '2021-03-20', NULL, NULL, NULL, 'Recogido'),
(228, 2, '2021-03-20', NULL, NULL, NULL, 'Pendiente'),
(229, 10, '2021-03-21', NULL, NULL, NULL, 'Pendiente'),
(230, 10, '2021-03-21', NULL, NULL, NULL, 'Recogido'),
(231, 10, '2021-03-21', NULL, NULL, NULL, 'Avisado'),
(232, 4, '2021-03-22', NULL, NULL, NULL, 'Recogido'),
(233, 4, '2021-03-22', NULL, NULL, NULL, 'Pendiente'),
(234, 4, '2021-03-22', NULL, NULL, NULL, 'Avisado'),
(237, 4, '2021-03-22', NULL, NULL, NULL, 'Pendiente'),
(238, 4, '2021-03-22', NULL, NULL, NULL, 'Pendiente'),
(239, 4, '2021-03-22', NULL, NULL, NULL, 'Pendiente'),
(240, 4, '2021-03-22', NULL, NULL, NULL, 'Pendiente'),
(241, 2, '2021-03-22', NULL, NULL, NULL, 'Avisado'),
(242, 4, '2021-03-23', NULL, NULL, NULL, 'Avisado'),
(243, 4, '2021-03-23', NULL, NULL, NULL, 'Pendiente'),
(244, 4, '2021-03-23', NULL, NULL, NULL, 'Recogido'),
(245, 4, '2021-03-23', NULL, NULL, NULL, 'Pendiente'),
(246, 10, '2021-03-23', NULL, NULL, NULL, 'Pendiente'),
(247, 11, '2021-03-24', NULL, NULL, NULL, 'Avisado'),
(248, 11, '2021-03-24', NULL, NULL, NULL, 'Recogido'),
(249, 2, '2021-03-24', NULL, NULL, NULL, 'Avisado'),
(250, 2, '2021-03-24', NULL, NULL, NULL, 'Pendiente'),
(251, 10, '2021-03-24', NULL, NULL, NULL, 'Pendiente'),
(252, 10, '2021-03-24', NULL, NULL, NULL, 'Pendiente'),
(253, 11, '2021-03-25', NULL, NULL, NULL, 'Pendiente'),
(254, 11, '2021-03-25', NULL, NULL, NULL, 'Recogido'),
(255, 4, '2021-03-24', NULL, NULL, NULL, 'Pendiente'),
(256, 4, '2021-03-25', NULL, NULL, NULL, 'Avisado'),
(257, 2, '2021-03-26', NULL, NULL, NULL, 'Pendiente'),
(258, 2, '2021-03-26', NULL, NULL, NULL, 'Avisado'),
(259, 2, '2021-03-26', NULL, NULL, NULL, 'Pendiente'),
(260, 2, '2021-03-26', NULL, NULL, NULL, 'Recogido'),
(261, 2, '2021-03-26', NULL, NULL, NULL, 'Avisado'),
(262, 2, '2021-05-21', NULL, NULL, NULL, 'Pendiente'),
(263, 2, '2021-05-25', NULL, NULL, NULL, 'Pendiente'),
(264, 2, '2021-05-25', NULL, NULL, NULL, 'Pendiente'),
(265, 2, '2021-05-25', NULL, NULL, NULL, 'Avisado'),
(266, 2, '2021-05-25', NULL, NULL, NULL, 'Pendiente'),
(267, 2, '2021-05-26', NULL, NULL, NULL, 'Avisado'),
(268, 11, '2021-05-26', NULL, NULL, NULL, 'Recogido'),
(269, 2, '2021-05-26', NULL, NULL, NULL, 'Recogido'),
(270, 2, '2021-05-26', NULL, NULL, NULL, 'Recogido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ReservasXLibros`
--

CREATE TABLE `ReservasXLibros` (
  `id_reserva` int(11) NOT NULL,
  `id_libro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ReservasXLibros`
--

INSERT INTO `ReservasXLibros` (`id_reserva`, `id_libro`) VALUES
(7, 2),
(9, 2),
(9, 3),
(10, 6),
(11, 8),
(11, 9),
(11, 10),
(12, 1),
(13, 1),
(13, 2),
(13, 3),
(15, 10),
(18, 8),
(18, 9),
(18, 10),
(19, 5),
(19, 6),
(25, 8),
(25, 11),
(29, 3),
(29, 4),
(32, 6),
(33, 4),
(33, 5),
(34, 2),
(35, 8),
(35, 9),
(36, 2),
(36, 3),
(37, 3),
(38, 4),
(39, 8),
(39, 9),
(40, 7),
(40, 8),
(41, 4),
(41, 6),
(42, 1),
(42, 2),
(42, 3),
(42, 4),
(43, 4),
(43, 5),
(44, 8),
(44, 9),
(45, 5),
(45, 6),
(45, 7),
(46, 3),
(46, 4),
(46, 6),
(47, 4),
(47, 5),
(47, 6),
(47, 7),
(47, 9),
(48, 3),
(48, 4),
(48, 5),
(48, 6),
(48, 7),
(48, 8),
(48, 9),
(49, 2),
(49, 3),
(49, 4),
(49, 9),
(50, 10),
(50, 11),
(51, 5),
(51, 6),
(51, 7),
(52, 5),
(52, 6),
(52, 7),
(53, 5),
(53, 6),
(53, 7),
(54, 5),
(54, 6),
(54, 7),
(55, 5),
(55, 6),
(55, 7),
(56, 5),
(56, 6),
(56, 7),
(57, 5),
(57, 6),
(57, 7),
(58, 5),
(58, 6),
(58, 7),
(59, 5),
(59, 6),
(59, 7),
(60, 5),
(60, 6),
(60, 7),
(61, 5),
(61, 6),
(61, 7),
(62, 5),
(62, 6),
(62, 7),
(63, 5),
(63, 6),
(63, 7),
(64, 5),
(64, 6),
(64, 7),
(65, 5),
(65, 6),
(65, 7),
(66, 5),
(66, 6),
(66, 7),
(67, 5),
(67, 6),
(67, 7),
(68, 5),
(68, 6),
(68, 7),
(69, 5),
(69, 6),
(69, 7),
(70, 5),
(70, 6),
(70, 7),
(71, 5),
(71, 6),
(71, 7),
(72, 5),
(72, 6),
(72, 7),
(73, 5),
(73, 6),
(73, 7),
(74, 5),
(74, 6),
(74, 7),
(75, 5),
(75, 6),
(75, 7),
(76, 5),
(76, 6),
(76, 7),
(77, 5),
(77, 6),
(77, 7),
(78, 5),
(78, 6),
(78, 7),
(79, 5),
(79, 6),
(79, 7),
(80, 5),
(80, 6),
(80, 7),
(81, 5),
(81, 6),
(81, 7),
(82, 5),
(82, 6),
(82, 7),
(83, 5),
(83, 6),
(83, 7),
(84, 5),
(84, 6),
(84, 7),
(85, 5),
(85, 6),
(85, 7),
(86, 5),
(86, 6),
(86, 7),
(87, 5),
(87, 6),
(87, 7),
(88, 5),
(88, 6),
(88, 7),
(89, 5),
(89, 6),
(89, 7),
(90, 5),
(90, 6),
(90, 7),
(91, 5),
(91, 6),
(91, 7),
(92, 5),
(92, 6),
(92, 7),
(93, 5),
(93, 6),
(93, 7),
(94, 5),
(94, 6),
(94, 7),
(95, 5),
(95, 6),
(95, 7),
(96, 5),
(96, 6),
(96, 7),
(97, 5),
(97, 6),
(97, 7),
(98, 5),
(98, 6),
(98, 7),
(99, 5),
(99, 6),
(99, 7),
(100, 5),
(100, 6),
(100, 7),
(101, 5),
(101, 6),
(101, 7),
(102, 5),
(102, 6),
(102, 7),
(103, 5),
(103, 6),
(103, 7),
(104, 5),
(104, 6),
(104, 7),
(105, 5),
(105, 6),
(105, 7),
(106, 5),
(106, 6),
(106, 7),
(107, 5),
(107, 6),
(107, 7),
(108, 5),
(108, 6),
(108, 7),
(109, 5),
(109, 6),
(109, 7),
(110, 5),
(110, 6),
(110, 7),
(111, 5),
(111, 6),
(111, 7),
(112, 5),
(112, 6),
(112, 7),
(113, 5),
(113, 6),
(113, 7),
(114, 5),
(114, 6),
(114, 7),
(115, 5),
(115, 6),
(115, 7),
(116, 5),
(116, 6),
(116, 7),
(117, 5),
(117, 6),
(117, 7),
(118, 5),
(118, 6),
(118, 7),
(119, 5),
(119, 6),
(119, 7),
(120, 6),
(120, 7),
(121, 6),
(121, 7),
(122, 6),
(122, 7),
(123, 8),
(123, 9),
(124, 8),
(124, 9),
(125, 8),
(125, 9),
(126, 8),
(126, 9),
(127, 8),
(127, 9),
(128, 8),
(128, 9),
(129, 8),
(129, 9),
(130, 6),
(130, 7),
(130, 8),
(131, 6),
(131, 7),
(131, 8),
(132, 6),
(132, 7),
(132, 8),
(133, 6),
(133, 7),
(133, 8),
(134, 1),
(134, 2),
(134, 3),
(134, 4),
(134, 5),
(134, 6),
(134, 7),
(134, 8),
(134, 9),
(134, 10),
(134, 11),
(135, 10),
(135, 11),
(136, 10),
(136, 11),
(137, 6),
(137, 7),
(137, 8),
(138, 7),
(138, 8),
(138, 9),
(139, 4),
(139, 5),
(139, 6),
(140, 9),
(140, 10),
(140, 11),
(141, 5),
(141, 6),
(141, 7),
(142, 6),
(142, 7),
(143, 6),
(143, 7),
(144, 7),
(144, 8),
(145, 8),
(146, 7),
(146, 8),
(147, 9),
(147, 10),
(148, 7),
(148, 8),
(149, 6),
(149, 7),
(150, 7),
(150, 8),
(151, 10),
(151, 11),
(152, 8),
(152, 9),
(152, 10),
(152, 11),
(153, 6),
(153, 7),
(153, 8),
(154, 5),
(154, 6),
(154, 7),
(155, 8),
(155, 9),
(157, 5),
(157, 6),
(157, 7),
(157, 8),
(157, 9),
(159, 4),
(159, 5),
(159, 6),
(159, 7),
(159, 8),
(160, 9),
(160, 10),
(160, 11),
(161, 1),
(162, 1),
(162, 2),
(163, 1),
(163, 2),
(163, 3),
(163, 4),
(163, 5),
(170, 2),
(170, 3),
(170, 4),
(170, 5),
(226, 8),
(226, 9),
(226, 10),
(227, 1),
(227, 2),
(227, 3),
(227, 4),
(227, 5),
(228, 11),
(229, 4),
(229, 5),
(230, 4),
(230, 5),
(231, 2),
(232, 5),
(233, 4),
(233, 5),
(234, 4),
(234, 5),
(237, 5),
(238, 3),
(238, 4),
(238, 5),
(239, 1),
(239, 2),
(239, 5),
(240, 1),
(240, 3),
(241, 1),
(241, 2),
(241, 3),
(241, 4),
(241, 5),
(241, 6),
(241, 7),
(241, 8),
(241, 9),
(241, 10),
(242, 1),
(242, 2),
(242, 3),
(243, 4),
(243, 5),
(243, 6),
(243, 10),
(243, 11),
(244, 1),
(245, 9),
(245, 10),
(246, 1),
(246, 2),
(246, 3),
(246, 4),
(246, 8),
(247, 1),
(247, 2),
(248, 1),
(248, 2),
(249, 1),
(249, 2),
(250, 1),
(250, 2),
(250, 3),
(251, 4),
(251, 5),
(251, 6),
(251, 7),
(251, 8),
(251, 9),
(252, 1),
(253, 1),
(254, 2),
(256, 1),
(256, 2),
(256, 3),
(257, 1),
(257, 2),
(258, 1),
(259, 1),
(260, 11),
(261, 1),
(261, 2),
(262, 1),
(262, 2),
(263, 3),
(263, 4),
(263, 8),
(264, 3),
(264, 4),
(264, 8),
(265, 3),
(265, 4),
(265, 8),
(266, 1),
(266, 2),
(266, 3),
(266, 4),
(267, 1),
(267, 2),
(267, 3),
(267, 4),
(268, 2),
(268, 3),
(269, 6),
(269, 7),
(269, 8),
(269, 9),
(269, 10),
(269, 11),
(270, 1),
(270, 2),
(270, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dni` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT 'no',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `apellidos`, `dni`, `telefono`, `direccion`, `email`, `admin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rayco', NULL, NULL, NULL, NULL, 'raycomartin00@gmail.com', 'si', NULL, '$2y$10$27B2JbWoB..9RBKbpj4dFe2A6rsVA5NSnWNIZfBzAnVj0ybj1zOb.', NULL, '2021-01-07 10:06:25', '2021-01-07 10:06:25'),
(2, 'Pedro', 'Martin', '76546787H', '657879834', 'calle sancocho lanzarote', 'Pedro@gmail.com', 'no', NULL, '$2y$10$zNlogQSaYjpI1D9lrCkh8uaTTZikRofX8fjLDxVPokXUbm/OaUe/y', NULL, '2021-01-07 10:15:24', '2021-01-07 10:15:24'),
(3, 'juan', 'Pérez', '76546887J', '654345678', 'C/Lirios Nº 23', 'Juan@gmail.com', 'no', NULL, '$2y$10$2Oj.4jsHfNYZDgdoM1AspuRLcW8IOzfOJ7mT3zKBa65rpilLSjMmW', NULL, '2021-01-10 12:45:52', '2021-03-25 19:59:40'),
(4, 'Alberto', 'Tejera', '78536787O', '657345421', 'C/Regaliz Nº 45', 'Alberto@gmail.com', 'no', NULL, '$2y$10$rIIWjTI9oNPFreqA.FMHK.QHsERBF4cFRh3OuxXVPOVMNUylyLyqe', NULL, '2021-01-13 20:19:32', '2021-03-21 13:39:48'),
(5, 'kevin', 'Corujo', '76536797F', '653675487', 'C/Tejeda Nº 67', 'kevindisotos@gmail.com', 'no', NULL, '$2y$10$GutTBtR4K5eYUN//Sd.wAuvCkJpqAN8YP5Meu7GDSZeuiinQB7F3m', NULL, '2021-01-14 10:21:20', '2021-01-14 10:21:20'),
(10, 'Andrea', 'Pérez', '78764567H', '678342351', 'calle fajardo arrecife lanzarote', 'Andrea@gmail.com', 'no', NULL, '$2y$10$wJk53s6QvvH7Vf5L0C0cNuoyKs3izzeglaDfMq9uVilluum8thPA.', NULL, '2021-03-12 17:33:54', '2021-03-21 16:11:33'),
(11, 'joseluis', NULL, NULL, NULL, NULL, 'joseluis@gmail.com', 'no', NULL, '$2y$10$v2oU6/kX0h.rGy6In9nH2.zaA.3/oatQO/gbSB4f1517we21YyYmO', NULL, '2021-05-26 15:57:34', '2021-05-26 15:57:34');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Editoriales`
--
ALTER TABLE `Editoriales`
  ADD PRIMARY KEY (`id_editorial`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `Libros`
--
ALTER TABLE `Libros`
  ADD PRIMARY KEY (`id_libro`),
  ADD KEY `id_editorial` (`id_editorial`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `Reservas`
--
ALTER TABLE `Reservas`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `id_users` (`id_users`);

--
-- Indices de la tabla `ReservasXLibros`
--
ALTER TABLE `ReservasXLibros`
  ADD KEY `id_reserva` (`id_reserva`),
  ADD KEY `id_libros` (`id_libro`);

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
-- AUTO_INCREMENT de la tabla `Editoriales`
--
ALTER TABLE `Editoriales`
  MODIFY `id_editorial` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Libros`
--
ALTER TABLE `Libros`
  MODIFY `id_libro` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `Reservas`
--
ALTER TABLE `Reservas`
  MODIFY `id_reserva` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=271;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Libros`
--
ALTER TABLE `Libros`
  ADD CONSTRAINT `Libros_ibfk_1` FOREIGN KEY (`id_editorial`) REFERENCES `Editoriales` (`id_editorial`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ReservasXLibros`
--
ALTER TABLE `ReservasXLibros`
  ADD CONSTRAINT `ReservasXLibros_ibfk_1` FOREIGN KEY (`id_reserva`) REFERENCES `Reservas` (`id_reserva`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ReservasXLibros_ibfk_2` FOREIGN KEY (`id_libro`) REFERENCES `Libros` (`id_libro`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
