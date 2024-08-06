<?php
$ip = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$time = date('Y-m-d H:i:s');
$details = "IP: $ip, User Agent: $user_agent, Time: $time\n";
$file = 'details.txt';
file_put_contents($file, $details, FILE_APPEND);
?>