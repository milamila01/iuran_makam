<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn,
        "SELECT * FROM user 
         WHERE username='$username' 
         AND password='$password'"
    );

    $cek = mysqli_num_rows($query);

    if ($cek > 0) {
        $_SESSION['login'] = true;
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Login gagal');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login Sistem Iuran Makam</h2>

<form method="POST">
    Username <br>
    <input type="text" name="username"><br><br>

    Password <br>
    <input type="password" name="password"><br><br>

    <button type="submit" name="login">Login</button>
</form>

</body>
</html>