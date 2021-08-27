<?php 

ob_start();
include '../../inc/koneksi.php';

$del = mysqli_query($koneksi,"DELETE FROM daftar_pekerjaan WHERE kode_pekerjaan = '$_GET[kode_pekerjaan]'")

or die(mysqli_error($koneksi));

if($del){
			echo '<script>alert("Berhasil menghapus data."); document.location="../../operator/index.php?page=pekerjaan";</script>';
		}else{
			echo '<script>alert("Gagal menghapus data."); document.location="../../operator/index.php?page=pekerjaan";</script>';
		}

 ?>