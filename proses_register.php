<?php
include "koneksi.php";
$email=$_POST['email'];
$nama=$_POST['nama'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$password=$_POST['password'];
$telepon=$_POST['telepon'];
$level="user";
$kirim=$_POST['register'];
if($kirim){
$query="INSERT INTO myweb VALUES
('','$nama','$email','$telepon','$password','$level')";
$hasil=mysqli_query($conn,$query);
header('Location:form.html');
}else{
echo "Registrasi User Gagal!";
}
?>