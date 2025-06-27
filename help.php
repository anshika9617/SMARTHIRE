<html>
    <head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Smart Hire</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <link rel="stylesheet" href="css/_all-skins.min.css">
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
<body class="hold-transition skin-green sidebar-mini"
style="background-color:#E8E8E8; font-family:algerian;">
<header class="main-header">

<!-- Logo -->
<a href="index.php" class="logo logo-bg">
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
</div>
</div>
</header>
<marquee style="background-color:white; font-family:algerian;"><h4>Welcome to <b>Smart Hire </b> – Streamlining HR Recruitment with Intelligence and Efficiency for a Smarter Workforce!</h4>
   </marquee>
  <section id="candidates" class="content-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center latest-job margin-bottom-20">
            <h1 style="font-family:algerian;" >
            <div align='center'><br><b>PLACEMENT QUIZ</b><br> </h1></div>
                <h3 style="font-family:algerian;"><b><center>CHOOSE CATEGORY TO ANSWER FIRST </center></b></h3>           
            </div>
          </div>
          <br>
        
          <div class="col-sm-4 col-md-4">
            <div class="thumbnail candidate-img">
              <img src="img/a.jpeg" alt="Browse Jobs">
              <div class="caption">
                <h3 class="text-center">
                  <form method="post" action="str.php">
                    <input name="SignIn" type="submit"  value="  APTITUDE  " >
                  </form>
                </h3>
              </div>
            </div>
          </div>
              
          <div class="col-sm-4 col-md-4">
            <div class="thumbnail candidate-img">
              <img src="img/l.png" alt="Apply & Get Interviewed">
              <div class="caption">
                <h3 class="text-center">
                  <form method="post" action="str1.php">
                    <input name="SignIn" type="submit"  value="  LOGICAL  " >
                  </form> 
                <h3>
              </div>
            </div>
          </div>
              
          <div class="col-sm-4 col-md-4">
            <div class="thumbnail candidate-img">
              <img src="img/v.jpeg" alt="Start A Career">
              <div class="caption">
                <h3 class="text-center">
                  <form method="post" action="str2.php">
                    <input name="SignIn" type="submit"  value="  VERBAL  " >
                  </form>
                </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<footer class="main-footer" style="margin-left: 0px;">
    <div class="text-center">
      <strong>Anshika &#10084; 2025 <a href="index.php">SmartHire</a>.</strong> All rights
    reserved.
    </div>
  </footer>
</body>
</html>


