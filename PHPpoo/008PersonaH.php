<?php 


class Persona{

    public function __construct(protected String $nombre, protected String $apellidos)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
    }

    public function getNombreCompleto(){
        return $this->nombre." ".$this->apellidos;
    }

    public static function toHtml(Persona $p){
        $string = "<p> ". $p->getNombreCompleto()." </p>";

        return $string;
    }

}