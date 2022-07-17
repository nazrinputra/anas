<?php
global $error_message, $logged_in;

// Enable us to use Headers
ob_start();

// Set sessions
if (!isset($_SESSION)) {
    session_start();
}

// Check logged in status
if (isset($_SESSION["id"])) {
    $logged_in = true;
} else {
    $logged_in = false;
}

if (getenv('APP_ENV' == 'PROD')) {
    $hostname = "us-cdbr-east-06.cleardb.net";
    $username = "bd7154bcfb7751";
    $password = "41b3457f";
    $dbname = "heroku_fe00c8042680717";
} else {
    $hostname = "localhost";
    $username = "root";
    $password = "Passw0rd";
    $dbname = "anas";
}

$connection = mysqli_connect($hostname, $username, $password, $dbname) or die("Database connection not established.");
