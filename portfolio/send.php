<?php
$nombre = $_POST['nombre'];
$mail = $_POST['correo'];
$subject = $_POST['subject'];
$empresa = $_POST['mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por: " . $nombre . ",\r\n";
$mensaje .= "Su correo es: " . $mail . " \r\n";
$mensaje .= "Subject: " . $subject . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'benjamintarache@gmail.com';
$asunto = 'MENSAJE DESDE MI PAGINA WEB';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:enviado.php");
?>