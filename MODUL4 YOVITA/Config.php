<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "wad_modul4";

$config =  mysqli_connect($host, $user, $pass, $database,);

if(!$config){
    die("Connection failed: " . mysqli_connect_error());
}

  ?>