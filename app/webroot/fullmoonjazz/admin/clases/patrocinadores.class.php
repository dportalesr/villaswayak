<?php 
include_once("conexion.class.php");
//$_REQUEST['idpropiedad'],$_REQUEST['principal'],$_FILES['archivo']);
class Patrocinadores{
	
	var $idpatrocinador;
	var $archivo;
	var $nombre;
	
		function Patrocinadores($idpatrocinador=0,$archivo='',$nombre='')
		{
			$this->idpatrocinador=$idpatrocinador;
			$this->archivo=$archivo;
			$this->nombre=$nombre;
		}
		
		function agregar_patrociandor()
		{
			$conect = new DBManager();
			$nombre_archivo = $this->archivo["name"];
 			$tipo_archivo = $this->archivo["type"];
 			$tamano_archivo = $this->archivo["size"];
			
			move_uploaded_file($this->archivo["tmp_name"], "galeria/logo/$nombre_archivo");
		
			$sql="insert into patrosinadores (logo,nombre) values('".$nombre_archivo."','".$this->nombre."')";
			return $conect->ejecutar($sql);
				
		}
		function eliminar_patrocinador()
		{
			$conect = new DBManager();
			//unlink("galeria/logo/".$this->archivo);
			$sql="delete from patrosinadores where idPatrosinador='".$this->idpatrocinador."'";
			return $conect->ejecutar($sql);		
			
		}	

		function listar_patrocinador()
		{
			$conect = new DBManager();
			$sql="select * from patrosinadores";
			$result= $conect->ejecutar($sql);
			
			$resultados=array();
			while($fila = mysql_fetch_array($result))
			{
				$registro=array();
				$registro['idPatrosinador']=$fila['idPatrosinador'];
				$registro['logo']=$fila['logo'];
				$registro['nombre']=$fila['nombre'];
				array_push($resultados,$registro);
			}
			mysql_free_result($result);
			return $resultados;
			
		}
		
}
?>