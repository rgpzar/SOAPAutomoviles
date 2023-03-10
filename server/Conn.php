<?php
class Conn{
    private $host;
    private $db;
    private $user;
    private $pass;

    private static $conn;
    
    public function __construct($host, $db, $user, $pass){
        $this->host = $host;
        $this->db = $db;
        $this->user = $user;
        $this->pass = $pass;

        if(is_null(self::$conn)) self::setConn($this->host, $this->db, $this->user, $this->pass);
    }

    public function getConn(){
        return self::$conn;
    }

    public static function setConn($host, $db, $user, $pass){
        try{
            self::$conn = new PDO("mysql:host=".$host.";dbname=".$db, $user, $pass);
            self::$conn->exec("SET CHARACTER SET UTF8");
        }catch(Exception $e){
            echo "Linea del error".$e->getLine();
            die("Error: ".$e->getMessage());
        }
    }

    public function query($sql){
        $prep = self::$conn->prepare($sql);
        $prep->execute();
        $result = $prep->fetchAll();

        return $result;
    }

}
?>