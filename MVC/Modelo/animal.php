<?php

require_once("core/crud.php");
class Animal extends Crud{

    public function __construct(
        public int $id,
        public string $nombre,
        public string $raza,
        public string $sexo,
        public string $color,
        public int $edad
    ){
        parent::__construct("animal");
    }

    public function createAnimal(){
        $this->create("id,nombre,raza,sexo,color,edad","?,?,?,?,?,?",[$this->id,$this->nombre,$this->raza,$this->sexo,$this->color,$this->edad]);
    }
    public function updateAnimal(){
        $this->update("nombre=?,raza=?,sexo=?,color=?,edad=?",[$this->nombre,$this->raza,$this->sexo,$this->color,$this->edad,$this->id]);
    }
    public function deleteAnimal(){
        $this->delete($this->id);
    }
}