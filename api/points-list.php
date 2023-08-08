<?php

$mysqli = new mysqli($ip_address,$username,$password,$db_name);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
} else {
    echo "Database connection successful!<br><br>";
}  

?>