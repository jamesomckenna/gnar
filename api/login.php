<?php
require(dirname(__FILE__) . '/../templates/db_conn.php');
global $mysqli;

$data_json = file_get_contents('php://input');
$data = json_decode($data_json);

if (json_last_error() !== JSON_ERROR_NONE) {
    $result = [
        'success' => false,
        'message' => "Invalid data.",
    ];
    exit(json_encode($result));
}

if (!isset($data->name)) {
    $result = [
        'success' => false,
        'message' => "Username is required.",
    ];
    exit(json_encode($result));
}

$result = loginUser($data->name);
exit(json_encode($result));


function loginUser($username)
{
    global $mysqli;
    $user_id = null;
    $fullname = $username;
    $username = $mysqli->real_escape_string($username);
    $sql_sel = "SELECT `ID`, CONCAT(`FirstName`, ' ', `LastName`) AS FullName FROM `users` WHERE CONCAT(`FirstName`, ' ', `LastName`) = '$username' LIMIT 1;";

    if ($result = $mysqli->query($sql_sel)) {
        while ($obj = $result->fetch_object()) {
            $user_id = $obj->ID;
            $fullname = $obj->FullName;
        }
        $result->free_result();
    }

    if(empty($user_id)){
        return [
            'success' => false,
            'message' => "User '".$username."' not found",
        ];
    }

    createCookie('gnar_user', $user_id);
    return [
        'success' => true,
        'message' => "Welcome ".$fullname."!",
    ];
}

function createCookie($cookie_name, $cookie_value, $days_alive = 14)
{
    setcookie($cookie_name, $cookie_value, time() + (86400 * $days_alive), "/");
}
?>