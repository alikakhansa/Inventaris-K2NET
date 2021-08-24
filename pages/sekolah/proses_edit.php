<?php
include '../inc/koneksi.php';

$satu     = mysqli_real_escape_string($koneksi, @$_POST['nama_sekolah']);
$dua      = mysqli_real_escape_string($koneksi, @$_POST['alamat']);



    if ($satu=="" || $dua=="" ) 
    {
?>


		
<?php
}
else
{
	$UPDATE1 = mysqli_query($koneksi, "UPDATE sekolah SET
		alamat   ='$dua'WHERE sekolah.nama_sekolah='$satu';")
	  or die ("GAGAL GAIS".mysqli_error($koneksi));
	  }
	  ?>

<?php
if
	($UPDATE1){
                      echo '<script>alert("Berhasil mengedit data."); document.location="index.php?page=sekolah";</script>';
                }else{
                    echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
                }


?>