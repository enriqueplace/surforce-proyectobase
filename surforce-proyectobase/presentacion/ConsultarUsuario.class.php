<?php


abstract class ConsultarUsuario{
	public function ejecutar(){
		require_once( 'configuracion.php' );
		require_once( PRE . DIRECTORY_SEPARATOR . "PresentacionFachada.class.php" );
		PresentacionFachada::consultarUsuario();
	}
}
// Versi�n anterior
//$ConsultarUsuario = new ConsultarUsuario();
//$ConsultarUsuario->ejecutar();

?>
