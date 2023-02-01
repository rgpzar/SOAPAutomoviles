<?php
require_once "Conn.php";

class Automoviles{
    public $conn;

    public function __construct(){
        $this->conn = new Conn('localhost', 'coches', 'root', '');
    }
 
    public function obtenerMarcasUrl(){
        $marcasURL = array();
        $sql = "SELECT marca, `url` FROM marcas;";
        $result = $this->conn->query($sql);
        for ($i = 0; $i < sizeof($result); $i++) {
            $marca = $result[$i]['marca'];
            $url = $result[$i]['url'];

            $marcasURL[$marca] = $url;
        }


        var_dump($marcasURL);

        return $marcasURL;
    }

    public function obtenerModelosPorMarca($marca){
        //$sql = "";
        //$this->conn->query($sql);

        return "NOT FINISHED";
    }

    public function authenticate(){
        //
    }
}

$coches = new Automoviles();

var_dump($coches->conn);

echo '<br>';

echo '<pre>';

$marcasURL = $coches->obtenerMarcasUrl();

echo '<pre/>';

echo '<pre>';

echo $modelos = $coches->obtenerModelosPorMarca('test');

echo '<pre/>';

?>