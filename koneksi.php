<?php
$conn = mysqli_connect("localhost", "root", "", "iuran_makam");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>