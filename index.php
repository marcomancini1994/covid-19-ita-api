<?php 

	$requestBody = file_get_contents('https://covid2019-api.herokuapp.com/country/italy');
	$json = json_decode($requestBody, true);

    $confirmed = $json['Italy']['confirmed'];
    $death =  $json['Italy']['deaths'];
    $recovered =  $json['Italy']['recovered'];

    $date = $json['dt'];
    
    $speech = "Ultimo aggiornamento: $date\nNumero casi: $confirmed\nNumero decessi: $death\nNumero guariti: $recovered\nMappa dettagliata: https://bit.ly/38TTenD";
        
    $response = new \stdClass();
	$response->speech = $speech;
	$response->displayText = $speech;
	$response->source = "webhook";
	echo json_encode($response)

?>
