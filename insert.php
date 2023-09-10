<?php
require_once "config.php";
session_start();
// Handle form submission
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $message = $_POST["message"];

    // Insert data into the "contacts" table
    $sql = "INSERT INTO contacts (name, email, phone_number, message) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $phone_number, $message);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
