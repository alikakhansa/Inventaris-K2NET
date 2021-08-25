<?php 
$SERVER="localhost";
$USER="root";
$PASSWORD="";
$DATABASE="inventaris_k2net";
$koneksi = mysqli_connect($SERVER,$USER,$PASSWORD,$DATABASE);

if(mysqli_connect_error()){
	echo "Koneksi database gagal".mysqli_connect_error();
 }
 ?>