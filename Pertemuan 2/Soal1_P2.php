<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "Soal1_P2.php" method = "post">
    <br Data Yang di input :>
    Nama : <input type = "text" name =  "nama"><br>
    Jurusan : <input type ="text" name = "jr"><br>
    Nilai Tugas : <input type = "text" name = "nt"><br>
    Nilai UTS : <input type = "text" name = "nu"><br>
    Nilai UAS : : <input type = "text" name = "na"><br>
    <input type = "submit" value = "Hitung">
</body>
</html>
<?php
    $a = $_POST['nama'];
    $b = $_POST['jr'];
    $c = $_POST['nt'];
    $d = $_POST['nu'];
    $e = $_POST['na'];
    $rata = $c+$d+$e;
    $hasil = $rata/3;
    echo"<br>";
    echo "Nama : $a<br>";
    echo "Jurusan : $b<br>";
    echo "Nilai Tugas : $c<br>";
    echo "Nilai UTS : $d<br>";
    echo "Nilai UAS : $e<br>";
    echo "Rata-rata : $hasil<br>";
?>