<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    $destino = "correo@correo.com";
    $asunto = "Formulario de contacto";
    $contenido = "Nombre: $nombre\nEmail: $correo";

    if (mail($destino, $asunto, $contenido)) {
        echo "Correo enviado correctamente.";
    } else {
        echo "Error al enviar el correo.";
    }
}
?>
