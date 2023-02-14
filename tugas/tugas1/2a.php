<?php
$a = 52;
$b = 5;
$c = 2;
$d = 75;
$e = 20;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2a</title>
</head>
<body>
    <p> aku adalah angka <b><?php echo "$a" ?></b></P>
    <p> jika aku dikali <?php  print "$b"?>, maka aku sekarang jadi<b> <?php echo $a*$b ?></b> </p>
    <p> jika aku dibagi <?php  print "$c"?>, maka aku sekarang jadi<b> <?php echo $a/$c ?></b> </p>
    <p> jika aku ditambah <?php  print "$d"?>, maka aku sekarang jadi<b> <?php echo $a+$d ?></b> </p>
    <p> jika aku dikurang <?php  print "$e"?>, maka aku sekarang jadi<b> <?php echo $a-$e ?></b> </p>
    
</body>
</html>