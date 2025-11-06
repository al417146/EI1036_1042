<?php 

function guardar_dades($diccionario) {
    $name = "activitats.json";
    $directory = "./recursos";
    $fich = $directory . "/" . $name;
    if (!file_exists($fich)) {
        if (!file_exists($directory)) {
        mkdir($directory, 0700);
        }
    }
    $jsonData = json_encode($diccionario,JSON_PRETTY_PRINT);
    $f = fopen($fich,"w");
    fputs($f, $jsonData);

}

if (!isset($dict)) {
    $dict = array();
}

if (isset($_POST["nombre"])) { 
    if (!isset($dict[$_POST["nombre"]])) {
        $v = array();
        $v[] = $_POST["num_pers"];
        $v[] = $_POST["querer"];
        $v[] = $_POST["color"];
        $dict[$_POST["nombre"]] = $v;
    } else {
        echo "La actividad ya existe";
        $action = "registrar_actividad";
    }
} else {
    echo "No has puesto nombre de la actividad";
    $action = "registrar_actividad";
}

guardar_dades($dict);



?>