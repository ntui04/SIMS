<?php

$dbhost="localhost";
$dbuser="root";
$dbname="sims";
$dbpassword="";

$connectioon=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $delete_query="DELETE FROM report WHERE id= '$id' ";

    $result=mysqli_query($connectioon,$delete_query);
    if($result){
        header("location: reportmanage.php");
    }
    else{
        die (mysqli_error($connection));
    }
}

?>