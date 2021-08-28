<?php
include '../../inc/koneksi.php';

$satu     = mysqli_real_escape_string($koneksi, $_POST['kode_pekerjaan']);
$dua      = mysqli_real_escape_string($koneksi, $_POST['nama_sekolah']);
$tiga     = mysqli_real_escape_string($koneksi, $_POST['nama_pekerjaan']);
$empat     = mysqli_real_escape_string($koneksi, $_POST['team']);
$lima      = mysqli_real_escape_string($koneksi, $_POST['tanggal']);
$enam    = mysqli_real_escape_string($koneksi, $_POST['keterangan']);




  

    if ($satu     =="" || 
	$dua      =="" || 
	$tiga     =="" || 
	$empat    =="" || 
	$lima     =="" || 
	$enam     =="") {
		?>

<div class='alert alert-primary alert-dismissible fade show' role='alert'>
	 <i class='fas fa-check-circle'></i>
 <strong>UPDATE GAGAL !</strong>
				
			
			<span aria-hidden='true'>&times;</span>
	</button>
</div>
<?php
}
else
{
	$UPDATE1 = mysqli_query($koneksi, "UPDATE daftar_pekerjaan SET
		nama_sekolah      ='$dua',
		nama_pekerjaan                 ='$tiga',
		team           ='$empat',
		tanggal                  ='$lima',
		keterangan                 ='$enam' WHERE daftar_pekerjaan.kode_pekerjaan='$satu';")
	  or die ("GAGAL GAIS".mysqli_error($koneksi));
	
 ?>
	

<div class='alert alert-primary alert-dismissible fade show' role='alert'>
	 <i class='fas fa-check-circle'></i>
				
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			<span aria-hidden='true'>&times;</span>
	</button>
</div>
 
  <?php
   header('location:../../operator/index.php?page=pekerjaan');
}
?>