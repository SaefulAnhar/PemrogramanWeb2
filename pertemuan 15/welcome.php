<?php
session_start();

// Memeriksa apakah pengguna sudah login
if (isset($_SESSION['username'])) {
    echo "Selamat datang, " . htmlspecialchars($_SESSION['username']) . "!";
    echo "<br><a href='logout.php'>Logout</a>";
} else {
    echo "Anda belum login. Silakan <a href='login.php'>login</a>.";
}
?>
