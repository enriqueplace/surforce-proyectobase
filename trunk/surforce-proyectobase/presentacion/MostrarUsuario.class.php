<?php

class MostrarUsuario{
	public function __construct(){
		require_once('configuracion.php');
	}
	public function ejecutar( $request ){
		require_once(PRE . DIRECTORY_SEPARATOR . "PresentacionFachada.class.php");
		PresentacionFachada::mostrarUsuario( $request );
	}
}
// Versi�n anterior
//$MostrarUsuario = new MostrarUsuario();
//$MostrarUsuario->ejecutar( $_REQUEST );


?>