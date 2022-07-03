<?php
include("../core/core.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['tbh_brg'])){

  // ambil data dari formulir
  $nm = $_POST['nm'];
  $hrg = $_POST['hrg'];
  $ktg = $_POST['ktg'];
  $stk = $_POST['stk'];
  $kode_barang = $_POST['kode_barang'];

  // buat query
  
  $g=masukGambar2("foto");
  $sql = "INSERT INTO barang set  nama_produk= '$nm', 
								  harga='$hrg', 
								  kategori='$ktg', 
								  stok='$stk',
								  kode_barang= '$kode_barang',
								  tahun='$_POST[tahun]',
								  gambar='$g',
								  deskripsi='$_POST[deskripsi]',
								  potongan='$_POST[potongan]'
								  ";
  $query = mysqli_query($connect, $sql)or die(mysqli_error($connect));

  // apakah query simpan berhasil?
  if( $query ) {
    header('location: ../admin/page-index2.php#barang');
    // echo "Sukses";
  } else {
    alert("Hello! Maaf! Barang tidak dapat ditambah!");
    // echo "Gagal";
  }

} else {
  die("Akses dilarang...");
}
 function masukGambar2($nama){
 											$fileName = $_FILES[$nama]['name'];
											$fileSize = $_FILES[$nama]['size'];
											$fileError = $_FILES[$nama]['error'];
											if($fileSize > 0 || $fileError == 0){
											$move = move_uploaded_file($_FILES[$nama]['tmp_name'], '../images/portfolio/'.$fileName);}
											
											$hasil="$fileName" ;
											return $hasil;
 }
?>
