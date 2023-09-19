<?php
if (!isset($_SESSION["admin_id"])) {
    header("Location: login.php");
    exit();
}
?>
<div class="container mt-5">
        <h2 style="text-align:center">Contact Table</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone number</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                // Retrieve data from the feedback table
                $sql = "SELECT * FROM contacts";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["phone_number"] . "</td>";
                        echo "<td>" . $row["message"] . "</td>";
                        echo '<td><a href="delete_contact.php?id=' . $row["id"] . '"><i class="fa fa-trash text-danger"></i></a></td>';
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No feedback records found.</td></tr>";
                }

                // Close the database connection
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

   