<?php

require_once 'configuracion.php';

abstract class PresentacionFachada {

	public function listarUsuarios($usuarios){
		require_once("TemplateSmarty.class.php");
		$miSmarty = new TemplateSmarty();
		$miSmarty->assign("titulo", "Listado de usuarios");
		$miSmarty->assign("usuarios", $usuarios);
		$miSmarty->assign("sitio_contenido", "contenido_listado_usuarios.tpl.html");
		$miSmarty->display("sitio_estructura_estandar.tpl.html");
	}
	public function mostrarTexto($titulo, $texto){
		require_once("TemplateSmarty.class.php");
		$miSmarty = new TemplateSmarty();
		
		$miSmarty->assign("titulo", $titulo);
		$miSmarty->assign("texto", $texto);
		$miSmarty->assign("sitio_contenido", "contenido_index.tpl.html");
		$miSmarty->display("sitio_estructura_estandar.tpl.html");
	}
	public function consultarUsuario(){
		require_once("TemplateSmarty.class.php");
		$miSmarty = new TemplateSmarty();
		$miSmarty->assign("titulo", "Consultar Usuarios");
		$miSmarty->assign("sitio_contenido", "contenido_consultar_usuario.tpl.html");
		$miSmarty->display("sitio_estructura_estandar.tpl.html");
	}
	public function mostrarUsuario($unUsuario){
		require_once("TemplateSmarty.class.php");
		$miSmarty = new TemplateSmarty();
		$miSmarty->assign("titulo", " Usuario");
		$miSmarty->assign("usuario",$unUsuario);
		
		$miSmarty->assign("sitio_contenido", "contenido_mostrar_usuario.tpl.html");
		$miSmarty->display("sitio_estructura_estandar.tpl.html");
	}
}
?>