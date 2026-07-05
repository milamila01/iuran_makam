<?php
include 'koneksi.php';

$data = mysqli_query($conn,
"SELECT * FROM pembayaran
JOIN warga ON pembayaran.id_warga=warga.id_warga");
?>

<h2>Laporan Pembayaran</h2>

<table border="1" cellpadding="10">

<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Tanggal</th>
    <th>Jumlah</th>
    <th>Status</th>
</tr>

<?php
$no=1;
while($d=mysqli_fetch_array($data)){
?>

<tr>
    <td><?= $no++; ?></td>
    <td><?= $d['nama']; ?></td>
    <td><?= $d['tanggal_bayar']; ?></td>
    <td><?= $d['jumlah']; ?></td>
    <td><?= $d['status']; ?></td>
</tr>

<?php } ?>

</table>