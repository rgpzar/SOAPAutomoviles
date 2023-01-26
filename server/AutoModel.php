<?php
require_once "Conn.php";

class Automoviles{
    public $conn;

    public function __construct(){
        $this->conn = new Conn('localhost', 'focusOn', 'root', '');
    }


    public function obtenerAuto(){
        
    }

    public function obtenerModelosPorMarca($marca){
        
    }

    public function authenticate(){

    }
}

$coches = new Automoviles();

var_dump($coches->conn);
?>