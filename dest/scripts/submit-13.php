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

// $url = "https://data.opentechinstitute.org/api/3/action/";
// $auth_key = getKey();
// $resource_id = "78377408-b750-4db9-bffb-dec9ef9c9477";
//
// $data = new stdClass();
// $data->resource_id = $resource_id;
//
// $fielda = new stdClass();
// $fielda->id = "company";
//
// $fieldb = new stdClass();
// $fieldb->id = "b";
//
// $fields = array();
// $fields[] = $fielda;
// $fields[] = $fieldb;
//
// $recorda = new stdClass();
// $recorda->company = $_SESSION['company_name'];
// $recorda->b = "zzz";
//
// $records = array();
// $records[] = $recorda;
//
// $data->fields = $fields;
// $data->records = $records;
// $data_as_json = json_encode($data);
// $ch = curl_init("{$url}datastore_create");
// $headers = array("Authorization: {$auth_key}");
// curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
// curl_setopt($ch, CURLOPT_HEADER, 0);
// curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $data_as_json);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
// $results = curl_exec($ch);
// curl_close($ch);
// echo $results;

// function passDataToCKAN(arrayData) {
//   $url = "https://data.opentechinstitute.org/api/3/action/";
//   $auth_key = $key;
//   $resource_id = "78377408-b750-4db9-bffb-dec9ef9c9477";
//   $data = new stdClass();
//   $data->resource_id = $resource_id;
//   $ar = count(arrayData);
//   for ($i = 0; $i <= $ar; $i++) {
//     echo arrayData[$i];
//     $records = new stdClass();
//     $records->
//   }
//   // $recorda = new stdClass();
//   $recorda->company_name = $_SESSION['company_name'];
//   $records = array();
//   $records[] = $recorda;
//   $data->records = $records;
//   $data_as_json = json_encode($data);
//   $ch = curl_init("{$url}datastore_create");
//   $headers = array("Authorization: {$auth_key}");
//   curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//   curl_setopt($ch, CURLOPT_HEADER, 0);
//   curl_setopt($ch, CURLOPT_POST, 1);
//   curl_setopt($ch, CURLOPT_POSTFIELDS, $data_as_json);
//   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//   curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
//   curl_close($ch);
// }
?>