
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
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="./img/Baju6.jpg" class="card-img-top" alt="...">
              <div class="card-body">
               <h5 class="card-title">JACKET</h5>
               <p class="card-text">Rp 350.000</p>
            <a href="017.php" class="btn btn-dark d-grid">Beli</a>
          </div>
         </div>
       </div>
       <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="./img/Baju2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
               <h5 class="card-title">JACKET</h5>
               <p class="card-text">Rp 350.000</p>
            <a href="borntodie.php" class="btn btn-dark d-grid">Beli</a>
          </div>
         </div>
       </div>
       <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="./img/Baju3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
               <h5 class="card-title">JACKET</h5>
               <p class="card-text">Rp 350.000</p>
            <a href="bbqride.php" class="btn btn-dark d-grid">Beli</a>
          </div>
         </div>
       </div>
       <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="./img/Helm1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
               <h5 class="card-title">HELM</h5>
               <p class="card-text">Rp 27.500.000</p>
            <a href="agv.php" class="btn btn-dark d-grid">Beli</a>
          </div>
         </div>
       </div>
       <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="./img/Helm2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
               <h5 class="card-title">HELM</h5>
               <p class="card-text">Rp 10.000.000</p>
            <a href="arai.php" class="btn btn-dark d-grid">Beli</a>
          </div>
         </div>
       </div>
       <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="./img/Helm3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
               <h5 class="card-title">HELM</h5>
               <p class="card-text">RP 7.000.000</p>
            <a href="hjc.php" class="btn btn-dark d-grid">Beli</a>
          </div>
         </div>
       </div>
       <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="./img/Celana1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
               <h5 class="card-title">PANTS</h5>
               <p class="card-text">Rp 1.350.000</p>
            <a href="celana.php" class="btn btn-dark d-grid">Beli</a>
          </div>
         </div>
       </div>
       <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="./img/Kamera2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
               <h5 class="card-title">CAMERA</h5>
               <p class="card-text">Rp 600.000</p>
            <a href="kamera.php" class="btn btn-dark d-grid">Beli</a>
          </div>
         </div>
       </div>
       <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="./img/Gloves1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
               <h5 class="card-title">GLOVES</h5>
               <p class="card-text">Rp 7.300.000</p>
            <a href="sarungtangan.php" class="btn btn-dark d-grid">Beli</a>
          </div>
         </div>
       </div>
       <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="./img/Gloves2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
               <h5 class="card-title">GLOVES</h5>
               <p class="card-text">Rp 5.350.000</p>
            <a href="sarungtangan2.php" class="btn btn-dark d-grid">Beli</a>
          </div>
         </div>
       </div>
       <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="./img/Sepatu2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
               <h5 class="card-title">SHOES</h5>
               <p class="card-text">Rp 8.350.000</p>
            <a href="sepatu.html" class="btn btn-dark d-grid">Beli</a>
          </div>
         </div>
       </div>
       <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="./img/Sepatu3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
               <h5 class="card-title">SHOES</h5>
               <p class="card-text">Rp 4.350.000</p>
            <a href="sepatu2.php" class="btn btn-dark d-grid">Beli</a>
          </div>
         </div>
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