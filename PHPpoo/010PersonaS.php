<?php

class Persona
{

    public function __construct(protected String $nombre, protected String $apellidos, protected int $edad)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    public function getNombreCompleto()
    {
        return $this->nombre . " " . $this->apellidos;
    }

    public static function toHtml(Persona $p)
    {
        $string = "<p> " . $p->getNombreCompleto() . " </p>";

        return $string;
    }

    public function __toString()
    {
        return "Nombre : Su nombre es " . $this->nombre . "<br>
                Apellidos : Sus apellidos son " . $this->apellidos . "<br>
                Edad: Su edad es" . $this->edad . "<br>";
    }
}