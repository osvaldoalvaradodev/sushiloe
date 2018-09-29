<?php
//variables necesarias

//var_dump($_POST);

$name = $_POST['name'];
$mail = $_POST['mail'];
$message = $_POST['message'];

$from="From: $name<$mail>\r\nReturn-path: $mail";
$subject="Mensaje enviado desde Sushiloe.cl";
mail("beacardenasroa@gmail.com", $subject, $message, $from);
echo "mensaje enviado";

?>



<script language="JavaScript" type="text/javascript">

var pagina="http://www.sushiloe.cl"
function redireccionar() 
{
location.href=pagina
} 
alert("Su Mensaje a sido enviado!");
setTimeout ("redireccionar()", 100);

</script>

