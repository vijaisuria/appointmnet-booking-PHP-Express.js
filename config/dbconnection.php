<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "mit-hc";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>