<?php
include '../inc/koneksi.php';
$satu     = mysqli_real_escape_string($koneksi, @$_POST['nama_sekolah']);
$dua      = mysqli_real_escape_string($koneksi, @$_POST['alamat']);
$tiga     = mysqli_real_escape_string($koneksi, @$_POST['tanggal']);
$empat     = mysqli_real_escape_string($koneksi, @$_POST['kategori']);
$lima      = mysqli_real_escape_string($koneksi, @$_POST['jumlah_barang']);
$enam     = mysqli_real_escape_string($koneksi, @$_POST['keterangan']);





    if ($satu=="" || $dua=="" || $tiga=="" || $empat=="" || $lima=="" || $enam=="") 
    {
?>


		
<?php
}
else
{
	$UPDATE1 = mysqli_query($koneksi, "UPDATE sekolah SET
		 alamat   ='$dua',
		tanggal   ='$tiga',
        kategori   ='$empat',
		jumlah_barang   ='$lima',
		keterangan ='$enam' WHERE sekolah.nama_sekolah='$satu';")
	  or die ("GAGAL GAIS".mysqli_error($koneksi));
	  }
	  ?>

<?php
$tes = @$_GET['nama_sekolah'];
if
	($UPDATE1){
                      echo '<script>alert("Berhasil mengedit data."); document.location="index.php?page=view&nama_sekolah='.$tes.'";</script>';
                }else{
                    echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
                }


?>