<?php
$servername = "localhost";
$username = "root";
$password = "1122334455";
$db = "film";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>