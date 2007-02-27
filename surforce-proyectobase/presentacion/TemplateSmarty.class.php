<?
require_once("Smarty/libs/Smarty.class.php");

/*Heredamos de Smarty todos sus atributos y métodos, pero en
 * la construcción del objeto definimos un comportamiento por defecto
 * que más se ajuste a nuestras necesidades particulares.
 * */
class TemplateSmarty extends Smarty{
	function __construct(){
		$this->template_dir = 'templates';
		$this->config_dir = 'config';
		$this->cache_dir = 'cache';
		$this->compile_dir = 'templates_c';
		$this->left_delimiter = '<!--{';
		$this->right_delimiter = '}-->';
	}
}
?>