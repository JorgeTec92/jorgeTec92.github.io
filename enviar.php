<?php 

$name     = $_POST['name'];
$email    = $_POST['email'];
$telefono = $_POST['telefono'];
$ciudad   = $_POST['ciudad'];

echo $name;
echo $email;
echo $telefono;
echo $ciudad;

$header = 'from: ' . $email . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text-plain";

$message = "Este mensaje fue enviado por: " . $name . "\r\n";
$message .= "Su email es: " . $email . "\r\n";
$message .= "Telefono de contacto: " . $telefono . "\r\n";
$message .= "Mensaje: " . $_POST['message'] . "\r\n";
$message .= "Enviado el: " . date('d/m/y', time());

$para = 'raul@difraxion.com ';
$asunto = 'Asunto del mensaje';

mail($para, $asunto, utf8_decode($message), $header);
header("Location:index.html");

?>