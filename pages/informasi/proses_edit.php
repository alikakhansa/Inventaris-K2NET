<?php
$nama_spp      = mysqli_real_escape_string($koneksi,$_POST['nama_spp']);
$spp 			= mysqli_real_escape_string($koneksi,$_POST['spp']);
$alamat_spp    = mysqli_real_escape_string($koneksi,$_POST['alamat_spp']);
$kec_spp      = mysqli_real_escape_string($koneksi,$_POST['kec_spp']);
$kab_spp      = mysqli_real_escape_string($koneksi,$_POST['kab_spp']);
$prov_spp      = mysqli_real_escape_string($koneksi,$_POST['prov_spp']);
$kode_pos_spp  = mysqli_real_escape_string($koneksi,$_POST['kode_pos_spp']);
$telp_spp      = mysqli_real_escape_string($koneksi,$_POST['telp_spp']);
$email_sppp     = mysqli_real_escape_string($koneksi,$_POST['email_sppp']);

if ($nama_spp == "" || $spp == "" || $alamat_spp == "" || $kec_spp == "" || $kab_spp =="" || $prov_spp == "" || $kode_pos_spp == "" || $telp_spp == "" || $email_sppp == "")
{

?>
<div class='alert alert-danger alert-dismissible fade show' role='alert'>
				<strong>ERROR !</strong>pastikan semua data terisi.
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			<span aria-hidden='true'>&times;</span>
	</button>
		   </div>
<?php
}
else 
{
	$query1 = mysqli_query($koneksi," UPDATE `tb_informasi` SET

	 `nama_spp`      = '$nama_spp',
	 `spp` = '$spp',
	 `alamat_spp`    = '$alamat_spp',
	 `kec_spp`       = '$kec_spp',
	 `kab_spp`       = '$kab_spp',
	 `prov_spp`      = '$prov_spp',
	 `kode_pos_spp`  = '$kode_pos_spp',
	 `telp_spp`      = '$telp_spp',
	 `email_sppp`     = '$email_sppp' WHERE `tb_informasi`.`id_informasi` = 1; ")
	  or die(mysqli_error($koneksi));
		
?>

<div class='alert alert-primary alert-dismissible fade show' role='alert'>
	 <i class='fa fa-check-circle'></i>
 <strong>UPDATE SUCCESS !</strong>
				<h5>dalam waktu 3 detik halaman dialihkan</h5>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			<span aria-hidden='true'>&times;</span>
	</button>
</div>
  <meta http-equiv='refresh' content='3; url=?page=informasi'>
  <?php
}
?>