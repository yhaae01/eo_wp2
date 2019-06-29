<html>
<head>
    
<!-- Script CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="../assets/css/user.css"/>
	<link href='../assets/img/logo.png' rel='shortcut icon'>
    <link rel="stylesheet" href="../assets/css/font-awesome-4.7.0/css/font-awesome.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Admin</title>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-default">
      <div class="container-fluid">
          <ul class="nav navbar-nav">
              <li class="active"><a href="menuadm.php">Beranda</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li><a href="logout.php" onclick="myFunction()" class="fa fa-sign-out">Logout</a></li>
          </ul>
      </div>
  </nav>

    <?php 
        session_start();
        if($_SESSION['status']!="login"){
            header("location:login.php?pesan=belum_login");
        }
    ?>

  <div class="container">
	  <div class="jumbotron text-center">
		  <p style="font-size: 50px;">Selamat Datang, <?php echo ucwords($_SESSION['nama_adm']); ?>!</p> 
	  </div>
  </div>

  <script>
  function myFunction() {
    alert("Berhasil Logout!");
  }
  </script>

<!--Script Javascript-->
<script type="text/javascript" src="../assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
</body>
</html>