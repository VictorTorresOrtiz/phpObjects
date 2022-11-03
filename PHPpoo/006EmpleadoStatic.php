<?php


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

    public function getTelefonos()
    {
        return $this->telefonos;
    }

    public function debePagarImpuestos()
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
            //Monstrar el parrafo 

            public static function toHtml(Empleado $emp)
            {
                $string = "<p> " . $emp->getNombreCompleto() . " </p><ol>";
                $listaTelefonos = $emp->getTelefonos();

                    if (count($listaTelefonos) != 0) {
                        for ($i = 0; $i < count($listaTelefonos); $i++) {
                            $string .= "<li>" . $listaTelefonos[$i] . "</li>";
                        }
                    }

                    return $string .= "</ol>";
            }
}