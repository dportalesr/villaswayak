<?php
include_once("clases/schedules.class.php");
$horario= new Schedule($_REQUEST['id']);
$horario->eliminar_schedule();
header('Location:listado_schedules.php');
?>