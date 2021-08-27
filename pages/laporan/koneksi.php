<?php 
$SERVER="localhost";
$USER="root";
$PASSWORD="";
$DATABASE="cbain";
$koneksi = mysqli_connect($SERVER,$USER,$PASSWORD,$DATABASE);

if(mysqli_connect_error()){
	echo "Koneksi database gagal".mysqli_connect_error();
 }
 ?>