<?php
// definisikan koneksi ke database
$server = "localhost";
$username = "root";
$password = "";
$database = "inventaris_k2net";

$koneksi = mysqli_connect($server,$username,$password,$database);
// Check koneksi
if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>