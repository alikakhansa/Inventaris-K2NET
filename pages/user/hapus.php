<?php 
ob_start();
include '../../inc/koneksi.php';

mysqli_query($koneksi, "DELETE FROM login WHERE id_login='$_GET[id_login]'")
or die(mysqli_error($koneksi));

header('location:../../operator/index.php?page=user');
 ?>

 