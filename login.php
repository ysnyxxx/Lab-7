<?php
session_start();
if (!isset($_SESSION['matric'])) {
  header("Location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <h2>Login</h2>
  <form action="login_action.php" method="post">
    Matric: <input type="text" name="matric" required><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" value="Login">
  </form>
  <p><a href="register.php">Register here if you have not.</a></p>
</body>
</html>
