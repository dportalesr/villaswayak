<?php
include_once('clases/folleto.class.php');

$operacion=$_REQUEST['operaciones'];

$form_temporal = new Folleto($_FILES['archivo']);

switch($operacion)
{
	case 'Guardar':
	$form_temporal->agregar_folleto();
	break;
}
header('Location:form_folleto.php');
?>