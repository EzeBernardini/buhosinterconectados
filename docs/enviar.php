<?php
// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['mail'];
$mensaje = $_POST['mensaje'];

// Crear el mensaje del correo
$to = "buhosinterconectados@gmail.com"; // Reemplaza con tu correo electrónico
$subject = "Nuevo mensaje desde tu sitio web";
$message = "Nombre: " . $nombre . "\nApellido: " . $apellido . "\nCorreo electrónico: " . $email . "\nMensaje: " . $mensaje;
$headers = "From: " . $email;

// Enviar el correo electrónico
mail($to, $subject, $message, $headers);

// Mostrar un mensaje de confirmación
echo "Mensaje enviado correctamente.";
?>enviar
