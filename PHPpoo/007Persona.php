<?php

class Persona
{

    public function __construct(protected String $nombre, protected String $apellidos)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
    }
}