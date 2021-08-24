<?php
include '../inc/koneksi.php';

$satu     = mysqli_real_escape_string($koneksi, @$_POST['kode_barang']);
$dua      = mysqli_real_escape_string($koneksi, @$_POST['nama_barang']);
$tiga     = mysqli_real_escape_string($koneksi, @$_POST['ket']);
$empat     = mysqli_real_escape_string($koneksi, @$_POST['qty']);


    if ($satu=="" || $dua=="" || $tiga=="" || $empat=="" ) 
    {
?>


		
<?php
}
else
{
	$UPDATE1 = mysqli_query($koneksi, "UPDATE daftar_barang SET
		nama_barang   ='$dua',
		ket   ='$tiga',
		qty ='$empat' WHERE daftar_barang.kode_barang='$satu';")
	  or die ("GAGAL GAIS".mysqli_error($koneksi));
	  }
	  ?>

<?php
if
	($UPDATE1){
                      echo '<script>alert("Berhasil mengedit data."); document.location="index.php?page=barang";</script>';
                }else{
                    echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
                }


?>