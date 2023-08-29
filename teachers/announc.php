<?php

$host = "localhost";
$dbuser = "root";
$dbname = "sims";
$dbpassword = "";

$connection = mysqli_connect($host, $dbuser, $dbpassword, $dbname);

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $tangazo = $_POST['tangazo'];
    $body = $_POST['body'];

    $query = "INSERT INTO matangazo VALUES ('', '$tangazo', '$body')";

    mysqli_query($connection, $query);
    header("location: managetangazo.php");
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
   
<form action="announc.php" method="post">
        <h2>announcement page</h2>
        <?php
        if(isset($_GET['error'])) { // Added opening curly brace
        ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php
        } // Removed unnecessary closing curly brace
        ?>
<br>

<div class="form-outline">
     <label class="form-label"  for="typeText">kichwa cha tangazo</label>
     <input type="text" id="typeText" name="tangazo" class="form-control" />
</div>

<br>
<div class="form-outline">
     <label class="form-label"  for="typeText">body</label> <br>
     <textarea name="body" id="body" ></textarea>
</div>
<br>
<button style="margin-top: 9%;" class="button" name="submit" value="tangazo">tuma</button>

</form>

</center>
<footer style="margin-top: 60%; width: 100%; text-align:center; height: 50px;">
    <p style="text-align: center;">&copy; 2023 | saint kayumba secondary school:</p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- ckeditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script src="scripts.js"></script>
</body>

</html> 




