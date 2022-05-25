<?php
header('Content-Type: application/json; charset=utf-8');

$bearer_token = "Bearer $2y$10$2DkIHkWoYvCH.U2U.2dCi.SrDITVitZrJhQGaSrFQ3Hcsn/RnwXOe";
$url = "https://insitu.fk.ub.ac.id/api/auth/listallpejabat";

$headers = array(
  'Accept: application/json',
  'Content-type: application/json',
  'Authorization: ' . $bearer_token,
);

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
// curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,  0);
curl_setopt($curl, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );        
// curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($msg));
$response = curl_exec($curl);
curl_close($curl);

echo $response;