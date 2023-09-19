<?php
// Step 1: User Authentication (Assuming you have a user authentication system)
session_start();
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page if the user is not logged in
    header("Location: login.php");
    exit;
}

// Step 2: Database Connection
require_once "config.php"; // Include your database configuration file

// Step 3: Fetch Data
$user_id = $_SESSION['user_id']; // Get the user identifier from the session

// Construct the SQL query to fetch data for the logged-in user
$query = "SELECT * FROM contacts WHERE user_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

// Step 4: Display Data in a Table
?>
<h1>Contact Data for Logged-In User</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
<?php
// Close the database connection and statement
$stmt->close();
$conn->close();
?>
