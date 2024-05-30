<?php
session_start();

// Menghapus semua variabel session
session_unset();

// Menghancurkan session
session_destroy();

echo "Anda telah logout. <a href='login.php'>Login kembali</a>.";
?>
