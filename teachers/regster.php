<?php

$host = "localhost";
$dbuser = "root";
$dbname = "sims";
$dbpassword = "";

$connection = mysqli_connect($host, $dbuser, $dbpassword, $dbname);


if(isset($_POST['submit'])){
     $id = $_POST['id'];
    $regno = $_POST['regno'];
    $jinalakwanza = $_POST['jinalakwanza'];
    $jinalamwisho = $_POST['jinalamwisho'];
    $baruapepe = $_POST['baruapepe'];
    $namba = $_POST['namba'];
    $college = $_POST['college'];
    $department = $_POST['department'];
    $password = $_POST['password'];

    $query = "INSERT INTO teachers VALUES ('', '$regno', '$jinalakwanza', '$jinalamwisho', '$baruapepe', '$namba', '$college', '$department', '$password')";

    mysqli_query($connection, $query);
    header("location: regster.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
           #positn {
    height: 40px;
    font-size: 20px;
    width: 150px;
 }
    </style>
</head>


<body>
<header>
     
     <div class="title">
         <h3 style="margin-top: 11px;">
         saint kayumba secondary school | (SIMS), student information management system:
         </h3>
     </div>        
     
</header> 
   
<!-- <h6>jisajili sasa kwenye mfumo wa shule</h6> -->



<center>
   
<form action="regster.php"  method="post">
<h5>jisajili sasa kwenye mfumo wa shule</h5> <br>
<div class="form-outline">
     <label class="form-label"  for="typeText">namba ya utambulisho</label> 
     <input type="text" id="typeText" name="regno" class="form-control" />
</div>
<br>
<div class="form-outline">
     <label class="form-label"  for="typeText">jina la kwanza</label> 
     <input type="text" id="typeText" name="jinalakwanza" class="form-control" />
</div>
<br>
<div class="form-outline">
     <label class="form-label"  for="typeText">jina la mwisho</label> 
     <input type="text" id="typeText" name="jinalamwisho" class="form-control" />
</div>
<br>
<div class="form-outline">
     <label class="form-label"  for="typeText">barua pepe</label> 
     <input type="text" id="typeText" name="baruapepe" class="form-control" />
</div>
<br>
<div class="form-outline">
     <label class="form-label"  for="typeText">nambari ya simu</label> 
     <input type="text" id="typeText" name="namba" class="form-control" />
</div>
<br>
<!-- <div class="form-outline">
     <label class="form-label"  for="typeText">college</label> 
     <input type="text" id="typeText" name="college" class="form-control" />
</div> -->

<div class="form-outline">
     <label class="form-label" for="typeText">college</label> <br>
     <select name="college" id="positn">
          <option name="college" value="college"></option>
                    <?php
               $sql = "SELECT * FROM college";

          $result = mysqli_query($connection, $sql);
          if($result){
               $i=1;
               while($row=mysqli_fetch_assoc($result)){
                    $college=$row['college'];
                    echo "<option name='college'>$college</option>";
               }
          }

?>
     </select>


<br>
<!-- <div class="form-outline">
     <label class="form-label"  for="typeText">department</label> 
     <input type="text" id="typeText" name="department" class="form-control" />
</div> -->

<div class="form-outline">
     <label class="form-label" for="typeText">department</label> <br>
     <select name="department" id="positn">
          <option value="department"></option>
                    <?php
               $sql = "SELECT * FROM department";

          $result = mysqli_query($connection, $sql);
          if($result){
               $i=1;
               while($row=mysqli_fetch_assoc($result)){
                    $department=$row['department'];
                    echo "<option name='department'>$department</option>";
               }
          }

?>
     </select>

<br>
<div class="form-outline">
     <label class="form-label"  for="typeText">neno siri</label> 
     <input type="password" id="typeText" name="password" class="form-control" />
</div>
<br>
<div class="form-outline">
     <label class="form-label"  for="typeText">neno siri</label> 
     <input type="password" id="typeText" name="password" class="form-control" placeholder="rudia neno siri" />
</div>
<br>
<button style="margin-top: 9%;" class="button" name="submit" value="jisajili">hifadhi</button>

</form>
</center>
<footer style="margin-top: 60%; width: 100%; text-align:center; height: 50px;">
    <p style="text-align: center;">&copy; 2023 | saint kayumba secondary school:</p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html> 




