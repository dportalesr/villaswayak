<?php
include_once("clases/banner.class.php");
if(isset($_REQUEST['id'])){
$eliminiar_banner= new Banner($_REQUEST['id'],$_REQUEST['nombre']);
$eliminiar_banner->eliminar_banner();	
}
header('Location:listado_banner.php');
?>