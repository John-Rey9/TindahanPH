<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "data_info";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if(!$conn){
    die("Database connection failed!");
}

?>