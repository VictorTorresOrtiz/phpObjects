<?php

abstract class Persona{

    public function __construct(
        protected string $nombre,
        protected string $apellidos,
        protected int $edad)
    

    public function setEdad(int $edad)
    {
        $this->edad = $edad;

        return $this;
    }
 
    public function getNombre()
    {
        return $this->nombre;
    }
    
    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function getNombreCompleto(): string{
        return $this->nombre." ".$this->apellidos;
    }

    abstract static function toHTML(Persona $p) : string;

    public function __toString(): string{
        return "<p>Nombre: ".$this -> getNombre()."<br>Apellidos: ".$this -> getApellidos()."<br>Edad: ".$this -> getEdad()."</p>";
    }
 
}