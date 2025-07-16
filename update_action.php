<?php
include 'db_config.php';
// session_start(); // Optional: add this if you're securing the page

if (isset($_POST['matric']) && isset($_POST['name']) && isset($_POST['role'])) {
    $matric = $_POST['matric'];
    $name = $_POST['name'];
    $role = $_POST['role'];

    $sql = "UPDATE users SET name = ?, role = ? WHERE matric = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $role, $matric);

    if ($stmt->execute()) {
        // Update successful — redirect back to display
        header("Location: display.php");
        exit();
    } else {
        echo "❌ Update failed: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "⚠️ Missing required fields.";
}

$conn->close();
?>

