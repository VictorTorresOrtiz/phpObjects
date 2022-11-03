<?php 
// Prueba 001Empleado
/*
include_once ('001Empleado.php');
$persona = new Empleado();
$persona->setNombre("Victor");
$persona->setApellidos("Torres Ortiz");
$persona->setSueldo(4200);
echo $persona->getNombreCompleto()."<br>";
echo ($persona->debePagarImpuestos()) ? "Debe pagar impuestos" : "No debe pagar impuestos";
*/

// Prueba 002EmpleadoTelefonos
/*
include_once ('002EmpleadoTelefonos.php');
$persona = new Empleado();
$persona->anyadirTelefono("955615576");
$persona->anyadirTelefono("691385582");
echo $persona->listarTelefonos();
$persona->vaciarTelefonos();
echo $persona->listarTelefonos();
*/

// Prueba 003EmpleadoConstructor
/*
include_once ('003EmpleadoConstructor.php');
$persona1 = new Empleado("el notas", "de  pelos");
$persona2 = new Empleado("kebab", "los pollos", 2600);
echo $persona1->getNombreCompleto() ." tiene un sueldo de ". $persona1->getSueldo() . "EUros<br>";
echo $persona2->getNombreCompleto() ." tiene un sueldo de ". $persona2->getSueldo() . "Euros<br>";
*/

// Prueba 004EmpleadoConstante
/*
include_once ('004EmpleadoConstante.php');
$persona1 = new Empleado("Pepe", "Martínez Pérez");
$persona2 = new Empleado("Juan", "García López", 3500);
echo ($persona1->debePagarImpuestos()) ? "Tiene que pagar moroso" : "No debe pagar impuestos" . "<br>";
echo ($persona2->debePagarImpuestos()) ? "Tiene que pagar moroso" : "No debe pagar impuestos";
*/

// Prueba 005EmpleadoSueldo
/*
include_once ('005EmpleadoSueldo.php');
echo Empleado::getSueldoTope() . "<br>";
Empleado::setSueldoTope(4000);
echo Empleado::getSueldoTope();
*/

// Prueba 006EmpleadoStatic
/*
include_once ('006EmpleadoStatic.php');
$persona1 = new Empleado("Castillo", "el loco");
$persona1->anyadirTelefono("665105512");
$persona1->anyadirTelefono("605493845");
$persona1->anyadirTelefono("606757896");
$persona2 = new Empleado("Patata", "enterra jejej");
echo Empleado::toHtml($persona1);
echo Empleado::toHtml($persona2);
*/

// Prueba 007Persona y 307Empleado
/*
include_once ('307Empleado.php');
$persona = new Empleado("Elena", "melena cabeza");
echo $persona->getNombreCompleto();
*/

// Prueba 008PersonaH  308EmpleadoH
/*
include_once ('308EmpleadoH.php');
$persona1 = new Empleado("Jony", "me lavo jejejeje");
$persona1->anyadirTelefono("665105512");
$persona1->anyadirTelefono("605493845");
$persona1->anyadirTelefono("606757896");
$persona2 = new Empleado("ELBrayan", "arcos lopera");
echo Empleado::toHtml($persona1);
echo Empleado::toHtml($persona2);
*/

// Prueba 009PersonaE y 309EmpleadoE
/*
include_once ('309EmpleadoE.php');
$persona1 = new Empleado("lopera", "salvo betis", 24, 4000);
echo $persona1->debePagarImpuestos() ? "Paga moroso" : "No está obligado a pagar impuestos";
$persona1->setEdad(24);
echo $persona1->debePagarImpuestos() ? "Paga moroso" : "No está obligado a pagar impuestos";
*/

// Prueba 010PersonaS y 310EmpleadoS
/*
include_once ('310EmpleadoS.php');
include_once ('010PersonaS.php');
$persona1 = new Persona("victor", "patilla pistola", 12);
$empleado1 = new Empleado("Jaimito", "torres galletas", 30, 4000);
$empleado1->anyadirTelefono(69134567);
$empleado1->anyadirTelefono(98743214);
echo $persona1->__toString() . "<br>";
echo $empleado1->__toString();
*/

// 012 


// 013 Pruebas
/*
include_once ('013Persona.php');
include_once ('013Gerente.php');
include_once ('013Empresa.php');
$gerente1 = new Gerente("Victor", "Torres ortiz", 23);
$gerente1->setSalario(1200);
$empleado1 = new Empleado("Carlos", "cojones colgando", 21);
$empleado1->setHorasTrabajadas(8)->setPrecioPorHora(2);
$empresa = new Empresa();
$empresa->setDireccion("TOMY");
$empresa->setNombre("FRITO");
$empresa->anyadirTrabajador($gerente1);
$empresa->anyadirTrabajador($empleado1);
$empresa->listarTrabajadoresHtml();
echo $empresa->getCosteNominas();
/*
