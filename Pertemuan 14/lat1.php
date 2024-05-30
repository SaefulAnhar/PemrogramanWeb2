
<?php
// koneksi database
include 'koneksi.php';
?>
<html>
<body>

<h2>Tabel 1</h2>
<table border="1">
    <tr>
        <th>kode</th>
        <th>nama barang</th>
        <th>jumlah</th>
    </tr>
    <?php
    $tabel1 = mysqli_query($koneksi, "SELECT * FROM tbl_1");
    while ($dataku = mysqli_fetch_row($tabel1)) {
        echo "<tr>
                <td>$dataku[0]</td>
                <td>$dataku[1]</td>
                <td>$dataku[2]</td>
              </tr>";
    }
    ?>
</table>

<h2>Tabel 2</h2>
<table border="1">
    <tr>
        <th>kode</th>
        <th>nama barang</th>
        <th>jumlah</th>
    </tr>
    <?php
    $tabel2 = mysqli_query($koneksi, "SELECT * FROM tbl_2");
    while ($data2 = mysqli_fetch_row($tabel2)) {
        echo "<tr>
                <td>$data2[0]</td>
                <td>$data2[1]</td>
                <td>$data2[2]</td>
              </tr>";
    }
    ?>
</table>

<h2>Kirim Barang</h2>
<form action="" method="post">
    <label>Kode Barang:</label>
    <select name="kode">
        <?php
        $tabel1 = mysqli_query($koneksi, "SELECT * FROM tbl_2");
        while ($data1 = mysqli_fetch_row($tabel1)) {
            echo '<option value="' . $data1[0] . '">' . $data1[0] . '/' . $data1[1] . '</option>';
        }
        ?>
    </select><br><br>
    <label>Jumlah:</label><input type="number" name="jumlah"><br><br>
    <input type="submit" value="Kirim">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // menampung data yang dikirim oleh form
    $kode = $_POST['kode'];
    $jumlah = $_POST['jumlah'];

    // menginput data ke database
    mysqli_query($koneksi, "CALL update_dtbl('$kode', '$jumlah')");

    // mengalihkan halaman kembali ke form
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

</body>
</html>