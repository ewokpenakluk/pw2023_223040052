<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Born to Ride</title>
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
          <form class="d-flex ms-auto" role="search">
      <input class="form-control me-2" type="search" placeholder="Cari Barang Anda!" aria-label="Cari">
      <button class="btn btn-warning" type="submit">Cari</button>
    </form>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Notifikasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Keranjang</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- akhir navbar -->
      <!-- bredcrumb -->
      <div class="container">
      <nav aria-label="breadcrumb"style="background-color:#f1ae08;" class="mt-3">
  <ol class="breadcrumb p-3">
    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Beranda</a></li>
    <li class="breadcrumb-item"><a href="#"class="text-decoration-none">Kategori</a></li>
    <li class="breadcrumb-item active" aria-current="page">Produk</li>
  </ol>
</nav>
      </div>
      <!-- akhir bredcrumb -->
      <!-- single produk -->
      <div class="container">
        <div class="row row-produk">
            <div class="col-lg-5">
            <figure class="figure">
             <img src="./img/Baju2.jpg" class="figure-img img-fluid rounded" style="border-radius: 5px;" width="450px">
              <figcaption class="figure-caption">
                <a href="bbqride.php">
                <img src="./img/Baju3.jpg" class="figure-img img-fluid rounded" style="border-radius: 5px;" width="70px">
                </a>
                <a href="017.php">
                <img src="./img/Baju6.jpg" class="figure-img img-fluid rounded" style="border-radius: 5px;" width="70px">
                </a>
              </figcaption>
            </figure>
            </div>
            <div class="col-lg-7">
                <h2>PHILIP WORKS</h2>
                <div class="garis-produk">
                </div>
                <h3>Born to Ride</h3>
                <h4>Jaket sunmory/Riding Semi protecktor</h4>
                <h2>Rp 350.000</h2>
                <div class="btn-produk mt-4">
                    <a href="#" class="btn-dark btn-lg" style="font-size: 14px;">Masukan Keranjang</a>
                    <a href="#" class="btn-light btn-lg"style="font-size: 14px;">Beli Sekarang</a>
                </div>
            </div>
        </div>
      </div>

      <!-- akhir single produk -->
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
              <a href="" class="text-decoration-none">
                <img src="./img/facebook.png" class= "ms-2"width="30">
              </a>
              <a href="" class="text-decoration-none">
                <img src="./img/instagram.png" class= "ms-2"width="30">
              </a>
              <a href="" class="text-decoration-none">
                <img src="./img/twitter.png"class= "ms-2 "width="30">
              </a>
            </div>
          </div>
        </di>
      </footer>
      <!-- akhir fotter -->

      <!-- css -->
      <style>
        body{
          background-color: #3b3f46;
          font-family: sans-serif;
          font-size: 15px;
          color: #3b3f46;
        }
        .form-control{
          width: 350px;
        }
        .img-kategori{
          width: 50px;
        }
        .row-container{
          background-color: white;
          margin: 0px;
        }
        .card:hover{
          border: 4px solid black;
        }
        .row-produk{
            background-color: #f1ae08;
            margin: 0;
            padding: 5px;
            padding-top: 16px;
        }
        .garis-produk{
            border-bottom: 2px solid #3b3f46;
            margin-top: 10px;
            margin-bottom: 25px;
        }
      </style>

</body>
</html>