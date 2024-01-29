<?php

require_once("core/crud.php");
class Usuario extends Crud
{
    public function __construct(
        public int $id = 0,
        public string $nombre = "",
        public string $apellido = "",
        public string $telefono = "",
        public int $edad = 0
    ) {
        //de esta forma ejecutamos el constructor de la clase padre y así obtenemos 
        parent::__construct("usuario");
    }

    public function createUser()
    {
        $this->create(
            "id,nombre,apellido,telefono,edad",
            "?,?,?,?,?",
            [$this->id, $this->nombre, $this->apellido, $this->telefono, $this->edad]
        );
    }

    public function updateUser()
    {
        $this->update("nombre=?,apellido=?,telefono=?,edad=?", [$this->nombre, $this->apellido, $this->telefono, $this->edad, $this->id]);
    }

    public function deleteUser(){
        $this->delete($this->id);
    }
}