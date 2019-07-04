<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama_adm'];

// menginput data ke database

$password=md5($password);
$result=mysqli_query($koneksi,"insert into admin values('$username','$password','$nama')");
 
        if ($result) {
            ?>
                <script>
                alert("Berhasil Mendaftar!");
                window.location.href = '../index.php?page=login';
                </script>
            <?php
        }else{
            ?>
                <script>
                alert("Gagal Mendaftar!");
                window.location.href = '../index.php?page=daftar';
                </script>
            <?php
        }
 
?>