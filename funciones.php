<?php
declare(strict_types=1);

function obtenerEdad()
{
    $edad = 2024 - 1992;
    // echo $edad;
}

obtenerEdad();

//funcion con parámetros
function obtenerEdad2023($anioNac)
{
    $edad = 2024 - $anioNac;
    // echo $edad;
}

obtenerEdad2023(1992); //pasamos el año como argumento

//valor por default;
function obtenerEdadAnio($anioNac, $anioActual = 2023)
{
    $edad = $anioActual - $anioNac;
    // echo $edad;
}

//pasamos solo el año de nacimiento y toma el año actual por default que es 2023
obtenerEdadAnio(1992); // => 31
//pasamos los dos valores 
obtenerEdadAnio(1992, 2002); // => 10 

function obtenerEdadReturn($anioNac, $anioActual = 2023)
{
    return $anioActual - $anioNac;
}
;

$edad = obtenerEdadReturn(1990, 2024);

// echo $edad;

//desde la version 7 PHP incluyó las declaraciones de tipo en los parametros de la funcion

$message = "El resultado de la suma es: ";

//cuando declaramos una funcion de esta forma no podemos utilizar variables externas.
function sumaNueva(int $numa, int $numb)
{

    return $numa + $numb;
}
;

// echo sumaNueva(2,4);

//para poder utilizar variables dentro de las funciones tenemos otra forma

$nuevaSuma = function () {
    return 10 + 4;
};

// echo $nuevaSuma();

//tambien podemos recibir argumentos
$nuevaSuma2 = function ($numa, $numb) use ($message) {
    $result = $numa + $numb;
    return "$message  $result";
};

// echo $nuevaSuma2(8,12);x
