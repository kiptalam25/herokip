<?php
$str = 'Wz4JELUAvWk1XbAslnSNyarZ1pw7wp9o:CJfcyc5tGOVMmkYm';
echo base64_encode($str);

echo "V3o0SkVMVUF2V2sxWGJBc2xuU055YXJaMXB3N3dwOW86Q0pmY3ljNXRHT1ZNbWtZbQ";


$ch = curl_init('https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials');
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Bearer '.$str]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);
echo $response;

?>