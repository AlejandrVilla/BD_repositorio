<?php if (!defined('CONTROLADOR')) exit; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> Nuevo curso </title>
    </head>
    <body>
        <h1> INSERTAR CURSO </h1>
        <form method="post" action="guardar_curso.php">
            <label for="nombre"> Nombre </label>
            <br />
            <input type="text" name="nombre" id="nombre" value="" required />
            <br />
            <label for="creditos"> Creditos </label>
            <br />
            <input type="text" name="creditos" id="creditos" value="" required />
            <br />  
            <label for="departamento"> Departamento </label>
            <br />
            <input type="text" name="departamento" id="departamento" value="" required />
            <br />           
            <input type="submit" value="Guardar" />
            <a href="index.php"> Cancelar </a>
        </form>
    </body>
</html>