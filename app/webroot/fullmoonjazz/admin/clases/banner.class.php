<?php 
include_once("conexion.class.php");
//$_REQUEST['idpropiedad'],$_REQUEST['principal'],$_FILES['archivo']);
class Banner{
	
	var $idbanner;
	var $archivo;
	
		function Banner($idbanner=0,$archivo='')
		{
			$this->idbanner=$idbanner;	
			$this->archivo=$archivo;
		}
		
		function agregar_banner()
		{
			$conect = new DBManager();
			$nombre_archivo = $this->archivo["name"];
 			$tipo_archivo = $this->archivo["type"];
 			$tamano_archivo = $this->archivo["size"];
			
			move_uploaded_file($this->archivo["tmp_name"], "galeria/banner/$nombre_archivo");
		
			$sql="insert into banner (banner) values('".$nombre_archivo."')";
			return $conect->ejecutar($sql);
				
		}
		
		
		function eliminar_banner()
		{
			$conect = new DBManager();
			unlink("galeria/banner/".$this->archivo);
			$sql="delete from banner where idbanner='".$this->idbanner."'";
			return $conect->ejecutar($sql);	
		}		
		
		function listar_banner()
		{
			$conect = new DBManager();
			$sql="select * from banner";
			$result= $conect->ejecutar($sql);
			
			$resultados=array();
			while($fila = mysql_fetch_array($result))
			{
				$registro=array();
				$registro['idbanner']=$fila['idbanner'];
				$registro['banner']=$fila['banner'];
				array_push($resultados,$registro);
			}
			mysql_free_result($result);
			return $resultados;
			
		}

}
?>