<?php
class ListadoUsuarios{
	public function __construct(){
		require_once 'configuracion.php';		
	}
	public function ejecutar(){
		// Versión anterior
		// require_once(DOM."/DominioFachada.class.php"); 
		// require_once(DOM."/PresentacionFachada.class.php");
		// PresentacionFachada::listarUsuarios( DominioFachada::traerUsuarios() );
		
		require_once(PRE . DIRECTORY_SEPARATOR . "PresentacionFachada.class.php");
		PresentacionFachada::listarUsuarios();				
	}
}

$ListadoUsuarios = new ListadoUsuarios();
$ListadoUsuarios->ejecutar();

?>
