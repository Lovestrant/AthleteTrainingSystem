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
<div style="text-align: left;">
<a href="main.php"><button style="color: red;">Home</button></a><br><br>

<div>

<h4 style="color:red;">You can choose to clear the records to start afresh:</h4>
<p>The athlete managed to achieve the following:</p>
<br>

<div>

<h3 style="color: green;">Off-Season Training Program Results. </h3><br>
<h5>Micro Cycle Training result:</h5>
<p>

<?php

$phonenumber = $_SESSION['phonenumber'];
$season = "offseason";

    include('db.php');
    $sql="SELECT * FROM microscores where phonenumber='$phonenumber' and season = '$season' ORDER BY ID DESC";

    $data= mysqli_query($con,$sql);
    $queryResults= mysqli_num_rows($data);
    

    
    
    if($queryResults >0) {
        while($row = mysqli_fetch_assoc($data)) {
            echo "
            <div style='display: flex;'>   
            <p>FirstTest Score:</p>
            <div  style='height: auto;color:blue;   width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['firstscore']."</p>
            </div>
            </div> 
            <div style='display: flex;'>   
            <p>SecondTest Score:</p>
            <div  style='height: auto;color:red;  width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['secondscore']."</p>
            </div>
            </div>


            <div style='display: flex;'>   
            <p>FinalTest Score:</p>
            <div  style='height: auto; color:Orange ; width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['finalscore']."</p>
            </div>
            </div>
          
            ";
            echo"
            <div style='text-align: centre;margin-top: 10px;'>
            <a  href='microdelete.php?u_id=".$row['id']."'>
           
       
            <button class='btn btn-danger'>Delete</button>
            </a>
            </div>
    
            ";


        }
        }
        
 ?>           

</p>
<h5>Meso Cycle training result:</h5>
<p> 

<?php

$phonenumber = $_SESSION['phonenumber'];
$season = "offseason";
    include('db.php');
    $sql="SELECT * FROM mesoscores where phonenumber='$phonenumber' and season = '$season' ORDER BY ID DESC";

    $data= mysqli_query($con,$sql);
    $queryResults= mysqli_num_rows($data);
    

    
    
    if($queryResults >0) {
        while($row = mysqli_fetch_assoc($data)) {
            echo "
            <div style='display: flex;'>   
            <p>FirstTest Score:</p>
            <div  style='height: auto;color:blue;   width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['firstscore']."</p>
            </div>
            </div> 
         


            <div style='display: flex;'>   
            <p>FinalTest Score:</p>
            <div  style='height: auto; color:Orange ; width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['finalscore']."</p>
            </div>
            </div>
          
            ";
            echo"
            <div style='text-align: centre;margin-top: 10px;'>
            <a  href='mesodelete.php?u_id=".$row['id']."'>
            <button class='btn btn-danger'>Delete</button>
            </a>
            </div>
    
            ";


        }
        }
        
 ?>           
</p>
<h5>Macro Cycle training result:</h5>
<p>

<?php

$phonenumber = $_SESSION['phonenumber'];
$season = "offseason";
    include('db.php');
    $sql="SELECT * FROM macroscores where phonenumber='$phonenumber' and season = '$season' ORDER BY ID DESC";

    $data= mysqli_query($con,$sql);
    $queryResults= mysqli_num_rows($data);
    

    
    
    if($queryResults >0) {
        while($row = mysqli_fetch_assoc($data)) {
            echo "
            <div style='display: flex;'>   
            <p>FirstTest Score:</p>
            <div  style='height: auto;color:blue;   width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['firstscore']."</p>
            </div>
            </div> 
            <div style='display: flex;'>   
            <p>SecondTest Score:</p>
            <div  style='height: auto;color:red;  width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['secondscore']."</p>
            </div>
            </div>


            <div style='display: flex;'>   
            <p>FinalTest Score:</p>
            <div  style='height: auto; color:Orange ; width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['finalscore']."</p>
            </div>
            </div>
          
            ";
            echo"
            <div style='text-align: centre;margin-top: 10px;'>
            <a  href='macrodelete.php?u_id=".$row['id']."'>
           
       
            <button class='btn btn-danger'>Delete</button>
            </a>
            </div>
    
            ";


        }
        }
        
 ?>           

