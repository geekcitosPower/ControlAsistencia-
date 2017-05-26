<?php

/**
 * Created by PhpStorm.
 * User: alfonsogalvanmadera
 * Date: 20/05/17
 * Time: 14:42
 */
interface DAOTrabajador
{
    public function guardarTrabajador(Trabajador $trabajador, $idU);
    public function buscarTrabajador($id);
    public function mostrarTrabajadores();
    public function actualizarTrabajador($id, Trabajador $trabajador);
    public function borrarTrabajador($id);
}