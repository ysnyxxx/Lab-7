<?php
include 'db_config.php';
$matric = $_GET['matric'];

$sql = "DELETE FROM users WHERE matric=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $matric);

if ($stmt->execute()) {
    echo "User deleted.";
    header("Location: display.php");
    exit();
} else {
    echo "Delete failed: " . $stmt->error;
}
?>
