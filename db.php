<?php

// Enable us to use Headers
ob_start();

// Set sessions
if (!isset($_SESSION)) {
    session_start();
}

global $error_message;

$hostname = "localhost";
$username = "root";
$password = "Passw0rd";
$dbname = "anas";

$connection = mysqli_connect($hostname, $username, $password, $dbname) or die("Database connection not established.");
