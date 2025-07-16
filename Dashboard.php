<?php
session_start();
if (!isset($_SESSION["user"])) {
  header("Location: login.html");
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Member Dashboard</title>
</head>
<body>
  <h1>Welcome, <?php echo htmlspecialchars($_SESSION["user"]); ?>!</h1>
  <p>This is your SACCO dashboard.</p>
  <ul>
    <li><a href="loan-status.php">Loan Status</a></li>
    <li><a href="profile.php">My Profile</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</body>
</html>

