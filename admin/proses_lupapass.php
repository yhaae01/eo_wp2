<?php
 include '../koneksi.php';
 if (isset($_POST['btnReset'])) 
 {
  $username = $_POST['username'];
  $cek = mysqli_query($koneksi,"select username from admin where username='$username' ");
  
  if (mysqli_num_rows($cek) == 1 ) 
  {
   $password   = $_POST['password'];
   $repassword = $_POST['repassword'];
   if($password != $repassword)
   {
    ?>
     <script>
      alert("Inputan password tidak sama");
      window.location.href = 'index.php?page=lupa_pass';
     </script>
    <?php
   }else
   {
    $pwd = md5($password);
    $sql = mysqli_query($koneksi,"update admin set password = '$pwd' where username='$username' ");
    if ($sql) 
    {
     ?>
      <script>
       alert("Password telah di perbarui");
       window.location.href = 'index.php?page=login';
      </script>
     <?php
    }else
    {
     ?>
      <script>
       alert("Password gagal diperbaharui");
       window.location.href = 'index.php?page=lupa_pass';
      </script>
     <?php
    }
   }
  }else
  {
   ?>
    <script>
     alert("Pastikan username yang anda masukan benar!");
     window.location.href = 'lupa_password.php';
    </script>
   <?php
  }
 }
?>