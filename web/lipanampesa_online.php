<?php
$url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
$ACCESS_TOKEN=$_POST["token"];
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.$ACCESS_TOKEN)); //setting custom header


$curl_post_data = array(
  //Fill in the request parameters with valid values
    "BusinessShortCode"=>  174379,
    "Password"=>  "MTc0Mzc5YmZiMjc5ZjlhYTliZGJjZjE1OGU5N2RkNzFhNDY3Y2QyZTBjODkzMDU5YjEwZjc4ZTZiNzJhZGExZWQyYzkxOTIwMjIwNjE1MTMwMTU5",
    "Timestamp"=>  "20220615130159",
    "TransactionType"=>  "CustomerPayBillOnline",
    "Amount"=>  $_POST["amount"],
    "PartyA"=>  $_POST["phoneA"],
    "PartyB"=>  174379,
    "PhoneNumber"=>  $_POST["phoneA"],
    "CallBackURL"=>  "https://whispering-shelf-32403.herokuapp.com/confirmation.php",
    "AccountReference"=>  "CompanyXLTD",
    "TransactionDesc"=>  "Payment for Parking" 
);

$data_string = json_encode($curl_post_data);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);

$curl_response = curl_exec($curl);
print_r($curl_response);

echo $curl_response;

?>