<?php

//Clase para conectarse ala base de datos y ejecutar consultas
//PDO
class Base{
    private $host =DB_HOST;
    private $usuario =DB_USUARIO;
    private $password =DB_PASSWORD;
    private $nombre =DB_NOMBRE;

    private $dbh;
    private $stmt;
    private $error;

    public function __construct()
    {
        // configuro mi conexion ala BD
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this-> nombre_base;
        $opciones = array(
            PDO::ATTR_PERSISTENT =>true,
            PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION
        );

        // Crear una instancia de PDO
        try{
            $this->dbh =new PDO($dsn, $this->usuario, $this->
            password, $opciones);
            $this->dbh->exec('set names utf');         
        }catch(PDOException $e){
            $this->error = $e->getMessage();
            echo $this->error;
        }
    } 
}

