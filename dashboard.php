<<?php
include 'koneksi.php';

$data_warga = mysqli_fetch_array(
    mysqli_query($conn, "SELECT COUNT(*) as total FROM warga")
);

$data_transaksi = mysqli_fetch_array(
    mysqli_query($conn, "SELECT COUNT(*) as total FROM pembayaran")
);

$data_pemasukan = mysqli_fetch_array(
    mysqli_query($conn, "SELECT SUM(jumlah) as total FROM pembayaran")
);

$data_belum = mysqli_fetch_array(
    mysqli_query($conn, "SELECT COUNT(*) as total FROM pembayaran WHERE status='Belum Bayar'")
);

$total_pemasukan = $data_pemasukan['total'];

if ($total_pemasukan == null) {
    $total_pemasukan = 0;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

<style>
body{
    font-family: Arial;
    margin:40px;
}

.kotak{
    width:220px;
    padding:20px;
    color:white;
    border-radius:10px;
    display:inline-block;
    margin:10px;
}

.biru{ background:#1565ff; }
.hijau{ background:#1b8f4d; }
.kuning{ background:#f4b400; }
.merah{ background:#d93025; }

.menu{
    margin-top:40px;
}

.menu a{
    padding:12px 20px;
    background:#333;
    color:white;
    text-decoration:none;
    margin-right:10px;
}
</style>

</head>
<body>

<h1>Dashboard Sistem Iuran Makam</h1>

<div class="kotak biru">
    <h2>Total Warga</h2>
    <h1><?= $data_warga['total']; ?></h1>
</div>

<div class="kotak hijau">
    <h2>Total Transaksi</h2>
    <h1><?= $data_transaksi['total']; ?></h1>
</div>

<div class="kotak kuning">
    <h2>Total Pemasukan</h2>
    <h1>Rp <?= number_format($total_pemasukan); ?></h1>
</div>

<div class="kotak merah">
    <h2>Belum Bayar</h2>
    <h1><?= $data_belum['total']; ?></h1>
</div>

<div class="menu">
    <a href="warga.php">Data Warga</a>
    <a href="pembayaran.php">Pembayaran</a>
    <a href="laporan.php">Laporan</a>
    <a href="logout.php">Logout</a>
</div>

</body>
</html>