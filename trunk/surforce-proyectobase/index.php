<?php

class Index{
	private $titulo;
	private $text;
	public function __construct(){
		require_once( "configuracion.php" );
		$this->titulo = "Bienvenido al Mantenimiento de Usuarios";
		$this->texto = "Este sistema está pensado para ser un ejemplo de cómo podría ser " .
		"un simple sistema en 3 capas sin usar ninguna solución compleja.";
	}
	public function ejecutar( $request ){
		require_once( PRE . DIRECTORY_SEPARATOR . "PresentacionFachada.class.php" );

		/*
		 * Procesamiento del módulo correspondiente
		 */
		if( isset( $request['m'] )){
			switch ($request['m']) {
				case "listado_usuarios":
					require_once( PRE . DIRECTORY_SEPARATOR . 'ListadoUsuarios.class.php' );
					$ListadoUsuarios = new ListadoUsuarios();
					$ListadoUsuarios->ejecutar();
					break;
				case "consultar_usuario":
					require_once( PRE . DIRECTORY_SEPARATOR . 'ConsultarUsuario.class.php' );
					$ConsultarUsuario = new ConsultarUsuario();
					$ConsultarUsuario->ejecutar();
					break;
				case "mostrar_usuario":
					require_once( PRE . DIRECTORY_SEPARATOR . 'MostrarUsuario.class.php' );
					$MostrarUsuario = new MostrarUsuario();
					$MostrarUsuario->ejecutar( $request );
					break;
				default:
					PresentacionFachada::mostrarTexto($this->titulo, $this->texto);
					break;
			}
		}else{ // Por defecto muestra la página index
			PresentacionFachada::mostrarTexto($this->titulo, $this->texto);
		}

	}
}

$Index = new Index();
$Index->ejecutar( $_GET );

?>

