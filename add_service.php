<?php
require_once "config.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $service_name = $_POST["service_name"];
    $description = $_POST["description"];
    
    // File Upload Handling
    $target_directory = "service_images/"; // Specify the directory where service images will be stored
    $target_file = $target_directory . basename($_FILES["service_picture"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if the file is a valid image
    $valid_image_types = array("jpg", "jpeg", "png", "gif");
    if (!in_array($imageFileType, $valid_image_types)) {
        echo "<script>alert('Invalid image format. Please upload a JPG, JPEG, PNG, or GIF file.')</script>";
        echo "<script>window.open('add_service.php','_self')</script>";
        exit; // Stop execution if the file is not a valid image
    }

    // Move the uploaded file to the target directory
    if (move_uploaded_file($_FILES["service_picture"]["tmp_name"], $target_file)) {
        // File upload was successful
        
        // Insert the data into the "service" table
        $insert_query = "INSERT INTO service (service_name, description, service_image) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($insert_query);
        $stmt->bind_param("sss", $service_name, $description, $target_file);

        if ($stmt->execute()) {
            echo "<script>alert('Service added successfully.')</script>";
            echo "<script>window.open('admin_dashboard.php?dashboard','_self')</script>";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "<script>alert('Error uploading the service image.')</script>";
        echo "<script>window.open('add_service.php','_self')</script>";
    }

    $stmt->close();
    $conn->close();
}
?>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 style="text-align:center">Add Service</h4>
                </div>
                <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
  
                        <div class="form-group">
                            <label for="sname">Service name</label>
                            <input type="text" autocomplete="off" name="service_name" class="form-control" id="fname" placeholder="Enter your full name" required>
                        </div>

                        <div class="form-group">
                            <label for="sname">Service description</label>
                            <textarea autocomplete="off" name="description" class="form-control" id="fname" placeholder="Enter service description" required></textarea> 
                        </div>

                     <!-- Profile Picture -->
                       <div class="form-group">
                           <label for="profile_picture">Service Image</label>
                           <input type="file" name="service_picture" class="form-control-file" id="profile_picture" required>
                       </div>

                        <button type="submit" class="btn btn-warning btn-block">Sig nup</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
