-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 10-07-2023 a las 17:48:51
-- Versión del servidor: 10.6.12-MariaDB-0ubuntu0.22.04.1
-- Versión de PHP: 8.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `users_ufm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `codigo` varchar(11) NOT NULL,
  `nombre` varchar(11) NOT NULL,
  `deleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id`, `codigo`, `nombre`, `deleted`) VALUES
(3, 'm1', 'Inicio', 0),
(4, 'm2', '¿Quiénes so', 0),
(5, 'm3', 'Noticias', 0),
(6, 'm4', 'multimedia', 0),
(7, 'm5', '', 0),
(8, 'sm1', 'Inicio', 0),
(9, 'sm2', 'Inicio', 0),
(10, 'sm3', 'Contactenos', 0),
(11, 'sm4', 'Unidad Fami', 0),
(12, 'sm5', 'Noticias', 0),
(13, 'sm6', 'Agregar Not', 0),
(14, 'sm7', 'Fotos', 0),
(15, 'sm8', 'Videos', 0),
(16, 'sm9', 'Agregar Vid', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `multimedia`
--

CREATE TABLE `multimedia` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Volcado de datos para la tabla `multimedia`
--

INSERT INTO `multimedia` (`id`, `name`, `url`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, '¿Qué familias necesitamos para construir una mejor ciudad?', 'Aal6VU7fVyo', 'videos-de-ensayo', '2023-06-18 22:36:46', '2023-06-18 16:36:46', 0),
(3, '¿Por qué la familia es diversa y la tenemos que defender en su diversidad?', 'L95h6hf7Q0o', 'videos-de-ensayo2', '2023-06-18 22:50:29', '2023-06-18 16:50:29', 0),
(11, 'asi trabajamos en medellin', '391jLeE6_WI', 'asi-trabajamos-en-medellin', '2023-06-25 21:54:21', '2023-06-25 15:54:21', 0),
(12, 'dsfsdfsdf', '8TOwIZ2pn30', 'dsfsdfsdf', '2023-06-27 16:59:36', '2023-06-27 10:59:36', 0),
(13, 'video 1', 'S_oLr_np4S8', 'video-1', '2023-06-30 15:46:31', '2023-06-30 09:46:31', 0),
(14, 'curso', 'DRs6zlwKZ34', 'curso', '2023-07-10 22:17:40', '2023-07-10 16:17:40', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `texto` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `url`, `titulo`, `texto`, `slug`, `created_at`) VALUES
(21, 'https://www.shutterstock.com/image-photo/portrait-smiling-female-entrepreneur-holding-260nw-1810504159.jpg', 'otra mas para ensayar', 'asdasdasd', 'otra-mas-para-ensayar', '2023-06-22'),
(23, 'https://cdnwordpresstest-f0ekdgevcngegudb.z01.azurefd.net/es/wp-content/uploads/2023/04/gestores-territoriales-1.jpg', 'Gestores territoriales ', 'gestores medellin', 'Gestores-territoriales-', '2023-06-25'),
(24, 'https://www.antioquiaamanece.com/wp-content/uploads/2023/04/gestores.jpg', 'dsfsdfsdf', 'dgdfgdfg', 'dsfsdfsdf', '2023-06-27'),
(25, 'https://www.antioquiaamanece.com/wp-content/uploads/2023/04/gestores.jpg', 'nueva noticia', 'test ', 'nueva-noticia', '2023-06-30'),
(26, 'https://cdnwordpresstest-f0ekdgevcngegudb.z01.azurefd.net/es/wp-content/uploads/2022/07/20220417-primera-infancia-1.jpg', 'nueva noticia', 'asdasdasdasd', 'nueva-noticia', '2023-07-04'),
(27, 'https://www.shutterstock.com/image-photo/portrait-smiling-female-entrepreneur-holding-260nw-1810504159.jpg', 'noticia 1 modificada', '1', 'noticia-1-modificada', '2023-07-08'),
(28, 'https://www.shutterstock.com/image-photo/portrait-smiling-female-entrepreneur-holding-260nw-1810504159.jpg', 'Erika Bustamante - Profesional de Seguimiento Unidad Familia Medellínzx', 'zxczxczxczxczxcxzzzczxczxcxzcxzccxzzxczxczxczxczxczxc', 'Erika-Bustamante---Profesional-de-Seguimiento-Unidad-Familia-Medellínzx', '2023-07-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntosAtencion`
--

