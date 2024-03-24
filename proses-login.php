<?php

session_start();

include "koneksi.php";

$email = $_POST['email'];
$password = $_POST['password'];
$kirim = $_POST['signin'];
$query = "SELECT * FROM signup WHERE email='$email' and password='$password'";
$hasil = mysqli_query($conn, $query);
$data = mysqli_fetch_array($hasil);
$cek = mysqli_num_rows($hasil);

if ($kirim) {

    if ($data['level'] == "admin") {

        $_SESSION['email'] = $email;
        $_SESSION['level'] = "admin";
        header('Location:hal-admin.php');
    } else if ($data['level'] == "user") {
        $_SESSION['email'] = $email;
        $_SESSION['level'] = "user";
        header('Location:myweb-user.html');
    }
}
?>
