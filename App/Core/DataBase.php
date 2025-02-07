<?php

namespace App\controllers\Core;
use PDO;
use PDOException;

class DataBase{
    private static $host = "localhost";
    private static $dbname = "Upwork_db";
    private static $user = "postgres";
    private static $code = "";

    private static $conexion;
    private static $instance;


    private function __construct(){
        try {
            $dsn = "pgsql:host=".self::$host."dbname=".self::$dbname;
            self::$conexion = new PDO($dsn, self::$user, self::$code);
            self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            die("error conexion :".$e->getMessage()) ;
        }
    }

    public function getInstance(){
        if(!isset(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }


    public function getConexion(){
        return self::$conexion;
    }

}