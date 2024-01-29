<?php

class Connection
{

    public function __construct(
        public string $driver = "mysql",
        public string $host = "localhost",
        public string $username = "root",
        public string $password = "",
        public string $database = "sunny_side",
        public string $charset = "utf-8"
    ) {
    }

    protected function connection()
    {
        try {
            // $pdo = new PDO("$this->driver:host=$this->host;dbname=$this->database;", $this->username, $this->password);
            $pdo = new PDO("mysql:host=localhost;dbname=sunny_side",$this->username,$this->password);
            echo "conexion correcta";

            return $pdo;
        } catch (PDOException $message) {
            echo $message->getMessage();
        }
    }
}

