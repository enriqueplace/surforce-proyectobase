<?php
require_once 'configuracion.php';
require_once (PER."/PersistenciaFachada.class.php");

/*
 * Aquí se resolverá todo el trabajo del Dominio, y desde fuera del mismo
 * solo tratará con la fachada.
 * */
abstract class DominioFachada {

	public function traerUsuarios(){
		return PersistenciaFachada::traerUsuarios();
	}
	/** Retorna un array con hash */
	public function traerUsuarioPorId($id){
		return PersistenciaFachada::traerUsuarioPorId($id);
	}
	/** Retorna un objeto único de tipo Usuario */
	public function traerObjetoUsuarioPorId($id){
		require_once (DOM."/Usuario.class.php");

		$arr = PersistenciaFachada::traerUsuarioPorId($id);

		$unUsuario = new Usuario($arr['id'], $arr['nombre'], $arr['descripcion'], $arr['ingreso']);
		return $unUsuario;
	}
}
?>