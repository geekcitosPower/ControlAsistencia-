<?php

/**
 * Created by PhpStorm.
 * User: alfonsogalvanmadera
 * Date: 17/05/17
 * Time: 23:26
 */
class Trabajador
{
    private $idTrabajador;
    private $nombre;
    private $correo;
    private $direccion;
    private $numTrabajador;
    private $genero;
    //private $hora;
    private $idUsuario;
    //private $voto;

    /**
     * @return mixed
     */
    public function getVoto()
    {
        return $this->voto;
    }

    /**
     * @param mixed $voto
     */
    public function setVoto($voto)
    {
        $this->voto = $voto;
    }
    
     public function getIdUsuario()
    {
        return $this->idUsuario;
    }
    
     public function setIdUsuario($idUsuario)
    {
        $this->idUsuario =$idUsuario;
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
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * @param mixed $correo
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param mixed $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * @return mixed
     */
    public function getNumTrabajador()
    {
        return $this->numTrabajador;
    }

    /**
     * @param mixed $numTrabajador
     */
    public function setNumTrabajador($numTrabajador)
    {
        $this->numTrabajador = $numTrabajador;
    }

    /**
     * @return mixed
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * @param mixed $genero
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;
    }
}
