<?php
$_SESSION['company_name'] = $_POST['company'];

// echo json_encode($_SESSION['company_name']);




//
// $data = new stdClass();
// $data->resource_id = $resource_id;
//
// $recorda = new stdClass();
// $recorda->company_name = $_SESSION['company_name'];
// $recorda->testing = 'stuff';
//
// $records = array();
// $records[] = $recorda;
// $data->records = $records;
// // echo json_encode($data);
//
// $data_as_json = json_encode($data);
// $ch = curl_init("{$url}datastore_create");
// $headers = array("Authorization: {$auth_key}");
// curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
// curl_setopt($ch, CURLOPT_HEADER, 0);
// curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $data_as_json);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
// curl_exec($ch);
// curl_close($ch);
// echo $ch;
?>