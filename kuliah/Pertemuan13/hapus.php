<?php
require 'functions.php';
$id = htmlspecialchars($_GET['id']);

if(hapus($id) >0) {
    echo "<script>
    alert('data berhasil dihapus!');
    document.location.href ='index.php';
    </script>";
}
else {
    "<script>
    alert('data berhasil dihapus!');
    document.location.href ='index.php';
    </script>";


}

?>