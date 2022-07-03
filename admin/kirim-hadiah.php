<?php
include("../core/core.php");


if (isset($_POST)) {
  echo $_POST['idUser'];
  echo $_POST['idBarangHadiah'];
  echo $_POST['isKirimEmail'];

  $query = "INSERT INTO undian(id_hadiah, id_user) VALUES($_POST[idBarangHadiah], $_POST[idUser])";

  $sql = mysqli_query($connect, $query);
}