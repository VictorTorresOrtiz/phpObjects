<?php
/*ALGUNAS 
MODIFICACIONES 
*/
include_once('013Trabajador.php');

class Empleado extends Trabajador
{

    private $horas;
    private $precioHora;

    public function __construct(String $nombre, String $apellidos, int $edad, protected int $sueldo = 1000)
    {
        parent::__construct($nombre, $apellidos, $edad);
    }

    public function getHoras()
    {
        return $this->horas;
    }

    public function setHoras($horas)
    {
        $this->horas = $horas;
        return $this;
    }


    public function getPrecioHora()
    {
        return $this->precioHora;
    }


    public function setPrecioHora($precioHora)
    {
        $sueldoGanado = $this->precioHora = $precioHora;
        return $sueldoGanado;
    }

    public function tieneQuePagar($sueldo): bool
    {

        return ($this->sueldo > parent::$sueldoTope && $this->edad > 21) ? true : false;
    }

    public function calcularSueldo()
    {

        $sueldoGanado = $this->precioHora * $this->horas;
        $this->sueldo = $sueldoGanado;
        return  $this;
    }

    public static function toHtml(Persona $p): string
    {

        if ($p instanceof Empleado) {
            $info = "";
            $info = "<p><b>Nombre: </b>" . $p->getNombreCompleto() . "<br><br>
                                <b>Edad: </b>" . $p->getEdad() . "<br><br>
                               <b>Sueldo: </b>" . $p->sueldo . "<br><br>
                               <b>Teléfono: </b><ol>
                                           " . $p->getTelefono() . "
                                           </ol><br>";

            if ($p->tieneQuePagar($p->sueldo) == true) {
                $pagaImpuestos = "Tiene que Pagar";
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