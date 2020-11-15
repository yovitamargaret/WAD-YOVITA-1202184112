<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "wad_modul3_yovita";

$config =  mysqli_connect($host, $user, $pass, $database,);

if(!$config){
echo "<script> 
    alert ('Tidak terkoneksi dengan database'); 
</script>;";
}
?>