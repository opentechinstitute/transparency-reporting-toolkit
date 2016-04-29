<?php
if (!empty($_POST)) {
  $_SESSION['company'] = $_POST;
  $company = $_SESSION['company'];
  print_r($_POST);
}
echo $_POST['company'];
echo $_POST['my_html_input_tag'];

?>