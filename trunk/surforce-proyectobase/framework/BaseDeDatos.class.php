<?php

/**
 *
 * La clase "BaseDeDatos" contempla toda la información y
 *el comportamiento que debe contener una capa de
 *abstracción de datos.
 *
 *Forma de uso:
 *
 *$Bd = new BaseDeDatos("nombreBase");
 *$Bd->conectar();
 *$cmd = "Select * from Tabla;";
 *$Bd->ejecutarSQL($cmd);
 *$obj = $Bd->traerTodo();
 *
 *$Bd->desconectar();
 *
*/

class BaseDeDatos {

    /**
     * Usuario para acceder al servidor
     */
    private $usuario;

    /**
     * Clave de usuario para acceder al servidor
     */
    private $clave;

    /**
     * Servidor donde esta alojado el gestor de base de datos
     */
    private $servidor;

    /**
     * Base de Datos con la que se va a trabajar
     */
    private $base;

    /**
     * Recurso de conexión
     */
    private $conexion;

    /**
     * Recurso resultado
     */
    private $resultado;

	private $archivoConfiguracion;


    /**
	 * ArchivoConfiguracion: nombre del archivo que debe
	 * estar ubicado en el paquete "persistencia"
	 *
	 */
	public function __construct($archivoConfiguracion) {
        $this->archivoConfiguracion = $archivoConfiguracion;
    }

	private function getConfiguracion(){

		if(file_exists($this->archivoConfiguracion)){
			$arch = fopen ("$this->archivoConfiguracion","r");

			$t = fscanf($arch, "usuario = %s\n");
			$this->usuario = $t[0];
			$t = fscanf($arch, "clave = %s\n");
			$this->clave = $t[0];
		    $t = fscanf($arch, "host = %s\n");
		    $this->servidor = $t[0];
		    $t = fscanf($arch, "base = %s\n");
		    $this->base = $t[0];

			fclose($arch);
		}else{

			die(__FILE__.": archivo de configuración no existe!");
		}

	}

    /**
     * Establece la conexion y selecciona la Base de Datos
     */
    public function conectar(){
    	$this->getConfiguracion();

        $this->conexion = mysql_connect($this->servidor,$this->usuario,$this->clave)
        or die("No se pudo establecer la conexi&oacute;n<br>".mysql_error());

        mysql_select_db($this->base)
        or die("No se pudo seleccionar la Base de Datos<br>".mysql_error());
    }

    /**
     * Recibe un string con la sentencia SQL y la ejecuta
     */
    public function ejecutarSQL($sentencia){
    	if ($this->resultado){
    		mysql_free_result($this->resultado);
    	}
        $this->resultado = mysql_query($sentencia)
        or die("Error en la consulta: ".$sentencia."(".mysql_error().")");
    }

    /**
     * Retorna un entero con la cantidad de filas afectadas
     */
    public function filasAfectadas(){
        return mysql_affected_rows();
    }

    /**
     * Retorna un array asociativo con una linea de la consulta
     */
    public function traerLinea(){
        return mysql_fetch_array($this->resultado,MYSQL_ASSOC);
    }

    /**
     * Retorna un array asociativo con todo el contenido de la consulta
     */
    public function traerTodo(){
    	$todo= array();
        while ($row = mysql_fetch_array($this->resultado, MYSQL_ASSOC)){
            $todo[] = $row;
        }
        return $todo;
    }

	/**
     * Cierra la conexion con el servidor y libera la menoria pedida para al ejecutar la consulta
     */
    public function desconectar(){
        mysql_close($this->conexion);
        mysql_free_result($this->resultado);
    }
}
?>