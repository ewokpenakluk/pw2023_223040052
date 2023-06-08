<?php
session_start();
 require "../koneksi.php";


 // Cek peran pengguna
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    // Pengguna bukan admin, tampilkan pesan atau arahkan ke halaman lain yang sesuai
    echo "Anda tidak memiliki akses ke halaman ini.";
    exit;
}

   $querykategori = mysqli_query($conn,"SELECT * FROM kategori");
   $jumlahkategori = mysqli_num_rows($querykategori);
   $queryproduk = mysqli_query($conn,"SELECT * FROM produk");
   $jumlahproduk = mysqli_num_rows($queryproduk);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminpanel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<style>
    .kotak {
        border: solid;
    }
    .summery-kategori{
        background-color: #efbf38;
        color: #3b3f46;
        border-radius: 15px;
    }
    .summery-produk{
        background-color:#e08600 ;
        border-radius: 15px;
    }
    .no-decoration{
        text-decoration: none;
    }

</style>

<body>
    <?php 
    require "navbar.php";
    ?>
    <div class="container mt-5">
     <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">
      <i class="bi bi-house-fill">HOME</i>
      </li>
    </ol>
</nav>
    <h2>Hallo <?php  echo $_SESSION['username'];?></h2>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="summery-kategori p-3">
                 <div class="row">
                    <div class="col-6">
                        <div>
                        <i class="bi bi-text-center  text-black-40"></i>
                        <div class="col-6">
                            <h3 class="fs-2">KATEGORI</h3>
                            <p class="fs-4"><?php echo $jumlahkategori; ?> Kategori</p>
                            <p><a href="kategori.php " class="text-white no-decoration">Lihat Detail</a></p>
                        </div>
                        </div>
                    </div>
                 </div>
                </div>
            </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="summery-produk p-3">
                 <div class="row">
                    <div class="col-6">
                        <div>
                        <i class="bi bi-inboxes-fill"></i>
                        <div class="col-6">
                            <h3 class="fs-2">PRODUK</h3>
                            <p class="fs-4"><?php echo $jumlahproduk ?> produk</p>
                            <p><a href="produk.php " class="text-white no-decoration">Lihat Detail</a></p>
                        </div>
                        </div>
                    </div>
                 </div>
                </div>
            </div>
</body>
</html>