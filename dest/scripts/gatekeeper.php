<?php
if (is_null($_SESSION['data_submitted_by_authorised_user'])){
  header("Location: http://transparency.opentechinstitute.org/");
  exit();
}
?>