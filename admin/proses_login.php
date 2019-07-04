<?php 
 
// mengaktifkan session php
session_start();
// menghubungkan dengan koneksi
include '../koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);
$nama_adm = $_POST['nama_adm'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
$r = mysqli_fetch_assoc($data);
 
if($cek > 0){
	$_SESSION['nama_adm'] = $r['nama_adm']; 
	$_SESSION['status'] = "login";
	header("location:menuadm.php");
}else{
	header("location:../index.php?page=login");
}
?>