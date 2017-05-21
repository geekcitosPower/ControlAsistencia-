<?php

/**
 * Created by PhpStorm.
 * User: alfonsogalvanmadera
 * Date: 20/05/17
 * Time: 14:47
 */
class DAOTrabajadorImp implements DAOTrabajador
{

    private $conexion;

    public function __construct()
    {
        //include("../../Usuario.php");
        require_once('../confing/Conexion.php');
        $this->conexion = new conexion();
        $this->conexion->conectar();
    }

    public function guardarTrabajador(Trabajador $trabajador, $id)
    {
        // TODO: Implement guardarTrabajador() method.
        try {

            $sql = "insert into Trabajador values(?,?,?,?,?,?,?)";
            $stmt = $this->conexion->conexion->prepare($sql);
            $stmt->bind_parmam("iisssss", 0, $id, $trabajador->getNombre(), $trabajador->getCorreo(), $trabajador->getDireccion(), $trabajador->getNumTrabajador(), $trabajador->getGenero());
            $stmt->execute();
            $stmt->close();

            $this->conexion->cerrar();
        } catch (Exception $e) {
            $this->conexion->cerrar();

        }
    }

    public function buscarTrabajador($id)
    {
        // TODO: Implement buscarTrabajador() method.
    }

    public function mostrarTrabajadores()
    {
        // TODO: Implement mostrarTrabajadores() method.

    }

    public function actualizarTrabajador($id, Trabajador $trabajador)
    {
        // TODO: Implement actualizarTrabajador() method.
    }

    public function borrarTrabajador($id)
    {
        // TODO: Implement borrarTrabajador() method.
    }
}