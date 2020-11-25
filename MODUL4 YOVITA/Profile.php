<?php
    session_start();
    if (!isset($_SESSION['email'])){
        header("Location: Login.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <?php
        $user_email = $_SESSION['email'];
        include('Config.php');
        $select = mysqli_query($config, "SELECT * FROM user WHERE email = '$user_email'");
    ?>
    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-navbar-custom" style="background-color:whitesmoke;">
        <a class="navbar-brand" href="#"><b>WAD Beauty</b></a>
        <ul class="navbar-nav navbar-collapse justify-content-end">
        <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
        </li>
        <li class="nav-item dropdown">
          Selamat datang
        <a type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $_SESSION['nama']; ?>
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

    <?php
        if(isset($_POST['submit'])){           
            $email = $_SESSION['email'];
            $nama = $_POST['nama'];
            $no_hp = $_POST['no_hp'];
            $pass = $_POST['pass'];
            $conf = $_POST['conf'];

            if($pass != $conf){
                echo "<div class='alert alert-warning' role='alert'>
                    Password doesn't match!
                </div>";
            } else {
                $update = mysqli_query($config, "UPDATE user SET
                            nama = '$nama', no_hp = '$no_hp', password = '$pass'
                            WHERE email = '$email'");
                header("Location: profile.php");
            }
        }
    ?>>
        <div class="container" style="margin-top: 55px;">
        <div class="row justify-content-md-center">
            <div class="col-md-9">
                <h2 class="text-center mb-6">Profile</h2>
                <?php
        if($select->num_rows > 0){
            while($data = mysqli_fetch_array($select)){ ?>
                <form action="updateprofil.php" method="POST">
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <label><?= $data['email'] ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label" >Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" id="nama" value="<?= $data['nama'] ?>">               
                        </div>
                    </div>

                    <div class="form-group row border-bottom">
                        <label for="no_hp" class="col-sm-2 col-form-label">Nomor Handphone</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="no_hp" name="no_hp" value="<?= $data['no_hp']; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" id="password" value="<?= $data['password']; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="confPassword" class="col-sm-2 col-form-label">Password Confirm</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="confirmpassword" id="confirmpassword">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="warnanavbar" class="col-sm-2 col-form-label">Warna Navbar</label>
                        <div class="col-sm-9">
                            <select name="warnanavbar" id="warnanavbar">
                                <option value="light">Light</option>
                                <option value="dark">Dark</option>
                            </select>
                        </div>
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                    <button type="button" name="cancel" class="btn btn-light btn-block">Cancel</button>

                </form>
            </div>
            </div>
        </div>
        
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2020 Copyright: <span class="text-info">WAD Beauty</span></p>
    </div>
   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <?php }
        } ?>       
</body>

</html>