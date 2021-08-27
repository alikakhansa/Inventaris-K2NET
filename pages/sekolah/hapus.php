<?php 

ob_start();
include '../../inc/koneksi.php';

$del = mysqli_query($koneksi,"DELETE FROM sekolah WHERE id_sekolah = '$_GET[id_sekolah]'")

or die(mysqli_error($koneksi));

if($del){
			echo '<script>alert("Berhasil menghapus data."); document.location="../../operator/index.php?page=sekolah";</script>';
		}else{
			echo '<script>alert("Gagal menghapus data."); document.location="../../operator/index.php?page=sekolah";</script>';
		}

 ?>