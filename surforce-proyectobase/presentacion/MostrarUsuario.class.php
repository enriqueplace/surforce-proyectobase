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
// Versión anterior
//$MostrarUsuario = new MostrarUsuario();
//$MostrarUsuario->ejecutar( $_REQUEST );


?>