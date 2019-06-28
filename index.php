<html>
<head>
    <title>Beranda</title>
    <!-- Link buat CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0/css/font-awesome.css">
	<link href='assets/img/logo.png' rel='shortcut icon'>
    <!-- Link buat Java Script -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <!-- Link meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
        if (isset($_GET['page'])) {
            $p = $_GET['page'];
            switch($p) {
                case 'beranda':
                    $p = "beranda";  
                    break;
                case 'kontak':
                    $p = "kontak";  
                    break;
                case 'tentang':
                    $p = "tentang";  
                    break;
                case 'testimoni':
                    $p = "testimoni";  
                    break;
                case 'galery':
                    $p = "galery";  
                    break;
                default:
                case 'login':
                    $p = "login";  
                    break;
                case 'daftar':
                    $p = "daftar";  
                    break;
                case 'lupa_pass':
                    $p = "lupa_pass";  
                    break;
                echo "<center><h3>Maaf. Halaman tidak ditemukan!</h3></center>";
                break;
            }
        }
    ?>
    <!-- Script Navbar -->
    <nav class="navbar navbar-default navbar navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
                <a class="navbar-brand" href="index.php">EO Yo.Lo</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="<?php if($p =="beranda" or $p=="") echo "active"; ?>"><a href="index.php?page=beranda">Beranda</a></li>
                    <li class="<?php if($p =="kontak") echo "active"; ?>"><a href="index.php?page=kontak">Kontak Kami</a></li>
                    <li class="<?php if($p =="tentang") echo "active"; ?>"><a href="index.php?page=tentang">Tentang Kami</a></li>
                    <li class="<?php if($p =="testimoni") echo "active"; ?>"><a href="index.php?page=testimoni">Testimoni</a></li>
                    <li class="<?php if($p =="galery") echo "active"; ?>"><a href="index.php?page=galery">Galeri</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php?page=login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="wrap">
        <?php
            if (isset($_GET['page'])) {
            $page = $_GET['page'];

            switch ($page) {
                case 'beranda':
                    include 'beranda.php';
                    break;
                case 'galery':
                    include 'galery.php';
                    break;
                case 'kontak':
                    include 'kontak.php';
                    break;
                case 'testimoni':
                    include 'testimoni.php';
                    break;
                case 'tentang':
                    include 'tentang.php';
                    break;
                case 'login':
                    include 'login.php';
                    break;
                case 'daftar':
                    include 'daftar.php';
                    break;
                case 'lupa_pass':
                    include 'lupa_password.php';
                    break;
                default:
                    echo "<center><h3>Maaf. Halaman tidak ditemukan!</h3></center>";
                    break;
            }
            }else{
                include 'beranda.php';
            }
        ?>
    </div>

    <!-- Script Footer -->
    <div class="footer" style="color:white;">
        <h4 class="text-center">Copyright &copy; 2019 Yo.Lo Event Organizer</h4>
    </div>
</body>
</html>