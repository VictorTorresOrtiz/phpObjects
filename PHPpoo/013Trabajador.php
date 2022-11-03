<?php

include_once('013Persona.php');

abstract class Trabajador extends Persona
{

    protected array $arrayTelefono = [];
    protected static $sueldoTope = 3333;





    public function anyadirTelefono(int $telefono): void
    {

        array_push($this->arrayTelefono, $telefono);
    }





    public function listarTelefonos(): string
    {
        $string = "";

        foreach ($this->arrayTelefono as $id => $num) {

            $string .= ($id == 0) ? $num : ", " . $num;
        }

        return $string;
    }



    public function vaciarTelefonos(): void
    {

        $this->arrayTelefono = array_diff($this->arrayTelefono, $this->arrayTelefono);

        print_r($this->arrayTelefono);
    }





    public function getTelefono()
    {
        $string = "";

        foreach ($this->arrayTelefono as $id => $num) {
            $string .= ($id == 0) ? "<li>$num</li>" : " <li>$num</li>";
        }

        return $string;
    }

    abstract function calcularSueldo();
    abstract function tieneQuePagar($sueldo): bool;




    public static function toHtml(Persona $p): string
    {

        if ($p instanceof Empleado || $p instanceof Gerente) {
            $info = "";

            $info = "<p><b>Nombre: </b>" . $p->getNombreCompleto() . "<br><br>
                                <b>Edad: </b>" . $p->getEdad() . "<br><br>
                               <b>Sueldo: </b>" . $p->sueldo . "<br><br>
                               <b>Teléfono: </b><ol>
                                           " . $p->getTelefono() . "
                                           </ol><br>";

            if ($p->tieneQuePagar($p->sueldo) == true) {

                $pagaImpuestos = "Debe pagar impuestos ";
            } else {
                $pagaImpuestos = "No debe pagar impuestos<br></p>";
            }

            return $info . $pagaImpuestos;
        } else {

            $info = "<p> <b>Nombre: </b>" . $p->getNombreCompleto() . "</p>";
        }
        return $info;
    }
}