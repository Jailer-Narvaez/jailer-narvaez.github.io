if (isset($_GET['nombre']) && isset($_GET['email']) && isset($_GET['mensaje'])) {
    $name = $_GET['nombre'];
    $email = $_GET['email'];
    $message = $_GET['mensaje'];
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
