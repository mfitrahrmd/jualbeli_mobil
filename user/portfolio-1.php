<?php
error_reporting(0);
session_start();
include '../core/core.php';

//if(!isset($_SESSION['username'])) {
 // header("Location: ../user/login.php?access_denied");
//}


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
  <link rel="stylesheet" href="../css/bootstrap.css" type="text/css">
  <link rel="stylesheet" href="../css/normalize.css" type="text/css">
  <link rel="stylesheet" href="../css/animate.css" type="text/css">
  <link rel="stylesheet" href="../css/transition-animations.css" type="text/css">
  <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css" type="text/css">
  <link rel="stylesheet" href="../css/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">
  <link rel="stylesheet" href="../css/main-red.css" type="text/css">

  <!-- This styles needs for demo -->
  <link rel="stylesheet" href="../preview/lmpixels-demo-panel.css" type="text/css">
  <!-- /This styles needs for demo -->

  <link rel="stylesheet" href="../admin/css/bootstrap.min.css">
  <link rel="stylesheet" href="../admin/css/icons.css">
  <link rel="stylesheet" href="../admin/css/icons.css">
<div id="ajax-page" class="ajax-page-content">
  <div class="ajax-page-wrapper">
	<?php
					$r=mysqli_query($connect,"SELECT * from barang where id='$_GET[id]'");
					while($w=mysqli_fetch_array($r)){
				?>
            <div class="ajax-page-title-left ">
    <button type='button' value='Kembali' onclick='history.back(-1)'> < </button>

    </div>  
    <div class="ajax-page-title">
   
      <h1><?=$w['nama_produk']?> - <?=$w['tahun']?> </h1>
    </div>

    <div class="row">
      <div class="col-sm-7 col-md-7 portfolio-block">
        <div class="owl-carousel portfolio-page-carousel">
          <div class="item">
          <img src="../images/portfolio/<?=$w['gambar']?>" alt="">
          </div>
        </div>

        <script type="text/javascript">
        function customAjaxScroll() {
          var windowWidth = $(window).width();
          if (windowWidth > 991) {
            // Custom Ajax Page Scroll
            $("#ajax-page").mCustomScrollbar({
              scrollInertia: 8,
              documentTouchScroll: false
            });
          } else {
            $("#ajax-page").mCustomScrollbar('destroy');
          }
        }

        jQuery(document).ready(function($){

          // Ajax Loaded Page Scroll
          customAjaxScroll();


          $('.portfolio-page-carousel').owlCarousel({
            smartSpeed:1200,
            items: 1,
            loop: true,
            dots: true,
            nav: true,
            navText: false,
            margin: 10
          });

        });

        jQuery(window).on('resize', function() {
          customAjaxScroll();
        });
        </script>
      </div>

      <div class="col-sm-5 col-md-5 portfolio-block">
        <!-- Project Description -->
        <div class="block-title">
          <h3>Description</h3>
        </div>


        <form class="" action="../user/insert-pesanan-cash.php" method="post">
          <ul class="project-general-info">
            <input type="hidden" name="nm" value="<?php echo $_SESSION['username']; ?>">
            <input type="hidden" name="st" value="Menunggu Persetujuan">
            <input type="hidden" name="name" value="<?=$w['nama_produk']?>">
            <input type="hidden" name="waktu" value="2 Hari">
            <input type="hidden" name="metode" value="Cash">
            <input type="hidden" name="qty" value="1">
            <input type="hidden" name="kode_barang" value="<?=$w['kode_barang']?>">
            <input type="hidden" name="harga" value="<?=$w['harga']?>">
            <li><p><i class="fa fa-address-card"></i> Nama Resmi Produk: <?=$w['nama_produk']?></p></li>
            <li><p><i class="fa fa-money"></i>Harga: Rp <?=$w['harga']?></p></li>
            <li><p><i class="fa fa-car"></i>Kategori: <?=$w['kategori']?></p></li>
            <li><p><i class="fa fa-check-square-o"></i>Stok: <?=$w['stok']?></p></li>
            <li><p><i class="fa fa-check-square-o"></i>Deskripsi: <?=$w['deskripsi']?></p></li>
          </ul>

        
          <!-- /Project Description -->
          <?php
          if($w['stok'] > 0) {
          ?>
          <input type="submit" class="button btn-send" name="cash" value="Beli Cash" >
          <?php
          } else {
            ?>            
            <input type="submit" class="button btn-send" name="cash" value="Stok Habis" disabled style="cursor: not-allowed; opacity: .5;">
          <?php
          }
          ?>
          <!-- onclick="window.location.href='page_pembayaran-cash.php'" -->
          <?php
          if($w['stok'] > 0) {
            ?>
          <input type="button" class="button btn-send" value="Beli Kredit" onclick="window.location.href='page_pembayaran-credit-1.php?id=<?=$_GET[id]?>'">
          <?php
          }
          ?>
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
<?php } 
						  

						  ?>