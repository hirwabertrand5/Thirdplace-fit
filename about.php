<?php
require_once "config.php";
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>About us | Thirdplace</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

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
    <style>
  /* Style to make the modal overlay the web content with larger width */
  .modal-lg {
    max-width: 100%;
  }
  .modal {
    z-index: 1050; /* You can adjust this value as needed */
  }

  /* Style to center the modal vertically and horizontally */
  
</style>

  </style>
</head>

<body class="sub_page about_page">


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
    <!-- end header section -->  <!-- slider section -->
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
                  <li class="nav-item active" >
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
                  </li> <?php
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


  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          About us
        </h2>
      </div>
      <div class="box">
        
        <div class="detail-box">
          <p>
            At THIRDPLACE we believe that true strength comes from within. our mission is to create a fitness community that inspires
            and empowers individuals to push their limits and achieve their healthy and wellness goals. with state-of-the-art facilities,
            expert trainers and a supportive environment we are dedicated to helping  you unlock your full potentiar.
          </p>
          <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#readMoreModal">
           Read More
          </button>          
         
        </div>
      </div>
    </div>
  </section>
  <!-- end about section -->

<!-- Hidden Modal -->
<div class="modal fade" id="readMoreModal" tabindex="-1" role="dialog" aria-labelledby="readMoreModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="readMoreModalLabel">Read More</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Additional information goes here -->
        <p>
        <h3>Welcome to ThirdPlace Fitness</h3>

<p>At ThirdPlace Fitness, we're not just another gym; we're your ultimate destination for fitness, community, and personal growth. 
Our commitment is to provide you with the tools, support, and inspiration you need to transform your life through fitness.</p>

<h3>Our Story</h3>

<p>Established in [2020], ThirdPlace Fitness was founded with a vision of creating 
a unique space where fitness enthusiasts, beginners, and everyone in between can come together. 
The name "ThirdPlace" represents our belief that your gym should be more than just a place to work out;
it should be your third home – a welcoming and empowering community where you can thrive.</p>

<h3>Our Mission</h3>

<p>Our mission is to empower you to become the best version of yourself. 
We understand that fitness is not just about physical strength; it's about mental resilience, 
self-confidence, and achieving a sense of balance in life. We're here to help you reach your 
fitness goals while nurturing your overall well-being.</p>

<h3>Our Facilities</h3>

<p>Explore our modern and well-equipped facilities designed to enhance your fitness experience. 
From cutting-edge cardio and strength training equipment to spacious group fitness studios,
 we've created an environment where you can challenge yourself, stay motivated, and achieve lasting results. 
 After your workout, relax and recharge in our comfortable amenities, including saunas and locker rooms.</p>

<h3>Our Community</h3>

<p>At ThirdPlace Fitness, we're proud of the strong sense of community that sets us apart. 
    Our members aren't just faces in the crowd; they're friends, workout partners, and your biggest supporters. 
    We foster connections through regular social events, workshops, and fitness challenges, 
    making every visit to our gym an opportunity to grow and connect.</p>
        
      </div>
    </div>
  </div>
</div>



  <!-- info section -->

  <section class="info_section layout_padding2-top">
    <div class="container">
      <div class="info_form">
        <h4>
          Our Newsletter
        </h4>
        <form action="">
          <input type="text" placeholder="Enter your email">
          <div class="d-flex justify-content-end">
            <button>
              subscribe
            </button>
          </div>
        </form>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h6>
            About Energym
          </h6>
          <p>
            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
            minim veniam, quis nostrud exercitation u
          </p>
        </div>
        <div class="col-md-2 offset-md-1">
          <h6>
            Menus
          </h6>
          <ul>
            <li class=" active">
              <a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="">
              <a class="" href="about.html">About </a>
            </li>
            <li class="">
              <a class="" href="service.html">Services </a>
            </li>
            <li class="">
              <a class="" href="#contactSection">Contact Us</a>
            </li>
            <li class="">
              <a class="" href="#">Login</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h6>
            Useful Links
          </h6>
          <ul>
            <li>
              <a href="">
                Adipiscing
              </a>
            </li>
            <li>
              <a href="">
                Elit, sed
              </a>
            </li>
            <li>
              <a href="">
                do Eiusmod
              </a>
            </li>
            <li>
              <a href="">
                Tempor
              </a>
            </li>
            <li>
              <a href="">
                incididunt
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h6>
            Contact Us
          </h6>
          <div class="info_link-box">
            <a href="">
              <img src="images/location-white.png" alt="">
              <span> No.123, loram ipusm</span>
            </a>
            <a href="">
              <img src="images/call-white.png" alt="">
              <span>+01 12345678901</span>
            </a>
            <a href="">
              <img src="images/mail-white.png" alt="">
              <span> demo123@gmail.com</span>
            </a>
          </div>
          <div class="info_social">
            <div>
              <a href="">
                <img src="images/facebook-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/twitter-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/instagram.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->


  <!-- footer section -->
  <section class="container-fluid footer_section ">
    <p>
      &copy; 2019 All Rights Reserved. Design by
      <a href="https://html.design/">Free Html Templates</a>
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