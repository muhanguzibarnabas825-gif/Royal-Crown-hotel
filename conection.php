<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "allandb";

// Create connection
$conn = new mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>