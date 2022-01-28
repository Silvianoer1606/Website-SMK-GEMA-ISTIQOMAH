<?php
session_start();
if(!isset($_SESSION["admin"])) header("location: admin.php");  

include 'config.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['email'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($db_name,"select * from admin where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:../login.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>