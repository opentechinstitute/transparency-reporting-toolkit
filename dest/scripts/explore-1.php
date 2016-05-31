<?php

function getKey() {
  if ($handle = opendir('./scripts/resources/')) {
      while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
          $path = "./scripts/resources/".$entry;
        }
      }
      closedir($handle);
  }
  return $key = file_get_contents($path);
}

$url = "https://data.opentechinstitute.org/api/3/action/";
$auth_key = getKey();
$resource_id = "78377408-b750-4db9-bffb-dec9ef9c9477";

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