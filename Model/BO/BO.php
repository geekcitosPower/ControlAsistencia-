<?php

/**
 * Created by PhpStorm.
 * User: alfonsogalvanmadera
 * Date: 19/05/17
 * Time: 22:50
 */
interface BO
{
    //lo que debe de hacer el usuario
    public function login(Usuario $usuario);

    public function registroTrabajadores(Trabajador $trabajador, $id);

    public function validarVoto(Voto $voto, $idt);
}