<?php

$servername = "localhost";
$username = "supanut";
$password = "donut31880";
$dbname = "test01";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

?>