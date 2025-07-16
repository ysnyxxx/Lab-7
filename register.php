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
  <title>Register</title>
</head>
<body>
  <h2>Register User</h2>
  <form action="register_action.php" method="post">
    Matric: <input type="text" name="matric" required><br>
    Name: <input type="text" name="name" required><br>
    Password: <input type="password" name="password" required><br>
    Role:
    <select name="role" required>
      <option value="">Please select</option>
      <option value="student">Student</option>
      <option value="lecturer">Lecturer</option>
    </select><br><br>
    <input type="submit" value="Submit">
  </form>
</body>
</html>
