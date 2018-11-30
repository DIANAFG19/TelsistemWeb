<!-- Enviar correo de Página de Telsistem a Correo Telsistem-->
<!-- Código hecho por: Ing. Diana Laura Flores García.-->
<?php

$para      = 'nobody@example.com';
$titulo    = 'El título';
$mensaje   = 'Hola';
$cabeceras = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);

?>