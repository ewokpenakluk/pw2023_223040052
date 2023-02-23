<?php
 echo "mulai. <br>";
// 1. inisialiasasi / nilai awal
// 2. kondisi terminasi / kapan pengulangannya berhenti
// 3. increment / decrement 
$nilai_awal = 1;  
  while ($nilai_awal <=100 ) {
    echo "hello world $nilai_awal x<br>";
    $nilai_awal = $nilai_awal + 1;
  }
 echo "selesai. <br>"; 

echo "<hr>";

echo "mulai. <br>";
for ($nilai_awal =1; $nilai_awal <= 5; $nilai_awal++) {
    echo "hello world $nilai_awal x,<br>";
}
echo "selesai, <br>"
?>