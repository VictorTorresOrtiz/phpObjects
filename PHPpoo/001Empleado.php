<?php
class Empleado
{

    private String $nombre;
    private String $apellidos;
    private float $sueldo;

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

    public function getNombreCompleto() : String
    {
        return $this->nombre . " " . $this->apellidos;
    }

    public function tieneQuePagar() : bool
    {
        return ($this->sueldo > 3333) ? true : false;
    }
}