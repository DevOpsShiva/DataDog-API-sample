<?php
$eventUrl = '/api/v1/monitor';
$server = 'localhost';
$serverPort = 8125;
$apiKey = '0ec21c1be73147c48de541711651fc6d';
$appKey = 'fb4eb68c3d60e01442e723d5839994ba63433a90';
$datadogHost = 'https://app.datadoghq.com';
$submitEventsOver = 'TCP';

$vals = array('group_states'=>'alert,warn','tags'=>'');

$url = $datadogHost . $eventUrl
             . '?api_key='          . $apiKey
             . '&application_key='  . $appKey
             . '&group_states=alert,warn';



$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "postman-token: fa43a198-ecc0-9d01-57c1-8cfea8bf4731"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?>