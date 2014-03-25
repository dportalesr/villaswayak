<?php
session_start();
include_once("conexion.class.php");
include_once("configuraciones.php");

class Login{
	var $usuario;
	var $pass;
	
	function Login($usuario='',$pass=''){
		$this->usuario=$usuario;
		$this->pass=$pass;
		}
		
		function session(){
			$conect = new DBManager();
			$sql='SELECT usuario.user,usuario.tipo_user FROM usuario WHERE usuario.user="'.$this->usuario.'" AND pass = MD5("'.$this->pass.'");';
			$result= $conect->ejecutar($sql);
			$num= $conect->numero_de_filas($result);
			//echo $num;
			if($num==1){
				while($fila = mysql_fetch_array($result))
				{
				 $_SESSION["usuario"]=$fila['user'];
				}
			mysql_free_result($result);
			return $resultados;
			//echo $resultados;
			}
			
			
			
			}
	
	
	
	}

?>