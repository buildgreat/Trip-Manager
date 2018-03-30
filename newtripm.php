<?php
session_start();
if(isset($_POST['submit_2']))
{
   include 'connection.php';
$uname = $_SESSION['username'];
$tname = $_SESSION['tname'];
$nom = $_SESSION['nom'];
$m1 = $_POST['m1'];
$m2 = $_POST['m2'];
$m3 = $_POST['m3'];
$m4 = $_POST['m4'];
$m5 = $_POST['m5'];
$m6 = $_POST['m6'];
$m7 = $_POST['m7'];
$m8 = $_POST['m8'];
//$m9 = $_POST['m9'];
//$m10 = $_POST['m10'];
$count=0;
$sql = "INSERT INTO trips(uid,tname,nom,m1,m2,m3,m4,m5,m6,m7,m8,count) VALUES('$uname','$tname','$nom','$m1','$m2','$m3','$m4','$m5','$m6','$m7','$m8','$count')";
$result = $conn->query($sql);
header("Location:home.php");
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
            
            <?php
         if(isset($_SESSION['flag']))
         {
        if($_SESSION['flag'] == 0)
        {
        ?>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="tregister.php"><span class="glyphicon glyphicon-user"></span><b style="font-size:20px; color: white;  font-family: “Times New Roman”, Times, serif;"> Sign Up </b></a></li>
        <li data-toggle="modal" data-target="#myModal" onMouseOver="this.style.cursor='pointer'"><span class="glyphicon glyphicon-log-in"></span><b style="font-size:20px; color: white;  font-family: “Times New Roman”, Times, serif;"> Login</b></a></li>
    </ul>
            <?php
        }
        else
            {
        ?>
            <ul class="nav navbar-nav navbar-right col-md-3">
        <li><a href="logout.php"><b style="font-size:20px; color: white; font-family: “Times New Roman”, Times, serif;"><span style="font-size: 20px; color: white;" class="glyphicon glyphicon-log-out"></span> LOGOUT</b></a></li>
        </ul>
        
        <?php
             }
         }
 else
     {
        ?>
        <ul class="nav navbar-nav navbar-right col-md-3">
        <li><a href="tregister.php"><span class="glyphicon glyphicon-user"></span><b style="font-size:20px; color: white;  font-family: “Times New Roman”, Times, serif;"> Sign Up </b></a></li>
        
<div class="container">
    <li data-toggle="modal" data-target="#myModal" onMouseOver="this.style.cursor='pointer'"><span class="glyphicon glyphicon-log-in"></span><b style="font-size:20px; color: white;  font-family: “Times New Roman”, Times, serif;"> Login</b></a></li>
 </ul>
        <?php
     }
        ?>
  </div>
        </div>
</nav>
    
    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="font-family: “Times New Roman”, Times, serif; color:chocolate;">Login Page</h4>
        </div>
        <div class="modal-body">
          
            <form class="form-horizontal" method="POST" action="">
    <div class="form-group">
      <label class="control-label col-sm-5" for="User-Id">User-Id:</label>
      <div class="col-sm-4">
          <input type="text" class="form-control" name="l-user-id" placeholder="Enter User-Id" required>
      </div>
    </div>
      
         <br>
    <div class="form-group">
        <div class="col-md-5">    </div>
      <div class="col-sm-3">
                <input type="submit" class="form-control" name="l-submit" value="Submit"></input>
      </div>
    </div>
</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
      
    </div>
  </div>  
</div>

 <?php
    if(isset($_SESSION['flag']))
    {
     if($_SESSION['flag'] == 1)
    {
     ?> 
     
    <div class="navbar navbar-inverse" style="font-size:25px; font-style: bold; background-color: whitesmoke; color: brown; font-family: “Times New Roman”, Times, serif;">
       <p class="col-md-6 text-left"><?php echo "Welcome ".$_SESSION['name']; ?></p>
      
    </div>
    <?php
    }
    }
   // if($_SESSION['invalid']==1)
      //  window.alert("Invalid Login credentials");
    $index=0;
    ?>
    
        <div class="container" style="font-family: “Times New Roman”, Times, serif; font-size: 20px; color: black; width: 100%; background-color: gold">
  <form class="form-horizontal" method="POST" action="">
      
      <div class="form-group"> 
          <label class="control-label col-sm-5" for="name">                             -----Members------</label>
          </div>
      
      
      <?php if($_SESSION['nom']==3){ ?>
    <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member1 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m1" placeholder="Enter member Name" required>
      </div>
          </div>
         
      
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member2 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m2" placeholder="Enter member Name" required>
      </div>
          </div>
      
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member3 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m3" placeholder="Enter member Name">
      </div>
          </div>
      
     <?php }else if($_SESSION['nom']==4){ ?>
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member1 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m1" placeholder="Enter member Name">
      </div>
          </div>
      
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member2 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m2" placeholder="Enter member Name">
      </div>
          </div>
      
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member3 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m3" placeholder="Enter member Name">
      </div>
          </div>
      
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member4 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m4" placeholder="Enter member Name">
      </div>
          </div>
     
      <?php }else if($_SESSION['nom']==5){ ?>
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member1 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m1" placeholder="Enter member Name">
      </div>
          </div>
      
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member2 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m2" placeholder="Enter member Name">
      </div>
          </div>
      
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member3 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m3" placeholder="Enter member Name">
      </div>
          </div>
      
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member4 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m4" placeholder="Enter member Name">
      </div>
          </div>
      
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member5 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m5" placeholder="Enter member Name">
      </div>
          </div>
      
      <?php }else if($_SESSION['nom']==6){ ?>
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member1 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m1" placeholder="Enter member Name">
      </div>
          </div>
      
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member2 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m2" placeholder="Enter member Name">
      </div>
          </div>
      
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member3 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m3" placeholder="Enter member Name">
      </div>
          </div>
      
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member4 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m4" placeholder="Enter member Name">
      </div>
          </div>
      
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member5 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m5" placeholder="Enter member Name">
      </div>
          </div>
      
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member6 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m6" placeholder="Enter member Name">
      </div>
          </div>
      
      
      <?php }else if($_SESSION['nom']==7){ ?>
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member1 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m1" placeholder="Enter member Name">
      </div>
          </div>
      
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member2 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m2" placeholder="Enter member Name">
      </div>
          </div>
      
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member3 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m3" placeholder="Enter member Name">
      </div>
          </div>
      
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member4 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m4" placeholder="Enter member Name">
      </div>
          </div>
      
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member5 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m5" placeholder="Enter member Name">
      </div>
          </div>
      
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member6 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m6" placeholder="Enter member Name">
      </div>
          </div>
      
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member7 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m7" placeholder="Enter member Name">
      </div>
          </div>
      
      <?php }else { ?>
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member1 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m1" placeholder="Enter member Name">
      </div>
          </div>
      
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member2 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m2" placeholder="Enter member Name">
      </div>
          </div>
      
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member3 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m3" placeholder="Enter member Name">
      </div>
          </div>
      
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member4 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m4" placeholder="Enter member Name">
      </div>
          </div>
      
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member5 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m5" placeholder="Enter member Name">
      </div>
          </div>
      
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member6 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m6" placeholder="Enter member Name">
      </div>
          </div>
      
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member7 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m7" placeholder="Enter member Name">
      </div>
          </div>
      
      <div class="form-group"> 
      <label class="control-label col-sm-5" for="name">Member8 :</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="m8" placeholder="Enter member Name">
      </div>
          </div>
      <?php } ?>
   <!-- <div class="form-group">
      <label class="control-label col-sm-5" for="roll">No of Members:</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="tname" placeholder="Enter Trip Name" required>
      </div>
    </div>
-->      
      
 
  <div class="form-group">        
        <div class="col-md-4"></div>
      <div class="col-sm-offset-2 col-md-3" style="color: chocolate">
          <br>
          <input type="submit" class="btn btn-default" name="submit_2" value="submit"></input>
      </div>
    </div> 
  </form>
    </div>

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