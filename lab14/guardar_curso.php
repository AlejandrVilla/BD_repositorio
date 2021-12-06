<?php
    
    define('CONTROLADOR', TRUE);
    
    require_once 'modelos/Curso.php';
    $curso = new Curso();
    /*
    $curso_nombre = (isset($_REQUEST['curso_nombre'])) ? $_REQUEST['curso_nombre'] : null;
    
    if($curso_nombre){        
        $curso = Curso::buscarPorId($curso_nombre);        
    }else{
        $curso = new Curso();
    }*/
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : null;
        $creditos = (isset($_POST['creditos'])) ? $_POST['creditos'] : null;
        $departamento = (isset($_POST['departamento'])) ? $_POST['departamento'] : null;
        $curso->setNombre($nombre);
        $curso->setcreditos($creditos);
        $curso->setDepartamento($departamento);

        $curso->guardar();
        header('Location: index.php');
    }else{
        include 'vistas/guardar_curso.php'; /* llama vista */
    }
    
?>
