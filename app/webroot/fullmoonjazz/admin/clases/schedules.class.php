<?php
include_once("conexion.class.php");

class Schedule{
	//constructor
	var $id;
	var $lugar;
	var $hora;
	var $estatus;
	var $tipo;
	var $codigo;
		
		function Schedule($id=0,$lugar='',$hora='',$estatus='',$tipo='',$codigo='')
		{
			$this->id=$id;
			$this->lugar=$lugar;
			$this->hora=$hora;
			$this->estatus=$estatus;
			$this->tipo=$tipo;
			$this->codigo=$codigo;
		}
		
		function agregar_schedule()
		{
			
			$conect = new DBManager();
			$sql="insert into schedule(hora,locacion,status,codigo,tipo) 
			values('".$this->hora."','".$this->lugar."','".$this->estatus."','".$this->codigo."','".$this->tipo."')";
			return $conect->ejecutar($sql);	
		}
		
		function modificar_schedule()
		{
			$conect= new DBManager();
			$sql="update schedule set hora='".$this->hora."',locacion='".$this->lugar."',status='".$this->estatus."',
			codigo='".$this->codigo."',tipo='".$this->tipo."' where idlocacion=".$this->id;
			return $conect->ejecutar($sql);	
		}
		
		function eliminar_schedule()
		{
			$conect = new DBManager();
			$sql="delete from schedule where idlocacion=".$this->id;
			return $conect->ejecutar($sql);	
		}	
		
		
		function obtener_schedule()
		{
			$conect = new DBManager();
			$sql="select * from schedule where idlocacion='".$this->id."'";
			$result=$conect->ejecutar($sql);
			
			while($fila = mysql_fetch_array($result))
			{
				$this->id=$fila['idlocacion'];
				$this->hora=$fila['hora'];
				$this->lugar=$fila['locacion'];
				$this->estatus=$fila['status'];
				$this->codigo=$fila['codigo'];
				$this->tipo=$fila['tipo'];
			}
			mysql_free_result($result);
			return $resultados;
		}
		
		function listar_schedule()
		{
			$conect = new DBManager();
			$sql="select * from schedule";
			$result=$conect->ejecutar($sql);
			$resultados=array();
			while($fila = mysql_fetch_array($result))
			{
				$registro=array();
				$registro['idlocacion']=$fila['idlocacion'];
				$registro['hora']=$fila['hora'];
				$registro['locacion']=$fila['locacion'];
				$registro['status']=$fila['status'];
				$registro['codigo']=$fila['codigo'];
				$registro['tipo']=$fila['tipo'];
				array_push($resultados,$registro);
			}
			mysql_free_result($result);
			return $resultados;
		}
	function listar_schedule_cost()
		{
			$conect = new DBManager();
			$sql="select * from schedule where status='Coast'";
			$result=$conect->ejecutar($sql);
			$resultados=array();
			while($fila = mysql_fetch_array($result))
			{
				$registro=array();
				$registro['idlocacion']=$fila['idlocacion'];
				$registro['hora']=$fila['hora'];
				$registro['locacion']=$fila['locacion'];
				$registro['status']=$fila['status'];
				$registro['codigo']=$fila['codigo'];
				$registro['tipo']=$fila['tipo'];
				array_push($resultados,$registro);
			}
			mysql_free_result($result);
			return $resultados;
		}
		
		function listar_schedule_bus()
		{
			$conect = new DBManager();
			$sql="select * from schedule where status='Merida'";
			$result=$conect->ejecutar($sql);
			$resultados=array();
			while($fila = mysql_fetch_array($result))
			{
				$registro=array();
				$registro['idlocacion']=$fila['idlocacion'];
				$registro['hora']=$fila['hora'];
				$registro['locacion']=$fila['locacion'];
				$registro['status']=$fila['status'];
				$registro['codigo']=$fila['codigo'];
				$registro['tipo']=$fila['tipo'];
				array_push($resultados,$registro);
			}
			mysql_free_result($result);
			return $resultados;
		}
	
	}

?>