<?php
require_once "config.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full_name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password
    $address = $_POST["address"];
    $phone_number = $_POST["phone_number"];

    // File Upload Handling
    $target_directory = "profile_pictures/"; // Specify the directory where profile pictures will be stored
    $target_file = $target_directory . basename($_FILES["profile_picture"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if the file is a valid image
    $valid_image_types = array("jpg", "jpeg", "png", "gif");
    if (!in_array($imageFileType, $valid_image_types)) {
        echo "<script>alert('Invalid image format. Please upload a JPG, JPEG, PNG, or GIF file.','_self')</script>";
        echo "<script>window.open('index.php','_self')</script>";
        exit; // Stop execution if the file is not a valid image
    }

    // Move the uploaded file to the target directory
    if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file)) {
        // File upload was successful

        // Check if the username and email are not already in use
        $check_query = "SELECT * FROM users WHERE username = ? OR email = ?";
        $stmt = $conn->prepare($check_query);
        $stmt->bind_param("ss", $username, $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            // Username or email already exists
            echo "<script>alert('Username or email already exists. Please choose a different one.','_self')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        } else {
            // Insert the data into the database, including the profile picture filename
            $insert_query = "INSERT INTO users (full_name, username, email, password, address, phone_number, profile_picture) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($insert_query);
            $stmt->bind_param("sssssss", $full_name, $username, $email, $password, $address, $phone_number, $target_file);

            if ($stmt->execute()) {
                echo "<script>alert('Registration successful.','_self')</script>";
                echo "<script>window.open('login.php','_self')</script>";
            } else {
                echo "Error: " . $conn->error;
            }
        }
    } else {
        echo "<script>alert('Error uploading the profile picture.','_self')</script>";
       }

    $stmt->close();
    $conn->close();
}
?>
