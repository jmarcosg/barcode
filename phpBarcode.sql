--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nombre` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
    `codigo` varchar(50),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id`, `nombre`, `codigo`) VALUES
('1', 'Articulo 1', 'ABC123'),
('2', 'Articulo 2', '123456'),
('3', 'Articulo 3', 'FzT59Ps42wb'),
('4', 'Articulo 4', '26890vWrexa1xj780op'),
('5', 'Articulo 5', 'MYzZSzU49wK3X7Gh');