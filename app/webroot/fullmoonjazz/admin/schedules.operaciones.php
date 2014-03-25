<?php
include_once('clases/schedules.class.php');

$operacion=$_REQUEST['operaciones'];

$schedules_temporal = new  Schedule($_REQUEST['id'],$_REQUEST['lugar'],$_REQUEST['hora'],$_REQUEST['estatus'],$_REQUEST['tipo'],$_REQUEST['codigo']);

switch($operacion)
{
	case 'Guardar':
	$schedules_temporal->agregar_schedule();
	break;
	
	case 'Modificar':
	$schedules_temporal->modificar_schedule();
	break;
	
	case 'Eliminar':
	$schedules_temporal->eliminar_schedule();
	break;
}
header('Location:listado_schedules.php');
?>