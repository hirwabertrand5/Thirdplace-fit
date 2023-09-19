<?php
require_once "config.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if the login is for a user
    $user_query = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($user_query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $user_result = $stmt->get_result();

    // Check if the login is for an admin
    $admin_query = "SELECT * FROM admins WHERE username = ?";
    $stmt = $conn->prepare($admin_query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $admin_result = $stmt->get_result();

    if ($user_result->num_rows === 1) {
        $user_data = $user_result->fetch_assoc();
        if (password_verify($password, $user_data["password"])) {
            $_SESSION["user_id"] = $user_data["id"];
            echo "<script>alert('Login successfully!')</script>";
            header("Location:service.php"); // Redirect to user dashboard
            exit();
        } else {
            echo "<script>alert('invalid password for user')</script>";
            echo "<script>window.open('login.php','_self')</script>";
        }
    } elseif ($admin_result->num_rows === 1) {
        $admin_data = $admin_result->fetch_assoc();
        if (password_verify($password, $admin_data["password"])) {
            $_SESSION["admin_id"] = $admin_data["id"];
            echo "<script>alert('Login successfully!')</script>";
            header("Location: admin_index.php?dashboard"); // Redirect to admin dashboard
            exit();
        } else {
            echo "<script>alert('Invalid password for admin.')</script>";
            echo "<script>window.open('login.php','_self')</script>";
        }
    } else {
        echo "<script>alert('Invalid username or user does not exist.')</script>";
        echo "<script>window.open('login.php','_self')</script>";    
        
    }
    $stmt->close();
}
?>

<!-- Your HTML login form goes here -->
