<?php

class Empleado
{

    const SUELDO_TOPE = 3333;
    private $telefonos = [];

    public function __construct(private $nombre, private $apellidos, private $sueldo = 1000)
    {
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellidos()
    {
        return $this->apellidos;
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
        return ($this->sueldo > Empleado::SUELDO_TOPE) ? true : false;
    }

    public function anyadirTelefono(int $telefono)
    {
        array_push($this->telefonos, $telefono);
    }

    public function listarTelefonos()
    {
        $stringTelefono = "";
        foreach ($this->telefonos as $id => $numero) {
            $stringTelefono .= ($id == 0) ? $numero : ", " . $numero;
        }

        return $stringTelefono;
    }

    public function vaciarNumerosTelefonos()
    {
        while (count($this->telefonos) != 0) {
            array_shift($this->telefonos);
        }
    }
}