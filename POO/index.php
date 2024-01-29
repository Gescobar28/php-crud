<?php
 require_once("persona.php");
 require_once("estudiante.php");


$p1 = new Persona();

$p1->nombre = "Gregorio";
//para modificar el atributo de una clase utilizamos nombreClase::$atributo
Persona::$idioma = "Alemán";
// echo Persona::$idioma;//muestra Alemán porque lo modificamos

$p2 = new Persona();
$p2->nombre = "Wilmary";
//volvemos a modificarlo a Francés 
Persona::$idioma = "Francés";

// echo Persona::$idioma;//muestra Francés

//como es un atributo de clase, cambia en la clase y está siempre disponible con el nuevo valor. Si lo queremos imprimir desde una nueva instancia el valor va a ser el ultimo valor que se la haya dado.

$p3 = new Persona();

$p3->nombre = "Bruno";
//echo Persona::$idioma;//en esta nueva instancia muestra Francés porque fue el ultimo valor que se le dio al atributo idioma de la clase.
// $p1->hablar(15);
// $p2->hablar();
// $p3->hablar();

// $p1->__get("nombre");
// $p1->__set("dni","96012278");
// $p1->__get("dni");
// $p1->__set("edad","31");
// $p1->getEdad();

$e1 = new Estudiante();
$e1->nombre = "Gregorio";
echo $e1->nombre;
//puedo acceder a validarEdad que está dentro del trait porque hice uso del trait operaciones en la clase estudiante
$e1->validarEdad() ;
//constructor
