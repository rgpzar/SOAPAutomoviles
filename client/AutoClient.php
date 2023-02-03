<?php
$params = array(
    'location' => 'http://localhost/SOAPAutomoviles/server/AutoModel.php',
    'uri' => 'http://localhost/SOAPAutomoviles/server/AutoModel.php',
    'trace' => 1
);

$client = new SoapClient(null, $params);

//var_dump($client->obtenerMarcasUrl());
?>