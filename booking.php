<?php

ini_set('display_errors', 1); error_reporting(-1);

$name = $_POST["name"];
$date = $_POST["date"];
$time = $_POST["time"];
$email = $_POST["email"];


$host = "";
$dbname = "";
$username = "";
$password = "";

$conn = mysqli_connect($host, $username, $password, $dbname)

// Check for connection errors
if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

// If no connection errors, echo success message
echo "Connection successful.";