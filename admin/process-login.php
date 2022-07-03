<?php
include '../core/core.php';

$username = (htmlentities($_POST['username']));
$password = (htmlentities(md5($_POST['password'])));

$query    = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
$runquery = $connect->query($query);

if($runquery->num_rows > 0){
	$data = mysqli_fetch_assoc($runquery);
	session_start();
	if($data['level']=="1"){
	$_SESSION['username'] = $username;
	header("Location: ../admin/page-index2.php");
} else if($data['level']=="2") {
	$_SESSION['username'] = $username;
	header("Location: ../pimpinan/page-index2.php");
} }else{
	echo "<script>alert('Username atau Kata Sandi Salah!');window.location.href='../admin/login.php';</script>";
}

?>
