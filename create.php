<?php
require_once 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];
$createdTime = date('Y-m-d H:i:s');
$hash = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO user_scanner (username, password, created_at) VALUES ('$username', '$hash', '$createdTime')";


//check if username already exists and check if username is empty
if (empty($username)) {
    echo "Username is empty!";
    die();
} else {
    $sql = "SELECT * FROM user_scanner WHERE username='$username'";
    $query = "INSERT INTO user_scanner (username, password, created_at) VALUES ('$username', '$hash', '$createdTime')";
    $result = mysqli_query($conn, $sql);
    $usernamecheck = mysqli_num_rows($result);
    if ($usernamecheck > 0) {
        echo "Username already exists!";
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
?>
