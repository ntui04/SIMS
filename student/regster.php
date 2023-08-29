<?php

$host = "localhost";
$dbuser = "root";
$dbname = "sims";
$dbpassword = "";

$connection = mysqli_connect($host, $dbuser, $dbpassword, $dbname);


if(isset($_POST['submit'])){
    $regno = $_POST['regno'];
    $jinalakwanza = $_POST['jinalakwanza'];
    $jinalamwisho = $_POST['jinalamwisho'];
    $baruapepe = $_POST['baruapepe'];
    $namba = $_POST['namba'];
    $college = $_POST['college'];
    $department = $_POST['department'];
    $kozi = $_POST['kozi'];
    $mwaka= $_POST['mwaka'];
    $password = $_POST['password'];

    $query = "INSERT INTO student VALUES ('', '$regno', '$jinalakwanza', '$jinalamwisho', '$baruapepe', '$namba', '$college', '$department', '$kozi', '$mwaka', '$password')";

    mysqli_query($connection, $query);
    header("location: regster.php");

     
    if($result){
     echo" connection successfuly";
     header('location: admin.php');
     }
     
     else{
         echo"connection failed";
     }
     
 
     $sql ="SELECT * FROM department INNER JOIN college";
     $result= $connection->query($sql);
    
     if($result->num_rows >0){
       while($row =$result->fetch_assoc()){
 
       }
     }else{
       echo "No results found";
     }
     $connection->close();
   
    

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="./index.js"></script>
    <script src="./depart.js"></script>
    <script type="text/javascript" src="jquery-3.7.0.min.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
       
       #positn {
    height: 40px;
    font-size: 10px;
    width: 150px;
 }

    </style>

<script>
function getdepartment(val) {
    console.log(val);
$.ajax({
type: "POST",
url: "get_depatment.php",
data:'department='+val,
success: function(data){
console.log(data);
$('#program').html(data);
}
});
}

</script>

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
     <label class="form-label"  for="typeText">namba ya usajili</label> 
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
     <label class="form-label" for="typeText">barua pepe</label> 
     <input type="text"  name="baruapepe" id="typeText" class="form-control" />
</div>
<br>
<!-- <div class="form-outline">
     <label class="form-label" for="typeText">nambari ya simu</label> 
     <input type="tel"  name="namba" id="typeText" class="form-control" />
</div> -->
<div class="form-outline">
     <label class="form-label" for="typeText">mwaka wa masomo</label> 
     <input type="text"  name="mwaka" class="form-control" placeholder="mfano. 2022/2023 first" />
</div>
<br>
<!-- <div class="form-outline">
     <label class="form-label" for="typeText">college</label> 
     <input type="text"  name="college" id="typeText" class="form-control" />
</div> -->

<div class="form-outline">
     <label class="form-label" for="typeText">college</label><br>
     
     <select class="input" id="college" name="college" onchange="populateDepartments()">
            <option value="">Select College</option>
            <option value="COICT">COICT</option>
            <option value="CET">CET</option>
            <option value="COHBS">COHBS</option>
            <option value="COSTE">COSTE</option>
            <option value="COACT">COACT</option>
     </select>     
 </div>
    
<br>
<!-- <div class="form-outline">
     <label class="form-label" for="typeText">department</label> 
     <input type="text"  name="department" id="typeText" class="form-control" />
</div> -->

<div class="form-outline">
     <label class="form-label" for="typeText">department</label><br>
        <select class="input" id="department" name="department" onChange="getdepartment(this.value)">
            <option value="">Select Department</option>
            <!-- Departments will be populated dynamically -->
        </select>
     </select>     
 </div>

<br>

<!-- <div class="form-outline">
     <label class="form-label"  for="typeText">kozi</label> 
     <input type="text" name="kozi" id="typeText" class="form-control" />
</div> -->


     <div class="form-outline">
     <label for="kozi">Select kozi:</label> <br>
        <select class="input" id="kozi" name="kozi">
            <option value="kozi">Select kozi</option>
            <!-- Programs will be populated dynamically -->
        </select>
        <br>    
     </div>
<br>
     <div class="form-outline">
     <label class="form-label" for="typeText">nambari ya simu</label> 
     <input type="tel"  name="namba" id="typeText" class="form-control" />
     </div>
<br>

<div class="form-outline">
     <label class="form-label" for="typeText">neno siri</label> 
     <input type="password"  name="password" id="typeText" class="form-control" />
</div>
<br>
<div class="form-outline">
     <label class="form-label"  for="typeText">neno siri</label> 
     <input type="password" name="password" class="form-control" placeholder="rudia neno siri" />
