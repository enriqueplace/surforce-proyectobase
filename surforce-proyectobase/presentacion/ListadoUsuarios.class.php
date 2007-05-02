<?php
abstract class ListadoUsuarios{
	public function ejecutar( $request = null ){
		require_once 'configuracion.php';
		require_once(PRE . DIRECTORY_SEPARATOR . "PresentacionFachada.class.php");
		PresentacionFachada::listarUsuarios( $request );
	}
}

?>
