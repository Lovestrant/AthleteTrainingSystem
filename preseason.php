<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Athlete Training System</title>

   

     <!--bootstrap links-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


<!--Css link-->

<!-- google icons link-->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="manifest"  href="manifest.json">
<script src="main.js"></script>
</head>


<body>
<div class="container-fluid" style="background-color: orange;">

<h1 style="text-align: centre;">Athlete Training System</h1>

<div style="text-align: right;background-color: transparent;">
<form action="logout.php">
<button class="btnsearch" style="background-color: transparent;"><i class="material-icons">logout</i>Log Out</button>
</form>
</div>
</div>
<div class="container">
<br>


<br>
<h4>Pre-Season Training Program. </h4>
<br>
<h4 style="color:red;">MicroCycle Stage:</h4>
<p>The athlete is required to successfully complete this stage to be automatically taken to the next stage.</p>
<br><br>

<p>1. Rate the score achieved on resistance training.</p>

<form class="form-control" action="preseason.php" method="post">
<p>First test</p>
<input class="form-check-input" type="radio" name="first" value="poor" required> Between 0%-35%
<input class="form-check-input" type="radio" name="first" value="medium" required >Between 35%-75%
<input class="form-check-input" type="radio" name="first" value="best" required>Between 75%-100%   
<br><br>
<p>Second test</p>
<input class="form-check-input" type="radio" name="second" value="poor" required> Between 0%-35%
<input class="form-check-input" type="radio" name="second" value="medium" required>Between 35%-75%
<input class="form-check-input" type="radio" name="second" value="best" required>Between 75%-100%   
<br><br>
<p>Final test</p>
<input class="form-check-input" type="radio" name="final" value="poor" required> Between 0%-35%
<input class="form-check-input" type="radio" name="final" value="medium" required>Between 35%-75%
<input class="form-check-input" type="radio" name="final" value="best" required>Between 75%-100%   
<br><br>
<button class="btn btn-success" name="postbtn" type="submit">Save</button>

</form>

<br><br>


</div>

</body>
</html>


<?php

include('db.php');


if(isset($_POST['postbtn'])){


    $first = $_POST['first'];
    $second = $_POST['second'];
    $final = $_POST['final'];
    $phonenumber =$_SESSION['phonenumber'];
    $season = 'preseason';
   

        $sql1="SELECT * FROM microscores where phonenumber = '$phonenumber' and season = '$season' Limit 1";
    
		$result= mysqli_query($con,$sql1);
		$queryResults= mysqli_num_rows($result);
		
		
        if($queryResults) {
            $sql = "UPDATE microscores set firstscore = '$first',secondscore = '$second',finalscore = '$final' where phonenumber= '$phonenumber' and season = '$season'";
            $res = mysqli_query($con,$sql);
            
        
            if($res ==1){
    
    
                echo "<script>alert('Update successful.')</script>";

                $sql1="SELECT * FROM microscores where phonenumber = '$phonenumber' and season = '$season' Limit 1";
    
                $result= mysqli_query($con,$sql1);
                $queryResults= mysqli_num_rows($result);
                
                
                if($queryResults) {
                    while($row = mysqli_fetch_assoc($result)) {


                        $firstscore= $row['firstscore'];
                        $secondscore = $row['secondscore'];
                        $finalscore =  $row['finalscore'];
                        if($firstscore == 'best' && $secondscore == 'best' && $finalscore == 'best')
                        {
                         echo "<script>alert('You passed the test.Click Ok to proceed to the next level')</script>";
                     
                            echo "<script>location.replace('preseasonmeso.php')</script>"; 
                        }else{
                            echo "<script>alert('You failed.Click Ok to repeat.')</script>";
                            echo "<script>location.replace('preseason.php')</script>"; 
                        }
  
                
                }
              
            }

            } 
        }else{
         
            $sql = "INSERT INTO microscores (season,phonenumber,firstscore,secondscore,finalscore) VALUES ('$season','$phonenumber','$first','$second','$final')";
		$res = mysqli_query($con,$sql);
		
	
		if($res ==1){

      

			echo "<script>alert('Record saved.')</script>";
          

            
            $sql1="SELECT * FROM microscores where phonenumber = '$phonenumber' and season = '$season' Limit 1";
    
            $result= mysqli_query($con,$sql1);
            $queryResults= mysqli_num_rows($result);
            
            
            if($queryResults) {
                while($row = mysqli_fetch_assoc($result)) {


                    $firstscore= $row['firstscore'];
                    $secondscore = $row['secondscore'];
                    $finalscore =  $row['finalscore'];
                    if($firstscore == 'best' && $secondscore == 'best' && $finalscore == 'best')
                    {
                        echo "<script>alert('You passed the test.Click Ok to proceed to the next level')</script>";
                        echo "<script>location.replace('preseasonmeso.php')</script>"; 
                    }else{
                        echo "<script>alert('You failed.Click Ok to repeat.')</script>";
                        echo "<script>location.replace('preseason.php')</script>"; 
                    }

            
            }
          
            }


		}

    }

        

}


?>
