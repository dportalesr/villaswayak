<?php
include_once('clases/galeria.class.php');

$operacion=$_REQUEST['operaciones'];

$banner_temporal = new Carrucel('',$_FILES['archivo']);
//print_r($banner_temporal);

switch($operacion)
{
	case 'Guardar':
	$banner_temporal->agregar_carrucel();
	break;
}
header('Location:form_galeria.php');
?>