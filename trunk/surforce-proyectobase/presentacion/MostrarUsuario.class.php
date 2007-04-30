<?php

abstract class MostrarUsuario{
	public function ejecutar( $request ){
		require_once('configuracion.php');
		require_once(PRE . DIRECTORY_SEPARATOR . "PresentacionFachada.class.php");
		PresentacionFachada::mostrarUsuario( $request );
	}
}
// Versión anterior
//$MostrarUsuario = new MostrarUsuario();
//$MostrarUsuario->ejecutar( $_REQUEST );


?>