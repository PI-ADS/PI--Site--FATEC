<?php
  // Coloque aqui sua Chave de API
  $curl = curl_init();
  // Coloque aqui sua Chave de API
  $api_key = "84174a90-013e-4f55-bdb5-919fc9d2adf9-2fb0eb41-81a6-4dbf-be42-3cbc77c1302b";
  
  // Executa a chamada para API CNPJá!
  $cnpja_url="https://api.cnpja.com/office/";
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => $cnpja_url . preg_replace('/\D/', '',"33.000.167/0001-01   "),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: " . $api_key
    ),
  )); 
    
  $response = curl_exec($curl);
  
  curl_close($curl);
       
  // Decodifica o JSON de retorno
  $company = json_decode($response);          
  echo "Nome Fantasia: " . $response . "<br>";
?>