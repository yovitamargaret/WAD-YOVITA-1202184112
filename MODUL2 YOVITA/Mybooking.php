<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>My booking</title>
    </head>
        <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-navbar-custom" style="background-color: blue;" >
              <ul class="navbar-nav ">
                <li class="nav-item active">
                  <a class="nav-link" href="Home.php" style="color: black; align:center; padding-left:550px; ">Home </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Booking.php" style="color: black;  ">Booking</a>
                </li>
              </ul>
            </nav>

      <div class="container mt-5">
          <table class="table">
            <thead>
              <tr>
              <th >Booking Number</th>
              <th >Name</th>
              <th >Check-in</th>
              <th >Check-out</th>
              <th >Room Type</th>
              <th >Phone number</th>
              <th >Service</th>
              <th >Total price</th>
             </tr>
            </thead>
                <tbody>
                    <tr>
                      <th scope="row">
                      <?php echo rand(134564,545675); ?>
                      </th>
                      <td>
                        <?php echo $_GET['nama']; ?>
                      </td>
                      <td>
                      <?php 
                        $checkin=$_GET['checkin']; 
                        echo date('d/m/yy',strtotime($checkin));
                      ?>
                      </td>
                      <td>
                      <?php 
                      $checkin=$_GET['checkin'];
                      $newTanggalSekarang=strtotime($checkin);
                      $durasi=$_GET['durasi'];
                      $NewjumlahHari=86400*$durasi;
                      $hasilJumlah = $newTanggalSekarang + $NewjumlahHari;
                      $checkout=date('d/m/Y',$hasilJumlah);
                      // $checkout=date('Y-m-d', strtotime('+$durasi days', strtotime($checkin)));
                      echo $checkout;
                      ?>
                      </td>
                      <td>
                        <?php echo $_GET['validationCustom04']; ?>
                      </td>
                      <td>
                        <?php echo $_GET['phone']; ?>
                      </td>
                      <td>
                      <?php 
                        if (isset($_GET['service'])) {
                        echo "&bull; "; echo $_GET['service']; echo "</br>";  
                        }
                        elseif (isset($_GET['service1'])) {
                        echo "&bull; "; echo $_GET['service1'];
                        }else{
                        echo"No Service";
                        } 
                      ?>
                    </td>
                    <td>
                    <?php 
                      $service=(isset($_GET['service']));
                      $service1=(isset($_GET['service1']));
                      if($_GET['validationCustom04'] == "standard" && $service ){
                      echo "$ "; echo $_GET['durasi']*90 + (20) ;
                      } elseif ($_GET['validationCustom04'] == "superior" && $service ){
                      echo "$ "; echo $_GET['durasi']*150 + (20);
                      } elseif ($_GET['validationCustom04'] == "superior" && $service ){
                      echo "$ "; echo $_GET['durasi']*200 + (20);
                      } elseif ($_GET['validationCustom04'] == "standard") {
                      echo "$ "; echo $_GET['durasi']*90 ;
                      } elseif ($_GET['validationCustom04'] == "superior" ) {
                      echo "$ "; echo $_GET['durasi']*150 ;
                      } elseif ($_GET['validationCustom04'] == "luxury") {
                      echo "$ "; echo $_GET['durasi']*200 ;
                      }
                    ?>
                </td>
            </tr>
  </tbody>
</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

