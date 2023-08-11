<?php
require('../templates/db_conn.php');
global $mysqli;

$data_json = file_get_contents('php://input');
$data = json_decode($data_json);

if (json_last_error() !== JSON_ERROR_NONE) {
    exit();
}

if (count($data->points_list) == 0) {
    exit();
}

// Check connection
if ($mysqli->connect_errno) {
    echo json_encode("Failed to connect to MySQL: " . $mysqli->connect_error);
    exit();
}

$submit_id = time(); // use current time as unique ID
$user_id = 999; // test user ID. User ID will be obtained and saved at login

$sql_ins = "BEGIN;";
$sql_ins .= "INSERT INTO `points_submission`(`ID`, `UserID`) VALUES({$submit_id}, {$user_id});";
foreach ($data->points_list as $points_list) {
    $score_id = $points_list->id;
    $qty = $points_list->qty;
    $points = getPointsFromCode($score_id) * (int)$points_list->qty;
    $sql_ins .= "INSERT INTO `points_submission_items`(`SubmissionID`, `ScoreID`, `Qty`, `Points`) VALUES({$submit_id}, {$score_id}, {$qty}, {$points});";
}
$sql_ins .= "COMMIT;";

// Execute multi query
$mysqli->multi_query($sql_ins);

if ($mysqli->connect_errno) {
    echo json_encode("Failed to connect to MySQL: " . $mysqli->connect_error);
    exit();
}

$mysqli->close();

echo json_encode('SUCCESS!!');



function getPointsFromCode($score_id)
{
    global $mysqli;
    $points = 0;
    $sql_sel = "SELECT `Points` FROM `points_list` WHERE `ID` = {$score_id} LIMIT 1";
    if ($result = $mysqli->query($sql_sel)) {
        while ($obj = $result->fetch_object()) {
            $points = $obj->Points;
        }
        $result->free_result();
    }
    return (int)$points;
}

?>