<?php
session_start();
if (!isset($_SESSION['matric'])) {
  header("Location: login.php");
  exit();
}
?>

<?php
$host = "localhost";
$user = "root";        // adjust if needed
$password = "";        // adjust if needed
$dbname = "Lab_7";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
