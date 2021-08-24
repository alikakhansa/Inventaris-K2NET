<?php
ob_start();
include ("../../inc/koneksi.php");
      
      $KODE      = $_POST['kode_barang'];
      $NAMA      = $_POST['nama_barang'];
	  $SA      = $_POST['stok_awal'];
      $ST      = $_POST['stok_akhir'];
	  $BA      = $_POST['b_masuk'];
      $BK      = $_POST['b_keluar'];
      $KET     	 = $_POST['ket'];
      $QTY     	 = $_POST['qty'];

if ($KODE=="" || $NAMA=="" || $SA=="" || $ST =="" || $BA=="" || $BK =="" || $KET =="" || $QTY =="") 
{
?>

<?php
	

}
else{
		$QUERY1=mysqli_query($koneksi, "INSERT INTO daftar_barang SET
		kode_barang      ='$KODE',
		nama_barang      ='$NAMA',
		stok_awal     ='$SA',
		stok_akhir      ='$ST',
		b_masuk      ='$BA',
		b_keluar      ='$BK',
		ket              ='$KET',
		qty              ='$QTY' ;")
		


		or die('Gagal Memasukan Data Baru'.mysqli_error($koneksi) );

		header('location:../../operator/index.php?page=barang');
	}
		?>


		


