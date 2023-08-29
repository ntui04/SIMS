
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
   
<form action="login_process.php" method="post">
        <h2>LOGIN</h2>
        <?php
        if(isset($_GET['error'])) { // Added opening curly brace
        ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php
        } // Removed unnecessary closing curly brace
        ?>

<div class="form-outline">
     <label class="form-label"  for="typeText">registration number</label> 
     <input type="number" id="typeText" name="regno" class="form-control" />
</div>

<br>
<div class="form-outline">
     <label class="form-label"  for="typeText">neno siri</label> 
     <input type="password" id="typeText" name="password" class="form-control" />
</div>
<br>

<br>
<button style="margin-top: 9%;" class="button" name="submit" value="jisajili">login</button>

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




