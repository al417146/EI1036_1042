<?php 

function importar_dades0($fichero) { 
    $diccionario = array();
    $contador = 0;

    if (($handle = fopen($fichero, "r"))!==false) {
        while(($datos = fgetcsv($handle,null,",")) !== false) {
            if ($contador != 0) {
                $clave = $datos[0];
                $valores = array_slice($datos,1);
                if (isset($diccionario[$clave])) {
                    $diccionario[$clave][] = $valores;
                } else { 
                $diccionario[$clave] = $valores;
                }
            } else { 
                $clave = $datos[0];
                $valores = array_slice($datos,1);
            }
            $contador = $contador + 1;
        }
        fclose($handle);
    }
    return $diccionario;

}

function compra_clients($diccionario, $customer) {
    $lista = array();
    $pos = 5;
   foreach ($diccionario as $k => $v) {
       for ($i = 0; $i < count($v); $i = $i + 1) {
          if ($v[$i][$pos] == $customer) {
              $lista[] = $k;
          }
       }
   }
   return $lista; 
}

function guardar_dades($diccionario) {
    $name = "ventas.json";
    $directory = "./datos";
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

function afegeix_dades($diccionario, $vector) { 
    $clave = $vector[0];
    if (!isset($diccionario[$clave])) {
        $diccionario[$clave] = array_slice($vector, 1);
    } else {
        $diccionario[$clave][] = array_slice($vector,1);
    }
    return $diccionario;
}

function borrar_datos($diccionario, $compra) {
    $clave = $compra[0];
    if (!isset($diccionario[$clave])) {
        throw new Exception("No existe este elemento");
    }
    $pos = -1; // me guardo el valor que he de eliminar
    $valores = $diccionario[$clave];
    for ($i = 0; $i < count($valores); $i = $i + 1) {
        if ($valores[$i] === array_slice($compra,1)) {
            $pos = $i;
        }
    }
    if ($pos != -1) {
        unset($valores[$pos]);
        $diccionario[$clave] = $valores;
    } else {
        throw new Exception("No existe esta compra");
    }
    return $diccionario;
} 

$fichero = "sales_2008-2011.csv";
$dicc_ventas = importar_dades0($fichero);

var_dump($dicc_ventas);

$customer = "Cust_1";
$articulos = compra_clients($dicc_ventas, $customer);

var_dump($articulos);

guardar_dades($dicc_ventas);



?>