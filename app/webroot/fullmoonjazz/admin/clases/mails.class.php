<?php
include_once("conexion.class.php");
//$_REQUEST['idmarca'],$_REQUEST['marca'],$_REQUEST['correo'],$_REQUEST['direccion'],$_REQUEST['web'],$_REQUEST['nombre'],$_REQUEST['telefono']
class InfoMail{
	//constructor
	var $idmail;
	var $nombre;
	var $mails;
	var $about;

		function InfoMail($idMail=0,$nombre='',$mail='',$about='')
		{
			$this->idmail=$idMail;
			$this->nombre=$nombre;
			$this->mails=$mail;
			$this->about=$about;
		}
		
		function agregar_InfoMail()
		{
			$conect = new DBManager();
			$sql="insert into info_mail (nombre,mail,about) 
			values('".$this->nombre."','".$this->mails."','".$this->about."')";
			return $conect->ejecutar($sql);
			
		}
		
		function modificar_InfoMail()
		{
			$conect= new DBManager();
			$sql="update info_mail set nombre='".$this->nombre."',mail='".$this->mails."',about='".$this->about."' where idMail='".$this->idmail."'";
			return $conect->ejecutar($sql);	
		}
		
		function eliminar_InfoMail()
		{
			$conect = new DBManager();
			$sql="delete from info_mail where idMail='".$this->idmail."'";
			return $conect->ejecutar($sql);	
		}	
		
		function listar_InfoMail()
		{
			$conect = new DBManager();
			$sql="select * from info_mail";
			$result= $conect->ejecutar($sql);
			
			$resultados=array();
			while($fila = mysql_fetch_array($result))
			{
				$registro=array();
				$registro['idMail']=$fila['idMail'];
				$registro['nombre']=$fila['nombre'];
				$registro['mail']=$fila['mail'];
				$registro['about']=$fila['about'];
				array_push($resultados,$registro);
			}
			mysql_free_result($result);
			return $resultados;
			
		}
		
		function obtener_InfoMail()
		{
			$conect = new DBManager();
			$sql="select * from marcas where idmarca='".$this->idmarca."'";
			$result=$conect->ejecutar($sql);
			
			while($fila = mysql_fetch_array($result))
			{
				$this->idmail=$fila['idMail'];
				$this->nombre=$fila['nombre'];
				$this->mails=$fila['mail'];
				$this->about=$fila['about'];
				
			}
			mysql_free_result($result);
			return $resultados;
		}
	
	
	}

?>