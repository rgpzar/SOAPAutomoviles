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
        $sql = "SELECT t2.modelo FROM marcas AS t1 JOIN modelos AS t2 ON t1.id = t2.id;";
        $result = $this->conn->query($sql);

        return $result;
    }


}

$coches = new Automoviles();

/*var_dump($coches->conn);

echo '<br>';

echo '<pre>';

$marcasURL = $coches->obtenerMarcasUrl();

echo '<pre/>';

echo '<pre>';

$modelos = $coches->obtenerModelosPorMarca('test');
var_dump($modelos);

echo '<pre/>';*/

?>