<?php
error_reporting(0);
session_start();
include 'core/core.php';

//if(!isset($_SESSION['username'])) {
 // header("Location: ../user/login.php?access_denied");
//}

$w=cari($connect,"select * from barang where id='$_GET[kd]'");

?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Showroom R&R Auto</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="Unique - Responsive vCard Template" />
  <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Unique, portfolio" />
  <meta name="author" content="lmtheme" />
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  <link rel="stylesheet" href="css/normalize.css" type="text/css">
  <link rel="stylesheet" href="css/animate.css" type="text/css">
  <link rel="stylesheet" href="css/transition-animations.css" type="text/css">
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css" type="text/css">
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
  <link rel="stylesheet" href="css/main-red.css" type="text/css">

  <!-- This styles needs for demo -->
  <link rel="stylesheet" href="preview/lmpixels-demo-panel.css" type="text/css">
  <!-- /This styles needs for demo -->

  <link rel="stylesheet" href="admin/css/bootstrap.min.css">
  <link rel="stylesheet" href="admin/css/icons.css">
  <link rel="stylesheet" href="admin/css/icons.css">
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-96534204-1', 'auto');
  ga('send', 'pageview');

  </script>

  <script src="js/jquery-2.1.3.min.js"></script>
  <script src="js/modernizr.custom.js"></script>
</head>
<div id="ajax-page" class="ajax-page-content">
  <div class="ajax-page-wrapper">

    <div class="ajax-page-title">
      <h1><?=$w['tahun']?> -  <?=$w['nama_produk']?></h1>
    </div>

    <div class="row">
      <div class="col-sm-7 col-md-7 portfolio-block">
        <div class=" l">
          <div class=" ">
            
          </div>
        </div>
<img src="images/portfolio/<?=$w['gambar']?>" > 
 
      </div>

      <div class="col-sm-5 col-md-5 portfolio-block">
        <!-- Project Description -->
        <div class="block-title">
          <h3>Descriptions</h3>
        </div>


        <form class="" action="user/login.php" method="post">
          <ul class="project-general-info">
            <input type="hidden" name="nm" value="<?php echo $_SESSION['username']; ?>">
            <input type="hidden" name="st" value="Menunggu Persetujuan">
            <input type="hidden" name="name" value="<?=$w['nama_produk']?>">
            <input type="hidden" name="waktu" value="2 Hari">
            <input type="hidden" name="metode" value="Cash">
            <input type="hidden" name="jenis" value="Cash">
            <input type="hidden" name="qty" value="1">
            <input type="hidden" name="kode_barang" value="<?=$w['kode_barang']?>">
            <li><p><i class="fa fa-address-card"></i> Nama Resmi Produk: <?=$w['nama_produk']?></p></li>
            <li><p><i class="fa fa-money"></i>Harga: Rp <?=$w['harga']?></p></li>
            <li><p><i class="fa fa-car"></i>Kategori: <?=$w['kategori']?></p></li>
            <li><p><i class="fa fa-check-square-o"></i>Stok: <?=$w['stok']?></p></li>
          </ul>

          <p class="text-justify"><?=$w['deskripsi']?>.</p>
          <!-- /Project Description -->

          <input type="submit" class="button btn-send" name="cash" value="Beli Cash" >
          <!-- onclick="window.location.href='page_pembayaran-cash.php'" -->
         <!-- <input type="button" class="button btn-send" value="Beli Kredit" onclick="window.location.href='page_pembayaran-credit-1.php'">-->
        </form>

        <!-- Share Buttons -->
        <div class="btn-group share-buttons">
          <div class="block-title">
            <h3>Share</h3>
          </div>
        </div>

        <br>
          <a href="www.facebook.com" class="btn"><i class="fa fa-facebook"></i> </a>
          <a class="tip social-button" href="www.google.com"><i class="fa fa-google-plus"></i></a>
        </br>
        <!-- /Share Buttons -->
      </div>
    </div>
  </div>
</div>
