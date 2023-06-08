<?php
require 'koneksi.php';

// Mendapatkan nilai keyword dari input pencarian
$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';

// Query tampil barang
$produk = query("SELECT * FROM produk");

// Jika terdapat parameter "cari" dan input pencarian tidak kosong
if (isset($_GET['cari']) && !empty($keyword)) {
    $produk = query("SELECT * FROM produk WHERE nama LIKE '%$keyword%';
    ");
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:ital,wght@0,400;1,500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Ewok Store</title>
</head>

<body>
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
          <form method="$_GET" class="d-flex me-auto" id="searchForm">
            <input class="form-control me-2" id="keyword" name="keyword" type="search" placeholder="Cari Barang Anda!" aria-label="Cari">
            <button class="btn btn-warning" name="cari" id="tombol-cari" type="submit">Cari</button>
          </form>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Kategori</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Produk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="adminpanel/login.php">LOGIN</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div id="search-results">

    </div>

    <script>
        // Ambil elemen input pencarian
        const searchInput = document.querySelector('input[name="keyword"]');
        const searchResultsContainer = document.getElementById("search-results");

        // Tambahkan event listener untuk input pencarian
        searchInput.addEventListener("input", function() {
            // Ambil nilai input pencarian
            const keyword = this.value.trim();

            // Buat request AJAX ke server untuk mendapatkan hasil pencarian
            const xhr = new XMLHttpRequest();
            xhr.open("GET", `ajax-search.php?keyword=${encodeURIComponent(keyword)}`, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Tangkap hasil pencarian dari server
                    const searchResults = xhr.responseText;

                    // Tampilkan hasil pencarian di elemen search-results
                    searchResultsContainer.innerHTML = searchResults;
                }
            };
            xhr.send();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>