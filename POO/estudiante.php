<?php
require_once("estudiante.php");
require_once("traits.php");
class Estudiante extends Persona
{
    //para hacer uso de los traits escribimos de esta forma con la palabra use
    use Operaciones;
    public function __construct(public $curso = "")
    {
    }
}