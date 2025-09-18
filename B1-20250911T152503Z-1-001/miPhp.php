<?php 

function is_foreach($dias) {
    foreach ($dias as $dia) {
        printf("%s\n", $dia);
    }
}


function is_while($dias) { 
    $i = 0;
    while($i < count($dias)) {
        printf("%s\n", $dias[$i]);
        $i = $i + 1;
    }
}

function is_for($dias) {
    for ($i = 0; $i < count($dias); $i++) {
        printf("%s\n", $dias[$i]);
    }
}

$dias = array("lunes", "martes", "miércoles", "jueves", "viernes", "sábado", "domingo");
    

is_foreach($dias);

is_while($dias);

is_for($dias);


?>