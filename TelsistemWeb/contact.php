<?php


$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$categoria = $_POST['categoria'];
$mensaje = $_POST['mensaje'];

$para = "diana1310fg@gmail.com";

$mensajeCorreo = "Este mensaje fue envíado por: ".$nombre.".";
$mensajeCorreo .= "Su correo es: ".$correo.".";
$mensajeCorreo .= "Su teléfono es: ".$telefono.".";
$mensajeCorreo .= "Y ha dejado el siguiente mensaje: ".$mensaje.".";


if(mail($para, $categoria, utf8_decode($mensajeCorreo)))
{
	echo "Su mensaje ha sido enviado con éxito";
}
else
{
	echo "Ha ocurrido un error";
}

?>