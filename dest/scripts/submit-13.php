<?php

$_SESSION['non_usa_user_notification_sealed_number'] = $_POST['non-usa-notifications-sealed'];
$_SESSION['non_usa_user_notification_sealed_perc'] = $_POST['non-usa-notifications-pc-sealed'];
$_SESSION['non_usa_user_notification_not_sealed_notice_number'] = $_POST['non-usa-notifications-not-sealed-notice'];
$_SESSION['non_usa_user_notification_not_sealed_notice_perc'] = $_POST['non-usa-notifications-pc-not-sealed-notice'];
$_SESSION['non_usa_user_notification_not_sealed_number'] = $_POST['non-usa-notifications-not-sealed-no-notice'];
$_SESSION['non_usa_user_notification_not_sealed_perc'] = $_POST['non-usa-notifications-pc-not-sealed-no-notice'];
$_SESSION['non_usa_user_notification_total'] = $_POST['non-usa-notifications-total'];

print_r($_SESSION);
?>