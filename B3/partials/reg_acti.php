<!--
<!DOCTYPE html>
<html lang = "es">
    <head>
        <title>Mi titulo</title>
        <meta charset="UTF-8">
         <link rel="icon" type="image/webp" href="../media/imagen.webp"> 
    </head>

    <body>

    </body>
</html>

-->

<?php
/* session_start(); */
/* echo"Voy a procesar los datos";  */
/* 
print_r($_SERVER["_SERVER_PORT"]);
print_r($_REQUEST);
print_r($_SERVER);

print_r($_GLOBALS["QUERY_STRING"][]);
*/ 

function solve() {
    /* var_dump($_REQUEST); */ 
   /* session_start(); */
   /*  print("<p>Sesion: " . session_name() . "</p>"); */ 

    /* var_dump($_SESSION); */
    $count = 0;
    $nombre = null;
    $num_pers = null;
    $querer = null;
    $color = null;
    if (isset($_POST["nombre"])) { 
        $nombre = $_POST["nombre"];
        $count = $count + 1;
    }
    if (isset($_POST["num_pers"])) { 
        $num_pers = $_POST["num_pers"];
        $count = $count + 1;
    }
    if (isset($_POST["querer"])) {
        $querer = $_POST["querer"];
        $count = $count + 1;
    }
    if (isset($_POST["color"])) { 
        $color = $_POST["color"];
        $count = $count + 1;
    }

    if ($count != 4 ) { 
        throw new Exception("No esta bien esto sabes");
    } else {
        /*setcookie("TestCookie","$nombre",time() + 3600); */
        /*echo "Cookie añadida con éxito";
        print ("Cookie añadida con éxito"); */
        echo "Nombre: " . "$nombre" . "<br>";
        echo "Número de personas: " . "$num_pers" . "<br>";
        echo "Color favorito: " . "$color" . "<br>";
    }

}

try {
    solve();
} catch(Exception $ex) {
    echo "Me ha salido el error de: " , $ex->getMessage();
}

?>