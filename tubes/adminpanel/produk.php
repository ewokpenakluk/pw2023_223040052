<?php
session_start();
 require "../koneksi.php"; 

 // Cek peran pengguna
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    // Pengguna bukan admin, tampilkan pesan atau arahkan ke halaman lain yang sesuai
    echo "Anda tidak memiliki akses ke halaman ini.";
    exit;
}

 if (isset($_POST['submit'])) {
    $kategori_id = $_POST['kategori_id'];
    $nama = htmlspecialchars($_POST['nama']);
    $harga = htmlspecialchars($_POST['harga']);
    $detail = htmlspecialchars($_POST['detail']);
    $ketersediaan_stock = htmlspecialchars($_POST['ketersediaan_stock']); 

    $foto = upload();
    if (!$foto) {
        return false;
    }


    //   queri 
        $query = "INSERT INTO produk (kategori_id, nama, harga, foto, detail, ketersediaan_stock) 
        VALUES ('$kategori_id', '$nama', '$harga', '$foto', '$detail', '$ketersediaan_stock')";

        //   jalanin
        if (mysqli_query($conn, $query)) {
        echo "Data berhasil ditambahkan";
        } else {
        echo "Error: " . mysqli_error($conn);
        }
    }

    // Cek apakah input file 'foto' ada
    function upload() {
        // ambil nama file foto
        $namaFile = $_FILES['foto']['name'];
        $ukuranFile = $_FILES['foto']['size'];
        $eror = $_FILES['foto']['error'];
        $tmpName = $_FILES['foto']['tmp_name'];
    
        // cek apakah tidak ada foto yang diupload
        if ($eror == 4) {
            echo "<script>
                    alert('foto tidak ditemukan!');
                    </script>";
            return false;
        }
    
        // cek apakah yang diupload adalah foto
        $ekstensiFotoValid = ['jpg', 'jpeg', 'png'];
        $ekstensiFoto = explode('.', $namaFile);
        $ekstensiFoto = strtolower(end($ekstensiFoto));
        if (!in_array($ekstensiFoto, $ekstensiFotoValid)) {
            echo "<script>
                    alert('Ekstensi foto tidak sesuai!');
                    </script>";
        }
    
        // cek jika ukurannya terlalu besar 
        if ($ukuranFile > 2000000) {
            echo "<script>
                alert('Ukuran foto terlalu besar!');
                </script>";
            return false;
        }
    
        // generate nama foto baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiFoto;
    
        // lolos pengecekan, foto siap diupload
        move_uploaded_file($tmpName, '../img/' . $namaFileBaru);
    
        return $namaFileBaru;
}

// return $namafilebaru;
//     echo $target_dir. "<br>";
//     echo $nama_file. "<br>";
//     echo  $target_file. "<br>";
//     echo  $imageFileType. "<br>";
//     echo $image_size. "<br>";


//     if ($nama == '' || $kategori_id == '' || $harga == '') {
//         

//     }
 $query = mysqli_query($conn," SELECT * FROM produk");
 $jumlahproduk = mysqli_num_rows($query);
 $querykategori = mysqli_query($conn,"SELECT * FROM kategori");
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<style>
     .no-decoration{
        text-decoration: none;
    }
    form div{
       margin-bottom: 10px; 
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
           <i class="bi bi-text-center  text-black-40">PRODUK</i>
         </li>
      </ol>
   </nav>
   <!-- Tambah Produk -->
   <div class="my-5 col-12 col-md-7">
   <h3>Produk</h3>
   </div>

   <div class="mt-3">
      <h2>List Produk</h2>
      
      <form action="" method="post" enctype="multipart/form-data">
        <div>
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" class="form-control" autocomplete="off" required>
        </div>
        <div>
    <label for="kategori">Kategori</label>
    <select name="kategori_id" id="kategori" class="form-control" required>
        <option value="">Pilih Satu</option>
        <?php 
        while ($data = mysqli_fetch_array($querykategori)) {
            ?>
            <option value="<?php echo $data['id'] ?>"><?php echo $data['nama'] ?></option>
            <?php  
        }
        ?> 
    </select>
</div>

        <div>
            <label for="harga">Harga</label>
            <input type="number" class="form-control" name="harga" required>
        </div>
        <div>
            <label for="foto">Foto</label>
            <input type="file" name="foto" id="foto" class="form-control">
        </div>
        <div>
            <label for="detail">Detail</label>
            <textarea name="detail" id="detail" cols="30" rows="10" class="form-control">
            </textarea>
        </div>
        <div>
            <label for="ketersediaan_stock">Ketersediaan Stock</label>
            <select name="ketersediaan_stock" id="ketersediaan_stock" class="form-control">
                <option value="tersedia">Tersedia</option>
                <option value="habis">Kosong</option>
            </select>
        </div>
        <div>
            <button type="submit" class="btn btn-warning" name="submit">Simpan</button>
        </div>
      </form>

     
      <div class="table-responsive mt-4">
        <table class="table">
      <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Ketersedian Stock</th>
        </tr>
       </thead>
       <tbody>
        <?php
         if($jumlahproduk==0) {
            ?>
            <tr>
                <td colspan="5" class="text-center">Data Produk Tidak Tersedia</td>
            </tr>
            <?php
         }
         else{
            $jumlah = 1;
            while($data=mysqli_fetch_array($query)){
               ?>
               <tr>
                <td> <?php echo $jumlah; ?></td>
                <td> <?php echo $data['nama']; ?></td>
                <td> <?php echo $data['kategori_id']; ?></td>
                <td> <?php echo $data['harga']; ?></td>
                <td> <?php echo $data['ketersediaan_stock']; ?></td>
               </tr>
               <?php 

               $jumlah++;
            }
         }
        ?>
       </tbody>
     </table>
      </div>
   </div>
     </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
</body>
</html>