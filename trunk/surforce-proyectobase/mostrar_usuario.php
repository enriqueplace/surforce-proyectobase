<?php
require_once('configuracion.php');
require_once(DOM."/DominioFachada.class.php");
require_once(PRE."/PresentacionFachada.class.php");

$unUsuario = DominioFachada::traerObjetoUsuarioPorId($_REQUEST['id']);
PresentacionFachada::mostrarUsuario($unUsuario);

?>