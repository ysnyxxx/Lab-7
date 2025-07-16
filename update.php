<?php
include 'db_config.php';
$matric = $_GET['matric'];

$sql = "SELECT * FROM users WHERE matric = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $matric);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head><title>Update User</title></head>
<body>
<h2>Update User</h2>
<form action="update_action.php" method="post">
  <input type="hidden" name="matric" value="<?= $user['matric'] ?>">
  Name: <input type="text" name="name" value="<?= $user['name'] ?>" required><br>
  Role:
  <select name="role" required>
    <option value="student" <?= $user['role']=="student"?"selected":"" ?>>Student</option>
    <option value="lecturer" <?= $user['role']=="lecturer"?"selected":"" ?>>Lecturer</option>
  </select><br><br>
  <input type="submit" value="Update">
</form>
</body>
</html>
