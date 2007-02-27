<?php
require_once("configuracion.php");
require_once(PRE."/PresentacionFachada.class.php");

$titulo = "Bienvenido al Mantenimiento de Usuarios";

$texto = "Este sistema está pensadopara ser un ejemplo de cómo podría ser " .
		"un simple sistema en 3 capas sin usar ninguna solución compleja.";

PresentacionFachada::mostrarTexto($titulo, $texto);


?>

