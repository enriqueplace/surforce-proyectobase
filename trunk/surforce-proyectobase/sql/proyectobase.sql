CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL auto_increment,
  `nombre` varchar(30) collate latin1_general_ci NOT NULL,
  `clave` varchar(30) collate latin1_general_ci default NULL,
  `descripcion` varchar(200) collate latin1_general_ci NOT NULL,
  `ingreso` date NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

INSERT INTO `usuarios` (`id`, `nombre`, `clave`, `descripcion`, `ingreso`) VALUES 
(1, 'eplace', 'virtual', 'Enrique Place - Arquitecto', '2006-01-01'),
(2, 'mperez', 'pepe', 'Marcelo Perez - Desarrollador', '2006-11-08'),
(3, 'mclara', NULL, 'María Clara - Diseñadora Web', '2006-10-01');
