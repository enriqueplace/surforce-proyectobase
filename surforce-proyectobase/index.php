<?php
require_once("configuracion.php");
require_once(PRE."/PresentacionFachada.class.php");

$titulo = "Bienvenido al Mantenimiento de Usuarios";

$texto = "Este sistema est� pensadopara ser un ejemplo de c�mo podr�a ser " .
		"un simple sistema en 3 capas sin usar ninguna soluci�n compleja.";

PresentacionFachada::mostrarTexto($titulo, $texto);


?>
