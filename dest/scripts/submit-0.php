<?php
// if (isset($_POST)) {
  $_SESSION['company'] = $_POST['company'];
  echo json_encode($_SESSION['company']);
// }
?>