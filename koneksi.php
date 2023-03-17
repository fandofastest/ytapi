<?php
$servername = "localhost";
$username = "api_fando";
$password = "Palang66";
$dbname = "api_videoapi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

