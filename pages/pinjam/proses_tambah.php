<?php
ob_start();
include '../../inc/koneksi.php';

$ID     	   		=$_POST['id_peminjaman'];
$NIS     	     	=$_POST['kode_alat'];
$KODE     	   		=$_POST['nama_alat'];
$NS     	   		=$_POST['nama_sekolah'];
$QYT 				=$_POST['stok_awal'];
$PINJAM				=$_POST['stok_akhir'];
$KEMBALI			=$_POST['alat_masuk'];
$AK			=$_POST['alat_keluar'];
$TGL			=$_POST['tanggal'];
$KET			=$_POST['keterangan'];


if ($ID==""  || 
	$NIS==""  || 
	$KODE==""||
	$NS==""||
	$QYT==""||
	$PINJAM==""||
	$KEMBALI==""||
	$AK==""||
	$TGL==""||
	$KET=="") {
?>

<div class='alert alert-danger' role='alert'>
    	<strong>error!</strong>A<a href="#" class="alert-link">Pastikan </a>Semua data terisi.
    	<button type="button" class="close" data-dismiss="alert" arial-label="close">
    		<span aria-hidden="true">&times;</span>
    	</button>
    </div>
<?php

	}
	else
	{
	$QUERY1=mysqli_query($koneksi,"INSERT INTO daftar_peminjaman SET 
	id_peminjaman	='$ID',
	kode_alat		='$NIS',
	nama_alat	='$KODE',
	nama_sekolah	='$NS',
	stok_awal	='$QYT',
	stok_akhir	='$PINJAM',
	alat_masuk	='$KEMBALI',
	alat_keluar	='$AK',
	tanggal	='$TGL',
	keterangan	='$KET'
	;")
		or die('Gagal Memasukan Data Baru'.mysqli_error($koneksi));
		

?>

	<div class='alert alert-success' role='alert'>
    	<strong>Peminjaman Berhasil</strong>
    	<h5>Dalam Waktu 3 Detik halaman akan di alihkan.</h5>
    	<button type="button" class="close" data-dismiss="alert" arial-label="close">
    		<span aria-hidden="true">&times;</span>
    	</button>
    </div>

<?php
if
	($QUERY1){
                    echo '<script>alert("Berhasil menambahkan data."); document.location="../../operator/index.php?page=pinjam";</script>';
                }else{
                    echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
                }

}
