<?php

$_SESSION['non-usa_user-notification_sealed_number'] = $_POST['non-usa-notifications-sealed'];
$_SESSION['non-usa_user-notification_sealed_perc'] = $_POST['non-usa-notifications-pc-sealed'];
$_SESSION['non-usa_user-notification_not-sealed-notice_number'] = $_POST['non-usa-notifications-not-sealed-notice'];
$_SESSION['non-usa_user-notification_not-sealed-notice_perc'] = $_POST['non-usa-notifications-pc-not-sealed-notice'];
$_SESSION['non-usa_user-notification_not-sealed_number'] = $_POST['non-usa-notifications-not-sealed-no-notice'];
$_SESSION['non-usa_user-notification_not-sealed_perc'] = $_POST['non-usa-notifications-pc-not-sealed-no-notice'];
$_SESSION['non-usa_user-notification_total'] = $_POST['non-usa-notifications-total'];

print_r($_SESSION);
?>