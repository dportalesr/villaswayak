<?php
include_once('clases/destinatarios.class.php');

$operacion=$_REQUEST['operaciones'];

$textos_temporal = new Destinatarios($_REQUEST['correo1'] ,$_REQUEST['correo2'],$_REQUEST['correo3']);
//print_r($textos_temporal);

switch($operacion)
{
	case 'Guardar':
	$textos_temporal->agregar_destinatarios();
	break;
	
	
}
header('Location:form_destinatarios.php');
?>