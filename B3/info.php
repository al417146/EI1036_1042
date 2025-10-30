<?php
phpinfo();
print("<pre>");
print("$GLOBALS");
var_dump($GLOBALS); 
print("$_SERVER");
print_r($_SERVER);
print("</pre>");
print($_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"]);
/* $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"]  */ 
?>

<!-- $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"]  */  -->
 