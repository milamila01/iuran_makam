<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $hp = $_POST['hp'];

    mysqli_query($conn,
    "INSERT INTO warga(nama,alamat,nomor_hp)
    VALUES('$nama','$alamat','$hp')");

    header("Location: warga.php");
}
?>

<h2>Tambah Warga</h2>

<form method="POST">

Nama <br>
<input type="text" name="nama"><br><br>

Alamat <br>
<input type="text" name="alamat"><br><br>

No HP <br>
<input type="text" name="hp"><br><br>

<button type="submit" name="simpan">
Simpan
</button>

</form>