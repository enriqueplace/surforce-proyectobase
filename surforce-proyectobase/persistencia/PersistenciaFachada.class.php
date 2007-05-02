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

	private function ejecutarSQL( $sql ){
		require_once( FWK . DIRECTORY_SEPARATOR . "BaseDeDatos.class.php");
		$miBD = new BaseDeDatos( PER . DIRECTORY_SEPARATOR . "config.txt");
		$miBD->conectar();
		$miBD->ejecutarSQL( $sql );
		$resultado = $miBD->traerTodo();
		$miBD->desconectar();
		return $resultado;
	}
	public function traerUsuarios( $request = null ){
		require_once( FWK . DIRECTORY_SEPARATOR . "SentenciaSQL.class.php");
		$SentenciaSQL = new SentenciaSQL();

		// Consulta base
		$SentenciaSQL->addSelect("*");
		$SentenciaSQL->addFrom("usuarios");

		if( ( $request['id'] != "" ) ){
			$SentenciaSQL->addWhere("id = ".$request['id']);
		}
		if( ( $request['nombre'] != "" ) ){
			$SentenciaSQL->addWhere(" nombre LIKE '%".$request['nombre']."%'");
		}
		if( ( $request['descripcion'] != "" ) ){
			$SentenciaSQL->addWhere(" descripcion LIKE '%".$request['descripcion']."%'");
		}
		return self::ejecutarSQL( $SentenciaSQL->generar() );
	}
	public function traerUsuarioPorId($id){
		return self::ejecutarSQL("SELECT * FROM usuarios WHERE id='".$id."';");
	}
	public function traerUsuario( $request ){
		require_once( FWK . DIRECTORY_SEPARATOR . "SentenciaSQL.class.php");
		$SentenciaSQL = new SentenciaSQL();

		// Consulta base
		$SentenciaSQL->addSelect("id");
		$SentenciaSQL->addSelect("nombre");
		$SentenciaSQL->addSelect("descripcion");
		$SentenciaSQL->addSelect("ingreso");
		$SentenciaSQL->addFrom("usuarios");

		if( $request['id'] != ''){
			$SentenciaSQL->addWhere("id = ".$request['id']);
		}
		if( $request['nombre'] != ''){
			$SentenciaSQL->addWhere(" nombre LIKE '%".$request['nombre']."%'");
		}
		if( $request['descripcion'] != ''){
			$SentenciaSQL->addWhere(" descripcion LIKE '%".$request['descripcion']."%'");
		}

		// echo $SentenciaSQL->generar();
		return self::ejecutarSQL($SentenciaSQL->generar());
	}
}
?>