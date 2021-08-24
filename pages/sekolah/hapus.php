<?php 

ob_start();
include '../../inc/koneksi.php';

$del = mysqli_query($koneksi,"DELETE FROM sekolah WHERE nama_sekolah = '$_GET[nama_sekolah]'")

or die(mysqli_error($koneksi));

if($del){
			echo '<script>alert("Berhasil menghapus data."); document.location="../../operator/index.php?page=sekolah";</script>';
		}else{
			echo '<script>alert("Gagal menghapus data."); document.location="../../operator/index.php?page=sekolah";</script>';
		}

 ?>