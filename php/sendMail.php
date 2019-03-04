<?php
$senderFirstName = $_POST['sfn'];
$senderLastName = $_POST['sln'];
$senderMail = $_POST['sm'];
$senderPhone = $_POST['sp'];
$message = $_POST['msg'];
$dest = "walter@tachuso.com";


$cuerpo = "Nuevo Correo desde conociendonostv.com";

$cuerpo .= "<p>" . $senderFirstName . " " . $senderLastName . " (" . $senderMail . ")</p>";
$cuerpo .= "<p> Teléfono: " . $senderPhone . " </p>";
$cuerpo = $cuerpo . $message;

mail($dest, "Nuevo Correo desde conociendonostv.com", $cuerpo, "MIME-Version: 1.0\nContent-type: text/html; charset=UTF-8\nFrom: " . $senderFirstName . " <" . $senderMail . ">");
?>