</p>

</div>

<div>


<h3 style="color: green;">In-Season Training Program Results. </h3><br>
<h5>Micro Cycle Training result:</h5>
<p>

<?php

$phonenumber = $_SESSION['phonenumber'];
$season = "inseason";

    include('db.php');
    $sql="SELECT * FROM microscores where phonenumber='$phonenumber' and season = '$season' ORDER BY ID DESC";

    $data= mysqli_query($con,$sql);
    $queryResults= mysqli_num_rows($data);
    

    
    
    if($queryResults >0) {
        while($row = mysqli_fetch_assoc($data)) {
            echo "
            <div style='display: flex;'>   
            <p>FirstTest Score:</p>
            <div  style='height: auto;color:blue;   width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['firstscore']."</p>
            </div>
            </div> 
            <div style='display: flex;'>   
            <p>SecondTest Score:</p>
            <div  style='height: auto;color:red;  width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['secondscore']."</p>
            </div>
            </div>


            <div style='display: flex;'>   
            <p>FinalTest Score:</p>
            <div  style='height: auto; color:Orange ; width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['finalscore']."</p>
            </div>
            </div>
          
            ";
            echo"
            <div style='text-align: centre;margin-top: 10px;'>
            <a  href='microdelete.php?u_id=".$row['id']."'>
         
       
            <button class='btn btn-danger'>Delete</button>
            </a>
            </div>
    
            ";


        }
        }
        
 ?>           

</p>
<h5>Meso Cycle training result:</h5>
<p> 

<?php

$phonenumber = $_SESSION['phonenumber'];
$season = "inseason";
    include('db.php');
    $sql="SELECT * FROM mesoscores where phonenumber='$phonenumber' and season = '$season' ORDER BY ID DESC";

    $data= mysqli_query($con,$sql);
    $queryResults= mysqli_num_rows($data);
    

    
    
    if($queryResults >0) {
        while($row = mysqli_fetch_assoc($data)) {
            echo "
            <div style='display: flex;'>   
            <p>FirstTest Score:</p>
            <div  style='height: auto;color:blue;   width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['firstscore']."</p>
            </div>
            </div> 
         


            <div style='display: flex;'>   
            <p>FinalTest Score:</p>
            <div  style='height: auto; color:Orange ; width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['finalscore']."</p>
            </div>
            </div>
          
            ";
            echo"
            <div style='text-align: centre;margin-top: 10px;'>
            <a  href='mesodelete.php?u_id=".$row['id']."'>
           
       
            <button class='btn btn-danger'>Delete</button>
            </a>
            </div>
    
            ";


        }
        }
        
 ?>           
</p>
<h5>Macro Cycle training result:</h5>
<p>

<?php

$phonenumber = $_SESSION['phonenumber'];
$season = "inseason";
    include('db.php');
    $sql="SELECT * FROM macroscores where phonenumber='$phonenumber' and season = '$season' ORDER BY ID DESC";

    $data= mysqli_query($con,$sql);
    $queryResults= mysqli_num_rows($data);
    

    
    
    if($queryResults >0) {
        while($row = mysqli_fetch_assoc($data)) {
            echo "
            <div style='display: flex;'>   
            <p>FirstTest Score:</p>
            <div  style='height: auto;color:blue;   width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['firstscore']."</p>
            </div>
            </div> 
            <div style='display: flex;'>   
            <p>SecondTest Score:</p>
            <div  style='height: auto;color:red;  width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['secondscore']."</p>
            </div>
            </div>


            <div style='display: flex;'>   
            <p>FinalTest Score:</p>
            <div  style='height: auto; color:Orange ; width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['finalscore']."</p>
            </div>
            </div>
          
            ";
            echo"
            <div style='text-align: centre;margin-top: 10px;'>
            <a  href='macrodelete.php?u_id=".$row['id']."'>
            
       
            <button class='btn btn-danger'>Delete</button>
            </a>
            </div>
    
            ";


        }
        }
        
 ?>           

