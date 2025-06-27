
<?php
session_start();
require_once("db.php");

function generateMeetingCode($length = 6) {
    return substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"), 0, $length);
}

// Handle meeting creation
if (isset($_POST['create'])) {
    $code = generateMeetingCode();
    $stmt = $conn->prepare("INSERT INTO meetings (meeting_code) VALUES (?)");
    $stmt->bind_param("s", $code);
    $stmt->execute();
    $meeting_created = $code;
}

// Handle meeting join
if (isset($_POST['join'])) {
    $code = $_POST['meeting_code'];
    $stmt = $conn->prepare("SELECT * FROM meetings WHERE meeting_code = ?");
    $stmt->bind_param("s", $code);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        header("Location: meeting.php?code=" . $code);
        exit();
    } else {
        $error = "Invalid meeting code.";
    }
}
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
    <h2>Create a Meeting</h2>
    <form method="post">
        <button name="create">Create Meeting</button>
    </form>
    <?php if (!empty($meeting_created)): ?>
        <p>Meeting Created! Code: <strong><?= $meeting_created ?></strong></p>
    <?php endif; ?>


<?php
$code = $_GET['code'] ?? 'UNKNOWN';
?>

    <h2>Meeting Room: <?= htmlspecialchars($code) ?></h2>
    <div id="jitsi-container" style="height: 600px; width: 100%;"></div>
    
    <script src="https://meet.jit.si/external_api.js"></script>
    <script>
        const domain = "meet.jit.si";
        const options = {
            roomName: "VCODE_<?= htmlspecialchars($code) ?>",
            width: "70%",
            height: 600,
            parentNode: document.querySelector('#jitsi-container'),
        };
        new JitsiMeetExternalAPI(domain, options);
    </script>
<footer class="main-footer" style="margin-left: 0px;">
    <div class="text-center">
      <strong>Anshika &#10084; 2025 <a href="index.php">SmartHire</a>.</strong> All rights
    reserved.
    </div>
  </footer>
</body>
</html>

</body>
</html>
