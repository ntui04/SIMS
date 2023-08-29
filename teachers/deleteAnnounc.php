<?php

$dbhost="localhost";
$dbuser="root";
$dbname="sims";
$dbpassword="";

$connectioon=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $delete_query="DELETE FROM matangazo WHERE id= '$id' ";

    $result=mysqli_query($connectioon,$delete_query);
    if($result){
        header("location: managetangazo.php");
    }
    else{
        die (mysqli_error($connection));
    }
}

?>