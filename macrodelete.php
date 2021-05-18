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

<br>
<h4 style="color:red;">Delete Page:</h4>

<br><br>

<div>

<h3 style="color: green;">Off-Season Training Program Results. </h3><br>
<h5>Micro Cycle Training result:</h5>
<p>

<?php

$phonenumber = $_SESSION['phonenumber'];
$season = "offseason";
$id = $_GET['u_id'];

    include('db.php');
    $sql="SELECT * FROM macroscores where phonenumber='$phonenumber' and id = '$id' ORDER BY ID DESC";

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
       


        }
        }
        
 ?>           

        
       

</p>

</div>
<form action="macrodelete.php" method="post">
<input type="hidden" name= "hiddenid" value=<?php echo $id; ?>>
<p style="margin:30px; text-align: centre;">
<button class="btn btn-danger" name="deletebtn" style="margin:30px; text-align: centre;">Delete the above record</button>


</p>
</form>

</div>
<br><br>


</div>

</body>
</html>


<?php

if(isset($_POST['deletebtn'])){

include('db.php');
$postid = $_POST['hiddenid'];
$sql1="DELETE FROM macroscores where id = '$postid'";

$data= mysqli_query($con,$sql1);
if($data ==1) {
    echo "<script>alert('Record Deleted successfully.')</script>";
    echo "<script>location.replace('final.php')</script>";
}


}


?>

