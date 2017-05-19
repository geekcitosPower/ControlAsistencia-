<?php

/**
 * Created by PhpStorm.
 * User: alfonsogalvanmadera
 * Date: 19/05/17
 * Time: 00:16
 */
class Voto
{
    private $idVotos;
    private $idTrabajador;
    private $asistencia;
    private $hora;

    /**
     * @return mixed
     */
    public function getIdVotos()
    {
        return $this->idVotos;
    }

    /**
     * @param mixed $idVotos
     */
    public function setIdVotos($idVotos)
    {
        $this->idVotos = $idVotos;
    }

    /**
     * @return mixed
     */
    public function getIdTrabajador()
    {
        return $this->idTrabajador;
    }

    /**
     * @param mixed $idTrabajador
     */
    public function setIdTrabajador($idTrabajador)
    {
        $this->idTrabajador = $idTrabajador;
    }

    /**
     * @return mixed
     */
    public function getAsistencia()
    {
        return $this->asistencia;
    }

    /**
     * @param mixed $asistencia
     */
    public function setAsistencia($asistencia)
    {
        $this->asistencia = $asistencia;
    }

    /**
     * @return mixed
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * @param mixed $hora
     */
    public function setHora($hora)
    {
        $this->hora = $hora;
    }
}