<?php 
require 'connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Akun SIPengmas</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cube &mdash; Free Website Template, Free HTML5 Template by gettemplates.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="gettemplates.co" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,700" rel="stylesheet">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
<![endif]-->
</head>
<body>
    <div id="page">

        <nav class="gtco-nav" role="navigation">
            <div class="gtco-container">
                
                <div class="row">
                    <div class="col-sm-2 col-xs-12">
                        <div id="gtco-logo"><a href="index.html"><img src="images/logo.png" alt="Free HTML5 Website Template by GetTemplates.co"></a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li class="active"><a href="index.html">Home</a></li>
                            <li><a href="about.php">Informasi</a></li>
                            <li class="has-dropdown">
                                <a href="services.php">Kegiatan</a>
                                <ul class="dropdown">
                                    <li><a href="pengmas.php">Pengabdian Masyarakat</a></li>
                                    <li><a href="donasi.php">Donasi</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </nav>

        <header id="gtco-header" class="gtco-cover" role="banner">
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 text-left">
                        <div class="display-t">
                            <div class="display-tc">
                                <div class="row">
                                    <div class="col-md-5 text-center header-img">
                                        <img src="images/logo-hmi.png" alt="Free HTML5 Website Template by GetTemplates.co">
                                    </div>
                                    <div class="col-md-7 copy">
                                        <h1>Sistem Informasi Kegiatan Pengabdian Masyarakat dan Donasi</h1>
                                        <p>Daftarkan nama mu sekarang, dan berpartisipasilah dalam kegiatan pengmas dan donasi !</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div id="colorlib-contact">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-10 col-md-offset-1 animate-box">
                        <div class="header">
                            <h2>Pendaftaran</h2>
                        </div>
                        <form action="register.php" method="post">
                             <?php echo display_error(); ?>
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <label for="Nama">Nama</label>
                                    <input type="text" id="Nama" class="form-control mb" placeholder="Nama" name="nama">
                                </div>

                                <div class="col-md-6">
                                    <label for="kelamin">Jenis Kelamin</label>
                                    <select class="form-control" name="jk" required/>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12"> 
                                <label for="Telp">No. Telepon</label>
                                <input type="text" class="form-control" placeholder="Nomor Telepon Aktif" name="telepon">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="Alamat">Alamat</label>
                                <input type="text" class="form-control" placeholder="Alamat Saat Ini" name="alamat">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="Alamat">Angkatan</label>
                                <input type="text" class="form-control" placeholder="Tahun Masuk" name="angkatan">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="Alamat">NIM</label>
                                <input type="text" class="form-control" placeholder="NIM" name="username" pattern="(?=.*20)[0-9]{15}" title="Masukkan NIM Anda">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="Alamat">Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="email">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="Alamat">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password_1">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="Alamat">Konfirmasi Password</label>
                                <input type="password" class="form-control" placeholder="konfirmasi Password" name="password_2">
                            </div>
                        </div>

                        <div class="form-group text-center">
                         <button type="submit" class="btn" name="register_btn">Daftar</button>
                     </div>
                     <div class="form-group text-center">
                         Sudah Mendaftar? <a href="login.php">Masuk Disini</a>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div> 
</body>
<footer id="gtco-footer" class="gtco-section" role="contentinfo">
            <div class="gtco-container">
                <div class="row row-pb-md">
                    <div class="col-md-8 col-md-offset-2 gtco-cta text-center">
                        <h3>Himpunan Mahasiswa Teknik Informatika (HMI)</h3>
                        <p><a href="https://hmif.umm.ac.id/" class="btn btn-white btn-outline">Contact Us</a></p>
                    </div>
                </div>
                
            </div>
            
        </footer>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<!-- Main -->
<script src="js/main.js"></script>
</html>