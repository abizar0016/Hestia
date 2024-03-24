<?php
include "koneksi.php";
$email=$_POST['email'];
$nama=$_POST['username'];
$password=$_POST['password'];
$level=$_POST['status'];
$kirim=$_POST['signup'];
if($kirim){
$query="INSERT INTO signup VALUES
('','$nama','$email','$password','$level')";
$hasil=mysqli_query($conn,$query);
header('Location:form.php');
}else{
echo "Registrasi User Gagal!";
}
?>