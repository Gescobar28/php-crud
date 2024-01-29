<?php

require_once("core/connection.php");
class Crud extends Connection
{

    private $pdo; //se crea un atributo para manejar internamente el PDO
    public function __construct(
        public string $table
    ) {
        //ejecutamos el constructor de connection
        parent::__construct();
        //asignamos el PDO de la clase connection al atributo pdo
        $this->pdo = $this->connection();
    }

    public function getAll()
    {
        try {
            //creamos una variable llamada statement
            //obtenemos el pdo, llamamos al metodo prepare()
            //el metodo prepare nos ayuda a preparar nuestra sentencia sql
            $statement = $this->pdo->prepare("SELECT * FROM $this->table");

            //ejecutamos nuestra sentencia con el metodo execute(), de esta forma
            $statement->execute();
            //una vez que se ejecute retornamos los datos obtenidos con return y fetchAll,y con PDO::FETCH_OBJ le decimos como queremos que devuelva los datos.
            $result = $statement->fetchAll(PDO::FETCH_OBJ);
            return $result;
        } catch (PDOException $message) {
            echo $message->getMessage();
        }
    }



    public function getById(int $id)
    {
        try {
            //creamos una variable llamada statement
            //obtenemos el pdo, llamamos al metodo prepare()
            //el metodo prepare nos ayuda a preparar nuestra sentencia sql
            //para evitar que se inyecte codigo malicioso en nuestra base de datos debemos pasar el id en el execute, de esta forma:
            $statement = $this->pdo->prepare("SELECT * FROM $this->table WHERE id=?");

            //ejecutamos nuestra sentencia con el metodo execute(), de esta forma
            //así pasamos el id dentro de corchetes y va ser el metodo execute quien se encargue de hacer la verificacion 
            $statement->execute([$id]);
            //una vez que se ejecute retornamos el dato obtenido con return y fetch,y con PDO::FETCH_OBJ le decimos como queremos que devuelva los datos.
            $result = $statement->fetch(PDO::FETCH_OBJ);
            return $result;
        } catch (PDOException $message) {
            echo $message->getMessage();
        }
    }

    public function delete(int $id)
    {
        try {
            $statement = $this->pdo->prepare("DELETE FROM $this->table WHERE id=?");
            $statement->execute([$id]);

        } catch (PDOException $message) {
            echo $message->getMessage();
        }
    }

    //recibimos los datos que queremos ingresar, debe ser una variable ya que las tablas tiene columnas diferentes.
    //tambien una variable que nos indique cuantos marcadores o signos de interrogacion vamos a utilizar
    //recimos las columnas
    public function create(string $columns, string $marks, array $data)
    {
        $statement = $this->pdo->prepare("INSERT INTO $this->table ($columns) VALUES ($marks)");
        $statement->execute($data);
    }

    public function update(string $columns, array $data)
    {
        $statement = $this->pdo->prepare("UPDATE $this->table SET $columns WHERE id=?");
        $statement->execute($data);
    }
}