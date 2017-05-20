<?php

/**
 * Created by PhpStorm.
 * User: alfonsogalvanmadera
 * Date: 19/05/17
 * Time: 23:23
 */
class BOImp implements BO
{

    private $conexion;

    public function __construct()
    {
        include("../../Usuario.php");
        require_once('../confing/Conexion.php');
        $this->conexion = new conexion();
        $this->conexion->conectar();
    }

    public function login(Usuario $usuario)
    {
        // TODO: Implement login() method.
        $sql = "SELECT * FROM Usuario WHERE user='$usuario->getUser()' AND pass='$usuario->getPass()'";

        try {
            $result = $this->conexion->conexion->query($sql);
            if ($result->num_rows > 0) {

                $r = $result->fetch_array(MYSQLI_ASSOC);
                $user = new  Usuario();
                $user->setIdUsuario($r['idUsuario']);
                $user->setUser($r['user']);
                $user->setPass($r['pass']);

                return $user;
            } else {
                $r = 0; //"no hay usuario";
            }
            $this->conexion->cerrar();
            return $r;
        } catch (Exception $e) {
            return $e;
        }
        $this->conexion->cerrar();

    }

    public function registroTrabajadores(Trabajador $trabajador, $id)
    {
        // TODO: Implement registroTrabajadores() method.

    }

    public function validarVoto(Voto $voto, $idt)
    {
        // TODO: Implement validarVoto() method.

    }
}