<?php
require('functions.php');
$name = 'Home';
// $students = [
//   [
//     "nama" => "Sandhika Galih",
//     "npm" => "043040023",
//     "email" => "sandhikagalih@unpas.ac.id"
//   ],
//   [
//     "nama" => "Doddy Ferdiansyah",
//     "npm" => "133040003",
//     "email" => "doddy@gmail.com"
//   ]
// ];
//  koneksi database
$conn = mysqli_connect('localhost','root','','pw2023_223040052') or die ('KONEKSI KE DATABASE GAGAL!');


// lakukan query ke tabel mahasiswa
$result = mysqli_query($conn,"SELECT * FROM mahasiswa");

$rows = [];

while ($row = mysqli_fetch_assoc($result)) {

$rows[] = $row;
}


// siapkan data $students
$students = $rows;


// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/index.view.php');
