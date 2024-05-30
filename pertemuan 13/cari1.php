<!DOCTYPE html>
<html>
<head>
    <title>Contoh Program Mencari Record Berdasarkan Field Nama</title>
</head>
<body>
    <h3>Contoh Program Mencari Record Berdasarkan Field Nama</h3>
    <form action="cari1.php" method="post">
        <label>Masukkan nama:</label>
        <input type="text" name="nama"><br>
        <p>
            <input type="submit" value="Search">
            <input type="reset" value="Hapus">
        </p>
    </form>
</body>
</html>


<?php
$koneksi = mysqli_connect("localhost", "root", "", "pemroweb2");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

$cari = $_POST['nama'];
$hasil = mysqli_query($koneksi, "SELECT * FROM tbl_mhs WHERE nama LIKE '%$cari%' ORDER BY nama ASC");

echo "<html>
<head>
    <title>Hasil Pencarian</title>
</head>
<body>";

if (mysqli_num_rows($hasil) > 0) {
    echo "<table border='1'>
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jurusan</th>
    </tr>";

    while ($data = mysqli_fetch_array($hasil)) {
        echo "<tr>
            <td>" . $data['nim'] . "</td>
            <td>" . $data['nama'] . "</td>
            <td>" . $data['Alamat'] . "</td>
            <td>" . $data['jurusan'] . "</td>
        </tr>";
    }

    echo "</table>";
} else {
    echo "Tidak ada data ditemukan.";
}

echo "</body>
</html>";

mysqli_close($koneksi);
?>