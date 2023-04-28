<?php
$user_ip = $_SERVER['REMOTE_ADDR'];
$ip_list_file = fopen("ip_list.txt", "r");
$ip_list = array();

while (($line = fgets($ip_list_file)) !== false) {
  $ip = strtok($line, ";");
  $ip_list[] = $ip;
}

fclose($ip_list_file);

if (in_array($user_ip, $ip_list)) {
  include "allowed_users_page.php";
} else {
  include "not_allowed_users_page.php";
}
?>
