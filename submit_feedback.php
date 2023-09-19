
<?php
require_once "config.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $feedback = $_POST["feedback"];
    $emoji = $_POST["emoji"];

    // Insert data into the database
    
    $sql = "INSERT INTO feedback (name, email, feedback_text, emoji) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $feedback, $emoji);

    if ($stmt->execute()) {
        echo "<script>alert('Feedback submitted successfully!','_self')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
