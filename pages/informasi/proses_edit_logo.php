<?php
$FOTO   = @$_FILES['foto']['tmp_name'];
$TARGET = '../pages/images/';
$GAMBAR = @$_FILES['foto']['name'];

if ($GAMBAR=="") 
{
?>
	<div class='alert alert-danger alert-dismissible fade show' role='alert'>
		<div class='alert-icon'>
		   <i class='fas fa-check-circle'></i>
	         </div>
			   <strong>ERROR !</strong>pastikansemua data terisi
	         <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		   <span aria-hidden='true'>
		<i class='fas fa-frown'></i>

	</span>
	</button>
	</div>
<?php
} 
else 
{

$UPDATE_LOGO = move_uploaded_file($FOTO,$TARGET.$GAMBAR);

if ($UPDATE_LOGO) {
$QUERY = mysqli_query($koneksi, "UPDATE `tb_informasi` SET logo_spp='$GAMBAR' WHERE id_informasi='1' ") or die (mysqli_error());} 
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