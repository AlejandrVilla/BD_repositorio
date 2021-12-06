<?php

if (!defined('CONTROLADOR'))
    exit;

require_once 'Conexion.php';

class Curso {

    private $nombre;
    private $creditos;
    private $departamento;

    const TABLA = 'curso';
    
    public function __construct($nombre=null, $creditos=null, $departamento=null) {
        $this->nombre = $nombre;
        $this->creditos = $creditos; 
       $this->departamento = $departamento;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getCreditos() {
        return $this->creditos;
    }

    public function setCreditos($creditos) {
        $this->creditos = $creditos;
    }

    public function getDepartamento() {
        return $this->departamento;
    }

    public function setDepartamento($departamento) {
        $this->departamento = $departamento;
    }

    public function guardar() {
        $conexion = new Conexion();
        if ($this->nombre) /* Modifica */ {
            $consulta = $conexion->prepare('CALL insertar_curso(:nombre, :creditos, :departamento)');
            $consulta->bindParam(':nombre', $this->nombre);
            $consulta->bindParam(':creditos', $this->creditos);
            $consulta->bindParam(':departamento', $this->departamento);
            $consulta->execute();
        }
        $conexion = null;
    }
}
