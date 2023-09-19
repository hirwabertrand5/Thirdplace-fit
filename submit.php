<?php
require_once "config.php";
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect review-related information from the form
    $user_id = $_SESSION['user_id']; // Get the user's ID from the session
    $rating = $_POST['rating'];
    $reviewText = $_POST['reviewText'];
    

    // Define the SQL query to create the "rate_and_review" table if it doesn't exist
    $createTableSql = "CREATE TABLE IF NOT EXISTS rate_and_review (
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT NOT NULL,
        rating INT NOT NULL,
        review_text TEXT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    // Execute the CREATE TABLE query
    if ($conn->query($createTableSql) === TRUE) {
        // Table created successfully or already exists

        // Define the SQL query to insert the review into the "rate_and_review" table
        $insertSql = "INSERT INTO rate_and_review (user_id,rating, review_text) VALUES (?, ?, ?)";

        // Prepare and execute the INSERT query
        $stmt = $conn->prepare($insertSql);
        if ($stmt) {
            $stmt->bind_param("issi", $user_id,$rating, $reviewText);
            if ($stmt->execute()) {
                // Review inserted successfully
                echo "Review has been submitted successfully!";
            } else {
                // Handle the case where insertion failed
                echo "Error inserting review: " . $stmt->error;
            }
            $stmt->close();
        } else {
            // Handle the case where the query preparation failed
            echo "Error preparing the insert query: " . $conn->error;
        }
    } else {
        // Handle the case where table creation failed
        echo "Error creating table: " . $conn->error;
    }
} else {
    // Handle the case where the form was not submitted
    echo "Form not submitted.";
}

// Close the database connection
$conn->close();
?>
