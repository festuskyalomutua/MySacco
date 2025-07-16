<?php
$host = "localhost";
$user = "root"; // your DB user
$pass = "";     // your DB password
$db = "sacco";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
