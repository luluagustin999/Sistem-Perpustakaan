<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Library Ilkomp</title>
  </head>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 0%;
  }
  </style>
  <body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="gambar/logo.jpeg" alt="LOGO NIH" width="50" height="50">
    <b><font face="Bernard MT Condensed">PERPUSKOM</font><br></b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profile
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="profile/Profile.php">Profile Perpustakaan</a></li>
            <li><a class="dropdown-item" href="Profile/VisiMisi.php">Visi dan Misi</a></li>
            <li><a class="dropdown-item" href="Profile/staf_perpustakaan.php">Staf Perpustakaan</a></li>
            <li><a class="dropdown-item" href="Profile/Tata_tertib.php">Tata Tertib</a></li>
            <li><a class="dropdown-item" href="Profile/jamoperasional.php">Jam Operasional</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kategori Buku
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="kategori/jurnal.php">JURNAL</a></li>
            <li><a class="dropdown-item" href="kategori/karyailmiah.php">ANALOGI</a></li>
            <li><a class="dropdown-item" href="kategori/biografi.php">BIOGRAFI</a></li>
            <li><a class="dropdown-item" href="kategori/novel.php">NOVEL</a></li>
            <li><a class="dropdown-item" href="kategori/dongeng.php">DONGENG</a></li>
            <li><a class="dropdown-item" href="kategori/komik.php">KOMIK</a></li>
          </ul>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="kontak.php" tabindex="-1">Contact</a>
        </li> 
      </ul>
      <a href = "index2.php"><button type="button" class="btn btn-outline-dark">Login</button></a>
    </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="gambar/lib.jpg" class="d-block w-30" alt="GAMBAR PERPUSTAKAAN">
    </div>
    <div class="carousel-item">
      <img src="gambar/lib2.jpg" class="d-block w-30" alt="GAMBAR PERPUSTAKAAN KEDUA">
    </div>
    <div class="carousel-item">
      <img src="gambar/lib3.jpeg" class="d-block w-30" alt="GAMBAR PERPUSTAKAAN KETIGA">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>   

  </body>
</html>
