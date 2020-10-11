<!doctype html>
<html lang="en">
  <head >
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Home</title>
    

  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-navbar-custom" style="background-color: blue;" >
  <ul class="navbar-nav ">
  <li class="nav-item active">
        <a class="nav-link" href="#" style="color: black; align:center; padding-left:550px; ">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Booking.php" style="color: black;  ">Booking</a>
      </li>
      </ul>
      </nav>
  
          <div class="container mt-5">
            <h4 align="center" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;  color: blue;" ><b>EAD HOTEL</b></h4>
            <h5  align="center" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;  color: blue;" >Welcome To 5 Star Hotel</h5><br>
          </div>
      

      <div class="container">
      <div class="row mt-5">
        <div class="col-1"></div>
            <div class="col-md-3">
                <div class="card mb-4 box-shadow">
                <form action="/MODUL2 YOVITA/Booking.php" method="get">
                  <img class="card-img-top" src="standard.jpeg" alt="Card image cap">
                  <div class="card-body" align="center">
                      <h3>Standard</h3>
                      <h3 style="color:blue">$ 90/Day</h3><br>
                    <p class="card-text" style="background-color: #f6f5f5;">Facilities</p><hr>
                    <p class="card-text">1 Single Bed</p><hr>
                    <p class="card-text">1 Bathroom</p><hr><br>
                    <div class="d-flex justify-content-xl-center">
                      <div class="btn-group">
                        <input type="hidden" name="type" value="standard">
                      <button type="submit" class="btn btn-primary" align="center">Book Now</button>
                      </div>
                    </div>
                    </form>
                </div>
            </div>
          </div>
           
            
           
            <div class="col-md-3">
             <div class="card mb-4 box-shadow">
             <form action="/MODUL2 YOVITA/Booking.php" method="get">
                  <img class="card-img-top" src="superior.jpg" alt="Card image cap">
                  <div class="card-body" align="center">
                      <h3>Superior</h3>
                      <h3 style="color:blue">$ 150/Day</h3><br>
                    <p class="card-text" style="background-color: #f6f5f5;">Facilities</p><hr>
                    <p class="card-text">1 Double Bed</p><hr>
                    <p class="card-text">1 Television and Wi-Fi</p><hr>
                    <p class="card-text">1 Bathroom with hot water</p><hr><br>
                    <div class="d-flex justify-content-xl-center">
                      <div class="btn-group">
                      <input type="hidden" name="type" value="superior">
                      <button type="submit" class="btn btn-primary" align="center">Book Now</button>
                      </div>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
            


              <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                <form action="/MODUL2 YOVITA/Booking.php" method="get">
                  <img class="card-img-top" src="luxury.jpg" alt="Card image cap">
                  <div class="card-body" align="center">
                      <h3>Luxury</h3>
                      <h3 style="color:blue">$ 200/Day</h3><br>
                    <p class="card-text" style="background-color: #f6f5f5; ">Facilities</p><hr>
                    <p class="card-text">2 Double Bed</p><hr>
                    <p class="card-text">2 Bathroom with hot water</p><hr>
                    <p class="card-text">1 Kitchen</p><hr>
                    <p class="card-text">1 Television and Wi-Fi</p><hr>
                    <p class="card-text">1 Workroom</p><hr><br>
                    <div class="d-flex justify-content-xl-center">
                      <div class="btn-group">
                      <input type="hidden" name="type" value="luxury">
                      <button type="submit" class="btn btn-primary" align="center">Book Now</button>
                      </div>
                    </div>
                  </div>
                  </form>
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