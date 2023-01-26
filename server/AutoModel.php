<?php
require_once "Conn.php";

class Automoviles{
    public $conn;

    public function __construct(){
        $this->conn = new Conn('localhost', 'focusOn', 'root', '');
    }


    public function obtenerAuto($id){
        $sql = "";
        $this->conn->query($sql);
    }

    public function obtenerMarcasUrl(){
        //
    }

    public function obtenerModelosPorMarca($marca){
        $sql = "";
        $this->conn->query($sql);
    }

    public function authenticate(){
        //
    }
}

$coches = new Automoviles();

//var_dump($coches->conn);
?>