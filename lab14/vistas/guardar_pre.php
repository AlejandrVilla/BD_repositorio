<?php if (!defined('CONTROLADOR')) exit; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> Insertar pre-requisito </title>
    </head>
    <body>
        <h1> INSERTAR PRE-REQUISITO </h1>
        <form method="post" action="guardar_pre.php">
            <label for="Id1"> curso 1 id </label>
            <br />
            <input type="text" name="Id1" id="Id1" value="" required />
            <br />
            <label for="Id2"> curso 2 id </label>
            <br />
            <input type="text" name="Id2" id="Id2" value="" required />
            <br />            
            <input type="submit" value="Guardar" />
            <a href="index.php"> Cancelar </a>
        </form>
    </body>
</html>