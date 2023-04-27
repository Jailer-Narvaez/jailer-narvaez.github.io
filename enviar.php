if (isset($_REQUEST['nombre']) && isset($_REQUEST['email']) && isset($_REQUEST['mensaje'])) {
	$name = $_REQUEST['nombre'];
	$email = $_REQUEST['email'];
	$message = $_REQUEST['mensaje'];
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
