<?php 
include 'Config.php';
    $id = $_GET['id'];
    
    mysqli_query($config,"delete from cart where user_id='$id'");
    header("location:cart.php");
?>