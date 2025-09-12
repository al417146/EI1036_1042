<?php

/**
 * * Descripción: Hola Mundo PHP
 * *
 * * Descripción extensa: Iremos añadiendo cosas complejas en PHP.
 * *
 * * @author  Lola <dllido@uji.es> <fulanito@example.com>
 * * @copyright 2017 Lola
 * * @license http://www.fsf.org/licensing/licenses/gpl.txt GPL 2 or later
 * * @version 1
 * */

$nombre = "Ana";

print("<P>Hola, $nombre</P>");
if (isset($argv[1])) { // Esto es si le pasas un parámetro al programa (solo uno)
    print("<p> Adios, $argv[1]</P>");
}
print "\nFIN";
?>