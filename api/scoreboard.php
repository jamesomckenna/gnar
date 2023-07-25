<?php 
echo "hello world, this RUSS GNAR is the scoreboard API test<br><br>";

$ip_address = "sql200.infinityfree.com";
$username = "if0_34669910";
$password = "msbLuXx5sWhwG1";
$db_name = "if0_34669910_russ_gnar";
$db_port = "3306";

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

  // Free result set
  $result -> free_result();
}

$mysqli -> close();
?>