<!doctype html>
<html lang="en">
  <head>
  <title>Profile</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/b13f1bd77f.js" crossorigin="anonymous"></script>
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
    
        $cart = mysqli_query($config, "SELECT * FROM cart WHERE user_id = '$id_user'");
    ?>
    
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-navbar-custom" style="background-color:whitesmoke;">
        <a class="navbar-brand" href="home.php"><b>WAD Beauty</b></a>
        <ul class="navbar-nav navbar-collapse justify-content-end">
        <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
        </li>
        <li class="nav-item dropdown">
          Selamat Datang,
          <a type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $data_user['nama']; ?>
                </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Profile.php">Profile</a>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
        </ul>
    </nav>

    <div class="container col-mt-3">
      <div class="row">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Harga</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <form action="" method="get">
  <tbody>
  <?php
                if($cart->num_rows > 0){
                    while ($data = mysqli_fetch_array($cart)){ ?>
            <tr>
                <td hidden><?= $data['id'] ?></td>
                <td>
                    <?php 
                        $no = 1;                        
                        echo $no++;
                    ?>
                </td>
                <td><?= $data['nama_barang'] ?></td>  
                <td><?php echo "Rp".$data['harga']; ?></td>                
                <td>
                    <a href="delete.php?id=<?= $data['id']; ?>" type="submit" class="btn btn-danger">Hapus</a>
                </td>                          
            </tr>  
            <?php }
            } ?>
            <tr>
                <th>Total</th>
                <th colspan="3">
                    <?php                                                
                        if($cart->num_rows > 0){
                            $sum = mysqli_query($config, "SELECT SUM(harga) AS total_harga FROM cart WHERE user_id = '$id_user'");
                            $row = mysqli_fetch_assoc($sum);
                            $result = $row['total_harga'];
                            echo "Rp".$result;
                        } else {
                            echo "Rp0";
                        }
                        
                    ?>
                </th>
            </tr>                      
  </tbody>
  </form>
</table>
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