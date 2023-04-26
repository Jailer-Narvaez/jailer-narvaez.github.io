<?php
if (isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['mensaje'])) {
	$name = $_POST['nombre'];
	$email = $_POST['email'];
	$message = $_POST['mensaje'];
	$to = "jailernarvaez1999@gmail.com";
	$subject = "Formulario de contacto";
	$body = "Nombre: $name\nEmail: $email\nMensaje: $message";
	$headers = "From: $email";

	if (mail($to, $subject, $body, $headers)) {
		echo "Mensaje enviado correctamente.";
	} else {
		echo "Error al enviar el mensaje.";
	}
}
?>
