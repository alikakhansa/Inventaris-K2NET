<?php
ob_start();
include '../../inc/koneksi.php';

$IDS            =$_POST['id_sekolah'];
$TGL            =$_POST['tanggal'];
$KAT          	=$_POST['kategori'];
$JML         	=$_POST['jumlah_barang'];
$KET          	=$_POST['keterangan'];



if ($IDS		=="" || 
	$TGL		=="" || 
	$KAT		=="" || 
	$JML		=="" || 
	$KET		=="") {


	echo"<script>

		alert('GAGAL');
	
		</script>";

	}else{
	

		$QUERY2=mysqli_query($koneksi,"INSERT INTO view SET
			id_sekolah         	='$IDS',
			tanggal         	='$TGL',
			kategori          	='$KAT',
			jumlah_barang       ='$JML',
			keterangan          ='$KET';")
		or die("Gagal memasukan data baru".mysqli_error($koneksi) );

		}

	echo"<script>

		alert('BERHASIL');
	
		</script>";

header('location:../../operator/index.php?page=view');

		?>
