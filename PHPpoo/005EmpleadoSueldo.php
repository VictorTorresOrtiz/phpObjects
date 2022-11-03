<?php
/*005EmpleadoSueldo.php: Copia la clase del ejercicio anterior y modifícala. Cambia la 
constante por una variable estática sueldoTope, de manera que mediante 
getter/setter puedas modificar su valor.*/

class Empleado
{

    private static $sueldoTope = 3333;
    private $telefonos = [];

    public function __construct(private $nombre, private $apellidos, private $sueldo = 1000)
    {
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function getSueldo()
    {
        return $this->sueldo;
    }

    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;

        return $this;
    }

    public function getNombreCompleto()
    {
        return $this->nombre . " " . $this->apellidos;
    }

    public static function getSueldoTope()
    {
        return self::$sueldoTope;
    }

    public static function setSueldoTope($sueldoTope)
    {
        self::$sueldoTope = $sueldoTope;
    }

    public function tieneQuePagar()
    {
        return ($this->sueldo > self::$sueldoTope) ? true : false;
    }

    public function anyadirTelefono(int $telefono)
    {
        array_push($this->telefonos, $telefono);
    }

    public function listarTelefonos()
    {
        $stringTelefono = "";
        foreach ($this->telefonos as $id => $numero) {
            $stringTelefono .= ($id == 0) ? $numero : ", " . $numero;
        }

        return $stringTelefono;
    }

    public function vaciarNumerosTelefonos()
    {
        while (count($this->telefonos) != 0) {
            array_shift($this->telefonos);
        }
    }
}