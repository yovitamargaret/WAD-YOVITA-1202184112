<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">

    <title>Buat Event</title>
  </head>

  <body style="font-family: Times new roman;"> 
  <nav  class="navbar navbar-light bg-color" style="background-color:steelblue;">
          <a class="navbar-brand" style="color:white">EAD EVENTS</a>
          <form action="buat_event.php" class="form-inline">
              <a class="navbar-text-right text-white" href="home.php"style=" margin-right:15px;">Home</a>             
              <button class="btn btn-outline-light my-2 my-sm-0" type="submit" style=" margin-right: 15px;">Buat Event</button>
          </form>
      </nav>

      <div class="col mt-3">
    <h4 style="color:steelblue;">Buat Event!</h4>
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-header bg-danger"></div>
          <div class="card-body">
            <form action="simpan.php" method="post">
                <div class="form-group">
                    <label for="nama" >Name</label>
                    <input type="input" name="name" class="form-control" id="nama">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi"class="form-control" id="deskripsi" rows="5"></textarea>
                </div>
                <label for="gambar" >Upload Gambar</label><br>
                <div class="custom-file">
                    <input type="file" name="gambar"class="custom-file-input" id="file">
                    <label class="custom-file-label text-muted" for="file">Pilih gambar</label>
                </div><p><br>

                <div class="form-group">
                <label for="kategori" >Kategori</label>
                <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kategori"  value="Online">
                            <label class="form-check-label font-weight-bold">Online</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kategori"  value="Offline">
                            <label class="form-check-label font-weight-bold" >Offline</label>
                         </div>
                </div>
            </div>
        </div>
     </div>

     <div class="col-sm-6">
        <div class="card">
          <div class="card-header bg-primary"></div>
          <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                     <input type="date" class="form-control" id="tanggal" name="tanggal" >
                    </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="mulai">Jam Mulai</label>
                                    <select class="form-control" name="mulai">
                                        <option  name="mulai" selected>10:00</option>
                                        <option name = "mulai">14:00</option>
                                        <option name = "mulai">16:00</option>
                                      </select>
                                </div>
                                <div class="col-sm-6">
                                    <label for="berakhir">Jam Berakhir</label>
                                    <select class="form-control" name = "berakhir">
                                        <option name = "berakhir" selected>11:00</option>
                                        <option name = "berakhir">15:00</option>
                                        <option name = "berakhir">17:00</option>
                                      </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tempat" >Tempat</label>
                                <input type="text" id="tempat" name="tempat" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="harga" >Harga</label>
                                <input type="text" id="harga" name="harga"class="form-control" >
                            </div>
                            <label for="benefit" >Benefit</label><br>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input " name="benefit[]"type="checkbox" value="snack">
                                <label class="form-check-label font-weight-bold">Snack</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" name="benefit[]" type="checkbox" value="sertifikat">
                                <label class="form-check-label font-weight-bold">Sertifikat</label>
                            </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" name="benefit[]" type="checkbox" value="souvenir"> 
                                <label class="form-check-label font-weight-bold">Souvenir</label>
                            </div><p>

                            <div class="form-group" style="margin-left:25rem;">
                    <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
                    <a class="btn btn-danger "href="home.php" name="cancel">Cancel</a>
                </div>
            </form>    
            </div>
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




















