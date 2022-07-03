<?php

include '../core/core.php';

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['edit_brg'])){

  // ambil data dari formulir
  $id = $_POST['id'];
  $nama_produk = $_POST['nm'];
  $harga = $_POST['hrg'];
  $kategori = $_POST['ktg'];
  $stok = $_POST['stk'];

  // buat query update
  $sql = "UPDATE barang SET nama_produk='$nama_produk', harga='$harga', kategori='$kategori', stok='$stok', potongan='$_POST[potongan]', kode_barang='$_POST[kb]',deskripsi='$_POST[deskripsi]' WHERE id=$id";
  $query = mysqli_query($connect, $sql)or die(mysqli_error($connect));

  // apakah query update berhasil?
  if( $query ) {
    // kalau berhasil alihkan ke halaman page-sppd.php
    header('Location:../admin/page-index2.php#barang');
  } else {
    // kalau gagal tampilkan pesan
    die("Gagal menyimpan perubahan...");
  }

} else {
  die("Akses dilarang...");
}

?>
