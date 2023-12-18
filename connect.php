<?php
$HOST = 'localhost';
$USER = 'root';
$PASS = '';
$DB = 'arc';

$conn = mysqli_connect($HOST,$USER,$PASS,$DB);
if(!$conn)
{
    die('Connection failed: '.mysqli_connect_error());
}
?>