<?php

require_once 'connect.php';
require_once 'site.php';

$salt = '5p4r3p4rt!@#';
$username = $_POST['username'];
$password = $_POST['password'] . $salt;
date_default_timezone_set('Asia/Jakarta');
$lastLogin = date('Y-m-d H:i:s');

if (isset($_POST['username']) && isset($_POST['password'])) {
    $sql = "SELECT * FROM user_scanner WHERE username='$username'";
    $updateLogin = "UPDATE user_scanner SET last_login='$lastLogin' WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $usernamecheck = mysqli_num_rows($result);

    if ($usernamecheck > 0) {
        $row = mysqli_fetch_assoc($result);
        $hash = $row['password'];

        if (password_verify($password, $hash)) {
            echo (json_encode(array("statusCode" => 200, "message" => "Login success!", "username" => $row['username'], "lastLogin" => $row['last_login'], "hash" => $hash,"password" => $password)));
        } else {
            echo (json_encode(array("statusCode" => 201, "message" => "Wrong password!")));
        }
    } else {
        echo (json_encode(array("statusCode" => 404, "message" => "Username does not exist!")));
    }

    if (mysqli_query($conn, $updateLogin)) {
        echo (json_encode(array("statusCode" => 200, "message" => "Last login updated successfully!", "lastLogin" => $lastLogin)));
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
