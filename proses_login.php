<?php

session_start();

include "koneksi.php";

$email = $_POST['email'];
$password = $_POST['password'];
$kirim = $_POST['login'];

$query = "SELECT * FROM myweb WHERE email='$email' and password='$password'";
$hasil = mysqli_query($conn, $query);

$data = mysqli_fetch_array($hasil);

$cek = mysqli_num_rows($hasil);
if ($cek > 0) {

    if ($data['level'] == "admin") {

        $_SESSION['email'] = $email;
        $_SESSION['level'] = "admin";

        header("location:hal_admin.php");

    } else if ($data['level'] == "user") {

        $_SESSION['email'] = $email;
        $_SESSION['level'] = "user";

        header("location:myweb-user.html");
    } else {
        echo "Anda Bukan Admin dan Bukan User";

    }
} else {
    header('Location:form.html');
}
?>
