<?php

class MostrarUsuario{
	public function __construct(){
		require_once('configuracion.php');		
	}	
	public function ejecutar( $request ){
		
		// Version anterior
		// require_once(PRE . "/PresentacionFachada.class.php");
		// require_once(DOM."/DominioFachada.class.php");
		// $unUsuario = DominioFachada::traerObjetoUsuarioPorId($_REQUEST['id']);
		// PresentacionFachada::mostrarUsuario($unUsuario);
		
		require_once(PRE . DIRECTORY_SEPARATOR . "PresentacionFachada.class.php");
						
		PresentacionFachada::mostrarUsuario( $request );		
	}
}

$MostrarUsuario = new MostrarUsuario();
$MostrarUsuario->ejecutar( $_REQUEST );
// Actualizar el diagrama UML

?>