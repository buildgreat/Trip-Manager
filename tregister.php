<?php
session_start();
if(isset($_POST['submit']))
{   
    
include 'connection.php';

$name = $_POST['name'];
$uid = $_POST['uid'];
$pno = $_POST['pno'];
$_SESSION['email'] = $_POST['email'];
$pwd = $_POST['pwd'];
$sql = "INSERT INTO tregister(name,uid,pwd,pno) VALUES('$name','$uid','$pwd','$pno')";
$result = $conn->query($sql);
//$email=$_POST['email'];

//if (isset($_POST['email'])) {
   //     sendMail();
    //}
/*function sendMail(){
    require_once "PHPMailer_5.2.4/class.phpmailer.php";
    $mail = new PHPMailer(); $mail->IsSMTP();$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";$mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "workforce.pawan@gmail.com";
    $mail->Password = "workforce@321";
    $mail->SetFrom("workforce.pawan@gmail.com");$mail->Subject = "Password Recovery";
    $mail->Body ="Sample testing of php mail function";$mail->AddAddress($_SESSION['email']);
						 if(!$mail->Send()) {
                                                     echo '<script language="javascript">';
					             echo 'alert("Email not Send \nMailer Error:Authentication Required\n\nPassword not updated")';
					             echo '</script>';
                                                 }
                                                 else {
                                                     echo '<script language="javascript">';
						     echo 'alert("Email sent")';
						     echo '</script>';
                                                 }

}
//sendMail();*/
   // header("Location:home.php");    //

    
}    
?>


<html lang="en">
<head>
    <title>Trip Planner</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    p{
        font-size: 35px;
        font-weight: bolder;
    }
    
	/* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
	
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: wheat;
      padding: 0;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin :auto;
      height: 20%;
  }
  </style>

<body>
<div id = "myCarousel" class = "carousel slide" data-ride="carousel">
   
   <!-- Carousel indicators -->
   <ol class = "carousel-indicators">
      <li data-target = "#myCarousel" data-slide-to = "0" class = "active"></li>
      <li data-target = "#myCarousel" data-slide-to = "1"></li>
      <li data-target = "#myCarousel" data-slide-to = "2"></li>
   </ol>   
   
   <!-- Carousel items -->
   <div class = "carousel-inner" role="listbox">
      <div class = "item active">
          <img style="height:200px; background-color: red" src = "hd1.jpg" alt = "First slide">
      </div>
       <div class="carousel-caption">
         
        </div>
      
      <div class = "item">
          <img style="height:200px; "src = "hd2.jpg" alt = "Second slide">
      </div>
       <div class="carousel-caption">
         
        </div>
      
      <div class = "item">
          <img style="height:200px;" src = "hd3.jpg" alt = "Third slide">
      </div>
       <div class="carousel-caption">
         
        </div>
   </div>
   
   <!-- Carousel nav -->
   <a class = "carousel-control left" href = "#myCarousel" data-slide = "prev">&lsaquo;</a>
   <a class = "carousel-control right" href = "#myCarousel" data-slide = "next">&rsaquo;</a>
   
</div> 
    
    <nav class="navbar navbar-inverse" style="">
        <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="home.php">Trip Planner</a>
    </div>
    <ul class="nav navbar-nav">
        <li class="active"><a href="home.php"><b style="font-size:20px; color: white;  font-family: “Times New Roman”, Times, serif;">Home</b></a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><b style="font-size:20px; color: white;  font-family: “Times New Roman”, Times, serif;">Trip</b>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="newtrip.php">New Trip</a></li>
          <li><a href="currenttrip.php">Current trips</a></li>
        </ul>
      </li>
        <li><a href="#"><b style="font-size:20px; color: white;  font-family: “Times New Roman”, Times, serif;">About us</b></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span><b style="font-size:20px; color: white;  font-family: “Times New Roman”, Times, serif;"> Sign Up </b></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span><b style="font-size:20px; color: white;  font-family: “Times New Roman”, Times, serif;"> Login</b></a></li>
    </ul>
  </div>
</nav>
    
    
    
    <br><br><br>
    <div class="container" style="font-family: “Times New Roman”, Times, serif; font-size: 20px; color: black;background-color: chartreuse">
  <form class="form-horizontal" method="POST" action="">
    <div class="form-group">
        <p><center><b><u>Register</u></b></center></p>
        <br>
      <label class="control-label col-sm-5" for="name">Enter Full Name:</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
      </div>
    </div>
      
    <div class="form-group">
      <label class="control-label col-sm-5" for="roll">Enter UserId:</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="uid" placeholder="Enter uid" required>
      </div>
    </div>

      <div class="form-group">
      <label class="control-label col-sm-5" for="roll">Enter Password:</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="pwd" placeholder="Enter password" required>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-5" for="roll">Enter Email id:</label>
      <div class="col-sm-3">
          <input type="email" class="form-control" name="email" placeholder="Enter email id" required>
      </div>
    </div>

      
      <div class="form-group">
      <label class="control-label col-sm-5" for="roll">Enter Ph_no:</label>
      <div class="col-sm-3">
          <input type="number" class="form-control" name="pno" placeholder="Enter phone No" max="9999999999" min="1000000000"required>
      </div>
    </div>
 
  <div class="form-group">        
        <div class="col-md-4"></div>
      <div class="col-sm-offset-2 col-md-3" style="color: chocolate">
          <input type="submit" class="btn btn-primary" name="submit" value="submit"></input>
      </div>
    </div> 
  </form>
    </div>
    <br>
    <br>
    <footer  style="background-color: blue; height: 205px;" >
    
    <div class="col-md-3" >
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="trip4.png" alt="Image" style=" height: 200px; width: 200px; ">
    </div>
    <div class="col-md-4 " style="text-align: center; background-color: blue;" >
        <h3 style="color: chocolate;"><b>--- Other Links ---</b></h3><br> 
        <span style="color: white; " class="glyphicon glyphicon-option-horizontal">&nbsp;</span> <a href="homepage.php"><b style="font-size:20px; color: white; font-family: “Times New Roman”, Times, serif;"><span style="font-size: 20px; color: white;" class="glyphicon glyphicon-home"></span> Tripadviser.com</b></a>
        <br>
        <span style="color: white; " class="glyphicon glyphicon-option-horizontal">&nbsp;</span> <a href="homepage.php"><b style="font-size:20px; color: white; font-family: “Times New Roman”, Times, serif;"><span style="font-size: 20px; color: white;" class="glyphicon glyphicon-home"></span> Makemytrip.com</b></a>

    </div>
    <div class="col-md-5"  style="text-align: center; ">
        <h3 style="color: chocolate;"><b><center>CONTACT US</center></b></h3><br>
        <span style="color: white; " class="glyphicon glyphicon-map-marker"></span>&nbsp;&nbsp;&nbsp;&nbsp;<b style="color: white;"> tripplanner@gmail.com </b><br><br>
        <span style="color: white; " class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="color: white;">99999-88888 </b>
    </div>
</footer>

</body>
</html>