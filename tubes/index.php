<?php 
require 'koneksi.php';
$produk = query("SELECT * FROM produk") ;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUBES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand" href="#">
      <img src="./img/logo1.png" alt="Bootstrap" width="50" height="50">
    </a>
          <a class="navbar-brand" href="#">wok.<strong>Sport</strong></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <form action="search.php" method="$_GET" class="d-flex ms-auto" id="searchForm">
            <input class="form-control me-2" id="keyword" name="keyword" type="search" placeholder="Cari Barang Anda!" aria-label="Cari">
            <button class="btn btn-warning" name="cari" id="tombol-cari" type="submit">Cari</button>
          </form>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Kategori</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Produk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../tubes/adminpanel/login.php">LOGIN</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- akhir navbar -->
      <!-- kategori -->
      <div class="container mt-5">
        <div class="judul-kategori" style="background-color: #f1ae08; padding: 5px 10px" >
          <h5 class="text-center" style="margin-top: 5px">Kategori</h5>

        </div>
        <div class="row text-center row-container mt-2">
          <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori">
              <a href="#"><img src="./img/baju.png" class="img-kategori mt-3"></a>
              <h1 class="mt-2">Jacket</h1>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori">
              <a href="#"><img src="./img/sepatu.png" class="img-kategori mt-3"></a>
              <h1 class="mt-2">Shoes</h1>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori">
              <a href="#"><img src="./img/otomotif.png" class="img-kategori mt-3"></a>
              <h1 class="mt-2">Helm</h1>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori">
              <a href="#"><img src="./img/celana.png" class="img-kategori mt-3"></a>
              <h1 class="mt-2">Pants</h1>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori">
              <a href="#"><img src="./img/fotografi.png" class="img-kategori mt-3"></a>
              <h1 class="mt-2">Camera</h1>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori">
              <a href="#"><img src="./img/sarungtangan.jpg" class="img-kategori mt-3"></a>
              <h1 class="mt-2">Gloves</h1>
            </div>
          </div>
        </div>
      </div>
      <!-- akhir kategori -->
      <!-- produk -->
      <div class="container mt-5">
      <div class="judul-kategori" style="background-color: #f1ae08; padding: 5px 10px" >
          <h5 class="text-center" style="margin-top: 5px">Produk</h5>
          <div class="row justify-content-center">
                <?php $i = 0; ?>
                <?php foreach ($produk as $p) : ?>
                    <?php if ($i % 3 == 0 && $i != 0) : ?>
                        </div>
                        <div class="row">
                    <?php endif; ?>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2 d-flex mx-auto" style="width: 30%;">
                        <div class="card text-center">
                            <img src="img/<?= $p["foto"]; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $p["nama"]; ?></h5>
                                <p class="card-text"><?= $p["harga"]; ?></p>
                                <a href="017.php?nama=<?= $p["nama"] ?>" class="btn btn-dark d-grid">Beli</a>
                            </div>
                        </div>
                    </div>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </div>
    </div>
  </div>
      <!-- akhir produk -->
      <!-- footer -->
      <footer class="bg-warning p-5 mt-5">
        <di class="container">
          <div class="row">
            <div class="col-md-6">
              <a href="" class="text-decoration-none">
                <img src="./img/Logo1.png" width="50" height="50">
              </a>
              <span>Copyright @2023 |  Created and Developed by<a href="https://www.instagram.com/angganfss" class="text-decoration-none text-dark fw-bold"> Angga NS</a></span>
            </div>
            <div class="col-md-6 text-end">
              <a href="https://www.facebook.com/Deon Nugraha" class="text-decoration-none">
                <img src="./img/facebook.png" class= "ms-2"width="30">
              </a>
              <a href="https://www.instagram.com/angganfss" class="text-decoration-none">
                <img src="./img/instagram.png" class= "ms-2"width="30">
              </a>
              <a href="https://www.twitter.com/Ewok azza" class="text-decoration-none">
                <img src="./img/twitter.png"class= "ms-2 "width="30">
              </a>
            </div>
          </div>
        </di>
      </footer>
      <!-- akhir fotter -->
      <script src="js/script.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
      <!-- css -->
      <style>
        body{
          background-color: #3b3f46;
          font-family: sans-serif;
          font-size: 15px;
          color: #3b3f46;
        }
        .form-control{
          width: 250px;
        }
        .img-kategori{
          width: 50px;
        }
        .row-container{
          background-color: white;
          margin: 0px;
        }
        .img-kategori:hover{
          transform: scale(1.5);
        }
        .card:hover{
          border: 4px solid black;
        }
        @media screen and(max-width:990px) {
          
        }
        @media screen and(max-width:769px) {
          
        }
        @media screen and(max-width:500px) {
          
        }
        @media screen and(max-width:400px) {
          
        }
      </style>

</body>
</html>