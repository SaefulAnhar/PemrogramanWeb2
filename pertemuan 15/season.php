<?php
session_start();

// Data login contoh (seharusnya berasal dari database)
$valid_username = "saeful";
$valid_password = "123";

// Mendapatkan data dari formulir
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Memvalidasi login
    if ($username === $valid_username && $password === $valid_password) {
        // Menyimpan data ke session
        $_SESSION['username'] = $username;

        // Mengarahkan ke halaman selamat datang
        header("Location: welcome.php");
        exit();
    } else {
        echo "Username atau password salah.";
    }
} else {
    echo "Mohon isi username dan password.";
}
?>
