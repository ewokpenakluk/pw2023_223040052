<?php
require('functions.php');
$name = 'Home';








$students = query("SELECT * FROM mahasiswa");

//cari mahasiswa ketika tombol mahasiswa di klik
if(isset($_GET['search'])){
$keyword = $_GET['keyword'];
$query ="SELECT * FROM mahasiswa WHERE
 nama LIKE '%$keyword%'OR
 jurusan LIKE '%$keyword%'OR
 nim LIKE '%$keyword%'";

$students = query($query);
}




require('views/index.view.php');
