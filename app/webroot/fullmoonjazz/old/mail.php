<?php 
if(isset($_REQUEST['nombre'])){
$nom = $_REQUEST['nombre'];}
if(isset($_REQUEST['mail'])){
$mail=$_REQUEST['mail'];}
if(isset($_REQUEST['about'])){
$about=$_REQUEST['about'];}

switch($_REQUEST['accion2'])
{
	case "mail":
	mail2($nom,$mail,$about);
	break;
		
	default:
	break;
	
}
function mail2($nom,$mail,$about){
	if ($nom=='' || $mail=='')
	{echo 'Name and email are required';}
	else{
		
//$registros=$fila['correo'];}
$body ='<html>';
$body.='<head>';
$body.='<meta http-equiv="Content-Type"Content-Type: multipart/alternative; charset=iso-8859-1 " />';
$body.='<style type="text/css">
</style>
</head>
<body>';
$body.='<p><font face="Comic Sans MS,arial,verdana">Correo de contacto ';$body.'enviada por '.htmlspecialchars($nom).'</font></p>';
$body.='<table width="550" border="1" cellspacing="2" cellpadding="2">';
  $body.='<tr>
    <td width="280">Nombre</td>';
    $body.='<td width="250">'.htmlspecialchars($nom).'</td>';
  $body.='</tr>
  <tr >
    <td>E-mail</td>';
    $body.='<td>'.htmlspecialchars($mail).'</td>';
  $body.='</tr>
  <tr >
    <td>About</td>';
    $body.='<td>'.htmlspecialchars($about).'</td>';
  $body.='</tr>
  
</table>
</body>
</html>';

//$body = ob_get_contents();

require("phpmailer.php");

$mail = new PHPMailer();
//$mail->From     = "programacion@imagik.com.mx";
$mail->From     = "info@villaswayak.com";
//$mail->FromName = "programacion@imagik.com.mx";
$mail->AddAddress("info@villaswayak.com");
//$mail->AddAddress("programacion@imagik.com.mx");

$mail->WordWrap = 50;
$mail->IsHTML(true);
$mail->CharSet = "UTF-8";  
$mail->Encoding = "quoted-printable";
$mail->Subject  =  "Notificacion de comentario desde el sitio";
$mail->Body     =  $body; 
$mail->AltBody  =  "Correo de notificacion";


if(!$mail->Send()) {
		echo "Failed to send"; 
 	}
//$mailer->ClearAddresses();
//$mailer->ClearAttachments();

	echo 'Your comment has been sent successfully';
	//echo $query;
}
}
?>
