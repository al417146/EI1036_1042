<?php
/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
}*/

function solve() { 
    var_dump($_POST);
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $nombre = $_POST['nombre'];
        $idi = $_POST['correo'];
        $acept = isset($_POST['aceptar']) ? $_POST['aceptar'] : "no";
        if ($acept=="si") {
            printf("Me has dado el nombre:%s", $nombre);
            echo "Me has dado el idi de: " . $idi . "\n";
        }
        if ($acept!="si") { 
            echo "No lo has aceptado";
        }
       
    } else {
         throw new Exception("Este no es el método adecuado");
    }
}

try {
    solve();
} catch(Exception $e) { 
    echo "El error es de: " , $e->getMessage() , "\n";
}
?>
