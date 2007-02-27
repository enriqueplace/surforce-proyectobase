<?php
/*
 * Aquí se resolverá todo el trabajo de la Persistencia (guardar y recuperar datos)
 * y desde fuera del paquete solo tratará con la fachada.
 *
 * PersistenciaFachada::traerUsuarios();
 *
 * Nota: PHP5 para diferenciar los contextos usa :: en sustitución a ->, pero
 * el sentido es el mismo.
 * */

require_once 'configuracion.php';

abstract class PersistenciaFachada {

	public function traerUsuarios(){
		require_once (FWK."/BaseDeDatos.class.php");
		$miBD = new BaseDeDatos(PER."/config.txt");
		$miBD->conectar();
		$miBD->ejecutarSQL("select * from usuarios;");
		$resultado = $miBD->traerTodo();
		$miBD->desconectar();
		return $resultado;
	}
	public function traerUsuarioPorId($par){

		require_once (FWK."/BaseDeDatos.class.php");
		$miBD = new BaseDeDatos(PER."/config.txt");
		$miBD->conectar();
		$miBD->ejecutarSQL("select * from usuarios where id='".$par."';");
		$resultado = $miBD->traerTodo();
		$miBD->desconectar();
		return $resultado[0];
	}
}
?>