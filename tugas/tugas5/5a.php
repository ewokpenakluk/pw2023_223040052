<?php 
 $mahasiswa = [
    [
    "nama" => "Angga Nugraha Sofyan",
     "nrp" => "223040052",
     "email" => "Angga.223040053@mail.unpas.ac.id",
     "jurusan" => "Teknik Informatika",
     "gambar" => "kucing1.jpg"    
    ],
    [
    "nama" => "Lisvindanu",
     "nrp" => "223040038",
     "email" => "Lisvindanu.223040053@mail.unpas.ac.id",
     "jurusan" => "Teknik Informatika",
     "gambar" => "kucing2.jpg"    
    ],
    [
    "nama" => "Muhamad Alfath Septian",
     "nrp" => "223040014",
     "email" => "Alfath.223040053@mail.unpas.ac.id",
     "jurusan" => "Teknik Informatika",
     "gambar" => "kucing3.jpg"    
    ],
    [
    "nama" => "Ji'ta Bilhaq",
     "nrp" => "223040056",
     "email" => "Ji'ta.223040053@mail.unpas.ac.id",
     "jurusan" => "Teknik Informatika",
     "gambar" => "kucing4.jpg"    
    ],
    [
    "nama" => "Ilham Ramadhana Hartono",
     "nrp" => "223040013",
     "email" => "Ilham.223040053@mail.unpas.ac.id",
     "jurusan" => "Teknik Informatika",
     "gambar" => "kucing5.jpg"    
    ],
    [
    "nama" => "Fakih Helmi Maulana",
     "nrp" => "223040056",
     "email" => "Fakih.223040053@mail.unpas.ac.id",
     "jurusan" => "Teknik Informatika",
     "gambar" => "kucing6.jpg"    
    ],
    [
    "nama" => "Ali Imran Rodja",
     "nrp" => "223040003",
     "email" => "Ali.223040003@mail.unpas.ac.id",
     "jurusan" => "Teknik Informatika",
     "gambar" => "kucing7.jpg"    
    ],
    [
    "nama" => "Meutuah Dicco Linge",
     "nrp" => "223040098",
     "email" => "Meutuah.223040098@mail.unpas.ac.id",
     "jurusan" => "Teknik Informatika",
     "gambar" => "kucing8.jpg"    
    ],
    [
    "nama" => "Aldi Pradana Hakim",
     "nrp" => "223040056",
     "email" => "Aldi.223040056@mail.unpas.ac.id",
     "jurusan" => "Teknik Informatika",
     "gambar" => "kucing9.jpg"    
    ],
    [
    "nama" => "Hedi Sukur",
     "nrp" => "223040071",
     "email" => "Hedi.223040071@mail.unpas.ac.id",
     "jurusan" => "Teknik Informatika",
     "gambar" => "kucing10.jpg"    
    ],
    ]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <h1> Daftar mahasiswa</h1>
<?php  foreach ($mahasiswa as $mhs) :?>
<ul>
<li><img src="img/<?= $mhs ["gambar"]; ?>" > </li>
<li>NAMA : <?= $mhs ["nama"];  ?> </li>
<li> NRP : <?=  $mhs ["nrp"];?></li>
<li> EMAIL : <?= $mhs ["email"];?></li>
<li> JURUSAN : <?= $mhs ["jurusan"];?> </li>
</ul>
<?php endforeach;?>

    
</body>
</html>
