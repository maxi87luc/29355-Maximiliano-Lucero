<?php

$nombre = $_POST ['nombre'] ;
$email = $_POST ['e-mail'] ;
$telefono = $_POST ['telefono'] ;
$textarea = $_POST ['textarea'] ;

$mensaje = "Mensaje" . $textarea . ",/r/n";
$mensaje .= "Este mensaje fue enviado por " . $nombre . ",/r/n";
$mensaje .= "su e-mail es " . $email . ",/r/n";
$mensaje .= "Su telefono es " . $telefono . ",/r/n";

$para = "maxi87luc@gmail.com";
$asunto = "Contacto desde Web Gabinete Iluminado";

mail($para, $asunto, utf8_decode($mensaje), $header);

header('location:index.html')

?>

