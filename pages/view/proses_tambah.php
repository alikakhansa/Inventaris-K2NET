<?php
ob_start();
include ("../../inc/koneksi.php");
      
      $KODE      = $_POST['tanggal'];
      $NAMA      = $_POST['kategori'];
	  $SA      = $_POST['jumlah_barang'];
      $ST      = $_POST['keterangan'];
	 

if ($KODE=="" || $NAMA=="" || $SA=="" || $ST =="") 
{
?>

<?php
	

}
else{
		$QUERY1=mysqli_query($koneksi, "INSERT INTO sekolah SET
		tanggal      ='$KODE',
		kategori      ='$NAMA',
		jumlah_barang     ='$SA',
		keterangan              ='$ST' ;")
		


		or die('Gagal Memasukan Data Baru'.mysqli_error($koneksi) );

		header('location:../../operator/index.php?page=view');
	}
		?>


		


