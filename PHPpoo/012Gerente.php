<?php

include_once('012Trabajador.php');

class Gerente extends Trabajador
{

    private $salario;

    public function __construct(String $nombre, String $apellidos, int $edad, private int $sueldo = 1000)
    {
        parent::__construct($nombre, $apellidos, $edad);
    }

    
    public function getSalario()
    {
        return $this->salario;
    }


    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }

    public function tieneQuePagar($sueldo): bool
    {

        return ($this->sueldo > self::$sueldoTope && $this->edad > 21) ? true : false;
    }

    public function calcularSueldo()
    {
        $sueldoGanado = $this->salario + $this->salario * ($this->edad / 100);
        $this->sueldo = $sueldoGanado;
        return $this;
    }

    public static function toHtml(Persona $p): string
    {

        if ($p instanceof Gerente) {
            $info = "";

            $info = "<p> <b>Nombre: </b>" . $p->getNombreCompleto() . "<br><br>
                                    <b>Edad: </b>" . $p->getEdad() . "<br><br>
                                    <b>Sueldo: </b>" . $p->sueldo . "<br><br>
                                    <b>Teléfono: </b><ol>
                                    ". $p->getTelefono() . "
                                           </ol><br>";

            if ($p->tieneQuePagar($p->sueldo) == true) {
                 $pagaImpuestos = "Tiene que pagar";
            } else {
                $pagaImpuestos = "No debe pagar impuestos<br></p>";
            }
            return $info . $pagaImpuestos;
        } else {

            $info = "<p> <b>Nombre: </b>" . $p->getNombreCompleto() . "</p>";
        }
        return $info;
    }

    public function __toString(): string
    {

        $info = "<p><b>Nombre: </b>" . $this->getNombreCompleto() . "<br><br>
                                <b>Edad: </b>" . $this->getEdad() . "<br><br>
                                <b>Sueldo: </b>" . $this->sueldo . "<br><br>
                                <b>Teléfono: </b><ol>
                                            " . $this->getTelefono() . "
                                        </ol></p>";

        return $info;
    }

}