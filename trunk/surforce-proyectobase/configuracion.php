<?php
// Configuracion base
define('SRV', $_SERVER['DOCUMENT_ROOT']);
define('APP', SRV."/surforce-proyectobase");
define('MOD', APP."/modulos");

// 3 capas
define('DOM', APP."/dominio");
define('PRE', APP."/presentacion");
define('PER', APP."/persistencia");

// Utilidades
define('SMARTY', APP."/Smarty");
define('PEAR', APP."/pear");
define('FWK', APP."/framework");


?>

