<?php
include 'koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM warga");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Warga</title>
</head>
<body>

<h2>Data Warga</h2>

<a href="tambah_warga.php">Tambah Warga</a>

<table border="1" cellpadding="10">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>No HP</th>
    <th>Aksi</th>
</tr>

<?php
$no = 1;
while($d = mysqli_fetch_array($data)){
?>

<tr>
    <td><?= $no++; ?></td>
    <td><?= $d['nama']; ?></td>
    <td><?= $d['alamat']; ?></td>
    <td><?= $d['nomor_hp']; ?></td>

    <td>
        <a href="edit_warga.php?id=<?= $d['id_warga']; ?>">Edit</a>
        <a href="hapus_warga.php?id=<?= $d['id_warga']; ?>">Hapus</a>
    </td>
</tr>

<?php } ?>

</table>

</body>
</html>