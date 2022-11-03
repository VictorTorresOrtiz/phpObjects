<?php
/*012Trabajador.php: Copia las clases del ejercicio anterior y modifícalas.
Cambia la estructura de clases conforme al gráfico respetando todos los métodos que 
ya están hechos. Trabajador es una clase abstracta que ahora almacena los teléfonos y 
donde calcularSueldo es un método abstracto de manera que:
El sueldo de un Empleado se calcula a partir de las horas trabajadas y lo que cobra por 
hora. Para los Gerentes, su sueldo se incrementa porcentualmente en base a su edad: 
salario + salario*edad/100
*/
include_once('013Trabajador.php');

class Gerente extends Trabajador
{
    //Cambio el salario de private a protected ya que en privado no es posible acceder a la función toHtml Trabajador
    protected $salario;

    public function __construct(String $nombre, String $apellidos, int $edad, protected int $sueldo = 1000)
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
                                           " . $p->getTelefono() . "
                                           </ol><br>";

            if ($p->tieneQuePagar($p->sueldo) == true) {
                $info = "Debe pagar impuestos" ;
            } else {
                $info = "No debe pagar impuestos<br></p>";
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