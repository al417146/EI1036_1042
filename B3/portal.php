<?php
/**
 * * Descripción: Controlador principal
 * *
 * * Descripción extensa: Iremos añadiendo cosas complejas en PHP.
 * *
 * * @author  Lola <dllido@uji.es> <fulanito@example.com>
 * * @copyright 2018 Lola
 * * @license http://www.fsf.org/licensing/licenses/gpl.txt GPL 2 or later
 * * @version 2
 * * Si la URL tiene este esquema http://xxxx/portal0?action=fregistro
 * * mostrara el formulario de registro. Si no hay nada la página principal.
 **/
    
    
    ini_set('display_errors', 1);
    

    $action = (array_key_exists('action', $_REQUEST)) ? $_REQUEST["action"] : "home";

    $entra = true;
    if ($action!="home") { 
        if (isset($_SERVER['HTTP_REFERER'])) {
            if (!str_contains($_SERVER['HTTP_REFERER'],$_SERVER['SERVER_NAME'] . ":" . $_SERVER['SERVER_PORT'] . $_SERVER['SCRIPT_NAME'])) {
                $error_msg = "Acceso directo no permitido";
                $central = "/partials/home.php";
                $entra = false;
            }
        } else {
            $error_msg = "Acceso directo no permitido";
            $central = "/partials/home.php";
            $entra = false;
        }
    }
    if ($entra) {
    switch ($action) {
        case "home":
            $central = "/partials/home.php";
            break;
        case "form_register":
            $central = "/partials/form_register.php";
            break;
        case "qui_som":
            $central = "/partials/qui_som.php";
            break;
        /*case "noticias":
            $central = "/partials/noticias.php";
            break;*/
        case "registrar":
            $central = "/partials/registrar.php";
            break;
        case "galeria":
            $central = "/partials/galeria.php";
            break;
        case "tablas":
            $central = "/partials/tablas.php";
            break;
        case "reg_acti":
            $central = "/partials/reg_acti.php";
            break;
        case "registrar_actividad":
            $central= "/partials/form_activitat.php";
            break;
        default:
            $error_msg = "Acción no permitida";
            $central= "/partials/home.php";
        }
    }


    require_once(dirname(__FILE__)."/partials/header.php");
    require_once(dirname(__FILE__)."/partials/menu.php");
    if (isset($error_msg)) require_once(dirname(__FILE__)."/partials/error.php");
    require_once(dirname(__FILE__).$central);
    require_once(dirname(__FILE__)."/partials/noticias.php");
    /* echo "<br />",$action,"<br />",dirname(__FILE__),"<br />"; */ 
    require_once(dirname(__FILE__)."/partials/footer.php");
    /*echo $_SERVER['HTTP_REFERER'] . "<br>";
    echo $_SERVER['SERVER_NAME'] . ":" . $_SERVER['SERVER_PORT'] . $_SERVER['SCRIPT_NAME']; */

?>