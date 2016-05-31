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
?>