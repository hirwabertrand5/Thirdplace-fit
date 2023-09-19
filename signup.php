<?php
require_once "config.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Create Account | Thirdplace fitness</title>
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
  <link href="css/responsive.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="font-awesome.min.css">
		<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

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
                  <li class="nav-item ">
                    <a class="nav-link" href="service.php">Services </a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="feedback.php">Feedback</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Create account</a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 style="text-align:center">create Account</h4>
                </div>
                <div class="card-body">
                <form action="submit_users.php" method="POST" enctype="multipart/form-data">
  
                        <div class="form-group">
                            <label for="username">Full name</label>
                            <input type="text" autocomplete="off" name="full_name" class="form-control" id="fname" placeholder="Enter your full name" required>
                        </div>

                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" autocomplete="off" name="username" class="form-control" id="username" placeholder="create username" required>
                        </div>

                        <div class="form-group">
                            <label for="username">email</label>
                            <input type="email"  autocomplete="off" name="email" class="form-control" id="email" placeholder="enter your email" required>
                        </div>
                        <!-- Profile Picture -->
                       <div class="form-group">
                           <label for="profile_picture">Profile Picture</label>
                           <input type="file" name="profile_picture" class="form-control-file" id="profile_picture" required>
                       </div>

                        <div class="form-group">
                            <label for="username">password</label>
                            <input type="password"  autocomplete="off" name="password" class="form-control" id="password" placeholder="Create password" required>
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text"  name="address" class="form-control"  id="password" placeholder="Enter password" required>
                        </div>

                        <div class="form-group">
                            <label for="username">Phone number</label>
                            <input type="tel" name="phone_number" class="form-control" autocomplete="off" id="username" placeholder="enter your phone number" required>
                        </div>

                        <button type="submit" class="btn btn-warning btn-block">Sig nup</button>
                    </form>
                    <div class="signup-link">
                Already have an account? <a href="login.php">log in</a>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
