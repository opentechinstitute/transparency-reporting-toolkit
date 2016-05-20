<?php
$_SESSION['usa_search-warrants_total'] = $_POST['search-warrants'];
$_SESSION['usa_wiretap-orders_total'] = $_POST['wiretap-orders'];
$_SESSION['usa_pen-registers_total'] = $_POST['pen-register-orders'];
$_SESSION['usa_other-orders_total'] = $_POST['other-court-orders'];
$_SESSION['usa_criminal-subpoenas_total'] = $_POST['criminal-subpoenas'];
$_SESSION['usa_civil-subpoenas_total'] = $_POST['civil-subpoenas'];
$_SESSION['usa_emergency-requests_total'] = $_POST['emergency-requests'];

echo $_SESSION['usa_search-warrants_total'];

$url = "https://data.opentechinstitute.org/api/3/action/";
$auth_key = getKey();
$resource_id = "78377408-b750-4db9-bffb-dec9ef9c9477";

$data = new stdClass();
$data->resource_id = $resource_id;
$recorda = new stdClass();
$recorda->usa_search_warrants_total = $_SESSION['usa_search-warrants_total'];
$records = array();
$records[] = $recorda;
$data->records = $records;
$data_as_json = json_encode($data);
$ch = curl_init("{$url}datastore_create");
$headers = array("Authorization: {$auth_key}");
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_as_json);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
$results = curl_exec($ch);
curl_close($ch);
?>