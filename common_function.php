<?php
require_once "config.php";
session_start();
function getServices()
{
    global $conn;

     //condition if is set or not 

    $sql="SELECT * from service ";
		 $all_product =$conn->query($sql);    
			while($row= mysqli_fetch_assoc($all_product))
			{
            
            $id=$row['id'];   
            $service_name=$row['service_name'];
			$service_image=$row['service_image'];
			

			echo" 
            <div class='box'>
            <img src='$service_image' style='height: 430px;width:545px' alt=''>
            <div class='link_box'>
            <a href='service_description.php?service=$service_name'
            <h1><img src='images/link.png' alt=''></h1>
              </a>
              <h6>
                $service_name
              </h6>
            </div>
            <h6 class='visible_heading text-light'  style='text-shadow: 2px 2px 8px #FF0000;'>
            $service_name
            </h6>
          </div>
          
			";
			}
		}

        //getting unique categories

function getuniqueservices()
{
    global $conn;

     //condition if is set or not 

    if(isset($_GET['service'])){
	$name=$_GET['service'];
    $sql="SELECT * from service where service_name='$name'";
		 $all_product =$conn->query($sql);    
			while($row= mysqli_fetch_assoc($all_product))
			{

			
				$service_name=$row['service_name'];
				$service_image=$row['service_image'];
				$description=$row['description'];

                echo "
                <section class='py-5'>
        <div class='container'>
            <div class='row'>
                <div class='col-md-6'>
                    <img src='$service_image' class='img-fluid' alt='Service Image'>
                </div>
                <div class='col-md-6'>
                    <h2 style='text-transform:uppercase;font-weight:bold'>$service_name</h2>
                    <p style='font-family:'Trebuchet MS', sans-serif;'>$description</p>
                    <!-- Add a star rating component here -->
                    
                </div>
            </div>
        </div>
    </section>

                    <!-- Add more reviews as needed -->
            </div>
        </div>
    </section>
                ";

            }
        }
    }    

    //getting rating and review
    function get_rate_and_review()
{
    global $conn;

    // SQL query to fetch user and rate/review information
    $sql = "SELECT users.username, users.profile_picture, rate_and_review.rating, rate_and_review.review_text
    FROM users
    INNER JOIN rate_and_review ON users.id = rate_and_review.user_id
    ORDER BY rate_and_review.review_id DESC
    LIMIT 3";

    // Perform the query
    $result = $conn->query($sql);
    
    // Check for query execution errors
    if (!$result) {
        die("Query failed: " . $conn->error);
    }
    
    // Check if there are any results
    if ($result->num_rows > 0) {
        // Loop through the results and display the user information and rate/review information
        while ($row = $result->fetch_assoc()) {
            $username = $row['username'];
            $profile_picture = $row['profile_picture'];
            $rating = $row['rating'];
            $review_text = $row['review_text'];
    
            // Output the data as needed
            echo "<div class='container'>
                      <div class='review-container'>
                        <div class='user-info'>
                            <img src='$profile_picture' alt='$username' class='user-image'>
                            <div class='user-name'>$username</div>
                        </div>
                        <div class='rating'>
                            <span class='text-warning'>";
            
            // Output star rating based on $rating value
            for ($i = 1; $i <= 5; $i++) {
                if ($i <= $rating) {
                    echo "&#9733;";
                } else {
                    echo "&#9734;";
                }
            }
            
            echo "</span>
                        </div>
                        <p>$review_text</p>
                    </div>
                </div>";
        }
    } else {
        echo "<p  style='text-align:center'>No reviews found.</p>";
    }
    
    // Close the database connection
    $conn->close();
}
    



