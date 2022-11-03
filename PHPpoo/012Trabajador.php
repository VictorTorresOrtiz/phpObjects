<?php

include_once('012Persona.php');

abstract class Trabajador extends Persona{

    protected array $arrayTelefono = [];
    protected static $sueldoTope = 3333;

    public function anyadirTelefono(int $telefono) : void
    {

        array_push($this->arrayTelefono, $telefono);

    }

    public function listarTelefonos(): string
    {
        $string = "";

        foreach ($this->arrayTelefono as $id=>$num) {
           
            $string.= ($id == 0)? $num : ", ".$num;
        }

        return $string;
    }

    public function vaciarNumerosTelefonos(): void
    {

        $this->arrayTelefono = array_diff($this->arrayTelefono, $this->arrayTelefono);
        
        print_r($this->arrayTelefono);
    }

 
    public function getTelefono()
    {
        $string = "";

        foreach ($this->arrayTelefono as $id=>$num) {
           
            $string.= ($id == 0)? "<li>$num</li>" : " <li>$num</li>";
        }

        return $string;
    }


    abstract function calcularSueldo();

    abstract function tieneQuePagar($sueldo): bool;

}