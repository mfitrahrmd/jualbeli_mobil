<?php
error_reporting(0);
session_start();
include '../core/core.php';

if(!isset($_SESSION['username'])) {
  header("Location: ../user/login.php?access_denied");
}


?>
<div id="ajax-page" class="ajax-page-content">
  <div class="ajax-page-wrapper">

    <div class="ajax-page-title">
      <h1>2016 - HONDA - ACCORD VTI 2.4 A/T</h1>
    </div>

    <div class="row">
      <div class="col-sm-7 col-md-7 portfolio-block">
        <div class="owl-carousel portfolio-page-carousel">
          <div class="item">
            <img src="../images/portfolio/2.jpg" alt="">
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
          <input type="hidden" name="name" value="2016 - HONDA - ACCORD VTI 2.4 A/T">
          <input type="hidden" name="waktu" value="2 Hari">
          <input type="hidden" name="metode" value="Cash">
          <input type="hidden" name="jenis" value="Cash">
          <input type="hidden" name="qty" value="1">
          <input type="hidden" name="kode_barang" value="ACCORD">
          <li><p><i class="fa fa-address-card"></i>Nama Resmi Produk: 2016 - HONDA - ACCORD VTI 2.4 A/T</p></li>
          <li><p><i class="fa fa-money"></i>Harga: Rp 500.000.000</p></li>
          <li><p><i class="fa fa-car"></i>Kategori: Mobil Honda</p></li>
          <li><p><i class="fa fa-check-square-o"></i>Stok: Ready</p></li>
        </ul>

       
        <!-- /Project Description -->

        <input type="submit" class="button btn-send" name="cash" value="Beli Cash" >
        <input type="button" class="button btn-send" value="Beli Kredit" onclick="window.location.href='page_pembayaran-credit-2.php'">
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
