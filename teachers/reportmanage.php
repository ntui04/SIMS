
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
                 #wek{
                    text-decoration: none;
                 }
    </style>
</head>
    <header> 
     <div class="title">
         <h3 style="margin-top: 11px;">
         saint kayumba secondary school | (SIMS), student information management system:
         </h3>
     </div>        
    </header> 
   
 <body>
    <br>
   <center>
   <button type="button"><a id="wek" href="report.php">weka report</a></button>

   <br><br>
   
   <center>
   <table class="table table-bordered border-primary">
    <thead>
        <tr>
            <th>somo</th>
            <th>robo</th>
            <th>nusu</th>
            <th>jumla</th>
            <th>taarifa</th>
            <th>action</th>
        </tr>
    </thead>
<?php
    $host = "localhost";
    $dbuser = "root";
    $dbname = "sims";
    $dbpassword = "";

     $connection = mysqli_connect($host, $dbuser, $dbpassword, $dbname);

     $sql = "SELECT * FROM report";

     $result = mysqli_query($connection,$sql);
?>

    <tbody>
        <?php
            if($result -> num_rows >0){
                $i=1;
                while($rows=$result->fetch_assoc()){
                ?>
                <tr>
                    <td> <?php echo $rows['somo']; ?></td>
                    <td> <?php echo $rows['robo']; ?></td>
                    <td> <?php echo $rows['nusu']; ?></td>
                    <td> <?php echo $rows['jumla']; ?></td>
                    <td> <?php echo $rows['taarifa']; ?></td>
                    <td><a id="dele" href="reportdelete.php?id=<?php echo $rows['id'] ?>">delete</a> <a id="upd" href="reportupdate.php?id=<?php echo $rows['id'] ?> ">update</a></td>
                    <?php $i++;?>
                </tr>
             <?php       
                }
            }

        ?>
    </tbody>
   </center>



   </center>
 </body>       
<style>
    .border {
        width: 80%;
        height: 30px;
    }
    #dele{
        color: red;
        text-decoration: none;
    }
    #upd {
        color: darkcyan;
        text-decoration: none;
    }
</style>
</html> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




