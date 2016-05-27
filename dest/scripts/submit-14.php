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

$data = new stdClass();
$data->resource_id = $resource_id;

$titles = array("company_name", "data_submitted_by_authorised_user", "months", "year", 'usa_search_warrants_total', 'usa_wiretap_orders_total', 'usa_pen_registers_total', 'usa_other_orders_total', 'usa_criminal_subpoenas_total','usa_civil_subpoenas_total','usa_emergency_requests_total','usa_requests_total','usa_types_selectors_specified','usa_accounts_responsive', 'usa_search_warrants_rejected_number','usa_search_warrants_rejected_perc','usa_search_warrants_no_data_number','usa_search_warrants_no_data_perc','usa_search_warrants_content_disc_number','usa_search_warrants_content_disc_perc','usa_search_warrants_non_content_disc_number','usa_search_warrants_non_content_disc_perc','usa_search_warrants_total_validation', 'usa_wiretap_orders_rejected_number', 'usa_wiretap_orders_rejected_perc','usa_wiretap_orders_no_data_number','usa_wiretap_orders_no_data_perc','usa_wiretap_orders_content_disc_number','usa_wiretap_orders_content_disc_perc','usa_wiretap_orders_non_content_disc_number','usa_wiretap_orders_non_content_disc_perc','usa_wiretap_orders_total_validation','usa_pen_registers_rejected_number','usa_pen_registers_rejected_perc','usa_pen_registers_no_data_number','usa_pen_registers_no_data_perc','usa_pen_registers_content_disc_number','usa_pen_registers_content_disc_perc','usa_pen_registers_non_content_disc_number','usa_pen_registers_non_content_disc_perc','usa_pen_registers_total_validation', 'usa_other_orders_rejected_number','usa_other_orders_rejected_perc','usa_other_orders_no_data_number','usa_other_orders_no_data_perc','usa_other_orders_content_disc_number','usa_other_orders_content_disc_perc','usa_other_orders_non_content_disc_number','usa_other_orders_non_content_disc_perc','usa_other_orders_total_validation', 'usa_criminal_subpoenas_rejected_number', 'usa_criminal_subpoenas_rejected_perc','usa_criminal_subpoenas_no_data_number', 'usa_criminal_subpoenas_no_data_perc','usa_criminal_subpoenas_content_disc_number','usa_criminal_subpoenas_content_disc_perc','usa_criminal_subpoenas_non_content_disc_number','usa_criminal_subpoenas_non_content_disc_perc','usa_criminal_subpoenas_total_validation','usa_civil_subpoenas_rejected_number','usa_civil_subpoenas_rejected_perc','usa_civil_subpoenas_no_data_number','usa_civil_subpoenas_no_data_perc','usa_civil_subpoenas_content_disc_number','usa_civil_subpoenas_content_disc_perc','usa_civil_subpoenas_non_content_disc_number','usa_civil_subpoenas_non_content_disc_perc','usa_civil_subpoenas_total_validation', 'usa_emergency_requests_rejected_number','usa_emergency_requests_rejected_perc','usa_emergency_requests_no_data_number','usa_emergency_requests_no_data_perc','usa_emergency_requests_content_disc_number','usa_emergency_requests_content_disc_perc','usa_emergency_requests_non_content_disc_number','usa_emergency_requests_non_content_disc_perc','usa_emergency_requests_total_validation','usa_user_notification_sealed_number','usa_user_notification_sealed_perc','usa_user_notification_not_sealed_notice_number','usa_user_notification_not_sealed_notice_perc','usa_user_notification_not_sealed_number','usa_user_notification_not_sealed_perc','usa_user_notification_total','non_usa_processes_received_retrospective','non_usa_processes_received_prospective','non_usa_requests_total','non_usa_selectors_specified','non_usa_accounts_responsive','non_usa_compliance_rejected_number','non_usa_compliance_rejected_perc','non_usa_compliance_no_data_number','non_usa_compliance_no_data_perc','non_usa_compliance_content_disc_number','non_usa_compliance_content_disc_perc','non_usa_compliance_non_content_disc_number','non_usa_compliance_non_content_disc_perc','non_usa_requests_total_validation','non_usa_user_notification_sealed_number','non_usa_user_notification_sealed_perc','non_usa_user_notification_not_sealed_notice_number','non_usa_user_notification_not_sealed_notice_perc','non_usa_user_notification_not_sealed_number','non_usa_user_notification_not_sealed_perc','non_usa_user_notification_total','submission_timestamp');

$fields = array();
$records = array();

$maxNo = count($titles);

$newRecord = new stdClass();

for ($i = 0; $i < $maxNo-1; $i++) {
  // set up fields
  // TODO: set these up separately once, instead of every time
  ${'field'.$i} = new stdClass();
  ${'field'.$i}->id = $titles[$i];
  if ($i == 0 || $i == 1 || $i == 2 || $i == 3 || $i == $maxNo-1) {
    ${'field'.$i}->type = 'text';
  } else {
    ${'field'.$i}->type = 'float';
  }
  $fields[] = ${'field'.$i};

  // set up record
  // ${'record'.$i} = new stdClass();
  $newRecord->$titles[$i] = $_SESSION[$titles[$i]];
}

$records[] = $newRecord;


$data->fields = $fields;
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
// temporary workaround while Nat works on the cert verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$results = curl_exec($ch);
curl_close($ch);
echo $results;
?>