<?php

/**
 * Created by PhpStorm.
 * User: alfonsogalvanmadera
 * Date: 19/05/17
 * Time: 23:23
 */
include("../../DAOS/Impl/DAOTrabajadorImp.php");
include("../../DAOS/Impl/DAOUsuarioImp.php");
include("../../DAOS/Impl/DAOVotoImp.php");
include("../../Usuario.php");
include("../../Trabajador.php");
include("../../Voto.php");

class BOImp implements BO
{

    public function login(Usuario $usuario)
    {
        // TODO: Implement login() method.
        $daoU = new DAOUsuarioImp();
        $result = $daoU->mostrarUsuarios();
        /*while ($result->hasNext()) {
            
        }*/
        foreach ($result as $clave => $valor) {
            if ($usuario->getPass() == $valor) {
                return true;
            }
        }

    }

    public function registroTrabajadores(Trabajador $trabajador, $id)
    {
        // TODO: Implement registroTrabajadores() method.
        $daoT = new DAOTrabajadorImp();
        $daoT->guardarTrabajador($trabajador, $id);
    }

    public function validarVoto(Voto $voto, $idt)
    {
        // TODO: Implement validarVoto() method.
        $daoV = new DAOVotoImp();
        $daoV->guardarVoto($idt, $voto);
    }
}
