<?php
include_once('clases/banner.class.php');

$operacion=$_REQUEST['operaciones'];

$banner_temporal = new Banner('',$_FILES['archivo']);
//print_r($banner_temporal);

switch($operacion)
{
	case 'Guardar':
	$banner_temporal->agregar_banner();
	break;
}
header('Location:listado_banner.php');
?>