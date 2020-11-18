<?php 
include 'Config.php';
    $id = $_GET['id'];
    
    mysqli_query($config,"delete from event_table where nama='$id'");
    header("location:home.php");
?>