<?php
/**
 * Index que inicia ejecuci�n 3 capas
 * */
class Index{
	private $titulo;
	private $text;
	public function __construct(){
		require_once( "configuracion.php" );
		$this->titulo = "Bienvenido al Mantenimiento de Usuarios";
		$this->texto = "Este sistema est� pensado para ser un ejemplo de c�mo podr�a ser " .
		"un simple sistema en 3 capas sin usar ninguna soluci�n compleja.";
	}
	public function ejecutar( $request ){
		require_once( PRE . DIRECTORY_SEPARATOR . "PresentacionFachada.class.php" );

		/*
		 * Procesamiento del m�dulo correspondiente
		 */
		if( isset( $request['m'] )){
			switch ($request['m']) {
				case "listado_usuarios":
					require_once( PRE . DIRECTORY_SEPARATOR . 'ListadoUsuarios.class.php' );
					ListadoUsuarios::ejecutar( $request );
					break;
				case "consultar_usuario":
					require_once( PRE . DIRECTORY_SEPARATOR . 'ConsultarUsuario.class.php' );
					ConsultarUsuario::ejecutar();
					break;
				case "mostrar_usuario":
					require_once( PRE . DIRECTORY_SEPARATOR . 'MostrarUsuario.class.php' );
					MostrarUsuario::ejecutar( $request );
					break;
				default:
					PresentacionFachada::mostrarTexto($this->titulo, $this->texto);
					break;
			}
		}else{ // Por defecto muestra la p�gina index
			PresentacionFachada::mostrarTexto($this->titulo, $this->texto);
		}

	}
}

$Index = new Index();
$Index->ejecutar( $_REQUEST );

?>

