<?php 
ob_start();
include '../../inc/koneksi.php';

mysqli_query($koneksi, "DELETE FROM view WHERE id_sekolah='$_GET[id_sekolah]'")
or die(mysqli_error($koneksi));
mysqli_query($koneksi, "DELETE FROM sekolah WHERE id_sekolah='$_GET[id_sekolah]'")
or die(mysqli_error($koneksi));
header('location:../../operator/index.php?page=view');
 ?>