<?php

/**
 * Created by PhpStorm.
 * User: alfonsogalvanmadera
 * Date: 19/05/17
 * Time: 23:36
 */
class Conexion
{
    private $servidor;
    private $usuario;
    private $contraseña;
    private $basedatos;
    public  $conexion;

    public function __construct()
    {
        $this->servidor   = "localhost:8889";
        $this->usuario	  = "root";
        $this->contraseña = "root";
        $this->basedatos  = "ControlAsistencia";
    }

    function conectar()
    {
        $this->conexion= new mysqli($this->servidor,$this->usuario,$this->contraseña,$this->basedatos);
    }

    function cerrar()
    {
        $this->conexion->close();
    }

}