<?php
    
    define('CONTROLADOR', TRUE);
    
    require_once 'modelos/Pre_requisito.php';
    $pre = new Pre_requisito();
    /*
    $pre_requisito_id = (isset($_REQUEST['pre_requisito_id'])) ? $_REQUEST['pre_requisito_id'] : null;
    
    if($pre_requisito_id){        
        $pre = Pre_requisito::buscarPorId($pre_requisito_id);        
    }else{
        $pre = new Pre_requisito();
    }*/
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $Id1 = (isset($_POST['Id1'])) ? $_POST['Id1'] : null;
        $Id2 = (isset($_POST['Id2'])) ? $_POST['Id2'] : null;
        $pre->setId1($Id1);
        $pre->setId2($Id2);

        $pre->guardar();
        header('Location: index.php');
    }else{
        include 'vistas/guardar_pre.php';   /* llama vista */
    }
    
?>
