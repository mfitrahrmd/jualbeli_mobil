<?php

$host  = 'localhost';
$user  = 'root';
$pass  = '';
$db    = 's1creative_2021_mobil';

$connect = new mysqli($host, $user, $pass, $db);
if($connect->connect_error){
	echo 'Terjadi Kesalahan';
}


function PesanMasuk($url,$n){
		echo "
					<script>       
							alert('    $n ' );
							setTimeout(function(){location.href='$url', 5000} );           
					</script>
		";
}

function cari($connect,$sql){
		$r=mysqli_query($connect,$sql);
		return $w=mysqli_fetch_array($r);
}
 function masukGambar($nama){
 											$fileName = $_FILES[$nama]['name'];
											$fileSize = $_FILES[$nama]['size'];
											$fileError = $_FILES[$nama]['error'];
											if($fileSize > 0 || $fileError == 0){
											$move = move_uploaded_file($_FILES[$nama]['tmp_name'], 'images/'.$fileName);}
											
											$hasil="$fileName" ;
											return $hasil;
 }