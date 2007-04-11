<?php
class ListadoUsuarios{
	public function __construct(){
		require_once 'configuracion.php';
	}
	public function ejecutar(){
		require_once(PRE . DIRECTORY_SEPARATOR . "PresentacionFachada.class.php");
		PresentacionFachada::listarUsuarios();
	}
}
// Versión anterior
//$ListadoUsuarios = new ListadoUsuarios();
//$ListadoUsuarios->ejecutar();

?>
