<?php 
foreach( $_GET as $variable => $valor ){
$_GET [ $variable ] = addslashes( $_GET [ $variable ]);
}
// Modificamos las variables de formularios
foreach( $_POST as $variable => $valor ){
$_POST [ $variable ] = addslashes( $_POST [ $variable ]);
} 

?>