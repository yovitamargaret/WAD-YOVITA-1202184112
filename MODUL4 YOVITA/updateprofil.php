<?php
include 'Config.php';

    $id = $_POST ['id'];
    $nama = $_POST ['nama'];
    $no_hp = $_POST ['no_hp'];
    $password = $_POST ['password'];

mysqli_query($config,"update user set nama='$nama' where id='$id'");
mysqli_query($config,"update user set no_hp='$no_hp' where id='$id'");
mysqli_query($config,"update user set password='$password' where id='$id'");
 
if ($query > 0) {
    echo "<script>alert('Gagal Disimpan');window.location.href='Profile.php?id=$id;';</script>";
}else{
    echo "<script>alert('Data telah disimpan'); window.location.href='Profile.php?id=$id';</script>";
}

?>