<?php
require_once "config.php";
require_once "common_function.php";

// Check if the user is logged in (You may use a more secure authentication mechanism)
if (isset($_SESSION['user_id'])) {
    // User is logged in, so retrieve their information from the database
    $user_id = $_SESSION['user_id']; // Get the user's ID from the session

    // Query to retrieve user information from the database
    $sql = "SELECT username, profile_picture FROM users WHERE id = ?";

    // Prepare and execute the query
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("i", $user_id); // Bind the user_id to the query
        $stmt->execute();

        $result = $stmt->get_result();

        // Fetch user information
        $user = $result->fetch_assoc();

        // Now, you have user information in the $user variable
        // You can access username and profile_picture like this:
        $username = $user['username'];
        $profile_picture = $user['profile_picture'];

        $stmt->close();
    } else {
        // Handle the case where the query preparation failed
        echo "Error preparing the query: " . $mysqli->error;
    }
} else {
    // Handle the case where the user is not logged in
    // You can redirect them to a login page or show an error message
    echo "<script>alert('You are not logged in ')</script>";
    echo "<script>window.open('login.php','_self')</script>";
}

if (isset($_POST['rating']) && isset($_POST['reviewText'])) {
    // Collect review-related information from the form
    $rating = $_POST['rating'];
    $reviewText = $_POST['reviewText'];

    // Insert the review into the "rate_and_review" table
    $insertSql = "INSERT INTO rate_and_review (user_id,rating, review_text) VALUES (?, ?, ?)";

    $insertStmt = $conn->prepare($insertSql);

    if ($insertStmt) {
        $insertStmt->bind_param("iis", $user_id, $rating, $reviewText);

        if ($insertStmt->execute()) {
            // Review inserted successfully
            echo "<script>alert('Review has been submitted successfully!')</script>";
            echo "<script>window.open('service.php','_self')</script>";
           
        } else {
            // Handle the case where insertion failed
            echo "Error inserting review: " . $insertStmt->error;
        }

        $insertStmt->close();
    } else {
        // Handle the case where the query preparation failed
        echo "Error preparing the insert query: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<!-- ... (Rest of your HTML code) ... -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Service Description | Thirdplace fitness</title>
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
  integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap"
    rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <style>
    /* Custom CSS for the review section */
    .review-container {
      border: 1px solid #e6e6e6;
      padding: 20px;
      margin: 20px 0;
    }
    .user-image {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      object-fit: cover;
    }
    .user-info {
      display: flex;
      align-items: center;
    }
    .user-name {
      font-weight: bold;
      margin-left: 10px;
    }
  </style>

</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <img src="images/thirdplacelogo.png" height="60" alt="" />
            </a>
          <div class="contact_nav" id="">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link" href="service.html">
                  <img src="images/location.png" alt="" />
                  <span>Nyarugunga, cumi na gatanu</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.html">
                  <img src="images/call.png" alt="" />
                  <span>Call : +250 782 061 955</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.html">
                  <img src="images/envelope.png" alt="" />
                  <span>finefitness19@gmail.com</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>

    </header>
    <!-- end header section -->
    
    <!-- slider section -->
    <section class="slider_section position-relative">
      <div class="container">
        <div class="custom_nav2">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex  flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">
                  <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">About </a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="service.php">Services </a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="feedback.php">Feedback</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                 
                
                <?php
								if(!isset($_SESSION['user_id']))
								{
									echo "<li class='nav-item'> <a class='nav-link' href='login.php'>Login</a></li>";
								}

									else
									{
                    echo "<li class='nav-item'> <a class='nav-link' href='logout.php'>Logout</a></li>";
                  }
								
								?>
					</ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>
  
<!-- Service Details Section -->
<?php getuniqueservices(); ?>

<?php
if(!isset($_SESSION['user_id']))
{
  echo "
  <div class='container'>
      <h2 class='text-center'>service Reviews</h1>
  
      <!-- Review 1 -->
      <div class='review-container'>
        <div class='user-info'>
          <img src='user1.jpg' alt='User 1' class='user-image'>
          <div class='user-name'>John Doe</div>
        </div>
        <div class='rating'>
          <span class='text-warning'>&#9733;&#9733;&#9733;&#9733;&#9734;</span>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, lectus eu ultrices tincidunt, dolor justo facilisis nisl, eu fermentum felis libero vel orci.</p>
      </div>
  
      
      <!-- Add more reviews here -->
  <p><strong>Login To give your review</p>
    </div>";
}
else
{
  get_rate_and_review();
  echo"
  <div class='container'>
  <!-- ... (existing reviews) ... -->

  <!-- New Review Form -->
  <div class='review-container'>
      <h5 style='text-align:center'>We would like to recieve your Review about our Services <strong>$username</strong></h5>
      <form id='reviewForm' action='' method='POST' enctype='multipart/form-data'>
              <div class='mb-3'>
              <label for='rating' class='form-label'>Rating</label>
              <select class='form-select' id='rating' name='rating' required>
                  <option value='1'>1 Star</option>
                  <option value='2'>2 Stars</option>
                  <option value='3'>3 Stars</option>
                  <option value='4'>4 Stars</option>
                  <option value='5'>5 Stars</option>
              </select>
          </div>
          <div class='mb-3'>
              <label for='reviewText' class='form-label'>Review</label>
              <textarea class='form-control' id='reviewText' name='reviewText' rows='4' required></textarea>
          </div>
          <button type='submit' class='btn btn-warning'>Submit Review</button>
      </form>
  </div>
</div>";
}

?>

<!-- footer section -->
<section class="container-fluid footer_section ">
    <p>
      &copy; Thirdplace Fitness 2023 All Rights Reserved. 
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");
    }
  </script>
</body>
</html>
