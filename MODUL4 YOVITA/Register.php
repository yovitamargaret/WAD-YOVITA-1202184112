

<!doctype html>
<html lang="en">

<head>
<title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

   
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-navbar-custom" style="background-color:whitesmoke;">
        <a class="navbar-brand" href="#"><b>WAD Beauty</b></a>
        <ul class="navbar-nav collapse navbar-collapse justify-content-end">
            <a class="nav-link" href="Login.php">Login </a>
            <a class="nav-link" href="#">Register</a>
        </ul>
    </nav>
    <?php
require "function.php";

if(isset($_POST["btnsignup"])){
    if(Registrasi($_POST) > 0){
        tampilAlert("Berhasil registrasi","warning");
    } else {
        echo mysqli_error($config);
    }
}
?>
   

    <section id="cover" class="min-vh-200">
        <div id="cover-caption">
            <div class="container">
                <div class="row">
                    <div class="col-mt-6 col-xl-5  mx-auto center">
                        <h1
                            style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: black; text-align: center;">
                            Registrasi</h1>
                        <hr>
                        <div class="px-2">
                            <form action="" method="POST">
                        
                                <div class="form-group">
                                    <label for="nama" style="color: black;">Nama</label>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Yovita Margaret" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="yovitaabigail2013@gmail.com" required>
                                </div>
                                <div class="form-group">
                                    <label for="nohp">No.Handphone</label>
                                    <input type="text" name="no_hp" class="form-control" id="nohp" placeholder="082219542314" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Kata Sandi</label>
                                    <input type="password" name="password"class="form-control" id="password" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Konfirmasi Kata Sandi</label>
                                    <input type="password" name="confirmpassword" class="form-control" id="password" required>
                                </div>
                                <div style="text-align: center;">
                                    <button type="submit" name="btnsignup" value="submit"
                                        class="btn btn-primary">Daftar</button>
                                </div>
                                <div style="text-align: center;">
                                <p class="mt-3" style="color: black;">Sudah punya akun? <a href="Login.php">Login</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>