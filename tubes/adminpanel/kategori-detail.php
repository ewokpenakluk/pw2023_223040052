<?php
 require "../koneksi.php"; 
 $id =$_GET['p'];
 $query = mysqli_query($conn,"SELECT * FROM kategori WHERE id='$id'");
 $data = mysqli_fetch_array($query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php require "navbar.php"; ?>
    <div class="container mt-5">
    <h2>Detail Kategori</h2>

    <div class="col-12 col-md-6">
     <form action="" method="post">
      <div>
          <label for="kategori">Kategori</label>
          <input type="text" name="kategori" id="kategori" class="form-control" value="<?php  echo $data['nama'];?>">
      </div>

      <div class="mt-5 d-flex justify-content-between">
        <button type="submit" class="btn btn-warning" name="editBtn">Edit</button>
        <button type="submit" class="btn btn-danger" name="deleteBtn">Delete</button>
      </div>
    </form>
    <?php 
     if(isset($_POST['editBtn'])){
        $kategori = htmlspecialchars($_POST['kategori']);

        if($data['nama']==$kategori){
            ?>
            <meta http-equiv="refresh" content="0; url=kategori.php"/>
            <?php
        }
        else{
            $query = mysqli_query($conn,"SELECT * FROM kategori WHERE nama='$kategori'");
            $jumlahdata = mysqli_num_rows($query);

            if($jumlahdata > 0){
                ?>
                 <div class="alert alert-primary mt-3" role="alert">
                     kategori sudah tersedia
                </div>
                <?php
            }
            else{
                $querysimpan = mysqli_query($conn,"UPDATE kategori SET nama='$kategori' WHERE id='$id'");
                if($querysimpan){
                    ?>
                 <div class="alert alert-warning mt-3" role="alert">
                    kategori berhasil di Di perbaharui!
                </div>
                <meta http-equiv="refresh" content="1; url=kategori.php"/>
                    <?php
    
                }
                else{
                    echo mysqli_error($conn);
                }
    
            }
        }
     }

     if(isset($_POST['deleteBtn'])){
        $querydelete = mysqli_query($conn,"DELETE FROM kategori WHERE id='$id'");
        if($querydelete){
            ?>
            <div class="alert alert-warning mt-3" role="alert">
                    kategori berhasil di Dihapus!
                </div>

                <meta http-equiv="refresh" content="1; url=kategori.php"/>
            <?php
        }
        else{
            echo mysqli_error($conn);
        }
     }
    ?>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
</body>
</html>