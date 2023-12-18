<?php
require_once 'connect.php';
date_default_timezone_set('Asia/Jakarta');


$salt = '5p4r3p4rt!@#';
$username = $_POST['username'];
$password = $_POST['password'].$salt;
$createdTime = date('Y-m-d H:m:s');
$activated_at = date('Y-m-d H:m:s');
$hash = password_hash($password, PASSWORD_DEFAULT);

//check if username already exists and check if username is empty
if (empty($username)) {
    echo "Username is empty!";
    die();
} else {
    $sql = "SELECT * FROM user_scanner WHERE username='$username'";
    $query = "INSERT INTO user_scanner (username, password, created_at, activated_at) VALUES ('$username', '$hash', '$createdTime', '$activated_at')";
    $result = mysqli_query($conn, $sql);
    $usernamecheck = mysqli_num_rows($result);
    if ($usernamecheck > 0) {
        echo (json_encode(array("statusCode"=>201, "message"=>"Username already exists!")));
        echo (json_encode(array("statusCode"=> 0,"message"=> "STOBAR-SCANNER-USER-EXISTS")));
        die();
    }else{
        if (empty($password)){
            echo "Password is empty!";
            die();
        }else{
            if (mysqli_query($conn, $query)) {
                echo (json_encode(array("statusCode"=>200, "message"=>"User created successfully!", "createdTime"=>$createdTime, "username"=>$username, "password"=>$hash, "id"=>mysqli_insert_id($conn))));
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }
}