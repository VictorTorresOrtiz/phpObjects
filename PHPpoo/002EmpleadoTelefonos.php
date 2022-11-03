<?php


class Empleado
{

    private String $nombre;
    private String $apellidos;
    private float $sueldo;
    private $telefonos = [];

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getSueldo()
    {
        return $this->sueldo;
    }

    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;

        return $this;
    }

    public function getNombreCompleto()
    {
        return $this->nombre . " " . $this->apellidos;
    }

    public function tieneQuePagar()
    {
        return ($this->sueldo > 3333) ? true : false;
    }

    public function anyadirTelefono(int $telefono) : void
    {
        array_push($this->telefonos, $telefono);
    }

    public function listarTelefonos() : string
    {
        $stringTelefono = "";
        foreach ($this->telefonos as $id => $numero) {
            $stringTelefono .= ($id == 0) ? $numero : ", " . $numero;
        }

        return $stringTelefono;
    }

    public function vaciarNumerosTelefonos() : void
    {
        while (count($this->telefonos) != 0) {
            array_shift($this->telefonos);
        }
    }
}