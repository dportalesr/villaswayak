<?php 
include_once('clases/login.class.php');
include_once('configuraciones.php');
if(isset($_POST['usuario'])){ $usuario=$_POST['usuario'];}
if(isset($_POST['pass'])){ $pass=$_POST['pass'];}
$login_temporal= new Login($usuario,$pass);
$login_temporal->session();

header('location:listado_mails.php');
?>