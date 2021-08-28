<?php
ob_start();
include '../../inc/koneksi.php';


$ID_KEMBALI			=$_POST['id_pengembalian'];
$ID     	   		=$_POST['id_peminjaman'];
$NIS     	     	=$_POST['nama_sekolah'];
$KODE     	   		=$_POST['kode_alat'];
$TGL     	   		=$_POST['tanggal_kembali'];
$status				=$_POST['status'];

if ($ID_KEMBALI==""  ||
	$ID==""  || 
	$NIS==""  ||
	$KODE==""|| 
	$TGL==""|| 
	$status== 1 ) {
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
	$QUERY1=mysqli_query($koneksi,"INSERT INTO daftar_pengembalian SET
	id_pengembalian		='$ID_KEMBALI',	 
	id_peminjaman	='$ID',
	nama_sekolah		='$NIS',
	kode_alat	='$KODE',
	tanggal_kembali	='$TGL',
	status			='$status'
	;")
		or die('Gagal Memasukan Data Baru'.mysqli_error($koneksi));
		
	$QUERY2=mysqli_query($koneksi, "UPDATE daftar_pengembalian SET
		STATUS = '1'
		")
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
                    echo '<script>alert("Berhasil Mengembalikan barang."); document.location="../../operator/index.php?page=kembali";</script>';
                }else{
                    echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
                }

}
