<?php
session_start();
//$tname = $_SESSION['tname'];
if (isset($_POST['submit_3'])) {
    header("Location:sample.php");
if(isset($_POST['radio']))
{
$_SESSION['select']=$_POST['radio'];  //  Displaying Selected Value

}


}
if(isset($_SESSION['flag']))
{
if($_SESSION['flag']==1)
{
$uname = $_SESSION['username'];
    include 'connection.php';
    $result = mysqli_query($conn,"select tname from trips where uid='$uname'");

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
    
    <nav class="navbar navbar-inverse">
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
    ?>
<div class="container">
  <div class="row " style="color: chocolate; font-family: "Times New Roman", Times, serif;">
   <div class=""> 
       <table  class="table table-hover  table-condensed text-center" style=" background-color: gold; border-width: 0px; border-color: maroon; border: 0px; ">
           <tbody>

<?php
    while($values = mysqli_fetch_array($result,MYSQLI_ASSOC))    
    {
              ?>
            
        <tr>
            <td>
                <h4>
                    <form action='' method='post'>
                    <input type="radio" name="radio" value="<?php echo $values['tname']; ?>"> <?php echo"".$values['tname']; ?>
                </h4>
            </td>
        
         </tr>
        
        <?php
    }
        ?>
<tr>
            <td>
<input type="submit" name="submit_3" value="Submit" />
                </form>
</td>
        
         </tr>
           </tbody>
       </table>
      </div>
</div>
</div>


<!--<form action="" method="post">
<input type="radio" name="radio" value="Radio 1">Radio 1
<input type="radio" name="radio" value="Radio 2">Radio 2
<input type="radio" name="radio" value="Radio 3">Radio 3
<input type="submit" name="submit_3" value="Get Selected Values" />
</form>
-->


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
 <?php
     if($_SESSION['invalid'] == 1)
     {
    ?>
    
    <script>
    window.alert("INVALID User-Id OR Password");
    </script>
    
    <?php
     }
    ?>
    


<?php
}
 else {
    
?>
<script>
window.alert("Please login to continue further!...");

</script>


<?php
header("refresh:1;http://localhost/tripplanner/home.php");
}
}
 else {
?>
<script>
window.alert("Please login to continue further!...");
</script>

<?php
header("refresh:1;http://localhost/tripplanner/home.php");
     
}
 ?>

</body>
</html>