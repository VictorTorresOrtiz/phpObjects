<?php
abstract class Persona {

    

    public function __construct(protected String $nombre, protected String $apellidos, protected int $edad)
    {

    }

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

    public function getNombreCompleto(): string
    {

        return $this->nombre." ".$this->apellidos;
    }
    

    abstract static function toHtml(Persona $p):string;
  
    
    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    public function __toString()
    {

        return $this->getNombreCompleto();
    }
}