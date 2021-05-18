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
<a href="final.php"><button style="color: red;">Your Result</button></a><br><br>

<div>

<br>
<h4>Welcome; Choose the program you would like to take.</h4>
<br>


<a href="offseason.php"><button>Off-Season</button></a><br><br>

<a href="preseason.php"><button>Pre-Season</button></a><br><br>

<a href="inseason.php"><button>In-Season</button></a><br><br>

<a href="postseason.php"><button>Post-Season</button></a><br><br>


<br><br>


</div>

</body>
</html>

