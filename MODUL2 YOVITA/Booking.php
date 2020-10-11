<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Booking</title>

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
      <div class="float-right">
        <?php
          
            if($_GET['type'] == 'standard'){
                echo '<img src="standard.jpeg" alt="standard" align="right" position="top" width="400px" height="300px" class="float-right">';
                } else if($_GET['type'] == 'superior'){
                  echo '<img src="superior.jpg" alt="superior" align="right" position="top" width="400px" height="300px" class="float-right">';
                } else if($_GET['type'] == 'luxury'){
                  echo '<img src="luxury.jpg" alt="luxury" align="right" position="top" width="400px" height="300px" class="float-right">';
                } 
            ?>
            
        </div>
      </div>

            <div class="container">
              <div class="row ">
                <div class="col-sm-1"></div>
                  <form action="/MODUL2 YOVITA/Mybooking.php" method="get">
                    <div class="form-group row">
                      <div class="col-sm-12">
                        <label for="nama">Name</label>
                        <input type="text" class="form-control" name="nama" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-12">
                          <label for="checkin">Check-in</label>
                          <input type="date" class="form-control" name="checkin" required>
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-sm-12">
                          <label for="durasi">Duration</label>
                          <input type="text" class="form-control" name="durasi" required>
                          <small>Day(s)</small>
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-sm-12">
                          <label for="room">Room Type</label>
                          <select class="custom-select" name="validationCustom04" required>
                            <option value="" readonly>Choose Room</option>
                            <option value="standard" <?php if($_GET['type'] == 'standard'){ echo 'selected'; } ?>>Standard</option>
                            <option value="superior"<?php if($_GET['type'] == 'superior'){ echo 'selected'; } ?>>Superior</option>
                            <option value="luxury"<?php if($_GET['type'] == 'luxury'){ echo 'selected'; } ?>>Luxury</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-sm-12">
                          <label for="service">Add Service(s)</label><br>
                          <small>$ 20/Service</small>
                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="service" name="service" value="RoomService">
                                <label class="form-check-label" for="service"> Room Service</label>
                              </div>
                            </div>

                            <div class="form-group row">
                              <div class="col-sm-12">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="service1" name="service1" value="Breakfast">
                                  <label class="form-check-label" for="service1"> Breakfast</label>
                                  </div>
                              </div>
                            </div>
                        </div>
                         
                            <div class="col-sm-12">
                              <label for="checkin">Phone Number</label>
                              <input type="text" class="form-control" name="phone" required>
                             </div>
                          </div>

                          <div class="form-group row">
                            <div class="col-sm-12">
                            <input class="btn btn-primary btn-block" type="submit" Value="Book">
                          </div>
                      </div>
                    </form>
                  </div>
              </div>
         </div>
              </div>
              </div>
        
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>