<?php
$params = array(
    'location' => 'http://localhost/SOAPAutomoviles/server/AutoModel.php',
    'uri' => 'http://localhost/SOAPAutomoviles/server/AutoModel.php',
    'trace' => 1
);

$client = new SoapClient(null, $params);


$authParams = new stdClass();

$authParams->username = 'ies';
$authParams->password = 'daw';

$headerParams = new SoapVar($authParams, SOAP_ENC_OBJECT);
$header = new SoapHeader('localhost', 'authenticate', $headerParams, false);

$client->__setSoapHeaders($header);
//var_dump($client->obtenerMarcasUrl());
?>