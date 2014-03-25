<?php
include_once("conexion.class.php");

class Textos{
	//constructor
	var $principal;
	var $principal_ing;
	var $tickets;
	var $tickets_ing;
	var $schedule;
	var $schedule_ing;
	var $total;
	var $tickets_bus;
	var $tickets_bus_ing;
		
		function Textos($principal='',$principal_ing='',$tickets='',$tickets_ing='',$tickets_bus='',$tickets_bus_ing='',$schedule='',$schedule_ing='')
		{
			$this->principal=$principal;
			$this->principal_ing=$principal_ing;
			$this->tickets=$tickets;
			$this->tickets_ing=$tickets_ing;
			$this->schedule=$schedule;
			$this->schedule_ing=$schedule_ing;
			$this->total=$total;
			$this->tickets_bus=$tickets_bus;
			$this->tickets_bus_ing=$tickets_bus_ing;
		}
		
		function agregar_textos()
		{
			
			$conect = new DBManager();
			$sql_del="delete from textos";
			$conect->ejecutar($sql_del);
			$sql="insert into textos(principal,principal_ing,tickets,tickets_ing,schedule,schedule_ing,tickets_bus,tickets_bus_ing) 
			values('".$this->principal."','".$this->principal_ing."','".$this->tickets."','".$this->tickets_ing."','".$this->schedule."','".$this->schedule_ing."','".$this->tickets_bus."','".$this->tickets_bus_ing."')";
			return $conect->ejecutar($sql);	
		}
		
		function modificar_textos()
		{
			$conect= new DBManager();
			$sql="update textos set principal='".$this->principal."',principal_ing='".$this->principal_ing."',tickets='".$this->tickets."',tickets_ing='".$this->tickets_ing."',tickets_bus='".$this->tickets_bus."',tickets_bus_ing='".$this->tickets_bus_ing."',schedule='".$this->schedule."',schedule='".$this->schedule_ing."'";
			return $conect->ejecutar($sql);	
		}
		
		function eliminar_textos()
		{
			$conect = new DBManager();
			$sql="delete from textos";
			return $conect->ejecutar($sql);	
		}	
		
		
		function obtener_textos()
		{
			$conect = new DBManager();
			$sql="select * from textos";
			$result=$conect->ejecutar($sql);
			
			while($fila = mysql_fetch_array($result))
			{
				$this->principal=$fila['principal'];
				$this->principal_ing=$fila['principal_ing'];
				$this->tickets=$fila['tickets'];
				$this->tickets_ing=$fila['tickets_ing'];
				$this->tickets_bus=$fila['tickets_bus'];
				$this->tickets_bus_ing=$fila['tickets_bus_ing'];
				$this->schedule=$fila['schedule'];
				$this->schedule_ing=$fila['schedule_ing'];
			}
			mysql_free_result($result);
			return $resultados;
		}
		function total()
		{
		$conect = new DBManager();
		$sql="select count(*) as numero from textos";
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