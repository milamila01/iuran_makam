<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){

    $id_warga = $_POST['id_warga'];
    $tanggal = $_POST['tanggal'];
    $jumlah = $_POST['jumlah'];
    $status = $_POST['status'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];

    // Menggunakan prepared statement untuk keamanan
    $stmt = $conn->prepare("INSERT INTO pembayaran (id_warga, tanggal_bayar, jumlah, status, bulan, tahun) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isisis", $id_warga, $tanggal, $jumlah, $status, $bulan, $tahun);
    $simpan = $stmt->execute();

    if($simpan){

        echo "
        <script>
        alert('Pembayaran berhasil disimpan');
        window.location='pembayaran.php';
        </script>
        ";

    }else{

        echo "
        <script>
        alert('Pembayaran gagal disimpan');
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pembayaran</title>

<style>

body{
    font-family: Arial;
    margin:40px;
}

form{
    width:300px;
}

input, select{
    width:100%;
    padding:10px;
    margin-top:5px;
    margin-bottom:15px;
}

button{
    background:green;
    color:white;
    border:none;
    padding:10px 20px;
    cursor:pointer;
}

</style>

</head>

<body>

<h2>Tambah Pembayaran Iuran</h2>

<form method="POST">

Nama Warga

<select name="id_warga" required>

<option value="">-- Pilih Warga --</option>

<?php

$data = mysqli_query($conn,"SELECT * FROM warga");

while($d = mysqli_fetch_array($data)){

?>

<option value="<?= $d['id_warga']; ?>">

<?= $d['nama']; ?>

</option>

<?php } ?>

</select>

Tanggal Bayar
<input type="date" name="tanggal" required>

Jumlah Pembayaran
<input type="number" name="jumlah" required>
Bulan
<input type="text" name="bulan" required>

Tahun
<input type="number" name="tahun" required>

Status Pembayaran

<select name="status" required>

<option value="Lunas">Lunas</option>
<option value="Belum Bayar">Belum Bayar</option>

</select>

<button type="submit" name="simpan">
Simpan Pembayaran
</button>

</form>

</body>
</html>