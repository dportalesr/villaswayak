<?php
include_once('clases/status.class.php');

$operacion=$_REQUEST['operaciones'];

$status_temporal = new Status($_REQUEST['r1']);

switch($operacion)
{
	case 'Guardar':
	$status_temporal->agregar_status();
	break;
	
	
}
header('Location:form_status.php');
?>