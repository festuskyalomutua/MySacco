<?php
session_start();

$valid_user = "member";
$valid_pass = "sacco123";

if ($_POST["username"] === $valid_user && $_POST["password"] === $valid_pass) {
  $_SESSION["user"] = $valid_user;
  header("Location: dashboard.php");
  exit();
} else {
  echo "Invalid credentials. <a href='login.html'>Try again</a>";
}
?>