</p>
</div>
<div>
<h3 style="color: green;">Post-Season Training Program Results. </h3><br>
<h5>Micro Cycle Training result:</h5>
<p>

<?php

$phonenumber = $_SESSION['phonenumber'];
$season = "postseason";

    include('db.php');
    $sql="SELECT * FROM microscores where phonenumber='$phonenumber' and season = '$season' ORDER BY ID DESC";

    $data= mysqli_query($con,$sql);
    $queryResults= mysqli_num_rows($data);
    

    
    
    if($queryResults >0) {
        while($row = mysqli_fetch_assoc($data)) {
            echo "
            <div style='display: flex;'>   
            <p>FirstTest Score:</p>
            <div  style='height: auto;color:blue;   width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['firstscore']."</p>
            </div>
            </div> 
            <div style='display: flex;'>   
            <p>SecondTest Score:</p>
            <div  style='height: auto;color:red;  width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['secondscore']."</p>
            </div>
            </div>


            <div style='display: flex;'>   
            <p>FinalTest Score:</p>
            <div  style='height: auto; color:Orange ; width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['finalscore']."</p>
            </div>
            </div>
          
            ";
            echo"
            <div style='text-align: centre;margin-top: 10px;'>
            <a  href='microdelete.php?u_id=".$row['id']."'>
            
       
            <button class='btn btn-danger'>Delete</button>
            </a>
            </div>
    
            ";


        }
        }
        
 ?>           

</p>
<h5>Meso Cycle training result:</h5>
<p> 

<?php

$phonenumber = $_SESSION['phonenumber'];
$season = "postseason";
    include('db.php');
    $sql="SELECT * FROM mesoscores where phonenumber='$phonenumber' and season = '$season' ORDER BY ID DESC";

    $data= mysqli_query($con,$sql);
    $queryResults= mysqli_num_rows($data);
    

    
    
    if($queryResults >0) {
        while($row = mysqli_fetch_assoc($data)) {
            echo "
            <div style='display: flex;'>   
            <p>FirstTest Score:</p>
            <div  style='height: auto;color:blue;   width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['firstscore']."</p>
            </div>
            </div> 
         


            <div style='display: flex;'>   
            <p>FinalTest Score:</p>
            <div  style='height: auto; color:Orange ; width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['finalscore']."</p>
            </div>
            </div>
          
            ";
            echo"
            <div style='text-align: centre;margin-top: 10px;'>
            <a  href='mesodelete.php?u_id=".$row['id']."'>
           
       
            <button class='btn btn-danger'>Delete</button>
            </a>
            </div>
    
            ";


        }
        }
        
 ?>           
</p>
<h5>Macro Cycle training result:</h5>
<p>

<?php

$phonenumber = $_SESSION['phonenumber'];
$season = "postseason";
    include('db.php');
    $sql="SELECT * FROM macroscores where phonenumber='$phonenumber' and season = '$season' ORDER BY ID DESC";

    $data= mysqli_query($con,$sql);
    $queryResults= mysqli_num_rows($data);
    

    
    
    if($queryResults >0) {
        while($row = mysqli_fetch_assoc($data)) {
            echo "
            <div style='display: flex;'>   
            <p>FirstTest Score:</p>
            <div  style='height: auto;color:blue;   width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['firstscore']."</p>
            </div>
            </div> 
            <div style='display: flex;'>   
            <p>SecondTest Score:</p>
            <div  style='height: auto;color:red;  width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['secondscore']."</p>
            </div>
            </div>


            <div style='display: flex;'>   
            <p>FinalTest Score:</p>
            <div  style='height: auto; color:Orange ; width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['finalscore']."</p>
            </div>
            </div>
          
            ";
            echo"
            <div style='text-align: centre;margin-top: 10px;'>
            <a  href='macrodelete.php?u_id=".$row['id']."'>
            
       
            <button class='btn btn-danger'>Delete</button>
            </a>
            </div>
    
            ";


        }
        }
        
 ?>           

</p>

</div>

<div>

