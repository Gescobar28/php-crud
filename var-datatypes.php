<?php

    //Variables se declaran con signo " $ " al principio

    $nombre = "Gregorio"; //string
    $edad=31;   //integer
    $estatura=1.70; //double
    $hombre=true; //boolean

    //declaracion de constantes

    const anio_nacimiento = 1992;
    define("dia_nacimiento","28");

    $numero1 = 15;
    $numero2 = 2.5;

    //conversion de tipos con strval, intval,floatval
    $suma = strval($numero1 + $numero2);

    $palabra = "Gregorio";
    $palabra2 = "Escobar";

    //concatenacion con un punto " "

    $concatenar = "Hola ".$palabra." ".$palabra2;

    //interpolacion todo dentro de comillas dobles 

    $interpolar = "Hola $palabra $palabra2 como estas";

    //Dentro de las comillas dobles pueden ir variables, dentro de las comillas simples no.

    //para insertar comillas dobles dentro de comillas dobles se usa el signo de escape " \ "

    $saludo = "Hola $palabra \"estoy bien\"";

    //cuando no se usan variables dentro de las comillas es mejor usar comillas simples

    //Heredoc
    $frase1 = <<<Quote
    Hola buenas noches $palabra
    Quote;

    //Nowdoc
    $frase2 = <<<'Quote'
    Hola buenas noches $palabra
    Quote;

    //extracion dentro de un string con la funcion 
    //substr("palabra", posicion donde comienza la palabra,numero de letras);

    //se extrae la primera letra de la palabra que comienza en la posicion 9
    $apellido = substr("Gregorio Escobar",0,5);//Grego
    //con el negativo excluimos las letras del final
    $apellido = substr("GregoJEA",0,-3);//Grego
    $apellido = substr("GregoJEA",0,-4);//Greg

    // echo $apellido; 

    $bienvenida = "Bienvenido a mi casa, tambien es tu casa";
    $casa = "casa";

    //utilizamos la funcion strpos(string donde se va a buscar la palabra, palabra a buscar, opcional posicion a partir de donde comienza a buscar)

    //encuentra la primera palabra "casa"
    $buscar = strpos($bienvenida,$casa);//16
    //encuentra la segunda porque comienza a buscar desde la posicion 17
    $buscar = strpos($bienvenida,$casa,17);//36

    //para reemplzar utilizamos la funcion str_replace(lo que queremos reemplazar, por lo que lo vamos a reemplazar, en donde vamos a buscar)

    $RFC = "95 15 A1 R2 Y5";

    $busqueda = " ";
    $reemplazo = ":";
    $result = str_replace($busqueda,$reemplazo,$RFC);

    // echo $result;

    //para dar formato utilizamos la funcion sprintf(pasamos el formato que queremos, aqui van los campos a completar separados por una coma)

    $anio = "1992";
    $mes = "07";
    $dia = "28";
    $formato = "%s/%s/%s";

    $fecha_nacimiento = sprintf($formato,$dia,$mes,$anio);  
