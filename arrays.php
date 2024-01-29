<?php

$numeros = [2, 4, 1, 5, 3];

foreach ($numeros as $index => $numero) {
    $mult = $numero * $index;
    // echo $mult;
}

// echo $numeros[2];

//arrays asociativos --> muy similar estructura objetos javascript key,value

$datos = [
    "nombre" => "Gregorio",
    "apellido" => "Escobar"
];

// echo $datos['nombre'];

foreach ($datos as $key => $value) {
    // echo $key .': '. $value .' ';
}

// para agregar datos a un array comun usamos array_push()

// array_push($numeros,4);

// echo $numeros[3];

// para agregar datos a un array asociativo usamos $array[key] = value

$datos["edad"] = 31;

foreach ($datos as $key => $value) {
    // echo $key .': '. $value .' ';
}

//eliminar datos array utilizamos unset

foreach ($numeros as $index => $numero) {
    // echo $numero;
}

// unset($numeros[3]);

foreach ($numeros as $index => $numero) {
    // echo $numero;
}

foreach ($datos as $key => $value) {
    // echo $key .': '. $value .' ';
}
;

unset($datos["edad"]);

foreach ($datos as $key => $value) {
    // echo $key .': '. $value .' ';
}
;

//para modificar datos tenemos que ir al indice o llave que queremos modificar y asignamos el valor

foreach ($numeros as $index => $numero) {
    // echo $numero;
}

foreach ($numeros as $index => $numero) {
    // $numeros[$index]++;
}

foreach ($numeros as $index => $numero) {
    // echo $numero;
}

foreach ($datos as $key => $value) {
    // echo "$key $value";
}
;

$datos['nombre'] = 'Wilmary';
$datos['apellido'] = 'Pernalete';

foreach ($datos as $key => $value) {
    // echo "$key $value";
}
;

//funciones en arreglos

//para saber la cantidad de elementos utilizamos count()

// echo count($datos);
//var_dump($numeros);// con var_dump tambien obtenemos el tipo de dato

//para ordenar de forma ascendente 1-10 y A-Z usamos asort();

foreach ($numeros as $index => $numero) {
    // echo $numero;
}
asort($datos);
// asort($numeros);

foreach ($numeros as $index => $numero) {
    // echo $numero;
}
//var_dump($numeros);

//para ordenar de forma descendente 10-1 y Z-A usamos arsort();

// arsort($numeros);

foreach ($numeros as $index => $numero) {
    // echo $numero;
}

//para buscar dentro de un array usamos array_search(valor a buscar, donde buscar)

$pos = array_search("5",$numeros);

// echo $pos;
// echo $numeros[$pos];


//reemplazar varios datos en un array array_replace(en donde lo vamos a reemplazar, valor por el que reemplazamos)

$nuevosNumeros = array_replace($numeros,[
    "0"=> "1",
    "1"=> "2",
    "2"=> "3",
    "3"=> "4",
    "4"=> "5",
    "5"=> "6"
]);

foreach ($nuevosNumeros as $index => $numero) {
    echo $numero;
}

//arrays multidimensionales => son arrays, dentro de un array

$animales = [
    ["Puma","Jaguar","Lince"],
    ["Paloma","Pato","Tucan"],
    ["Serpiente","Cocodrilo","Tortuga"]
];

//para recorrerlos se utiliza un foreach dentro de otro foreach