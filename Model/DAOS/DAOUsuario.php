<?php

/**
 * Created by PhpStorm.
 * User: alfonsogalvanmadera
 * Date: 20/05/17
 * Time: 15:03
 */
interface DAOUsuario
{
    public function guardarUsuario(Usuario $usuario);

    public function buscarUsuario($id);

    public function mostrarUsuarios();

    public function actualizarUsuarios($id, Usuario $usuario);

    public function borrarUsuario($id);
}