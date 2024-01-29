<?php
//clases

//tambien podemos crear clases abstractas con la palabra abstract, este tipo de clases no pueden ser instanciadas
class Persona
{
    public $nombre;
    public $apellido;
    private $edad;
    // private $dni;

    //para declarar variables de clase utilizamos la palabra static
    static $idioma;

    //constructor 
    //antes de la v8 se declaraban los atributos, si inicializaba el constructor con un valor por default para evitar posibles problemas y se asignaban a los atributos el valor. De esta forma:
    public function __construct($nombre = "", $apellido = "", $dni = "")
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dni = $dni;
    }

    //constructor en la version 8
    //se declaran los atributos una sola vez en el constructo y el cuerpo del constructor queda vacío, haciendo el código más limpio.

    // public function __construct(public string $nombre = "", public string $apellido = "", private int | string $dni = ""){
    // }

    //podemos nuestro atributo puede recibir distintos tipos de datos de esta forma:
    // private int | string $dni = ""



    //get para obtener datos privados
    public function getEdad()
    {
        echo $this->edad;
    }
    //set para modificar datos privados
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    //otra forma para no escribir getters y setters para todos los atributos es

    //debemos pasarle como argumento el nombre del atributo que queremos obtener
    public function __get($name)
    {
        echo $this->$name;
    }

    //debemos pasarle como argumento el nombre del atributo que queremos modificar y el valor nuevo

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    function hablar($edad)
    {
        echo "Bienvenido ", $this->nombre, $this->mayorEdad($edad);
    }

    private function mayorEdad($edad)
    {
        return ($edad > 17) ? " Eres mayor de edad" : " Eres menor de edad";
    }
    function ver()
    {

    }
    function cantar()
    {

    }

    //polimorfismo

    //sobracarga de funciones y anulacion de funciones

    //PHP no admite la sobrecarga de funciones, por lo que solo usaremos anulacion de funciones, esto consiste en crear un metodo igual al de la clase padre. Cuando se llame el método creado se anula el de la clase padre y se ejecuta el de la clase hija.

    


}