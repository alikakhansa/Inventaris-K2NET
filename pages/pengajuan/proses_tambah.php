<?php
include ("../../inc/koneksi.php");
     $satu     = $_POST['kode_pengajuan'];
     $dua      = $_POST['tanggal'];
     $tiga     = $_POST['nama_barang'];
     $empat    = $_POST['nama_sekolah'];
     $lima     = $_POST['qty'];
     $enam     = $_POST['keterangan'];
 
     

if ($satu     =="" || 
	$dua      =="" || 
	$tiga     =="" || 
	$empat    =="" || 
	$lima     =="" || 
	$enam     =="") {
?>

<?php
	

}
else{
		$QUERY1 = mysqli_query($koneksi,"INSERT INTO daftar_pengajuan SET
		kode_pengajuan           ='$satu',
		tanggal        ='$dua',
		nama_barang                   ='$tiga',
		nama_sekolah             ='$empat',
		qty                   ='$lima',
		keterangan                    ='$enam';")
		or die('Gagal Memasukan Data Baru'.mysqli_error($koneksi) );

		

		header('location:../../operator/index.php?page=pengajuan');
	}
		?>
