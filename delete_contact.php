<?php
require_once "config.php";
session_start();

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare and execute the SQL DELETE query
    $sql = "DELETE FROM contacts WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Record deleted successfully
        header("Location: admin_index.php?view_contacts"); // Redirect to your feedback table page
        exit();
    } else {
        // Delete failed
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    echo "Invalid ID or ID not provided.";
}

// Close the database connection
$conn->close();
?>
