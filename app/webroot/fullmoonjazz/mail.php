<?php 
include_once("admin/clases/mails.class.php");
include_once("admin/clases/destinatarios.class.php");
if(isset($_REQUEST['txtnombre'])){
$nom = $_REQUEST['txtnombre'];}
if(isset($_REQUEST['txtmail'])){
$mail=$_REQUEST['txtmail'];}
if(isset($_REQUEST['txtabout'])){
$about=$_REQUEST['txtabout'];}

switch($_REQUEST['accion'])
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
	$corre= new InfoMail("",$nom,$mail,$about);
	
$corre->agregar_InfoMail();	
$des = new Destinatarios();
$des->obtener_destinatarios();
$cuenta1=$des->mail1;
$cuenta2=$des->mail2;
$cuenta3=$des->mail2;
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
$mail->From     = "full moon jazz";
//$mail->FromName = "programacion@imagik.com.mx";
$mail->AddAddress("$cuenta1");
$mail->AddAddress("$cuenta2");
$mail->AddAddress("$cuenta3");

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
