<?php

$ch = curl_init('https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer kT3F1CB571VrAEuSVzqFAQvGeQw7',
    'Content-Type: application/json'
]);
curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_POSTFIELDS,{
    "BusinessShortCode": 174379,
    "Password": "MTc0Mzc5YmZiMjc5ZjlhYTliZGJjZjE1OGU5N2RkNzFhNDY3Y2QyZTBjODkzMDU5YjEwZjc4ZTZiNzJhZGExZWQyYzkxOTIwMjIwNjE1MTMwMTU5",
    "Timestamp": "20220615130159",
    "TransactionType": "CustomerPayBillOnline",
    "Amount": $_POST["amount"],
    "PartyA": $_POST["phoneA"],
    "PartyB": 174379,
    "PhoneNumber": $_POST["phoneA"],
    "CallBackURL": "https://whispering-shelf-32403.herokuapp.com/confirmation.php",
    "AccountReference": "CompanyXLTD",
    "TransactionDesc": "Payment of X" 
  });
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response     = curl_exec($ch);
curl_close($ch);

echo $response;

?>