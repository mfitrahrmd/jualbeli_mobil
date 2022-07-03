<?php
include '../core/core.php';

if (isset($_POST)) {
?>
<table id=customers>
  <tr>
    <th>Nama Produk </th>
    <th>Harga </th>
    <th>Kategori </th>
    <th>Tipe </th>
    <th>Tahun Penjualan </th>
  </tr>

  <?php
    $year = $_POST['year'];
    $sql = "SELECT b.nama_produk, b.harga, b.kategori, b.tipe, j.Tgl AS Tgl FROM barang b RIGHT JOIN jual j USING(kode_barang) WHERE YEAR(Tgl) = $year";
    $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
    while ($w = mysqli_fetch_array($result)) {
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
</table>
<?php
}
?>