<?php

/**
 * Created by PhpStorm.
 * User: alfonsogalvanmadera
 * Date: 20/05/17
 * Time: 15:03
 */
interface DAOVoto
{
    public function guardarVoto($idT, Voto $voto);

    public function buscarVoto($id);

    public function mostrarVotos();

    public function actualizarVotos($id, Voto $voto);

    public function borrarVotos($id);
}