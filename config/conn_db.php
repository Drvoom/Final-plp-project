<?php
$localhost = "localhost";
$user_name = "root";
$password = "";
$db_name = "medconnectdb";

$conn = mysqli_connect($localhost, $user_name, $password, $db_name);

if (!$conn) {
   die("connection failed");
}