<h3 style="color: green;">Pre-Season Training Program Results. </h3><br>
<h5>Micro Cycle Training result:</h5>
<p>

<?php

$phonenumber = $_SESSION['phonenumber'];
$season = "preseason";

    include('db.php');
    $sql="SELECT * FROM microscores where phonenumber='$phonenumber' and season = '$season' ORDER BY ID DESC";

    $data= mysqli_query($con,$sql);
    $queryResults= mysqli_num_rows($data);
    

    
    
    if($queryResults >0) {
        while($row = mysqli_fetch_assoc($data)) {
            echo "
            <div style='display: flex;'>   
            <p>FirstTest Score:</p>
            <div  style='height: auto;color:blue;   width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['firstscore']."</p>
            </div>
            </div> 
            <div style='display: flex;'>   
            <p>SecondTest Score:</p>
            <div  style='height: auto;color:red;  width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['secondscore']."</p>
            </div>
            </div>


            <div style='display: flex;'>   
            <p>FinalTest Score:</p>
            <div  style='height: auto; color:Orange ; width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['finalscore']."</p>
            </div>
            </div>
          
            ";
            echo"
            <div style='text-align: centre;margin-top: 10px;'>
            <a  href='microdelete.php?u_id=".$row['id']."'>
                 
            
            <button class='btn btn-danger'>Delete</button>
            </a>
            </div>
    
            ";

        }
        }
        
 ?>           

</p>
<h5>Meso Cycle training result:</h5>
<p> 

<?php

$phonenumber = $_SESSION['phonenumber'];
$season = "preseason";
    include('db.php');
    $sql="SELECT * FROM mesoscores where phonenumber='$phonenumber' and season = '$season' ORDER BY ID DESC";

    $data= mysqli_query($con,$sql);
    $queryResults= mysqli_num_rows($data);
    

    
    
    if($queryResults >0) {
        while($row = mysqli_fetch_assoc($data)) {
            echo "
            <div style='display: flex;'>   
            <p>FirstTest Score:</p>
            <div  style='height: auto;color:blue;   width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['firstscore']."</p>
            </div>
            </div> 
         


            <div style='display: flex;'>   
            <p>FinalTest Score:</p>
            <div  style='height: auto; color:Orange ; width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['finalscore']."</p>
            </div>
            </div>
          
            ";
            echo"
            <div style='text-align: centre;margin-top: 10px;'>
            <a  href='mesodelete.php?u_id=".$row['id']."'>
                 
            
            <button class='btn btn-danger'>Delete</button>
            </a>
            </div>
    
            ";

        }
        }
        
 ?>           
</p>
<h5>Macro Cycle training result:</h5>
<p>

<?php

$phonenumber = $_SESSION['phonenumber'];
$season = "preseason";
    include('db.php');
    $sql="SELECT * FROM macroscores where phonenumber='$phonenumber' and season = '$season' ORDER BY ID DESC";

    $data= mysqli_query($con,$sql);
    $queryResults= mysqli_num_rows($data);
    

    
    
    if($queryResults >0) {
        while($row = mysqli_fetch_assoc($data)) {
            echo "
            <div style='display: flex;'>   
            <p>FirstTest Score:</p>
            <div  style='height: auto;color:blue;   width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['firstscore']."</p>
            </div>
            </div> 
            <div style='display: flex;'>   
            <p>SecondTest Score:</p>
            <div  style='height: auto;color:red;  width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['secondscore']."</p>
            </div>
            </div>


            <div style='display: flex;'>   
            <p>FinalTest Score:</p>
            <div  style='height: auto; color:Orange ; width:100%;padding: 0px; margin-top: 1%; font-size: 20px;'>
            <p>".$row['finalscore']."</p>
            </div>
            </div>
          
            ";
            echo"
            <div style='text-align: centre;margin-top: 10px;'>
            <a  href='macrodelete.php?u_id=".$row['id']."'>
            
       
            <button class='btn btn-danger'>Delete</button>
            </a>
            </div>
    
            ";

        }
        }
        
 ?>           

</p>


</div>
<br><br>


</div>

</body>
</html>

