<?php
session_start();
if (!isset($_SESSION['matric'])) {
  header("Location: login.php");
  exit();
}
?>

<?php
include 'db_config.php';

$matric = $_POST['matric'];
$name = $_POST['name'];
$password = $_POST['password'];
$role = $_POST['role'];

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (matric, name, password, role)
        VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $matric, $name, $hashed_password, $role);

if ($stmt->execute()) {
    echo "Registration successful!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
