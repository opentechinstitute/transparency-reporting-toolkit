<?php


$ch2 = curl_init("{$url}datastore_search?resource_id={$resource_id}");
$headers = array("Authorization: {$auth_key}");
curl_setopt($ch2, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch2, CURLOPT_HEADER, 0);
curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch2, CURLOPT_TIMEOUT, 30);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch2, CURLOPT_FRESH_CONNECT, true);
$response = curl_exec($ch2);
print_r($response); echo "\n";
curl_close($ch2);

?>