<?php
    include 'Config.php';
    session_start();
    $id = $_SESSION['id'];   
        
        
        $nama_barang  = $_POST ['nama_barang'];
        $harga = $_POST ['harga'];
        
        $query = mysqli_query($config, "INSERT INTO cart VALUES('','$id','$nama_barang','$harga')");
        
        if ($query > 0) {
            header("location:home.php");    
        }else{
            header("location:home.php");
        }
    
    
?>