CREATE TABLE `puntosAtencion` (
  `id` int(11) NOT NULL,
  `barrio` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Volcado de datos para la tabla `puntosAtencion`
--

INSERT INTO `puntosAtencion` (`id`, `barrio`, `direccion`, `created_at`) VALUES
(61, 'Aranjuez', 'Carrera 50ª No. 93 - 39', '2023-07-09 03:35:07'),
(62, 'Castilla', ' Calle 101 No. 65 - 19', '2023-07-09 03:35:37'),
(63, 'Caunces', 'Carrera 6 AB No. 47 A - 99', '2023-07-09 03:36:03'),
(64, 'Estadio', 'Calle 49B NO. 77C 71', '2023-07-09 03:36:24'),
(65, 'La América', 'Carrera 92 No. 34 D - 93', '2023-07-09 03:36:40'),
(66, 'Manrique', 'Carrera 48 No. 63 - 33', '2023-07-09 03:36:56'),
(67, 'Moravia', 'Carrera 51 B 88 - 6', '2023-07-09 03:37:14'),
(68, 'Quintana', 'Carrera 80 82 60', '2023-07-09 03:37:31'),
(69, 'San Javier', 'Calle 42 C 95 50', '2023-07-09 03:37:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `textos`
--

CREATE TABLE `textos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `texto` varchar(1000) NOT NULL,
  `pagina` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Volcado de datos para la tabla `textos`
--

INSERT INTO `textos` (`id`, `titulo`, `texto`, `pagina`) VALUES
(1, '¿Quiénes somos?', '\n        \n        \n          Somos una Unidad que pertenece a la Secretaría de Inclusión Social, Familia y Derechos Humanos de la Alcaldía de Medellín. Buscamos mejorar la calidad de vida de las familias de Medellín y fortalecerlas como grupo fundamental de formación de seres humanos. Además, impulsamos la corresponsabilidad y la participación activa de la familia en la gestión de su propio desarrollo. Nuestro trabajo está direccionado por la Política Pública para la Familia de Medellín aprobada por el acuerdo 054 de 2011 del Concejo de Medellín.\n         \n         \n        ', 'inicio'),
(2, 'PUNTOS DE ATENCIÓN', '', 'contactenos'),
(3, '¿Quienes somos?', 'Somos una Unidad que pertenece a la Secretaría de Inclusión Social, Familia y Derechos Humanos de la Alcaldía de Medellín. \n        Buscamos mejorar la calidad de vida de las familias de Medellín y fortalecerlas como grupo fundamental de formación de seres humanos.\n         Además impulsamos la corresponsabilidad y la participación activa de la familia en la gestión de su propio desarrollo. Nuestro trabajo \n         está direccionado por la Política Pública para la Familia de Medellín aprobada por el acuerdo 054 de 2011 del Concejo de Medellín.', 'ufm'),
(4, '¿Cómo trabajamos?', 'Desarrollamos estrategias de promoción, prevención, atención, protección y realizamos acercamiento de oportunidades para transformar \n        a la familia independiente de sus características condiciones o grupo poblacional. Trabajamos con más de 600 personas que se encuentran distribuidas en nueve \n        Centros Integrales para la Familia ubicados en toda la ciudad. A través de los Centros Integrales para la familia ejecutamos la estrategia familia Medellín\n         de la siguiente manera: Gráfico.', 'ufm'),
(5, '¿Quiénes pueden acceder a los Centros Integrales para la Familia?', 'Todos los ciudadanos y familias que pertenecen a las 16 comunas y 5 corregimientos del Municipio de Medellín.', 'ufm'),
(6, '   Agrega un titulo', '   Agrega un texto', 'NuevaPagina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `documento` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `admin` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `deleted` int(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `documento`, `contrasena`, `admin`, `created_at`, `updated_at`, `deleted`) VALUES
(13, 'Deiby', '1035283403', '1035283403', 0, '2023-06-13 01:58:30', '2023-06-12 19:58:30', 0),
(14, 'David', '123', '123', 0, '2023-07-10 17:17:52', '2023-07-10 11:17:52', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `multimedia`
--
ALTER TABLE `multimedia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `puntosAtencion`
--
ALTER TABLE `puntosAtencion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `textos`
--
ALTER TABLE `textos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `multimedia`
--
ALTER TABLE `multimedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `puntosAtencion`
--
ALTER TABLE `puntosAtencion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `textos`
--
ALTER TABLE `textos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
