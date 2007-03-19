<?php

class Index{
	private $titulo;
	private $text;	
	public function __construct(){
		require_once( "configuracion.php" );
		$this->titulo = "Bienvenido al Mantenimiento de Usuarios";
		$this->texto = "Este sistema est� pensado para ser un ejemplo de c�mo podr�a ser " .
		"un simple sistema en 3 capas sin usar ninguna soluci�n compleja.";			
	}
	public function ejecutar(){
		require_once( PRE . DIRECTORY_SEPARATOR . "PresentacionFachada.class.php" );
		PresentacionFachada::mostrarTexto($this->titulo, $this->texto);		
	}
}

$Index = new Index();
$Index->ejecutar();

?>

