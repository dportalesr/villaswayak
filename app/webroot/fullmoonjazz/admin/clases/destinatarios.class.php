<?php
include_once("conexion.class.php");

class Destinatarios{
	//constructor
	var $mail1;
	var $mail2;
	var $mail3;
	
		
		function Destinatarios($mail1='',$mail2='',$mail3='')
		{
			$this->mail1=$mail1;
			$this->mail2=$mail2;
			$this->mail3=$mail3;
		}
		
		function agregar_destinatarios()
		{
			
			$conect = new DBManager();
			$sql_del="delete from destinatarios";
			$conect->ejecutar($sql_del);
			$sql="insert into destinatarios(correo1,correo2,correo3) 
			values('".$this->mail1."','".$this->mail2."','".$this->mail3."')";
			return $conect->ejecutar($sql);	
		}
		
		
		
		function obtener_destinatarios()
		{
			$conect = new DBManager();
			$sql="select * from destinatarios";
			$result=$conect->ejecutar($sql);
			
			while($fila = mysql_fetch_array($result))
			{
				$this->mail1=$fila['correo1'];
				$this->mail2=$fila['correo2'];
				$this->mail3=$fila['correo3'];
				
			}
			mysql_free_result($result);
			return $resultados;
		}
		function total()
		{
		$conect = new DBManager();
		$sql="select count(*) as numero from destinatarios";
		$result= $conect->ejecutar($sql);
				
				while($fila = mysql_fetch_array($result))
			{
				$this->total=$fila['numero'];
				
				
			}
			mysql_free_result($result);
			return $resultados;
		
		
		
		
		}
	
	}

?>