<?php

/**
 * Created by PhpStorm.
 * User: alfonsogalvanmadera
 * Date: 19/05/17
 * Time: 23:23
 */
class DAOUsuarioImp implements DAOUsuario
{
    private $conexion;

    public function __construct()
    {
        require_once('../confing/Conexion.php');
        $this->conexion= new conexion();
        $this->conexion->conectar();
    }

    public function login( Usuario $usuario)
    {
        // TODO: Implement login() method.
        $sql="SELECT * FROM Usuario WHERE user='$usuario->getUser()' AND pass='$usuario->getPass()'";
        $result=$this->conexion->conexion->query($sql);
        if ($result->num_rows > 0) {
            $r=$result->fetch_array(MYSQLI_ASSOC);
        }else{
            $r= 0; //"no hay usuario";
        }
        $this->conexion->cerrar();
        return $r;

    }

    public function registroTrabajadores(Trabajador $trabajador)
    {
        // TODO: Implement registroTrabajadores() method.
    }

    public function validarVoto(Voto $voto)
    {
        // TODO: Implement validarVoto() method.
    }
}