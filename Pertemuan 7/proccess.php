<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $material = $_POST['material'];
    
    if ($material == 1) {
       
        header("Location: if.php");
    } elseif ($material == 2) {
       
        header("Location: swichCase.php");
    } elseif ($material == 3) {
       
        header("Location: loop.php");
    } elseif ($material == 4) {
      
        header("Location: array.php");
    } else {
        
        echo "Pilihan tidak valid. Silakan kembali dan pilih nomor materi yang benar.";
    }
    exit;
}
?>
