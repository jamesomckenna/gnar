<?php 
require(dirname(__FILE__).'/../templates/db_conn.php');
global $mysqli;

function getAllLeaderboards() {

}

function getPointsLeaderboard() {
    global $mysqli;

    $leaderboard_array = array();
    $sql_sel = "SELECT SUM(`psi`.`points`) AS Points, `u`.`FirstName`, `u`.`LastName` ";
    $sql_sel.= "FROM `points_submission_items` AS `psi` ";
    $sql_sel.= "LEFT JOIN `points_submission` AS `ps` ON `ps`.ID = `psi`.SubmissionID ";
    $sql_sel.= "LEFT JOIN `users` AS `u` ON `u`.ID = `ps`.UserID ";
    $sql_sel.= "GROUP BY `ps`.`UserID` ";
    $sql_sel.= "ORDER BY Points DESC;";

    if ($result = $mysqli->query($sql_sel)) {
        while ($obj = $result->fetch_object()) {
            $leaderboard_row = array(
                'name' => $obj->FirstName .' '. $obj->LastName,
                'points' => $obj->Points
              );
              array_push($leaderboard_array, $leaderboard_row);
        }
        $result->free_result();
    }
    return $leaderboard_array;
}

function getRunsLeaderboard() {
    
}

function getDistanceLeaderboard() {
    
}

function getSpeedLeaderboard() {
    
}
?>