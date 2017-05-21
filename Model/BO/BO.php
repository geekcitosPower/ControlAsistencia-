<?php

/**
 * Created by PhpStorm.
 * User: alfonsogalvanmadera
 * Date: 19/05/17
 * Time: 22:50
 */
interface BO
{
    public function login(Usuario $usuario);
    public function registroTrabajadores(Trabajador $trabajador, $id);
    public function validarVoto(Voto $voto, $idt);
}