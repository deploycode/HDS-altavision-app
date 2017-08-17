-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-02-2017 a las 17:46:48
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `coaltavision_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Proceso de Consulta', 'proceso-de-consulta', '2017-02-09 12:53:15', '2017-02-09 12:53:15'),
(2, 'Enfermedades Visuales', 'enfermedades-visuales', '2017-02-09 12:58:30', '2017-02-09 12:58:30'),
(3, 'Enfermedades Sistémicas', 'enfermedades-sistemicas', '2017-02-09 13:00:33', '2017-02-09 13:00:33'),
(4, 'Examenes', 'enfermedades', '2017-02-09 13:01:14', '2017-02-09 13:01:14'),
(5, 'Cirugías y tratamientos', 'cirugias-y-tratamientos', '2017-02-09 13:02:47', '2017-02-09 13:02:47'),
(6, 'Prevención', 'prevencion', '2017-02-09 13:20:09', '2017-02-09 13:20:09'),
(7, 'Artículos', 'articulos', '2017-02-09 13:20:22', '2017-02-09 13:20:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_02_08_092024_create_menus_table', 1),
('2017_02_08_092040_create_posts_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `menu_id`, `slug`, `title`, `content`, `created_at`, `updated_at`) VALUES
(7, 1, 'por-que-realizarse-una-valoracion-oftalmologica', 'Por qué realizarse una valoración oftalmológica', '<p>La mayor&iacute;a de enfermedades visuales son silenciosas, asintom&aacute;ticas, esto hace dif&iacute;cil que cada persona pueda encontrarlas sin ayuda de un profesional. Por esto la principal recomendaci&oacute;n es asistir peri&oacute;dicamente a una valoraci&oacute;n oftalmol&oacute;gica completa con &eacute;nfasis preventivo, para evaluar cada una de las partes del ojo, descartando enfermedades que pueden causar p&eacute;rdida de visi&oacute;n.</p>\r\n\r\n<p>Adicional a esto se debe permanecer atento a posibles s&iacute;ntomas de enfermedad visual como:</p>\r\n\r\n<ul>\r\n	<li>picaz&oacute;n o rasqui&ntilde;a ocular</li>\r\n	<li>ardor en los ojos</li>\r\n	<li>cansancio ocular</li>\r\n	<li>enrojecimiento de ojos y parpados</li>\r\n	<li>tropezarnos con objetos y puertas</li>\r\n	<li>dificultad para ver de lejos o cerca</li>\r\n	<li>ver los objetos deformes</li>\r\n	<li>no ver el centro de los objetos</li>\r\n	<li>ver borroso</li>\r\n	<li>ver aros de luz, o destellos luminosos</li>\r\n	<li>miodesopsias o moscas volantes</li>\r\n</ul>\r\n', '2017-02-09 20:15:07', '2017-02-09 20:15:07'),
(8, 1, 'importancia-de-la-salud-visual', 'Importancia de la salud visual', '<p>Actualmente vivimos un mundo en el que todos los mensajes a nuestro alrededor requieren de la vista para ser interpretados (internet, multimedia, televisi&oacute;n, revistas, etc.). Nuestra relaci&oacute;n con el mundo y supervivencia en &eacute;l, depende de nuestros ojos.</p>\r\n\r\n<p>La VISTA es uno de los sentidos m&aacute;s &uacute;tiles pero pocas veces pensamos en ello. Todas las personas est&aacute;n propensas a sufrir lesiones y enfermedades que de no diagnosticarse a tiempo, pueden incluso ocasionar ceguera total e irreversible.</p>\r\n\r\n<p>La salud visual no se limita a la prescripci&oacute;n de gafas; el componente m&aacute;s importante es la ausencia de enfermedades visuales. Estas suelen presentarse inicialmente sin ning&uacute;n s&iacute;ntoma, por eso se debe acudir peri&oacute;dicamente a una valoraci&oacute;n oftalmol&oacute;gica con &eacute;nfasis preventivo.</p>\r\n', '2017-02-09 20:24:26', '2017-02-09 20:24:26'),
(9, 1, 'frecuencia-recomendada', 'Frecuencia recomendada', '<p>Para prevenir la ceguera y las enfermedades visuales se recomienda que un paciente <strong>sano</strong> tenga la siguiente frecuencia de valoraci&oacute;n por un m&eacute;dico oftalm&oacute;logo:</p>\r\n\r\n<p>Pacientes a quienes se ha diagnosticado un defecto refractivo, cualquier enfermedad visual o una enfermedad sist&eacute;mica como Diabetes, Hipertensi&oacute;n, Hipotiroidismo, Artritis, Lupus, Enfermedad Cardiovascular o Migra&ntilde;a, deben asistir por lo menos una vez al a&ntilde;o o seg&uacute;n indicaci&oacute;n de su m&eacute;dico oftalm&oacute;logo.</p>\r\n', '2017-02-09 20:24:55', '2017-02-09 20:24:55'),
(10, 2, 'ambliopia', 'Ambliopía', '<p>La <strong>ambliop&iacute;a tambi&eacute;n llamada ojo perezoso</strong> es la mala visi&oacute;n a pesar de una adaptaci&oacute;n perfecta de las gafas sin una lesi&oacute;n org&aacute;nica o enfermedad que la justifique.</p>\r\n\r\n<p>El desarrollo visual del ni&ntilde;o se presenta en la primera d&eacute;cada de la vida, cualquier defecto visual como la miop&iacute;a, hipermetrop&iacute;a, astigmatismo, estrabismo o alteraciones en la c&oacute;rnea o el cristalino, que no sea detectado y no se corrija perfectamente durante la edad temprana, ocasiona que no se logre enviar una imagen perfecta al cerebro, llevando a que este se desarrolle de manera imperfecta desde el punto de vista visual.</p>\r\n', '2017-02-09 20:34:31', '2017-02-09 20:34:31'),
(11, 2, 'astigmatismo', 'Astigmatismo', '<p>La c&oacute;rnea es el principal lente del ojo, es la estructura transparente y brillante ubicada en la parte anterior del globo ocular. En el astigmatismo la c&oacute;rnea no es perfectamente redondeada lo cual ocasiona que la imagen se distorsione, o se formen varias im&aacute;genes, generando una visi&oacute;n borrosa tanto de lejos como de cerca.&nbsp;<strong>El astigmatismo suele estar acompa&ntilde;ado de</strong><strong>&nbsp;</strong><a href="http://www.altavision.com.co/webantigua/miopia.php" target="_blank"><strong>miop&iacute;a</strong></a>&nbsp;<strong>o</strong><strong>&nbsp;</strong><a href="http://www.altavision.com.co/webantigua/hipermetropia.php" target="_blank"><strong>hipermetrop&iacute;a</strong></a><strong>.</strong></p>\r\n', '2017-02-09 20:36:27', '2017-02-09 20:36:27'),
(12, 2, 'catarata', 'Catarata', '<p>La catarata es la p&eacute;rdida de la transparencia del lente natural que se encuentra dentro del ojo llamado cristalino y la consiguiente disminuci&oacute;n en la agudeza visual que no logra ser corregida con el uso de gafas.</p>\r\n', '2017-02-09 20:36:54', '2017-02-09 20:36:54'),
(13, 2, 'conjuntivitis', 'Conjuntivitis', '<p>La Conjuntivitis es la inflamaci&oacute;n y enrojecimiento de la membrana transparente que recubre el interior de los p&aacute;rpados y la parte blanca de los ojos, suele estar asociada con picaz&oacute;n, lagrimeo, sensibilidad a la luz y hasta dolor.</p>\r\n', '2017-02-09 20:37:17', '2017-02-09 20:37:17'),
(14, 2, 'degeneracion-macular', 'Degeneración macular', '<p>La&nbsp;Degeneraci&oacute;n Macular relacionada con la edad es un proceso que afecta a la visi&oacute;n central, est&aacute; asociada frecuentemente a fen&oacute;menos relacionados con el envejecimiento del organismo ocasionando una p&eacute;rdida progresiva de la visi&oacute;n central.</p>\r\n', '2017-02-09 20:37:40', '2017-02-09 20:37:40'),
(15, 2, 'estrabismo', 'Estrabismo', '<p>El estrabismo es la desviaci&oacute;n del alineamiento de un ojo con relaci&oacute;n al otro, se presenta por la falta de coordinaci&oacute;n entre los m&uacute;sculos oculares impidiendo fijar la mirada de ambos ojos en un mismo punto. Adem&aacute;s de ser un problema visual el estrabismo se considera un problema est&eacute;tico debido al aspecto del ojo desviado. En los pacientes con estrabismo los ojos no miran al mismo sitio, un ojo dirige la mirada al objeto de su atenci&oacute;n mientras que el otro se desv&iacute;a en otra direcci&oacute;n sin poder ejercer control.</p>\r\n', '2017-02-09 20:38:55', '2017-02-09 20:38:55'),
(16, 2, 'glaucoma', 'Glaucoma', '<p>El Glaucoma es un grupo de enfermedades caracterizadas por un da&ntilde;o progresivo e irreversible del Nervio &Oacute;ptico, el encargado de llevar la informaci&oacute;n desde el ojo hasta el cerebro. El nervio &oacute;ptico tiene aproximadamente un mill&oacute;n de fibras nerviosas, que se van perdiendo gradualmente por causa del glaucoma. Esta p&eacute;rdida puede darse de forma muy r&aacute;pida o lenta seg&uacute;n el tipo de glaucoma, y&nbsp;<strong>sin un tratamiento efectivo tiene como resultado final e inevitable la ceguera.</strong></p>\r\n', '2017-02-09 20:39:18', '2017-02-09 20:39:18'),
(17, 2, 'hipermetropia', 'Hipermetropía', '<p>la Hipermetrop&iacute;a la imagen no logra su foco sobre la retina, si no en un punto posterior del ojo, ya sea porque el sistema de lentes es muy d&eacute;bil o el ojo es demasiado peque&ntilde;o.</p>\r\n\r\n<p>Con este defecto de refracci&oacute;n se tienen problemas de visi&oacute;n a distancias cortas, logrando ver con mayor claridad a distancias largas. Sin embargo, en una persona hiperm&eacute;trope la visi&oacute;n de objetos a largas distancias implica un cierto grado de tensi&oacute;n de los m&uacute;sculos intraoculares para poder enfocar la imagen correctamente sobre la retina. Por este motivo son frecuentes los problemas de cansancio visual en los pacientes con hipermetrop&iacute;a.</p>\r\n', '2017-02-09 20:40:07', '2017-02-09 20:40:07'),
(18, 2, 'miopia', 'Miopía', '<p>En la Miop&iacute;a los rayos de luz no alcanzan a enfocarse en la retina y su foco se ubica en una posici&oacute;n anterior a la misma, ya sea porque el poder de los lentes est&aacute; aumentado o porque el tama&ntilde;o del globo ocular es mayor.</p>\r\n\r\n<p>El paciente miope suele lograr ver los objetos cercanos y mal los objetos lejanos</p>\r\n', '2017-02-09 20:40:36', '2017-02-09 20:40:36'),
(19, 2, 'ojo-seco', 'Ojo seco', '<p>El ojo rojo se constituye en un s&iacute;ntoma de varias afecciones oculares que se manifiestan con hiperemia (aumento en el flujo de sangre hacia un &oacute;rgano o tejido), que dilata los vasos sangu&iacute;neos y hace que el ojo se vea enrojecido.</p>\r\n', '2017-02-09 20:41:01', '2017-02-09 20:41:01'),
(20, 2, 'queratocono', 'Queratocono', '<p>El queratocono es una enfermedad degenerativa de la c&oacute;rnea, que evoluciona de forma progresiva ocasionando adelgazamiento y deformaci&oacute;n en forma de cono en su zona central. El queratocono suele ser bilateral, hereditario y de progresi&oacute;n variable de acuerdo a su estadio.</p>\r\n', '2017-02-09 20:41:29', '2017-02-09 20:41:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Gabriel Rodríguez', 'web@hablemosdesalud.com.co', '$2y$10$at9168WIyCWwI4vXQV//iObatf2imsGYVZLAwqTvhYsQ.czNryOA2', 'qyQjAJidizuK4h6SiBFm1S6DrrJsfbVzEWdp1g97L4jVoUEih2F1daD7lPz4', '2017-02-08 16:06:20', '2017-02-10 15:46:11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_menu_id_foreign` (`menu_id`);

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
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
