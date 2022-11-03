<?php

include_once('013Empleado.php');
include_once('013Gerente.php');

class Empresa{

    public string $nombre;
    public string $direccion;
    public array $arrayTrabajadores = [];
    

    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    
    public function getDireccion()
    {
        return $this->direccion;
    }


    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
        return $this;
    }

    public function anyadirTrabajador(Trabajador $t)
    {

        array_push($this->arrayTrabajadores, $t);

    }

    public function listarTrabajadoresHtml() : string{

        $listado = "<ol>";

       foreach ($this->arrayTrabajadores as $tipoTrabajador) {
        
        $listado .= "<li>".Trabajador::toHtml($tipoTrabajador)."</li>";
        return $listado."</ol>";
    }

    public function getNominas(): float {

        $sumaNominas = 0;

        foreach ($this->arrayTrabajadores as $tipoTrabajador) {
            $sumaNominas += $tipoTrabajador->getSueldo(); //Como se ha utilizado como setter en calcularSueldo() con getSueldo no se me freiria la cabeza
        }

        return $sumaNominas;
    }
}