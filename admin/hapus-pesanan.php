<?php

include("../core/core.php");

if(isset($_POST['hp'])){

  // ambil data dari formulir
  $id = $_POST['id'];

  // buat query hapus
  $sql = "DELETE FROM verifikasi WHERE id = $id";
  $query = mysqli_query($connect, $sql)or die(mysqli_error($connect));

  // apakah query hapus berhasil?
  if( $query ){
    header('Location: ../admin/page-index2.php#verifikasi');
  } else {
    die("gagal menghapus...");
  }

} else {
  die("akses dilarang...");
}

?>
