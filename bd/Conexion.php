<?php

class Conexion {
    private $dsn = "mysql:host=localhost;dbname=inventory";
    private $servidor = "localhost";
    private $user = "root";
    private $password = "";
    private $bd = "inventory";
    private $option = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'");
    protected $conn = null;

    public function abrirConexion(){
        try{
            $this->conn = new PDO($this->dsn, $this->user, $this->password, $this->option);
            return $this->conn;
        } catch(PDOException $e) {
            echo $e->getMessage()+"tu conexion no sirve rufian";
        }
    }
    
    public function ConexionDif(){
        try{
            $conexion=mysqli_connect($this->servidor, $this->user, $this->password, $this->bd);
            return $conexion;
        } catch(PDOException $e) {
            echo $e->getMessage()+"tu conexion no sirve rufian";
        }
    }
    
    public function cerrarConexion(){
        return $this->conn = null;
    }
    
}

