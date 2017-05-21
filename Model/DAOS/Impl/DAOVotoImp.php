<?php

/**
 * Created by PhpStorm.
 * User: alfonsogalvanmadera
 * Date: 20/05/17
 * Time: 19:39
 */
class DAOVotoImp implements DAOVoto
{
    private $conexion;

    public function __construct()
    {
        require_once('../confing/Conexion.php');
        $this->conexion = new conexion();
        $this->conexion->conectar();
    }

    public function guardarVoto($idT, Voto $voto)
    {
        // TODO: Implement guardarVoto() method.
        $asistencia = $voto->getAsistencia();
        $hora = $voto->getHora();
        $sql = "insert into Voto values(0,'$idT','$asistencia','$hora')";
        try {
            $this->conexion->conexion->query($sql);
            $myId = $this->conexion->conexion->insert_id;
            return $myId;
            $this->conexion->cerrar();

        } catch (Exception $e) {
            return "Error al guardar el usuario";
            $this->conexion->cerrar();
        }
    }

    public function buscarVoto($id)
    {
        // TODO: Implement buscarVoto() method.
    }

    public function mostrarVotos()
    {
        // TODO: Implement mostrarVotos() method.
        $sql = "SELECT * FROM Votos";
        try {
            $result = $this->conexion->conexion->query($sql);
            $arreglo = array();
            while ($re = $result->fetch_array(MYSQLI_ASSOC)) {
                $arreglo[] = $re;
            }
            //$json=json_encode($arreglo);
            return $arreglo;
            $this->conexion->cerrar();
        } catch (Exception $e) {
            $this->conexion->cerrar();
        }

    }

    public function actualizarVotos($id, Voto $voto)
    {
        // TODO: Implement actualizarVotos() method.
    }

    public function borrarVotos($id)
    {
        // TODO: Implement borrarVotos() method.
    }
}