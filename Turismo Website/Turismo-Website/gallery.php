<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turismo Website | gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- nav start -->
<nav class="navbar navbar-expand-sm">
    <h1>Turismo Website</h1> 
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" href="index.php">home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="tours.php">blog/tours</a>
            <li class="nav-item">
            <a class="nav-link" href="gallery.php">gallery</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="contact.php">contact</a>
            </li>
        </ul>
        </div>
    </div>
</nav>
<!-- nav end -->

<!-- Carousel -->
<div id="demo" class="carousel slide" id = 'slide' data-bs-ride="carousel">

  <!-- Indicators/dots -->
<div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
</div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/nm.jpg" alt="Boac Museum" class="d-block w-100">
      <div class="carousel-caption">
        <h3>BOAC MUSEUM</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/la.jpg" alt="Boac Cathedral" class="d-block w-100">
      <div class="carousel-caption">
        <h3>Boac Cathedral</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/cr.jpg" alt="Casa Real" class="d-block w-100">
      <div class="carousel-caption">
        <h3>CASA REAL</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/lp.jpg" alt="Laylay Port" class="d-block w-100">
      <div class="carousel-caption">
        <h3>LAYLAY PORT</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/ny.jpg" alt="Boracay (Capala)" class="d-block w-100">
      <div class="carousel-caption">
        <h3>BORACAY (CAPALA)</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/ch.jpg" alt="Provincial Capitol" class="d-block w-100">
      <div class="carousel-caption">
        <h3>PROVINCIAL CAPITOL</h3>
      </div>
    </div>
  </div>


  <!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>



</body>
</html>