<?php

header("Content-type: application/json");

$response ='{
    "ResultCode":0,
    "ResultDesc":"confirmation recieved successfully"
}';
$mpesaResponse= file_get_contents("php://input");

$logFile ="mpesa_response.txt";
$jsonMpesaResponse = json_decode($mpesaResponse,true);

$log = fopen($logFile,"a");
fwrite($log,$jsonMpesaResponse);
fclose($log);
echo $response;

?>