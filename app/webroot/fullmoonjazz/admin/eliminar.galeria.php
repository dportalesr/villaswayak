<?php
include_once("clases/galeria.class.php");
if(isset($_REQUEST['id'])){
$eliminiar_banner= new Carrucel($_REQUEST['id'],$_REQUEST['nombre']);
$eliminiar_banner->eliminar_carrucel();
}
header('Location:listado_galeria.php');
?>