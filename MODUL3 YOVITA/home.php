<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Home</title>
  </head>

  <body style="font-family: Times new roman;">
  <nav  class="navbar navbar-light bg-color" style="background-color:steelblue;">
          <a class="navbar-brand" style="color:white">EAD EVENTS</a>
          <form action="buat_event.php" class="form-inline">
              <a class="navbar-text-right text-white" href="home.php"style=" margin-right:15px;">Home</a>             
              <button class="btn btn-outline-light my-2 my-sm-0" type="submit" style=" margin-right: 15px;">Buat Event</button>
          </form>
      </nav>
        <div class="col mt-3" align="center">
        <h4 style="color:steelblue;">WELCOME TO EAD EVENTS!</h4>
  </div>
     <?php 
		include 'config.php';
		$no = 0;
    $data = mysqli_query($config,"delete * from event_table");
        
        if ($no === mysqli_num_rows($data)) {
    ?>
      
      <div class="col-sm-2">
      <p class="text-center" style="text-center">No Events Found</p>
      </div>

      <?php
    } else {
      while($detail = mysqli_fetch_array($data)){
        ?>
        <div class="col-sm-2">
            <div class="card" style="width: 15rem; margin-left: 300px; margin-bottom:50px;">
              <img  src="gambar/<?php echo $detail['gambar']; ?>" class="card-img-top">
                <div class="card-body">
                <h5 class="card-title"><?php echo $detail['name']; ?></h5>
                <p class="card-text"><img src="date.png" width="15px" height="15px" /> <?php echo $detail['tanggal']; ?></p>
                <p class="card-text"><img src="place.png" width="15px" height="15px" /> <?php echo $detail['tempat']; ?></p>
                <p class="card-text">Kategori : Event <?php echo $detail['kategori']; ?></p>
                </div>
                <div class="card-footer text-right">
                <a name="edit" id="edit" class="btn btn-primary btn-sm" href="detail.php?id=<?php echo $detail['id']; ?>">Detail</a>
                </div>
          </div>
        </div>
         <?php 
        }
      }
        ?>
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