<?php
include 'db_config.php';

// Uncomment these lines once login.php and session are active
// session_start();
// if (!isset($_SESSION['matric'])) {
//     header("Location: login.php");
//     exit();
// }
?>

<!DOCTYPE html>
<html>
<head>
  <title>User Display</title>
</head>
<body>
  <h2>User List</h2>

  <table border="1">
    <tr>
      <th>Matric</th>
      <th>Name</th>
      <th>Level</th>
      <th>Action</th>
    </tr>

    <?php
    $result = $conn->query("SELECT matric, name, role FROM users");

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['matric']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['role']}</td>
                    <td>
                      <a href='update.php?matric={$row['matric']}'>Update</a> |
                      <a href='delete.php?matric={$row['matric']}' onclick=\"return confirm('Delete this user?');\">Delete</a>
                    </td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No users found.</td></tr>";
    }

    $conn->close();
    ?>
  </table>
</body>
</html>

