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
        $sql = "SELECT * FROM Usuario WHERE id='$id'";
        try {
            $resulatdos = $this->conexion->conexion->query($sql);
            if ($resulatdos->num_rows > 0) {
                $r = $resulatdos->fetch_array(MYSQLI_ASSOC);
            } else {
                $r = 0; //"no hay usuario";
            }
            $this->conexion->cerrar();
            return $r;
        } catch (Exception $e) {
            $this->conexion->cerrar();
        }
    }

    public function mostrarUsuarios()
    {
        // TODO: Implement mostrarUsuarios() method.
        $sql = "SELECT * FROM Usuario";
        try {
            $result = $this->conexion->conexion->query($sql);
            $arreglo = array();
            while ($re = $result->fetch_array(MYSQLI_ASSOC)) {
                $arreglo[] = $re;
            }
            //$json=json_encode($arreglo);
            return $arreglo;
            $this->conexion->cerrar();
        } catch (Exception $e) {
            $this->conexion->cerrar();
        }
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