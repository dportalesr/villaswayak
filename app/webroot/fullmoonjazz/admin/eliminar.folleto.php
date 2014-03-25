<?php
include_once("clases/folleto.class.php");
if(isset($_REQUEST['nombre'])){
$eliminiar_folleto= new Folleto($_REQUEST['nombre']);
$eliminiar_folleto->eliminar_folleto();
}
header('Location:form_folleto.php');
?>