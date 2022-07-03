<?php
include("../core/core.php");

if (isset($_GET)) {
  $sql = "SELECT * FROM user";
  $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));

  while ($user = mysqli_fetch_object($result)) {
    $users[] = $user;
  }

  header("Content-Type: application/json; charset=utf-8");
  echo json_encode($users[rand(0, count($users) - 1)]);
}