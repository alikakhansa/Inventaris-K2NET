<?php 

ob_start();
include '../../inc/koneksi.php';

$del = mysqli_query($koneksi,"DELETE FROM daftar_pengajuan WHERE kode_pengajuan = '$_GET[kode_pengajuan]'")

or die(mysqli_error($koneksi));

if($del){
			echo '<script>alert("Berhasil menghapus data."); document.location="../../operator/index.php?page=pengajuan";</script>';
		}else{
			echo '<script>alert("Gagal menghapus data."); document.location="../../operator/index.php?page=pengajuan";</script>';
		}

 ?>