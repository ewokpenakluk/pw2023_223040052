<?php
require 'koneksi.php';

if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    $produk = query("SELECT * FROM produk WHERE nama LIKE '%$keyword%';
    ");

    // Jika hasil pencarian kosong
    if (count($produk) == 0) {
        echo '<h3 class="pesan text-center mt-5">"Produk yang dicari tidak tersedia"</h3>';
    } else {
        foreach ($produk as $p) {
            echo '
            <div class="row">
                    <?php if ($i % 3 == 0 && $i != 0) : ?>
                        </div>
                        <div class="row">
                    <?php endif; ?>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2 d-flex" style="width: 30%;">
                        <div class="card text-center">
                            <img src="img/' . $p["foto"] . '" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">' . $p["nama"] . '</h5>
                                <p class="card-text">' . $p["harga"] . '</p>
                                <a href="017.php?nama=' . $p["nama"] . '" class="btn btn-dark d-grid">Beli</a>
                            </div>
                        </div>
                    </div>
            </div>
            ';
        }
    }
}