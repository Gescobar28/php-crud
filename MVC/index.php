<?php

if (!isset($_REQUEST["controlador"])) {
    require_once("controlador/usuario_controlador.php");
    $controlador = new UsuarioControlador();
    $controlador->indexUsuario();   
} else {
    $controlador = $_REQUEST["controlador"];
    $accion = $_REQUEST["accion"];
    require_once("controlador/$controlador" . "_controlador.php");
    $controlador = ucwords($controlador) . "Controlador";
    $controlador = new $controlador();
    call_user_func([$controlador, $accion]);
}


// require_once("modelo/usuario.php");
// require_once("modelo/animal.php");

// $usuario1 = new Usuario(2,"Wilmary","Pernalete","2612652733",31);
// $animal1 = new Animal(4,"Perrito","Salvaje","Macho","Blanco",1);

// // $animal1->createAnimal();
// // $animal1->updateAnimal();
// // $animal1->deleteAnimal();


// // $usuario1->updateUser();
// // $usuario1->deleteUser();
// // $usuario1->createUser();
// // var_dump($usuario1->getAll());
// // var_dump($usuario1->getById(2));
