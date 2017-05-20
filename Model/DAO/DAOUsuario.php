<?php

/**
 * Created by PhpStorm.
 * User: alfonsogalvanmadera
 * Date: 19/05/17
 * Time: 22:50
 */
interface DAOUsuario
{
    //lo que debe de hacer el usuario
    public function login(Usuario $usuario );
    public function registroTrabajadores(Trabajador $trabajador);
    public function validarVoto(Voto $voto);
}