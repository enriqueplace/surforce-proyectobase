<?php

class ConsultarUsuario{
	public function __construct(){
		require_once( 'configuracion.php' );
	}
	public function ejecutar(){
		require_once( PRE . DIRECTORY_SEPARATOR . "PresentacionFachada.class.php" );
		PresentacionFachada::consultarUsuario();
	}
}
// Versi�n anterior
//$ConsultarUsuario = new ConsultarUsuario();
//$ConsultarUsuario->ejecutar();

?>
