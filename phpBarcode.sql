--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
    `nombre` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
    `codigo` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
    PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`nombre`, `codigo`) VALUES
(`Articulo 1`, `ABC123`),
(`Articulo 2`, `123456`),
(`Articulo 3`, `FzT59Ps42wb`),
(`Articulo 4`, `26890vWrexa1xj780op`),
(`Articulo 5`, `MYzZSzU49wK3X7Gh`),