<?php
abstract class ListadoUsuarios{
	public function ejecutar(){
		require_once 'configuracion.php';
		require_once(PRE . DIRECTORY_SEPARATOR . "PresentacionFachada.class.php");
		PresentacionFachada::listarUsuarios();
	}
}
// Versión anterior
//$ListadoUsuarios = new ListadoUsuarios();
//$ListadoUsuarios->ejecutar();

?>
