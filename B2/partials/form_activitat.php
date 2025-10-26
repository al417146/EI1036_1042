<!DOCTYPE html>
<html lang="es">
 <head>
    <meta charset="UTF-8">
    <title>Creación de formulario</title>
    <link rel="stylesheet" href="../css/estilo.css" type="text/css">

 </head>

 <body>
   <h1>Formulario de registro de una actividad</h1>
    <form method="POST" action="?action=reg_acti" class="reg_acti">

     <legend>Datos básicos de la actividad que quieres registrar</legend>
     <br/>
     <label for="nombre">Nombre de la actividad</label>
     <br></br>
     <input type="text" name="nombre" id="nombre">
     <br/>
     <label for="num_pers">Número de personas</label>
     <br/>
     <input type="text" name="num_pers" id="num_pers">
     <br/>
     <label for="querer">Registrar actividad</label>
     <br/>
     <input type="checkbox" name="querer" value="si">
     <br/>
     <label for="color">Color favorito</label>
     <br/>
     <select id="color" name="color">
      <option value="red">Rojo</option>
      <option value="blue">Azul</option>
      <option value="green">Verde</option>
     </select>
     <br></br>
     <input type="submit" value="Enviar datos">
     
    </form>
 </body>

</html>

<?php
/* session_start(); */ 
?>