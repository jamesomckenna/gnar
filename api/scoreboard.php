<?php 
echo "hello world, this RUSS GNAR is the scoreboard API test<br><br>";

require('templates/db_conn.php');

$mysqli = new mysqli($ip_address,$username,$password,$db_name);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
} else {
    echo "Database connection successful!<br><br>";
}

// Perform query
if ($result = $mysqli -> query("SELECT * FROM `scoreboard`")) {
  echo "Num of rows returned: " . $result -> num_rows."<br><br>";

  echo "Rows: <br>";
  while ($obj = $result -> fetch_object()) {
    echo json_encode($obj)."<br>";
  }
  $result -> free_result();
}

$mysqli -> close();
?>