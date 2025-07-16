<?php
session_start();
if (!isset($_SESSION['matric'])) {
  header("Location: login.php");
  exit();
}
?>

<?php
include 'db_config.php';
session_start();

$matric = $_POST['matric'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE matric = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $matric);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        $_SESSION['matric'] = $user['matric'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['role'] = $user['role'];
        header("Location: display.php");
        exit();
    } else {
        echo "❌ Invalid password. Try again.";
    }
} else {
    echo "❌ Matric not found. Try again.";
}

$stmt->close();
$conn->close();
?>
