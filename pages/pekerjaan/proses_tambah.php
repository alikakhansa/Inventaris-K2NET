<?php
include ("../../inc/koneksi.php");
     $satu     = $_POST['kode_pekerjaan'];
     $dua      = $_POST['nama_sekolah'];
     $tiga     = $_POST['nama_pekerjaan'];
     $empat    = $_POST['team'];
     $lima     = $_POST['tanggal'];
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
		$QUERY1 = mysqli_query($koneksi,"INSERT INTO daftar_pekerjaan SET
		kode_pekerjaan           ='$satu',
		nama_sekolah        ='$dua',
		nama_pekerjaan                   ='$tiga',
		team             ='$empat',
		tanggal                   ='$lima',
		keterangan                    ='$enam';")
		or die('Gagal Memasukan Data Baru'.mysqli_error($koneksi) );

		

		header('location:../../operator/index.php?page=pekerjaan');
	}
		?>
