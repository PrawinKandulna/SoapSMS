<?php

ini_set('soap.wsdl_cache_enabled', 0);
ini_set('soap.wsdl_cache_ttl', 900);
ini_set('default_socket_timeout', 1000);

$wsdl = 'http://10.10.15.5:7800/SMSOutbound?wsdl';

$options = array(
		'uri'=>'http://10.10.15.5:7800/SMSOutbound',
		'connection_timeout'=>30,
		'trace'=>true,
		'encoding'=>'UTF-8',
		'exceptions'=>true,
	);

//-----------------------------------------------------------

try {
	$soap = new SoapClient($wsdl, $options);
	echo ("</br></br>List of All Functions : </br>");
	$data = $soap->__getFunctions();
	$data = json_encode($data);
	echo($data);	
} catch(Exception $e) {	
	print_r("</br></br>ERROR While Getting ALL Functions : </br>");
	print_r($e->getMessage());
}

?>