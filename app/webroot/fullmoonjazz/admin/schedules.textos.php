<?php
include_once('clases/textos.class.php');

$operacion=$_REQUEST['operaciones'];

$textos_temporal = new Textos($_REQUEST['principal'],$_REQUEST['principal_ing'],$_REQUEST['tickets'],$_REQUEST['tickets_ing'],$_REQUEST['schedules'],$_REQUEST['schedules_ing']);
//print_r($banner_temporal);

switch($operacion)
{
	case 'Guardar':
	$textos_temporal->agregar_textos();
	break;
	
	case 'Modificar':
	$textos_temporal->modificar_textos();
	break;
	
	case 'Eliminar':
	$textos_temporal->eliminar_textos();
	break;
}
header('Location:form_textos.php');
?>