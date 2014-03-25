<?php
include_once("conexion.class.php");
//$_REQUEST['idproducto'],$_REQUEST['nombre'],$_REQUEST['modelo'],$_REQUEST['version'],$_REQUEST['marca'],$_REQUEST['especificaciones'],$_REQUEST['descripcion'],$_REQUEST['indicaciones'],$_REQUEST['tag'],$_FILES['archivo']

class Producto{
	//constructor
	var $idproducto;
	var $nombre;
	var $modelo;
	var $vercion;
	var $marca;
	var $especificaciones;
	var $descripcion;
	var $indicaciones;
	var $tag;
	var $archivo;
		
		function Producto($idproducto=0,$nombre='',$modelo='',$vercion='',$marca='',$especificaciones='',$descripcion='',$indicaciones='',$tag='',$archivo='')
		{
			$this->idproducto=$idproducto;
			$this->nombre=$nombre;
			$this->modelo=$modelo;
			$this->vercion=$vercion;
			$this->marca=$marca;
			$this->especificaciones=$espeficaciones;
			$this->descripcion=$descipcion;
			$this->indicaciones=$indicaciones;
			$this->tag=$tag;
			$this->archivo=$archivo;
		}
		
		function agregar_productos()
		{
			//subir archivo
			echo $this->archivo;
			$tamano =$this->archivo['size'];
    		$tipo = $this->archivo['type'];
   			$archivo = $this->archivo['name'];
    		//$prefijo = substr(md5(uniqid(rand())),0,6);
			if ($archivo != "") {
        	// guardamos el archivo a la carpeta files
        	 $destino =  "manual/".$this->nombre."_".$archivo;
			copy($this->archivo['tmp_name'],$destino);
			}
			
			$conect = new DBManager();
			$sql="insert into productos (nombre,modelo,version,idmarcas,especificaciones,descripcion,indicaciones,manual) 
			values('".$this->nombre."','".$this->modelo."','".$this->vercion."','".$this->marca."','".$this->especificaciones."','".$this->descripcion."','".$this->indicaciones."','".$archivo."')";
			$id =$conect->ejecutar($sql);
			
			/*if($this->tag!=''){
			foreach ($this->tag as $value) {    
			
			$sql="insert into rel_produ_tags (idtag,idproducto) values('".$id."','".$value."')";	
			$conect->ejecutar($sql);
			}*/
			//}
			
			
		}
		
		function modificar_producto()
		{
			$conect= new DBManager();
			$sql="update marcas set nombre='".$this->marca."',correo='".$this->correo."',direccion='".$this->direccion."',
			website='".$this->web."',contacto='".$this->nombre."',telefono='".$this->telefono."' where idmarca='".$this->idmarca."'";
			return $conect->ejecutar($sql);	
		}
		
		function eliminar_producto()
		{
			$conect = new DBManager();
			$sql="delete from marcas where idmarca='".$this->idmarca."'";
			return $conect->ejecutar($sql);	
		}	
		
		function listar_producto()
		{
			$conect = new DBManager();
			$sql="select * from productos";
			$result= $conect->ejecutar($sql);
			
			$resultados=array();
			while($fila = mysql_fetch_array($result))
			{
				$registro=array();
				$registro['idproducto']=$fila['idproducto'];
				$registro['nombre']=$fila['nombre'];
				
				array_push($resultados,$registro);
			}
			mysql_free_result($result);
			return $resultados;
			
		}
		
		function obtener_producto()
		{
			$conect = new DBManager();
			$sql="select * from marcas where idmarca='".$this->idmarca."'";
			$result=$conect->ejecutar($sql);
			
			while($fila = mysql_fetch_array($result))
			{
				$this->idmarca=$fila['idmarca'];
				$this->marca=$fila['nombre'];
				$this->correo=$fila['correo'];
				$this->direccion=$fila['direccion'];
				$this->web=$fila['website'];
				$this->nombre=$fila['contacto'];
				$this->telefono=$fila['telefono'];	
			}
			mysql_free_result($result);
			return $resultados;
		}
	
	
	}

?>