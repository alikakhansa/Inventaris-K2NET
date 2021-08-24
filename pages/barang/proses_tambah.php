<?php
ob_start();
include ("../../inc/koneksi.php");
      
      $KODE      = $_POST['kode_barang'];
      $NAMA      = $_POST['nama_barang'];
      $KET     	 = $_POST['ket'];
      $QTY     	 = $_POST['qty'];

if ($KODE=="" || $NAMA=="" || $KET =="" || $QTY =="") 
{
?>

<?php
	

}
else{
		$QUERY1=mysqli_query($koneksi, "INSERT INTO daftar_barang SET
		kode_barang      ='$KODE',
		nama_barang      ='$NAMA',
		ket              ='$KET',
		qty              ='$QTY' ;")
		or die('Gagal Memasukan Data Baru'.mysqli_error($koneksi) );

		header('location:../../operator/index.php?page=barang');
	}
		?>


