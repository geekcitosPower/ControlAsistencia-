<?php

/**
 * Created by PhpStorm.
 * User: alfonsogalvanmadera
 * Date: 20/05/17
 * Time: 18:18
 */
class DAOUsuarioImp implements DAOUsuario
{
    private $conexion;

    public function __construct()
    {
        require_once('../confing/Conexion.php');
        $this->conexion = new conexion();
        $this->conexion->conectar();
    }

    public function guardarUsuario(Usuario $usuario)
    {
        // TODO: Implement guardarUsuario() method.

    }

    public function buscarUsuario($id)
    {
        // TODO: Implement buscarUsuario() method.
        $sql = "SELECT * FROM Ususario WHERE id='$id'";


    }

    public function mostrarUsuarios()
    {
        // TODO: Implement mostrarUsuarios() method.
    }

    public function actualizarUsuarios($id, Usuario $usuario)
    {
        // TODO: Implement actualizarUsuarios() method.
    }

    public function borrarUsuario($id)
    {
        // TODO: Implement borrarUsuario() method.
    }
}