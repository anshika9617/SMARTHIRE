<html>
    <head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Smart Hire</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <link rel="stylesheet" href="css/_all-skins.min.css">
  <!-- Custom -->
  <link rel="stylesheet" href="css/custom.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
<body text="white" class="hold-transition skin-green sidebar-mini" style="background-color:#E8E8E8; font-family:algerian;">
<header class="main-header">

<!-- Logo -->
<a href="index.php" class="logo logo-bg">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><b>J</b>P</span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg" style="font-family:algerian;"><b>Smart Hire</b></span>
</a>

<!-- Header Navbar: style can be found in header.less -->
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
<marquee style="background-color:white; font-family:algerian;"><h4>Welcome to<b> Smart Hire </b> – Streamlining HR Recruitment with Intelligence and Efficiency for a Smarter Workforce!</h4>
   </marquee>
<body style="font-size:120%;font-family:georgia; color:black;" >
<body text="black" >
<h1 style="font-size:400%;font-family:algerian;color:black;" >
<div align='center' style="font-family:algerian;"><br>LOGICAL REASONING QUIZ<br> </h1></div>
<br>
<script >
var answers = new Array("a","b","c","d","a","b","c","d")
var userAnswers = new Array
function checkAnswers() {
userAnswers[0] = document.form1.option.value
userAnswers[1] = document.form2.option.value
userAnswers[2] = document.form3.option.value
userAnswers[3] = document.form4.option.value
userAnswers[4] = document.form5.option.value
userAnswers[5] = document.form6.option.value
userAnswers[6] = document.form7.option.value
userAnswers[7] = document.form8.option.value
var count = answers.length
var correct = 0
for (var i = 0;i<count;i++) {
if(userAnswers[i]==answers[i]) {
correct=correct+1
}
}
document.write("YOU SCORED  " + correct + " /8 IN APTITUDE")
}

var myTime = "300";
function countDown() {
	document.form.seconds.value = myTime;
	if (myTime == 0)
	{
		checkAnswers();
	}
	else if (myTime > 0)
	{
		myTime--;
		setTimeout("countDown()",1000);
	}
}
</script>
<body onload="countDown();" style="font-size:120%;font-family:georgia; color:black;">
<form name="form">
Time Left: <input type="text" name="seconds" size="4">Seconds
</form>
<form name="form1">
<b><p style="font-size:120%;font-family:georgia;" >

<br><br><b1>1.Father is aged three times more than his son Ronit. After 8 years, he would be two and a half times of Ronit's age. After further 8 years, how many times would he be of Ronit's age? </b1>
<br>
  <input type="radio" name="option" value="a" > 2 times<br>
  <input type="radio" name="option" value="b"> 3 times<br>
   <input type="radio" name="option" value="c"> 3.5 times<br>
  <input type="radio" name="option" value="d"> 2.5 times
  </b><br> <br> <br>
  </form>
  <form name="form2"><b><p style="font-size:120%;font-family:georgia" >

  <b2>2.The sum of ages of 5 children born at the intervals of 3 years each is 50 years. What is the age of the youngest child?</b2>
  <br>
  <input type="radio" name="option" value="a" > 4<br>
  <input type="radio" name="option" value="b"> 8<br>
    <input type="radio" name="option" value="c"> 10<br>
  <input type="radio" name="option" value="d"> none
  </b><br> <br> <br>

</form>
<form name="form3"><b><p style="font-size:120%;font-family:georgia" >

<b3>3.A father said to his son, "I was as old as you are at the present at the time of your birth". If the father's age is 38 years now, the son's age five years back was:</b3>
<br>
  <input type="radio" name="option" value="a" > 14<br>
  <input type="radio" name="option" value="b"> 19<br>
   <input type="radio" name="option" value="c"> 33<br>
  <input type="radio" name="option" value="d"> 38
  </b><br> <br> <br>
  </form>
  <form name="form4"><b><p style="font-size:120%;font-family:georgia" >

  <b4>4.A is two years older than B who is twice as old as C. If the total of the ages of A, B and C be 27, the how old is B? </b4>
  <br>
  <input type="radio" name="option" value="a" > 7<br>
  <input type="radio" name="option" value="b"> 8<br>
   <input type="radio" name="option" value="c"> 9<br>
  <input type="radio" name="option" value="d"> 10
  </b><br> <br> <br>
</form> 
<form name="form5"><b><p style="font-size:120%;font-family:georgia" >

<b5>5.Present ages of Sameer and Anand are in the ratio of 5 : 4 respectively. Three years hence, the ratio of their ages will become 11 : 9 respectively. What is Anand's present age in years? </b5>
<br>
  <input type="radio" name="option" value="a" >24 <br>
  <input type="radio" name="option" value="b"> 27<br>
   <input type="radio" name="option" value="c"> 40<br>
  <input type="radio" name="option" value="d"> none
  </b><br> <br> <br>
  </form>
  <form name="form6"><b><p style="font-size:120%;font-family:georgia" >

  <b6>6.A man is 24 years older than his son. In two years, his age will be twice the age of his son. The present age of his son is:</b6>
  <br>
  <input type="radio" name="option" value="a" > 14<br>
  <input type="radio" name="option" value="b"> 18<br>
   <input type="radio" name="option" value="c"> 20<br>
  <input type="radio" name="option" value="d"> 22
  </b><br> <br> <br>
</form> 
<form name="form7"><b><p style="font-size:120%;font-family:georgia" >

<b7>7.Six years ago, the ratio of the ages of Kunal and Sagar was 6 : 5. Four years hence, the ratio of their ages will be 11 : 10. What is Sagar's age at present? </b7>
<br>
  <input type="radio" name="option" value="a" > 16<br>
  <input type="radio" name="option" value="b"> 18<br>
   <input type="radio" name="option" value="c"> 20<br>
  <input type="radio" name="option" value="d"> cannot determined
  </b><br> <br> <br>
  </form>
  <form name="form8"><b><p style="font-size:120%;font-family:georgia" >

  <b8>8.The sum of the present ages of a father and his son is 60 years. Six years ago, father's age was five times the age of the son. After 6 years, son's age will be: </b8>
  <br>
  <input type="radio" name="option" value="a" > 12<br>
  <input type="radio" name="option" value="b"> 14<br>
   <input type="radio" name="option" value="c"> 18<br>
  <input type="radio" name="option" value="d">20
  </b><br> <br> <br>
</form>
<button onclick="checkAnswers()">CHECK THE SCORE</button>
<br><br><br><form method="post" action="cate.php">

<input name="SignIn" type="submit"  value="CHOOSE OTHER CATEGORY" ><br><br>
</form>


</br>
</br>
</div>
<footer class="main-footer" style="margin-left: 0px;">
    <div class="text-center">
      <strong>Anshika &#10084; 2025 <a href="index.php">SmartHire</a>.</strong> All rights
    reserved.
    </div>
</footer>
</body>
</html>