<?php

require('templates/db_conn.php');
$mysqli = new mysqli($ip_address, $username, $password, $db_name);

// Check connection
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  exit();
}


function getPointsList() {
  $points_data = array(
    'run' => queryPointsListCategory('run'),
    'trick' => queryPointsTricks(),
    'ecp' => queryPointsListCategory('ecp'),
    'deduction' => queryPointsListCategory('deduction'),
  );
  
  return $points_data;
}




function queryPointsListCategory($category) {
  global $mysqli;
  $points_array = array();

  // prepare, bind + exceute to prevent injection
  $query = "SELECT `ID`, `Name`, `Difficulty`, `Points`, `Category`, `ScoreLimit` FROM `points_list` WHERE `Category` = ? ORDER BY `Name` ASC";
  $stmt = $mysqli->prepare($query);
  $stmt->bind_param('s', $category); // 's' specifies the variable type => 'string'
  $stmt->execute();

  if ($result = $stmt->get_result()) {  
    while ($obj = $result->fetch_object()) {
      $points_row = array(
        'id' => $obj->ID,
        'name' => $obj->Name,
        'difficulty' => $obj->Difficulty,
        'points' => $obj->Points,
        // 'description' => $obj->Description,
        'category' => $obj->Category,
        'score_limit' => $obj->ScoreLimit,
      );
      array_push($points_array, $points_row);
    }
    $result->free_result();
  }
  return $points_array;
}



// group trick list into trick types
function queryPointsTricks() {
  return array(
    'air' => queryPointsTrickList('air'),
    'park' => queryPointsTrickList('park'),
    'grab' => queryPointsTrickList('grab'),
    'flat_knuckle' => queryPointsTrickList('flat_knuckle'),
    'box_rail' => queryPointsTrickList('box_rail'),
  );
}

function queryPointsTrickList($tricktype) {
  global $mysqli;
  $points_array = array();

  $query = "SELECT `ID`, `Name`, `Difficulty`, `Points`, `Category`, `ScoreLimit`, `SkiType`, `TrickType` FROM `points_list` WHERE `Category` = 'trick' AND `TrickType` = ? ORDER BY `Name` ASC";
  $stmt = $mysqli->prepare($query);
  $stmt->bind_param('s', $tricktype); // 's' specifies the variable type => 'string'
  $stmt->execute();

  if ($result = $stmt->get_result()) {  
    while ($obj = $result->fetch_object()) {
      $points_row = array(
        'id' => $obj->ID,
        'name' => $obj->Name,
        'difficulty' => $obj->Difficulty,
        'points' => $obj->Points,
        'category' => $obj->Category,
        'score_limit' => $obj->ScoreLimit,
        'ski_type' => $obj->SkiType,
        'trick_type' => $obj->TrickType,
      );
      array_push($points_array, $points_row);
    }
    $result->free_result();
  }
  return $points_array;
}

?>