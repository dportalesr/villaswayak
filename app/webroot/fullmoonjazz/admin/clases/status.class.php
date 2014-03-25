<?php
include_once("conexion.class.php");

class Status{
	//constructor
	var $valor;
	
		
		function Status($valor='')
		{
			$this->valor=$valor;
			
		}
		
		function agregar_status()
		{
			
			$conect = new DBManager();
			//echo $this->valor;
			$sqldel="delete from habilitar";
			$conect->ejecutar($sqldel);	
			$sql="insert into habilitar(status)values('".$this->valor."')";
			return $conect->ejecutar($sql);	
		}
		
		function obtener_status()
			{
			$conect = new DBManager();
			$sql="select * from habilitar";
			$result=$conect->ejecutar($sql);
			
			while($fila = mysql_fetch_array($result))
			{
				$this->valor=$fila['valor'];
			}
			mysql_free_result($result);
			return $resultados;
			}
		
	
	}

?>