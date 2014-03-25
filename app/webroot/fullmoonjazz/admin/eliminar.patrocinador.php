<?php
include_once("clases/patrocinadores.class.php");

$eliminiar_patrociandor= new Patrocinadores($_REQUEST['id'],"","");
$eliminiar_patrociandor->eliminar_patrocinador();
//print_r($eliminiar_patrociandor);
header('Location:listado_patrosinadores.php');
?>