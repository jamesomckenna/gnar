<?php
require(dirname(__FILE__).'/../templates/db_conn.php');
global $mysqli;

if(!isset($_COOKIE['gnar_user'])) {
    $result = [
        'success' => false,
        'message' => "Account login required",
    ];
    exit(json_encode($result));
}

$user_id = $_COOKIE['gnar_user'];
$data_json = file_get_contents('php://input');
$data = json_decode($data_json);

if (json_last_error() !== JSON_ERROR_NONE) {
    $result = [
        'success' => false,
        'message' => "Invalid data.",
    ];
    exit(json_encode($result));
}

if (count($data->points_list) == 0) {
    $result = [
        'success' => false,
        'message' => "Points are required",
    ];
    exit(json_encode($result));
}

// Check connection
if ($mysqli->connect_errno) {
    $result = [
        'success' => false,
        'message' => "Failed to connect to MySQL: " . $mysqli->connect_error,
    ];
    exit(json_encode($result));
}

$submit_id = intval(microtime(true) * 1000); // use current time in millisecs as unique ID
$user_id = $mysqli->real_escape_string($user_id);
$sql_ins = "BEGIN;";
$sql_ins .= "INSERT INTO `points_submission`(`ID`, `UserID`) VALUES({$submit_id}, {$user_id});";
foreach ($data->points_list as $points_list) {
    $score_id = $mysqli->real_escape_string($points_list->id);
    $qty = $mysqli->real_escape_string($points_list->qty);
    $points = getPointsFromCode($score_id) * (int)$points_list->qty;
    $points = $mysqli->real_escape_string($points);
    $sql_ins .= "INSERT INTO `points_submission_items`(`SubmissionID`, `ScoreID`, `Qty`, `Points`) VALUES({$submit_id}, {$score_id}, {$qty}, {$points});";
}
$sql_ins .= "COMMIT;";

// Execute multi query
$mysqli->multi_query($sql_ins);

if ($mysqli->connect_errno) {
    $result = [
        'success' => false,
        'message' => "Failed to connect to MySQL: " . $mysqli->connect_error,
    ];
    exit(json_encode($result));
}

$mysqli->close();

$result = [
    'success' => true,
    'message' => "Successfully submitted points",
];
exit(json_encode($result));


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