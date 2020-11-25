<?php 
   session_start();
   if (!isset($_SESSION['email'])){
       header("Location: Login.php");
   }
   
       include('Config.php');               
       $user = $_SESSION['email'];        
       $select = mysqli_query($config, "SELECT * FROM user WHERE email = '$user'");        
       $data_user = $select->fetch_array();
       $id_user = $data_user['id'];
                   
       if(mysqli_num_rows($select) == 0){
           echo "error";
       } elseif(mysqli_num_rows($select) == 1){
           if(isset($_POST['btn1'])){
               $insert = mysqli_query($config, "INSERT INTO cart(user_id, nama_barang, harga)
                       VALUES ('$id_user', 'Yuja Niacin', 169000)");                 
           } elseif(isset($_POST['btn2'])){
               $insert = mysqli_query($config, "INSERT INTO cart(user_id, nama_barang, harga)
                       VALUES ('$id_user', 'Snail Truecica', 180000)");                
           } elseif(isset($_POST['btn3'])){
               $insert = mysqli_query($config, "INSERT INTO cart(user_id, nama_barang, harga)
                       VALUES ('$id_user', 'Miracle Toner', 108000)");                
           }
       }           
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
        <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
        </li>
        <li class="nav-item dropdown">
          Selamat datang
        <a type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $data_user['nama']; ?>
                </a>
        <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Selamat datang
        </a> -->
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Profile.php">Profile</a>
          <a class="dropdown-item" href="logout.php">Logout</a>
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
    
  <div class="row">
  <div class="col-sm-12">
  <form action="" method="POST">  
  <div class="card-group">    
            <div class="card">
                <img src="yuja.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 class="card-title">YUJA NIACIN 30 DAYS BLEMISH CARE SERUM</h6>
                    <p class="card-text">Produk terbaru dari somebymi yang memiliki manfaat untuk Whitening + blemish care + Anti-wrinkle,
                        sangat recommended untuk masalah kulit kusam, kulit kering dan bekas jerawat atau FLEK hitam
                    </p>                    
                    <hr>                    
                    <h5>Rp169.000</h5>
                </div>
                <div class="card-footer bg-transparent">
                    <button type="submit" class="btn btn-primary" name="btn1">Tambahkan ke Keranjang</button>
                </div>
            </div>
            <div class="card">
                <img src="snail.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 class="card-title">SOMEBYMI Snail Truecica Miracle Repair Cream</h6>
                    <p class="card-text">Sebagai pelembab, krim ini mampu memberikan kelembaban yang menyeluruh dan tahan lama bagi kulit,
                        sehingga terasa halus, lembab, dan kenyal. Mencerahkan, menghambar penuaan seperti keriput dan garis halus, juga menenangkan
                        kulit yang iritasi, dengan kandungan 420,000ppm Snail Truecica.</p>      
                    <hr>                    
                    <h5>Rp180.000</h5>                    
                </div>
                <div class="card-footer bg-transparent">
                    <button type="submit" class="btn btn-primary text-small" name="btn2">Tambahkan ke Keranjang</button>
                </div>
            </div>
            <div class="card">
                <img src="miracletoner.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 class="card-title">30 DAYS MIRACLE TONER</h6>
                    <p class="card-text">Dengan kandungan AHA, BHA, dan PHA bekerja secara efektif untuk membuat kulit lebih bersih dan lebih
                        bersinar, mengandung 10.000 ppm ekstrak pohon teh alami yang secara efektif meningkatkan elastisitas dan menutrisi kulit
                        Anda tanpa efek iritasi karena tidak megandung 20 bahan 500 dan pewarna berbahaya.</p>                    
                    <hr>                    
                    <h5>Rp108.000</h5>                    
                </div>
                <div class="card-footer bg-transparent">
                    <button type="submit" class="btn btn-primary" name="btn3">Tambahkan ke Keranjang</button>
                </div>
            </div>
        </div>
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