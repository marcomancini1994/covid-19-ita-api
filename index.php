<?php 

    $requestBody = file_get_contents('https://covid2019-api.herokuapp.com/country/italy');
    $json = json_decode($requestBody, true);

    $confirmed = $json['Italy']['confirmed'];
    $death =  $json['Italy']['deaths'];
    $recovered =  $json['Italy']['recovered'];

    $date = $json['dt'];
    
    $speech = "Ultimo aggiornamento: $date\nNumero casi: $confirmed\nNumero decessi: $death\nNumero guariti: $recovered\nMappa dettagliata: https://bit.ly/38TTenD";
    
    $resp = '{
		  "payload": {
		    "google": {
		      "expectUserResponse": true,
		      "richResponse": {
		        "items": [
		          {
		            "simpleResponse": {
		              "textToSpeech": "'.$speech.'"
		            }
		          }
		        ]
		      }
		    }
		  }
		}
	     ';
	$response = json_encode($resp, true);
	echo $response;

?>
