<?php
session_start();
require_once("db.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SmartHire</title>
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <link rel="stylesheet" href="css/_all-skins.min.css">
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green sidebar-mini"
style="background-color:#E8E8E8; font-family:algerian;" >
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index.php" class="logo logo-bg">
      <span class="logo-mini"><b>J</b>P</span>
      <span class="logo-lg" style="font-family:algerian;"><b>Smart Hire</b></span>
    </a>

    <nav class="navbar navbar-static-top">
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="jobs.php">Jobs</a>
          </li>
          <li>
            <a href="#candidates">Candidates</a>
          </li>
          <li>
            <a href="#company">Company</a>
          </li>
          <li>
            <a href="#about">About Us</a>
          </li>
          <?php if(empty($_SESSION['id_user']) && empty($_SESSION['id_company'])) { ?>
          <li>
            <a href="login.php">Login</a>
          </li>
          <li>
            <a href="sign-up.php">Sign Up</a>
          </li>  
          <li>
            <a href="Help.php">Quiz</a>
          </li>  
          <?php } else { 

            if(isset($_SESSION['id_user'])) { 
          ?>        
          <li>
            <a href="user/index.php">Dashboard</a>
          </li>
          <?php
          } else if(isset($_SESSION['id_company'])) { 
          ?>        
          <li>
            <a href="company/index.php">Dashboard</a>
          </li>
          <?php } ?>
          <li>
            <a href="logout.php">Logout</a>
          </li>
          <?php } ?>
        </ul>
      </div>
    </nav>
  </header>
  <marquee style="background-color:white; font-family:algerian;"><h4>Welcome to<b> Smart Hire </b> – Streamlining HR Recruitment with Intelligence and Efficiency for a Smarter Workforce!</h4>
   </marquee>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 0px;">

    <section class="content-header bg-main">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center index-head">
            <h1>All <strong>JOBS</strong> In One Place</h1>
            <p>One search, global reach</p>
            <p><a class="btn btn-success btn-lg" href="jobs.php" role="button">Search Jobs</a></p>
          </div>
        </div>
      </div>
    </section>

    <section class="content-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12 latest-job margin-bottom-20">
            <h1 class="text-center" style="font-family:algerian;">Latest Jobs</h1>            
            <?php 
          /* Show any 4 random job post
           * 
           * Store sql query result in $result variable and loop through it if we have any rows
           * returned from database. $result->num_rows will return total number of rows returned from database.
          */
          $sql = "SELECT * FROM job_post Order By Rand() Limit 4";
          $result = $conn->query($sql);
          if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) 
            {
              $sql1 = "SELECT * FROM company WHERE id_company='$row[id_company]'";
              $result1 = $conn->query($sql1);
              if($result1->num_rows > 0) {
                while($row1 = $result1->fetch_assoc()) 
                {
             ?>
            <div class="attachment-block clearfix">
              <img class="attachment-img" src="uploads/logo/<?php echo $row1['logo']; ?>" alt="Attachment Image">
              <div class="attachment-pushed">
                <h4 class="attachment-heading"><a href="view-job-post.php?id=<?php echo $row['id_jobpost']; ?>"><?php echo $row['jobtitle']; ?></a> <span class="attachment-heading pull-right">Rs.<?php echo $row['maximumsalary']; ?>/Month</span></h4>
                <div class="attachment-text">
                    <div><strong><?php echo $row1['companyname']; ?> | <?php echo $row1['city']; ?> | Experience <?php echo $row['experience']; ?> Years</strong></div>
                </div>
              </div>
            </div>
          <?php
              }
            }
            }
          }
          ?>

          </div>
        </div>
      </div>
    </section>

    <section id="candidates" class="content-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center latest-job margin-bottom-20">
            <h1 style="font-family:algerian;">Candidates</h1>
            <p>Finding a job just got easier. Create a profile and apply with single mouse click.</p>            
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 col-md-4">
            <div class="thumbnail candidate-img">
              <img src="img/browse.jpg" alt="Browse Jobs">
              <div class="caption">
              <h3 class="text-center">Browse Jobs</h3>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="thumbnail candidate-img">
              <img src="img/interviewed.jpeg" alt="Apply & Get Interviewed">
              <div class="caption">
                <h3 class="text-center">Apply & Get Interviewed</h3>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="thumbnail candidate-img">
              <img src="img/career.jpg" alt="Start A Career">
              <div class="caption">
                <h3 class="text-center">Start A Career</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div style="color:black;">
    <section id="company" class="content-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center latest-job margin-bottom-20">
            <h1 style="font-family:algerian;">Companies</h1>
            <p>Hiring? Register your company for free, browse our talented pool, post and track job applications</p>            
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 col-md-4">
            <div class="thumbnail company-img">
              <img src="img/postjob.png" alt="Browse Jobs">
              <div class="caption">
                <h3 class="text-center">Post A Job</h3>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="thumbnail company-img">
              <img src="img/manage.jpg" alt="Apply & Get Interviewed">
              <div class="caption">
                <h3 class="text-center">Manage & Track</h3>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="thumbnail company-img">
              <img src="img/hire.png" alt="Start A Career">
              <div class="caption">
                <h3 class="text-center">Hire</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="statistics" class="content-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center latest-job margin-bottom-20">
            <h1 style="font-family:algerian;">Our Statistics</h1>
          </div>
        </div>
        <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
             <?php
                      $sql = "SELECT * FROM job_post";
                      $result = $conn->query($sql);
                      if($result->num_rows > 0) {
                        $totalno = $result->num_rows;
                      } else {
                        $totalno = 0;
                      }
                    ?>
              <h3><?php echo $totalno; ?></h3>

              <p>Job Offers</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-paper"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
                  <?php
                      $sql = "SELECT * FROM company WHERE active='1'";
                      $result = $conn->query($sql);
                      if($result->num_rows > 0) {
                        $totalno = $result->num_rows;
                      } else {
                        $totalno = 0;
                      }
                    ?>
              <h3><?php echo $totalno; ?></h3>

              <p>Registered Company</p>
            </div>
            <div class="icon">
                <i class="ion ion-briefcase"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
             <?php
                      $sql = "SELECT * FROM users WHERE resume!=''";
                      $result = $conn->query($sql);
                      if($result->num_rows > 0) {
                        $totalno = $result->num_rows;
                      } else {
                        $totalno = 0;
                      }
                    ?>
              <h3><?php echo $totalno; ?></h3>

              <p>CV'S/Resume</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-list"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
               <?php
                      $sql = "SELECT * FROM users WHERE active='1'";
                      $result = $conn->query($sql);
                      if($result->num_rows > 0) {
                        $totalno = $result->num_rows;
                      } else {
                        $totalno = 0;
                      }
                    ?>
              <h3><?php echo $totalno; ?></h3>

              <p>Daily Users</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-stalker"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
      </div>
    </section>

    <section id="about" class="content-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center latest-job margin-bottom-20">
            <h1 style="font-family:algerian;">About US</h1>                      
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <img src="img/browse.jpg" class="img-responsive">
          </div>
          <div class="col-md-6 about-text margin-bottom-20">
            <p>At SmartHire, we are transforming the way businesses hire top talent. Our mission is to simplify and streamline the recruitment process, helping organizations of all sizes find the right candidates quickly and efficiently. </p>

            <p>With years of expertise in human resources and technology. Our platform is designed to enhance every stage of the hiring process – from job posting to candidate selection, interview scheduling, and onboarding. </p>

            <p>We understand the challenges HR professionals face, and that's why our system is built to save time, reduce costs, and improve hiring outcomes. Whether you're a small startup or a large enterprise, we provide the tools and resources needed to find the perfect fit for your team. </p>

            <p>Join the many organizations that trust SmartHire to help them build strong, successful teams. Let us help you hire smarter and faster. </p>
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer" style="margin-left: 0px;">
    <div class="text-center">
      <strong>Anshika &#10084; 2025 <a href="index.php">SmartHire</a>.</strong> All rights
    reserved.
    </div>
  </footer>

  <!-- /.control-sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->
</div>
<!-- jQuery 3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
</body>
</html>