</div>
<br>



<script>
        





        function populateDepartments() {
            var collegeSelect = document.getElementById("college");
            var departmentSelect = document.getElementById("department");
            
            // Clear previous department options
            departmentSelect.innerHTML = '<option value="">Select Department</option>';
            
            // Get selected college value
            var selectedCollege = collegeSelect.value;
            
        
            var department = {
                COICT: ["computer science and engineering", "Electronics and telecommunication engineering","Informatics","Information systems and technology"],
                CET: ["Civil engineering", "Electrical and power engineering","Geosciences and mining technology", "Mechanical and industrial engineering","Chemical and environmental engineering"],
                COHBS: ["Business Management","Humanities"],
                COACT: ["Architecture and Art design","Construction Management and Technology"],
                COSTE:["Applied science","medical sciences and technology","Natural Resources","Technical education","Earth sciences","mathematical and statics"]
                

            };

            if (selectedCollege in department) {
                var departmentOptions = department[selectedCollege];
                for (var i = 0; i < departmentOptions.length; i++) {
                    var option = document.createElement("option");
                    option.value = departmentOptions[i];
                    option.text = departmentOptions[i];
                    departmentSelect.appendChild(option);
                }
            }
        }
        function getdepartmentgg(val) {
    var programSelect = document.getElementById("kozi");
    // Clear previous program options
         programSelect.innerHTML = '<option value="">Select kozi</option>';

    // Get selected department value
        var selectedDepartment = val;
    // Use AJAX to fetch program data based on the selected department
    // You can replace this with your own API endpoint or data source
    // Simulate an example response for demonstration purposes
    var kozi = {
        "Computer science and engineering": ["computer engineering", "computer science", "Data science","computer computing"],
        "Electronics and telecommunications engineering": ["telecommunication"],
        "Informatics": ["ICT,IT"],
        "Civil engineering": ["civil engineering", "Highway","technical education in civil engineering","technical education in Architectural Technology","technical education in Mechanical engineering","Natural Resources conservation"],
        "Electrical and Power engineering": ["electrical engineering","mechatronics"],
        "Geoscience and mining": ["mining engineering"],
        "Architecture and Art Design":["Architecture","Technology in Architecture"],
        "Construction Management and Technology": ["Technology in Landscape Architecture"],
        "Applied science": ["food science and technology",""],
        "Natural resource": ["Natural science"],
        "medical science and technology": ["laboratory science and technology","Biomedical engineering"],
        "Business management": ["business administration","Business administration in accounting and finance","business administration in marketing and enterpreneurship"],
        "Humanities": ["Agribusiness Management and Technology", "Agribusiness with technology"],
    };

    if (selectedDepartment in kozi) {
        var koziOptions = kozi[selectedDepartment];
        for (var i = 0; i < koziOptions.length; i++) {
            var option = document.createElement("option");
            option.value = koziOptions[i];
            option.text = koziOptions[i];
            koziSelect.appendChild(option);
        }
    }
}


 </script>


   <!-- <?php
   $college = $_GET['college']; // Get selected college from AJAX request

// Simulate fetching department data from a database
//  Replace this with actual database queries in your application
 $department = [
     "COICT" => ["computer science and engineering", "Electronics and Telecommunication"],
     "CET" => ["civil engineering", "electrical and power engineering"]
 ];

 if (isset($department[$college])) {
     echo json_encode($department[$college]);
 } else {
     echo json_encode([]);
 }
 ?>


      
        <label for="">select college</label>
        <select  name="college"  class="input">
        <option value=""></option>
     <?php

     $sql="SELECT * FROM college";
     $result=mysqli_query($connection,$sql);
     if($result){
        $i=1;
        while($row=mysqli_fetch_assoc($result)){
            $collegeName=$row['collegeName'];
            $departmentName=$row['departmentName'];
            echo "<option value='$collegeName'>$collegeName</option>";
            echo "<option value='$departmentgeName'>$departmentName</option>";
        }
     }
     

     ?> 

    </select><br>
    <label for="">select department</label>
    <select  name="department"  class="input">
     <option value=""></option>
     <?php

     $sql="SELECT * FROM department";
     $result=mysqli_query($connection,$sql);
     if($result){
        $i=1;
        while($row=mysqli_fetch_assoc($result)){
            
            $departmentName=$row['departmentName'];
            
            echo "<option value='$departmentName'>$departmentName</option>";
        }
     }
     

     ?>

    </select><br> -->

     <!-- <input class="submit" type="submit" value="submit" name="submit">     -->
  
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




