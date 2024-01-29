<?php
//Operadores comunes
// ==
// ===
// !=
// !==
// >
// <
// >=
// <=

//Operador de nave espacial <=>
// devuelve 0 si ambos valores son iguales
// devuelve -1 si el valor de la izquierda es menor que el de la derecha
// devuelve 1 si el valor de la izquierda es mayor que el de la derecha

$cero = 10 <=> 10; //devuelve 0
$menos_uno = 8 <=> 10; //devuelve -1
$uno = 10 <=> 5; //devuelve 1

//operadores aritmeticos
// + suma
// - resta
// * multiplicacion
// / division
// % modulo
// ** exponenciacion

//operador de asignacion por referencia &

$a = 10;
$b = $a; //10
$c = &$a;

echo $b; 
echo $c;

$a = 20; //cambiamos el valor de a;
//b sigue siendo 10 porque se pasó el valor, no la referencia.
//c toma el nuevo valor de a ya que apunta a la referencia donde se guarda el valor de a.

//operador para sumar +=
//operador para restar -=
//operador para concatenar .=
// ...*=
// .../=
// ...%=











