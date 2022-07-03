<?php

include '../core/core.php';

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['edit_user'])){

  // ambil data dari formulir
  $id = $_POST['id'];
  $nama_produk = $_POST['nama'];
  $harga = $_POST['alamat'];
  $kategori = $_POST['email'];
  $stok = $_POST['phone'];
  $stok1 = md5($_POST['password']);
  // buat query update
  $sql = "UPDATE user SET nama='$nama_produk', alamat='$harga', email='$kategori', phone='$stok', password='$stok1' WHERE id=$id";
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
