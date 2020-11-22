<?php
function tampilAlert($text, $tipe) {
echo "<div class=\"alert alert-".$tipe."\" role=\"alert\">
        <p>".$text."</p>
      </div>";
}
?>

<?php
require "Config.php";

function registrasi($data) {
    global $config;
    
    $nama = strtolower(stripslashes($data["nama"]));
    $email = strtolower(stripslashes($data["email"]));
    $no_hp = strtolower(stripslashes($data["no_hp"]));
    $password = mysqli_real_escape_string($config, $data["password"]);
    $confirmpassword = mysqli_real_escape_string($config, $data["confirmpassword"]);

    //konfirmasi password
    if ($password != $confirmpassword){
        echo "<script>
                alert('Konfirmasi password tidak sesuai');
            </script>";
        return false;
    }
    
    //cek username
    $cekuser = mysqli_query($config,"SELECT nama FROM user WHERE nama = '$nama'");

    if(mysqli_fetch_assoc($cekuser)){
        echo "<script>
                alert('Username sudah terdaftar sebelumnya');
            </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //insert database
    mysqli_query($config, "INSERT INTO user VALUES('','$nama','$email','$no_hp','$password')");

    return mysqli_affected_rows($config);
}

?>