<?php 
class DBManager{
	var $conect;
	
	var $BaseDatos;
	var $Servidor;
	var $Usuario;
	var $clave;
	
	function DBManager(){
		$this->BaseDatos = "villaswa_fullmoonjazzDB";
		$this->Servidor = "localhost";
		$this->Usuario = "villaswa_fullmoo";
		$this->clave = "gLC{eAS7wWlZ";
		
		}
		
	function conectar()
	{
	$this->conect = mysql_connect($this->Servidor,$this->Usuario,$this->clave);
	//mysql_database($this->BaseDatos,$this->conect);
	if(!$this->conect){
		echo "No se a podido conectar a la base de datos".mysql_error();
		}
	else{
		mysql_select_db($this->BaseDatos,$this->conect);
		}	
	}
	
	function desconectar()
	{
	mysql_close($this->conect);	
	}
	
	function ejecutar($sql)
	{
	$this->conectar();
	
	$resultados = mysql_query($sql,$this->conect);
	
	if(!$resultados){
		echo "Error en la base de datos".mysql_error();
		exit;
		}	
	
		$this->desconectar();
		return $resultados;
	}
	
	function numero_de_filas($resultados){
  if(!is_resource($resultados)) 
            return false;
  return mysql_num_rows($resultados);
 }
		
	
}
?>