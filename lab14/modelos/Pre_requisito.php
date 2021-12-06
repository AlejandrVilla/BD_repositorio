<?php

if (!defined('CONTROLADOR'))
    exit;

require_once 'Conexion.php';

class Pre_requisito {

    private $Id1;
    private $Id2;

    const TABLA = 'pre_req';
    
    public function __construct($Id1=null, $Id2=null) {
        $this->Id1 = $Id1;
        $this->Id2 = $Id2; 
    }

    public function getId1() {
        return $this->Id1;
    }

    public function setId1($Id) {
        $this->Id1 = $Id;
    }

    public function getId2() {
        return $this->Id2;
    }

    public function setId2($id) {
        $this->Id2 = $id;
    }

    public function guardar() {
        $conexion = new Conexion();
        if ($this->Id1 && $this->Id2) /* Modifica */ {
            $consulta = $conexion->prepare('CALL relacion_pre(:Id1, :Id2)');
            $consulta->bindParam(':Id1', $this->Id1);
            $consulta->bindParam(':Id2', $this->Id2);
            $consulta->execute();
        }
        $conexion = null;
    }
}
