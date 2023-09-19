<?php
// Example: Check if the user is an admin (you can use more advanced authentication)
if (!isset($_SESSION["admin_id"])) {
    header("Location: login.php");
    exit();
}
?>
 <!-- card stats section -->
  <div class="main-content">
    <div class="header bg-gradient-primary pb-8 pt-9 pt-md-8">
      <div class="container-fluid">
        <h2 class="mb-5 text-white">Stats Card</h2>
        <div class="header-body">
          <div class="row">
          <div class="col-xl-3 col-lg-6">
          <a href="admin_index.php?view_feedback " style="color:black"><div class="card card-stats bg-info mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase  text-light mb-0">Feedbacks</h5>
                      <span class="h2 font-weight-bold mb-0">
                        <?php             
                   
                   $link="SELECT * from feedback";
                   $query=mysqli_query($conn,$link);
                   if($total=mysqli_num_rows($query))
                   {
                    echo "$total";
                   }
                   else
                   {
                    echo "$total";
                   }
                    ?>
                                    
                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-envelope"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"></span>
                    <span class="text-nowrap text-warning">Total Feedbacks</span>
                  </p>
                </div>
              </div>
            </div></a>
            <div class="col-xl-3 col-lg-6">
            <a href="admin_index.php?view_users " style="color:black"><div class="card card-stats bg-info mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-light mb-0">Customers </h5>
                      <span class="h2 font-weight-bold mb-0">
                      <?php             
                   
                   $link="SELECT * from users";
                   $query=mysqli_query($conn,$link);
                   if($total=mysqli_num_rows($query))
                   {
                    echo "$total";
                   }
                   else
                   {
                    echo "$total";
                   }
                    ?>
                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-danger mr-2"></span>
                    <span class="text-nowrap text-warning">Total users</span>
                  </p>
                </div>
              </div></a>
            </div>
            <div class="col-xl-3 col-lg-6">
            <a href="admin_index.php?add_service " style="color:black"> <div class="card card-stats bg-info mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-light mb-0">services</h5>
                      <span class="h2 font-weight-bold mb-0">
                      <?php             
                   
                   $link="SELECT * from service";
                   $query=mysqli_query($conn,$link);
                   if($total=mysqli_num_rows($query))
                   {
                    echo "$total";
                   }
                   else
                   {
                    echo "$total";
                   }
                    ?>
                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="fas fa-bars"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-warning mr-2"></span>
                    <span class="text-nowrap text-warning">Total services</span>
                  </p>
                </div>
              </div></a>
            </div>
            <div class="col-xl-3  col-lg-6">
            <a href="admin_index.php?view_contacts " style="color:black"><div class="card card-stats bg-info mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-light mb-0">contacts</h5>
                      <span class="h2 font-weight-bold mb-0">
                      <?php             
                   
                   $link="SELECT * from contacts";
                   $query=mysqli_query($conn,$link);
                   if($total=mysqli_num_rows($query))
                   {
                    echo "$total";
                   }
                   else
                   {
                    echo "$total";
                   }
                    ?>
                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-phone"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"></span>
                    <span class="text-nowrap">Total contacts</span>
                  </p>
                </div>
              </div>
            </div>
          </div></a>
        </div>
      </div>
    </div>
<br><br><br>
  