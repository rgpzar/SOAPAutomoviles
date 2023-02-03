<?php
require_once "Conn.php";

class AutoModel{
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

        return $marcasURL;
    }

    public function obtenerMarca($idMarca){
        $marcasURL = array();
        $sql = "SELECT marca FROM marcas WHERE id=$idMarca;";
        $result = $this->conn->query($sql);

        $marca = $result[0]['marca'];

        return $marca;
    }

    public function obtenerModelosPorMarca($marca){
        $sql = "SELECT t2.modelo FROM marcas AS t1 INNER JOIN modelos AS t2 ON t1.id = t2.marca WHERE t1.marca=\"$marca\";";
        $result = $this->conn->query($sql);

        return $result;
    }

    public static function authenticate($header_params) {

        if($header_params->username == 'ies' && $header_params->password == 'daw') {
       
        return true;
       
        } 
       
        else throw new SoapFault('Wrong user/pass combination', 401); 
       
        }
}

$params = array(
    'uri' => 'http://localhost/SOAPAutomoviles/server/AutoModel.php',
    'location' => 'http://localhost/SOAPAutomoviles/server/AutoModel.php'
);

$server = new SoapServer(null, $params);
$server->setClass('AutoModel');
$server->handle();
?>