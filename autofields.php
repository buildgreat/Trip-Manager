<?php
session_start();

if(isset($_SESSION['flag']))
{
if($_SESSION['flag']==1)
{
include 'connection.php';
$tname = $_SESSION['select'];
$_SESSION['tname'] = $tname;
//$nom = $_SESSION['nom'];
$uname = $_SESSION['username'];
$sql1 = "select nom from trips where tname='$tname'";
$result1 = $conn->query($sql1);
$values = mysqli_fetch_array($result1,MYSQLI_ASSOC);
$nom = $values['nom'];
$_SESSION['nom'] = $nom;
$sql = "select m1,m2,m3,m4,m5,m6,m7,m8 from trips where uid='$uname' AND tname='$tname'";
$result = $conn->query($sql);
}
}

//if(isset($_POST['submit_4']))
//{
    include 'connection.php';

$no_questions = $_POST['no_questions'];
$tname = 'pawan';
//$nom = $_SESSION['nom'];
//$uname = $_SESSION['username'];

	for($i=0; $i<$no_questions; $i++)
	{
		//$question = $_POST['question_'.$i];
		$a = $_POST['a_'.$i];
		$b = $_POST['b_'.$i];
		$c = $_POST['c_'.$i];
		//$d = $_POST['d_'.$i];
		//$e = $_POST['e_'.$i];
		//$correct_option = $_POST['correct_'.$i];
		//$sql_question_insert = "INSERT INTO `test_table`(`test_id`, `question_no`,`question`, `a`, `b`, `c`, `d`, `e`, `correct_option`) VALUES ('$test_id', $i,'$question','$a','$b','$c','$d', '$e', '$correct_option')";
                $sql="INSERT INTO autofield(tname,pur,paid,mem) VALUES('$tname','$a','$b','$c')";
		//echo $sql_question_insert;
		mysqli_query($conn,$sql);
	}
	//echo "<script>alert('Submitted Successfully'); window.location='index.php'</script>";
	//header("location: index.php");
//}



