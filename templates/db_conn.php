<?php
$ip_address = "127.0.0.1";
$username = "root";
$password = "";
$db_name = "gnar";
$db_port = "3306";

$mysqli = new mysqli($ip_address, $username, $password, $db_name);
$mysqli->set_charset("utf8mb4");
?>