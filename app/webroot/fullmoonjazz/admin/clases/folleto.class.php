<?php 
include_once("conexion.class.php");
//$_REQUEST['idpropiedad'],$_REQUEST['principal'],$_FILES['archivo']);
class Folleto{
	
	var $archivo;
	
		function Folleto($archivo='')
		{
			$this->archivo=$archivo;
		}
		
		function agregar_folleto()
		{
			$conect = new DBManager();
			$sql_del="delete from folleto";
			$conect->ejecutar($sql_del);
			
			$nombre_archivo = $this->archivo["name"];
 			$tipo_archivo = $this->archivo["type"];
 			$tamano_archivo = $this->archivo["size"];
			
			move_uploaded_file($this->archivo["tmp_name"], "galeria/folleto/$nombre_archivo");
		
			$sql="insert into folleto (imagen) values('".$nombre_archivo."')";
			return $conect->ejecutar($sql);
				
		}
		
		
		function eliminar_folleto()
		{
			$conect = new DBManager();
			unlink("galeria/folleto/".$this->archivo);
			$sql="delete from folleto";
			return $conect->ejecutar($sql);	
		}		
		
		function listar_folleto()
		{
			$conect = new DBManager();
			$sql="select * from folleto";
			$result= $conect->ejecutar($sql);
			
			$resultados=array();
			while($fila = mysql_fetch_array($result))
			{
				$registro=array();
				
				$registro['imagen']=$fila['imagen'];
				array_push($resultados,$registro);
			}
			mysql_free_result($result);
			return $resultados;
			
		}

}
?>