if(isset($_POST['submit_4']))
{
    include 'connection.php';
$arr1=$_POST['pur'];
 $arr2=$_POST['paid'];
$arr3=$_POST['mem'];
$tname = $_SESSION['select'];
//$nom = $_SESSION['nom'];
$uname = $_SESSION['username'];
 foreach($arr1 as $check1=>$value ){
//echo'Array Value Names->'.$arr1[$check1].'<br>';
//echo'Array Value Address->'.$arr2[$check1].'<br>';
//echo'Array Value Age->'.$arr3[$check1].'<br>';
$sql="INSERT INTO tripd (uid,tname,pur,paid,mem) VALUES('$uname','$tname','$arr1[$check1]','$arr2[$check1]','$arr3[$check1]')";
$result = $conn->query($sql);    
}
header("Location:display.php");
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
      <a class="navbar-brand" href="#">Trip Planner</a>
    </div>
    <ul class="nav navbar-nav">
        <li class="active"><a href="#"><b style="font-size:20px; color: white;  font-family: “Times New Roman”, Times, serif;">Home</b></a></li>
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
     
    <div class="navbar navbar-inverse" style="font-size:25px; font-style: bold; background-color: black; color: bisque; font-family: “Times New Roman”, Times, serif;">
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
            
        <tr>
            <td>
                <h4>  <?php echo"This is ".$tname." Trip"; ?> </h4>
            </td>
        
         </tr>
       

           </tbody>
       </table>
      </div>
</div>
</div>

<!--<div class="container" style="font-family: “Times New Roman”, Times, serif; font-size: 20px; color: black; width: 100%; background-color: gold">
    <form class="form-horizontal" method="POST" action="sample.php">

      <div class="row"> 
          <div class="col-sm-1"><label class="control-label col-sm-3" for="name">>></label></div>    
      <label class="control-label col-sm-3" for="name">Purpose</label>
      <label class="control-label col-sm-3" for="name">Amount paid</label>
      <label class="control-label col-sm-3" for="name">paid by</label>
          </div>
      
      
      
      <?php
      if($nom == 3){
    $values = mysqli_fetch_array($result,MYSQLI_ASSOC);
        ?>
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m1'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid" placeholder="paid"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="purpose" value="<?php echo $values['m1'] ?>"></div>
      </div>
      <br>
      
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m2'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
            <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="purpose" value="<?php echo $values['m2'] ?>"></div>

               </div>
      <br>
      
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m3'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
            <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="purpose" value="<?php echo $values['m3'] ?>"></div>

      </div>
      <br>
       <?php
    }else if($nom == 4){
        $values = mysqli_fetch_array($result,MYSQLI_ASSOC);
        ?>
      
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m1'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="paid" value="<?php echo $values['m1']; ?>"></div>
      </div>
      <br>
      
      
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m2'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="paid" value="<?php echo $values['m2']; ?>"></div>

      </div>
      <br>
      
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m3'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="paid" value="<?php echo $values['m3']; ?>"></div>

      </div>
      <br>
      
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m4'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="paid" value="<?php echo $values['m4']; ?>"></div>

      </div>
      <br>
      <?php
    }else if($nom == 5){
        $values = mysqli_fetch_array($result,MYSQLI_ASSOC);
        ?>
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m1'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
       <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="paid" value="<?php echo $values['m1']; ?>"></div>

      </div>
      <br>
      
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m2'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
       <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="paid" value="<?php echo $values['m2']; ?>"></div>

      </div>
      <br>
      
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m3'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
       <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="paid" value="<?php echo $values['m3']; ?>"></div>

      </div>
      <br>
      
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m4'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
       <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="paid" value="<?php echo $values['m4']; ?>"></div>

      </div>
      <br>
      
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m5'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
       <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="paid" value="<?php echo $values['m5']; ?>"></div>

      </div>  
      <br>
      
      <?php
    }else if($nom == 6){
        $values = mysqli_fetch_array($result,MYSQLI_ASSOC);
        ?>
      
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m1'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
       <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="paid" value="<?php echo $values['m1']; ?>"></div>

      </div>
      <br>
      
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m2'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
       <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="paid" value="<?php echo $values['m2']; ?>"></div>

      </div>
      <br>
      
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m3'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
       <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="paid" value="<?php echo $values['m3']; ?>"></div>

      </div>
      <br>
      
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m4'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
       <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="paid" value="<?php echo $values['m4']; ?>"></div>

      </div>
      <br>
      
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m5'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
       <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="paid" value="<?php echo $values['m5']; ?>"></div>

      </div>  
      <br>
      
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m6'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
       <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="paid" value="<?php echo $values['m6']; ?>"></div>

      </div>
      <br>

<?php
    }else if($nom == 7){
        $values = mysqli_fetch_array($result,MYSQLI_ASSOC);
        ?>

      
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m1'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
       <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="paid" value="<?php echo $values['m1']; ?>"></div>

      </div>
      <br>
      
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m2'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
       <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="paid" value="<?php echo $values['m2']; ?>"></div>

      </div>
      <br>
      
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m3'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
       <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="paid" value="<?php echo $values['m3']; ?>"></div>

      </div>
      <br>
      
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m4'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
       <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="paid" value="<?php echo $values['m4']; ?>"></div>

      </div>  
      <br>
      
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m5'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
       <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="paid" value="<?php echo $values['m5']; ?>"></div>

      </div>
      <br>
      
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m6'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
       <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="paid" value="<?php echo $values['m6']; ?>"></div>

      </div>
      <br>
      
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m7'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
       <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="paid" value="<?php echo $values['m7']; ?>"></div>

      </div>
      <br>


<?php
    }else{
        $values = mysqli_fetch_array($result,MYSQLI_ASSOC);
        ?>

      
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m1'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
       <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="paid" value="<?php echo $values['m1']; ?>"></div>

      </div>  
      <br>
      
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m2'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
       <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="paid" value="<?php echo $values['m2']; ?>"></div>

      </div>
      <br>
      
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m3'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
       <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="paid" value="<?php echo $values['m3']; ?>"></div>

      </div>
      <br>
      
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m4'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
       <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="paid" value="<?php echo $values['m4']; ?>"></div>

      </div>
      <br>
      
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m5'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
       <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="paid" value="<?php echo $values['m5']; ?>"></div>

      </div> 
      <br>
      
       <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m6'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
       <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="paid" value="<?php echo $values['m6']; ?>"></div>

      </div>
      <br>
      
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m7'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
       <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="paid" value="<?php echo $values['m7']; ?>"></div>

      </div>
      <br>
      
      <div class="row">
          <div class="col-sm-2"><label class="control-label col-sm-3" for="name"><?php echo $values['m8'] ?></label></div>    
      <div class="col-sm-3"><input type="text"  class="form-control" name="pur[]" placeholder="purpose"></div>
      <div class="col-sm-3"><input type="text"  class="form-control" name="paid[]" placeholder="paid"></div>
       <div class="col-sm-3"><input type="text"  class="form-control" name="mem[]" placeholder="paid" value="<?php echo $values['m8']; ?>"></div>

      </div> 
      <br>
      
      <?php
    }
    ?>
        <div class="form-group">        
        <div class="col-md-4"></div>
      <div class="col-sm-offset-2 col-md-3" style="color: chocolate">
          <input type="submit" class="btn btn-default" name="submit_4" value="submit"></input>
      </div>
    </div> 

  </form>
</div>
-->
<form action="autofields.php" method="POST">
    <table name='test_input_table' align="center" cellspacing="10">

        <tr>
            <td height="10px" colspan="3"></td>
        </tr>
        <tr>
            <td><label class="label label-primary">NUMBER OF QUESTIONS</label></td>
            <td width="20px"></td>
            <td>
                <input type="number" name="no_questions" id="no_questions" min="1" value="5"
                       onchange="populate_question_table();" required>
            </td>
        </tr>


    </table>


    <div id="questions_div" class="top-buffer">

    </div>

    <center><input type="submit" value="Submit" class="btn btn-warning">&nbsp&nbsp&nbsp&nbsp<input type="reset"
                                                                                                   class="btn btn-success"
                                                                                                   value="Reset">
    </center>

</form>


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

<script>
    window.onload = populate_question_table()
    function populate_question_table() {
        var questions_div = document.getElementById('questions_div');
        var str = '<table name="questions_table" class="table table-condensed">';
        var no_questions = document.getElementById('no_questions').value;
        if (no_questions > 100)
            alert("MAXIMUM 100 QUESTIONS PER TEST");
        else if (no_questions < 1)
            alert("MINIMUM 1 QUESTION REQUIRED");
        else {
//alert (no_questions);
            str += '<thead>';
            //str += '<th>Q. No.</th>';
            //str += '<th>Question</th>';
            str += '<th>Option A</th>';
            str += '<th>Option B</th>';
            str += '<th>Option C</th>';
            //str += '<th>Option D</th>';
            //str += '<th>Option E</th>';
            //str += '<th>Correct option</th>';
            str += '</thead>';

            for (i = 0; i < no_questions; i++) {
                str += '<tr>';
                str += '<td>' + (i + 1) + '</td>'
                //str += '<td><input type="textarea" required rows="5" cols="10" name="question_' + i + '"  placeholder="QUESTION ' + (i + 1) + '"> </td>';
                str += '<td><input type="text" required name="a_' + i + '" id="a_' + i + '" > </td>';
                str += '<td><input type="text" required name="b_' + i + '" id="b_' + i + '" > </td>';
                str += '<td><input type="text" required name="c_' + i + '" id="c_' + i + '" > </td>';
                //str += '<td><input type="text" required name="d_' + i + '" id="d_' + i + '" > </td>';
                //str += '<td><input type="text" required name="e_' + i + '" id="e_' + i + '" > </td>';

                /*str += '<td> <select name="correct_' + i + '" required> \
		<option value=""></option> \
		<option value="A">A</option> \
		<option value="B">B</option> \
		<option value="C">C</option> \
		<option value="D">D</option> \
		<option value="E">E</option> \
		</select></td>';*/

                str += '</tr>';
            }

            str += '<table>';
            questions_div.innerHTML = str;
        }
    }
</script>


</html>
