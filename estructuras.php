<?php
//if
$edad = 17;
$hombre = false;

if ($edad >= 18 && $hombre) {
    // echo "Eres mayor de edad y tienes que pagar";
} else if ($edad >= 18 && !$hombre) {
    // echo "Eres mayor de edad y no tienes que pagar";
} else {
    // echo "Eres menor de edad y no puedes pasar";
}

//switch

$zapatos = "negros";

switch ($zapatos) {
    case 'marron':
        // echo 'Los zapatos son marrones';
        break;
    case 'negros':
        // echo 'Los zapatos son negros';
        break;
    default:
        // echo 'No tenemos disponible ese color de zapatos';
        break;
}

//match

match ($zapatos) {
    "marron" => "Los zapatos son marrones",
    "negros" => "Los zapatos son negros"
};

//while

$a = 0;

// while ($a < 10) {
//     $a++;
//     // echo $a;
// }

//do while

// do {
//     echo $a;
//     $a++;
// } while ($a < 10);

for ($i=0; $i < 10; $i++) { 
    echo $i;
}

//for each

