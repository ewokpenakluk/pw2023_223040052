<?php
 require "session.php";
 require "../koneksi.php"; 

 $querykategori = mysqli_query($con,"SELECT * FROM kategori");
 $jumlahkategori = mysqli_num_rows($querykategori);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<style>
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
       <a href="../adminpanel/" class="no-decoration text-muted">
          <i class="bi bi-house-fill">HOME</i>
       </a>
         </li>
         <li class="breadcrumb-item active" aria-current="page">
           <i class="bi bi-text-center  text-black-40">KATEGORI</i>
         </li>
      </ol>
   </nav>
   <div class="my-5 col-12 col-md-7">
    <h3>Tambah Kategori</h3>
    <form action="" method="post">
        <div>
            <label for="kategori">kategori</label>
            <input type="text" id="kategori" name="kategori" placeholder="input nama kategori" class="form-control">
        </div>
        <div class="mt-3">
            <button class="btn btn-warning" type="submit" name="simpan_kategori">Simpan</button>
        </div>
    </form>

    <?php 
    if(isset($_POST['simpan_kategori'])){
        $kategori = htmlspecialchars($_POST['kategori']);
        $queryExist = mysqli_query($con,"SELECT nama FROM kategori WHERE nama='$kategori'");
        $jumlahdatakategoribaru = mysqli_num_rows($queryExist);
        if($jumlahdatakategoribaru > 0){
            ?>
            <div class="alert alert-primary mt-3" role="alert">
                kategori sudah tersedia
            </div>
            <?php
        }
        else{
            $querysimpan = mysqli_query($con, "INSERT INTO kategori (nama) VALUES('$kategori')");
            
            if($querysimpan){
                ?>
             <div class="alert alert-warning mt-3" role="alert">
                kategori berhasil di simmpan!
            </div>
            <meta http-equiv="refresh" content="1; url=kategori.php"/>
                <?php

            }
            else{
                echo mysqli_error($con);
            }

        }
    }
    ?>
   </div>
   <div class="mt-3">
    <h2>List Ketegori</h2>
    <div class="table-responsive mt-4">
        <table class="table">
      <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        if($jumlahkategori==0){
            ?>
            <tr>
                <td colspan="3" class="text-center">Data Kategori Tidak Tersedia</td>
            </tr>
            <?php
        }
        else{
            $jumlah = 1;
            while($data=mysqli_fetch_array($querykategori)){
                ?>
                <tr>
                    <td><?php echo $jumlah; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td>
                        <a href="kategori-detail.php?p=<?php echo $data['id']; ?>" class="btn btn-info"><i class="bi bi-search-heart"></i></a>
                    </td>
                </tr>
                <?php
                $jumlah++;
            }
        }
        ?>
    </tbody>
   </div>

   </div>
     </div>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
</body>
</html>