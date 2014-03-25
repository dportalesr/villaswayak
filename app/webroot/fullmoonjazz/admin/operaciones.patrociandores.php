<?php
include_once('clases/patrocinadores.class.php');

$operacion=$_REQUEST['operaciones'];

$patrocinadores_temporal = new Patrocinadores('',$_FILES['archivo'],$_REQUEST['nombre']);
//print_r($banner_temporal);

switch($operacion)
{
	case 'Guardar':
	$patrocinadores_temporal->agregar_patrociandor();
	break;
}
header('Location:listado_patrosinadores.php');
?>