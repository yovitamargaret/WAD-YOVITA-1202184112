<?php
require "Config.php";

if(isset($_POST["login"])){

  $email = $_POST["email"];
  $password = $_POST["password"];

  $result = mysqli_query($config, "SELECT * FROM user WHERE email = '$email'");

  //check user
  if( mysqli_num_rows($result) === 1){
  //cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])){
      session_start();
      $_SESSION["user"] = $row["id"];
      header("Location:home.php");
      exit;
    }
  }
  $error = true;

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
    <link rel="stylesheet" href="style.css">

    <title>Login</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-navbar-custom" style="background-color:whitesmoke;">
        <a class="navbar-brand" href="#"><b>WAD Beauty</b></a>
        <ul class="navbar-nav collapse navbar-collapse justify-content-end">
            <a class="nav-link" href="#">Login </a>
            <a class="nav-link" href="Register.php">Register</a>
        </ul>
    </nav>

    <section id="cover" class="min-vh-100">
    <div id="cover-caption">
        <div class="container">
            <div class="row text-white">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <h1 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: black; text-align: center;">
                            Login</h1>
                    <div class="px-2">
                        <form action="" method="POST" class="justify-content-center">
                        <?php if(isset($error)){
                         ?>
                        <p style="color: red; font-style: italic;">Username / Password Salah</p>
                         <?php }
                          ?>
                        <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="yovitaabigail2013@gmail.com" required>
                            </div>
                            <div class="form-group">
                            <label for="password">Kata Sandi</label>
                                    <input type="password" name="password"class="form-control" id="password" required>
                            </div>
                            <button type="submit" name="login" class="btn btn-primary btn-lg">Login</button>
                            <p class="mt-3" style="color: black;">Belum punya akun? <a href="Register.php">Registrasi</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


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