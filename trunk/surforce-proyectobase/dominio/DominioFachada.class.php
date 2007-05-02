<?php
require_once 'configuracion.php';
require_once (PER . DIRECTORY_SEPARATOR . "PersistenciaFachada.class.php");
require_once (DOM . DIRECTORY_SEPARATOR . "Usuario.class.php");

/*
 * Aquí se resolverá todo el trabajo del Dominio, y desde fuera del mismo
 * solo tratará con la fachada.
 * */
abstract class DominioFachada {

	public function traerUsuarios( $request = null ){
		return PersistenciaFachada::traerUsuarios( $request );
	}
	/** Retorna un array con hash */
	public function traerUsuarioPorId($id){
		return PersistenciaFachada::traerUsuarioPorId($id);
	}
	/** Retorna un objeto único de tipo Usuario */
	public function traerObjetoUsuarioPorId($id){

		$encontrados = PersistenciaFachada::traerUsuarioPorId($id);
		foreach( $encontrados as $usuario){
			$unUsuario = new Usuario($usuario['id'], $usuario['nombre'], $usuario['descripcion'], $usuario['ingreso']);
		}

		return $unUsuario;
	}
	public function traerObjetoUsuario( $request ){
		$encontrados = PersistenciaFachada::traerUsuario( $request );
		foreach( $encontrados as $usuario){
			$unUsuario = new Usuario($usuario['id'], $usuario['nombre'], $usuario['descripcion'], $usuario['ingreso']);
		}
		return $unUsuario;
	}
}
?>