<?php
   include('Config.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 
    <script src="https://kit.fontawesome.com/b13f1bd77f.js" crossorigin="anonymous"></script>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-navbar-custom" style="background-color:whitesmoke;">
        <a class="navbar-brand" href="#"><b>WAD Beauty</b></a>
        <ul class="navbar-nav navbar-collapse justify-content-end">
        <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Selamat datang
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Profile.php">Profile</a>
          <a class="dropdown-item" href="#">Logout</a>
        </div>
      </li>
        </ul>
    </nav>
    <span class="col-mt-3"></span>
    <div class="container"> 
    <div class="row justify-content-center">
    <div class="col-sm-8 py-4">
    <div class="card " style="background-color:lightblue;">
    <div class="card-body text-center">
      <h3 class="card-text">WAD Beauty</h3>
      <p class="card-text">Tersedia skincare dengan harga murah dan berkualitas</p>
    </div>
    </div>
    <?php 
   include 'Config.php';
   session_start();  
   $data = mysqli_query($config,"select * from user");
   $select = mysqli_fetch_array($data);
   
   ?>
  <div class="row">
  <div class="col-sm-12">
  <form action="savechart.php" method="POST">
  <input type="hidden" value="Yuja Niacin 30 Days Blemish Serum" name="nama_barang">
  <input type="hidden" value="169.000" name="harga">
  <div class="card-group">
    <div class="card">
      <div class="card-body">
          <img class="card-img-top" src="yuja.png" alt="Card image cap">
        <h5 class="card-title" name="nama_barang">Yuja Niacin 30 Days Blemish Serum</h5>
        <p class="card-text">Some By Mi Yuja Niacin 30 Days Blemish Care Serum. ini aromanya menyenangkan dan menyegarkan banget. 
            Khas Yuja yang merupakan jeruk asli Korea, seperti aroma lemon yang seger banget pokoknya. Teksturnya lebih cair dari 
            kebanyakan serum lainnya, selain itu tidak lengket sama sekali</p>
        <hr>
        <p class="card-text" name="harga">Rp.169.000</p>
        <a href="cart.php" class="btn btn-primary" name="submit" value="submit" type="submit" onclick="show_alert();">Tambahkan ke Keranjang</a>
        </form>
      </div>
    </div>

    <div class="card">
    <form action="savechart.php" method="POST">
    <input type="hidden" value="Some By Mi Snail Truecica" name="nama_barang">
    <input type="hidden" value="180.000" name="harga">
      <div class="card-body">
          <img class="card-img-top" src="snail.jpg" alt="Card image cap">
        <h5 class="card-title" name="nama_barang" >Some By Mi Snail Truecica</h5>
         <p class="card-text">Rangkaian produk Some By Mi Snail Truecica bisa menjadi penyelamat bagi kamu yang mengalami masalah kulit noda hitam dan bopeng atau tekstur kulit rusak akibat jerawat. Ya, rangkaian produk ini 
            diklaim mampu menghilangkan noda hitam dan memperbaiki tekstur kulit</p>
            <hr>
        <p class="card-text" name="harga">Rp.180.000</p>
        <a href="cart.php" class="btn btn-primary" name="submit" value="submit" type="submit">Tambahkan ke Keranjang</a>
        </div>
        </form>
      </div>

      <div class="card">
      <form action="savechart.php" method="POST">
      <input type="hidden" value="Some By Mi Miracle Toner" name="nama_barang">
      <input type="hidden" value="108.000" name="harga">
      <div class="card-body">
          <img class="card-img-top" src="miracletoner.jpg" alt="Card image cap">
        <h5 class="card-title" name="nama_barang">Some By Mi Miracle Toner</h5>
        <input type="hidden" value="Some By Mi Miracle Toner" name="nama_barang">
        <p class="card-text">Some By Mi AHA/BHA/PHA 30 Days Miracle Toner merupakan acid / exfoliating toner yang
             memadukan tiga jenis kandungan acid, yakni AHA, BHA, dan juga PHA. 30 Days Miracle Toner diklaim dapat 
             membuat kulit terasa lebih lembut dalam waktu 30 hari saja. Kandungan AHA, BHA dapat bekerja secara efektif</p>
            <hr>
        <p class="card-text" name="harga" >Rp.108.000</p>
        
        <a href="chart.php" class="btn btn-primary" name="submit" value="submit" type="submit" >Tambahkan ke Keranjang</a>
      </form>
      </div>
  </div>
  </div>
  </div>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>