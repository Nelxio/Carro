-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2018 a las 18:12:44
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_login_database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carro`
--

CREATE TABLE `carro` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `precio` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `detalles` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `carro`
--

INSERT INTO `carro` (`id`, `nombre`, `precio`, `detalles`) VALUES
(10, 'Arms', '$1,000.00', '2'),
(11, 'Diablo lll Eternal Collection', '$1,500.00', '2'),
(12, 'The Legend of Zelda Breath of the Wild', '$1,300.00', '2'),
(13, 'Overwatch', '$700.00', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `precio` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `existencia` int(200) NOT NULL,
  `foto` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Multimedia/fotos/predeterminado.jpg',
  `Consola` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID`, `nombre`, `descripcion`, `precio`, `existencia`, `foto`, `Consola`) VALUES
(9, 'Mario Kart 8 Deluxe', 'Sal a la carretera con la versiÃ³n final de Mario Kart 8 y juega en cualquier momento y en cualquier lugar! Carreras con sus amigos o en batalla. Juega a nivel local en un mÃ¡ximo de 4 jugadores.', '$1,300.00', 1, 'Multimedia/foto/nintendo3.jpg', 'Nintendo'),
(10, 'Arms', 'Elige un campeÃ³n de lucha del mundo entero, equipa su propia combinaciÃ³n de brazos extensibles, y luego usa una combinaciÃ³n de pulsaciones de botÃ³n y rÃ¡pidos movimientos de las manos para tomar realmente la lucha.', '$1,000.00', 1, 'Multimedia/foto/nintendo4.jpg', 'Nintendo'),
(11, 'Diablo lll Eternal Collection', 'Desata el infierno en la sala de tu casa el Ã©pico juego de rol de acciÃ³n, llegarÃ¡ a una nueva plataforma. En una aventura reforjada especÃ­ficamente para la consola, los jugadores viajarÃ¡n por una gran diversidad de escenarios.', '$1,500.00', 2, 'Multimedia/foto/nintendo5.jpg', 'Nintendo'),
(12, 'The Legend of Zelda Breath of the Wild', 'Sin reino. Sin memoria. Tras un sueÃ±o de 100 aÃ±os, Link despierta en un mundo que no es capaz de recordar. Nuestro hÃ©roe legendario deberÃ¡ explorar un mundo vasto y peligroso, y recuperar su memoria antes de que Hyrule desaparezca.', '$1,300.00', 2, 'Multimedia/foto/nintendo6.jpg', 'Nintendo'),
(13, 'Overwatch', 'Entra a los campos de batalla con un espectacular reparto de hÃ©roes, soldados , cientÃ­ficos, aventureros y seres increÃ­bles equipados con grandes poderes y armas extraordinarias, Acelera y cambia la velocidad del flujo del tiempo.', '$700.00', 2, 'Multimedia/foto/pc1.jpg', 'PC'),
(14, 'Age of Empires', 'Age of Empires es un videojuego de estrategia en tiempo real para computadoras personales, el primero de la serie homÃ³nima, lanzado el 26 de octubre de 1997 y escenificado en una lÃ­nea del tiempo de 3000 aÃ±os, desde la temprana Edad de Piedra hasta la Edad de Hierro.', '$500.0.', 1, 'Multimedia/foto/pc2.jpg', 'PC'),
(15, 'Conan Exiles', 'Conan Exiles es un juego de supervivencia en un mundo abierto ubicado en las tierras de Conan el BÃ¡rbaro. Sobrevive en un mundo salvaje, construye un hogar y un reino, y domina a tus enemigos en la guerra Ã©pica.', '$300.00', 1, 'Multimedia/foto/pc3.jpg', 'PC'),
(16, 'Farcry Primal', 'Toma el rol de Takkar , un cazador experimentado y el Ãºltimo miembro sobreviviente de su grupo que tiene un objetivo: la supervivencia en un mundo donde tÃº eres la presa. ', '$400.00', 1, 'Multimedia/foto/pc4.jpg', 'PC'),
(17, 'ARK', 'Cuando un hombre o una mujer estÃ¡ desnudo, congelado y muerto de hambre en las costas de una misteriosa isla llamada ARK, debe cazar, cosechar recursos, cultivar cultivos, investigar tecnologÃ­as y construir refugios para resistir los elementos.', '$300.00', 2, 'Multimedia/foto/pc5.jpg', 'PC'),
(18, 'World WarCraft', 'Es un videojuego de rol multijugador masivo en lÃ­nea desarrollado por Blizzard Entertainment. Es el cuarto juego lanzado establecido en el universo fantÃ¡stico de Warcraft.', '$800.00', 2, 'Multimedia/foto/pc6.jpg', 'PC'),
(19, 'BloodBorne', 'Viaja a una ciudad donde la muerte, la locura y las criaturas de pesadilla te acechan en cada esquina. El miedo te llevarÃ¡ a la salvaciÃ³n. ', '$1,200.00', 2, 'Multimedia/foto/play1.jpg', 'Play4'),
(20, 'Spider Man', 'Protagonizado por el sÃºper hÃ©roe mÃ¡s icÃ³nico, Spider-Man, presentando su habilidades acrobÃ¡ticas, improvisaciÃ³n y deslizamiento por su red por lo que es famoso el trepa muros, introduciendo elementos que no no se han visto jamÃ¡s en un juego de Spider-Man. ', '$1,300.00', 2, 'Multimedia/foto/play2.jpg', 'Play4'),
(21, 'Infamous Second Son', 'Infamous Second Son serÃ¡ un juego de lanzamiento del prÃ³ximo PlayStation 4. TambiÃ©n se especifica que este juego utilizara grÃ¡ficos de lluvia en tiempo real asÃ­ como efectos atmosfÃ©ricos de gran calidad.', '$1,300.00', 2, 'Multimedia/foto/play3.jpg', 'Play4'),
(22, 'Titanfall 2', ' En el modo Un jugador, un aspirante a piloto y un veterano titÃ¡n unen fuerzas para salvarse y luchar contra un poderoso enemigo en una batalla desesperada. El modo Multijugador trae nuevos titanes, habilidades de piloto ampliadas.', '$1,100.00', 1, 'Multimedia/foto/play4.jpg', 'Play4'),
(23, 'Watch Dogs', ' Ambientado en Chicago, donde una red central de ordenadores conecta a todo y a todos, Watch_Dogs explora el impacto de la tecnologÃ­a en nuestra sociedad.', '$1,200.00', 2, 'Multimedia/foto/play5.jpg', 'Play4'),
(24, 'Uncharted el Legado Perdido', 'El aclamado desarrollador, Naughty Dog, llega la primera aventura independiente en la historia de la franquicia Uncharted, protagonizada por Chloe Frazer, uno de los personajes favoritos de los fans. ', '$1,300.00', 2, 'Multimedia/foto/play6.jpg', 'Play4'),
(25, 'God of War', 'God of War Collection es un recopilatorio HD de los dos primeros juegos de la saga God of War lanzados para PlayStation 2, que ahora llegan a PSVITA. Las dos primeras aventuras de Kratos dan el salto a la alta definiciÃ³n.', '$700.00', 2, 'Multimedia/foto/psp1.jpg', 'PSPVita'),
(26, 'Lego the Hobbit', 'Hobbit: Recupera el Reino Perdido ladrillo a ladrillo. Ãšnete a Bilbo BolsÃ³n, Gandalf, Thorin y su compaÃ±Ã­a de enanos en una aventura Ã©pica por la Tierra Media para reconquistar la MontaÃ±a Solitaria en el tÃ­tulo de LEGO.', '$450.00', 5, 'Multimedia/foto/psp2.jpg', 'PSPVita'),
(27, 'Ratchet and Clank', 'Â¡Juega el juego, basado en la pelÃ­cula basada en el juego! Ratchet & Clank (PS4) es un nuevo juego basado en elementos del juego original Ratchet & Clank (PS2). ', '$700.00', 8, 'Multimedia/foto/psp3.jpg', 'PSPVita'),
(28, 'Dragon Ball Z Battle of Z', 'Un nuevo referente en la franquicia de Dragon Ball Z. El juego cuenta con entornos y personajes mejorados, basados en los diseÃ±os del manga original. Los campos de batalla son totalmente destruibles.', '$620.00', 12, 'Multimedia/foto/psp4.jpg', 'PSPVita'),
(29, 'Rayman Origins', 'Quince aÃ±os despuÃ©s del lanzamiento mundial del primer Rayman, Michel Ancel (famoso creador de este hÃ©roe sin miembros pero sin lÃ­mites) regresa a sus raÃ­ces para volver a la diversiÃ³n en estado puro de uno de los personajes mÃ¡s icÃ³nicos.', '$320.00', 3, 'Multimedia/foto/psp5.jpg', 'PSPVita'),
(30, 'Lego Star Wars the Force Awakens', 'La franquicia nÃºmero 1 de LEGOÂ® videojuegos regresa con un viaje lleno de humor y diversiÃ³n con la nueva aventura de Star Wars, Â¡y mÃ¡s! ', '$850.00', 5, 'Multimedia/foto/psp6.jpg', 'PSPVita'),
(31, 'Super Mario Odyssey', 'AcompaÃ±a a Mario en una aventura en 3D por todo el planeta usando sus nuevas habilidades para recoger lunas que servirÃ¡n de combustible a tu aeronave, la Odyssey. Â¡Y entretanto, rescata a la princesa Peach de las garras de Bowser!', '$1,200.00', 4, 'Multimedia/foto/nintendo1.jpg', 'Nintendo'),
(33, 'Super Smash Bros Ultimate', 'Luchadores de universos diferentes luchan sobre el mismo escenario! Ataca a tus rivales... haz que acumulen daÃ±os Â¡y catapÃºltalos fuera del escenario! Cuantos mÃ¡s daÃ±os haya recibido un luchador, mÃ¡s lejos saldrÃ¡ despedido.', '$1,500.00', 5, 'Multimedia/foto/nintendo2.jpg', 'Nintendo'),
(34, 'Gears of War 4', 'Comienza una nueva saga de una de las franquicias de videojuegos mÃ¡s aclamadas de la historia. Luego de apenas escapar de un ataque a su aldea, JD Fenix y sus amigos, Kait y Del, deben rescatar a sus seres queridos.', '$1,500.00', 2, 'Multimedia/foto/xbox1.jpg', 'Xbox one'),
(35, 'Doom', 'Doom nos ofrece una fÃ³rmula clÃ¡sica en toda regla. Olvidemos de la regeneraciÃ³n de salud, los botiquines repartidos por el escenario o que suelten al morir los enemigos, serÃ¡n su Ãºnica salvaciÃ³n.', '$1,200.00', 1, 'Multimedia/foto/xbox2.jpg', 'Xbox one'),
(36, 'Killer Instinct', 'Tras mÃ¡s de una dÃ©cada de ausencia finalmente regresa una de las sagas de luchas mÃ¡s conocidas del sector, \'Killer Instinct\', un tÃ­tulo \'free-to-play\' que pretende romper visualmente con efectos de Ãºltima generaciÃ³n', '$700.00', 5, 'Multimedia/foto/xbox3.jpg', 'Xbox one'),
(37, 'Mortal Kombat XL', 'Uno de los tÃ­tulos mÃ¡s vendidos de 2015 ahora es XL! Mortal Kombat X Kompleta toda la experiencia con contenido nuevo y existente. Incluye juego principal, y los nuevos personajes jugables.', '$1,200.00', 12, 'Multimedia/foto/xbox4.jpg', 'Xbox one'),
(38, 'Recore', 'Del legendario Keiji Inafune y los creadores de Metroid Prime llega â€œReCoreâ€, una aventura de acciÃ³n magistralmente diseÃ±ada para una generaciÃ³n nueva. ', '$700.00', 12, 'Multimedia/foto/xbox5.jpg', 'Xbox one'),
(39, 'Prey', 'Prey, un juego de ciencia ficciÃ³n y acciÃ³n en primera persona de ArkaneÂ® Studios, los laureados creadores de DishonoredÂ®, \"Juego del aÃ±o\" en 2012. Arkane Studios, famoso por sus creativas mecÃ¡nicas de juego', '$1,200.00', 5, 'Multimedia/foto/xbox6.jpg', 'Xbox one'),
(40, 'World WarCraft', 'Es un videojuego de rol multijugador masivo en lÃ­nea desarrollado por Blizzard Entertainment. Es el cuarto juego lanzado establecido en el universo fantÃ¡stico de Warcraft.', '$800.00', 2, 'Multimedia/foto/pc6.jpg', 'PC'),
(41, 'BloodBorne', 'Viaja a una ciudad donde la muerte, la locura y las criaturas de pesadilla te acechan en cada esquina. El miedo te llevarÃ¡ a la salvaciÃ³n. ', '$1,200.00', 2, 'Multimedia/foto/play1.png', 'Play4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `roll` int(11) NOT NULL,
  `user` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `roll`, `user`, `email`, `password`) VALUES
(1, 1, 'Xionel', 'alexander_17_rs@hotmail.com', 'nelxio17'),
(2, 0, 'max', 'correo@correo.com', '1234'),
(19, 0, 'max', 'correo@correo.com', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carro`
--
ALTER TABLE `carro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carro`
--
ALTER TABLE `carro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
