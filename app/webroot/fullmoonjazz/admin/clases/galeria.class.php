<?php 
include_once("conexion.class.php");
//$_REQUEST['idpropiedad'],$_REQUEST['principal'],$_FILES['archivo']);
class Carrucel{
	
	var $idgaleria;
	var $archivo;
	
		function Carrucel($idgaleria=0,$archivo='')
		{
			$this->idgaleria=$idgaleria;	
			$this->archivo=$archivo;
		}
		
		function agregar_carrucel()
		{
			$conect = new DBManager();
			$nombre_archivo = $this->archivo["name"];
 			$tipo_archivo = $this->archivo["type"];
 			$tamano_archivo = $this->archivo["size"];
			
			move_uploaded_file($this->archivo["tmp_name"], "galeria/galeria/$nombre_archivo");
		
			$sql="insert into carrucel (imagen) values('".$nombre_archivo."')";
			return $conect->ejecutar($sql);
				
		}
		
		
		function eliminar_carrucel()
		{
			$conect = new DBManager();
			unlink("galeria/galeria/".$this->archivo);
			$sql="delete from carrucel where idimagen='".$this->idgaleria."'";
			return $conect->ejecutar($sql);	
		}		
		
		function listar_carrucel()
		{
			$conect = new DBManager();
			$sql="select * from carrucel";
			$result= $conect->ejecutar($sql);
			
			$resultados=array();
			while($fila = mysql_fetch_array($result))
			{
				$registro=array();
				$registro['idimagen']=$fila['idimagen'];
				$registro['imagen']=$fila['imagen'];
				array_push($resultados,$registro);
			}
			mysql_free_result($result);
			return $resultados;
			
		}

}
?>