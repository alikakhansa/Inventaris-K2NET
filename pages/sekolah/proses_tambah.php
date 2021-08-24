<?php
ob_start();
include '../../inc/koneksi.php';


	$NO     	=$_POST['no'];
	$TGL     	=$_POST['tanggal'];
	$NAMA     	=$_POST['nama_sekolah'];
	$ALAMAT     	=$_POST['alamat'];
	$KATEGORI     	=$_POST['kategori'];
	$JML     	=$_POST['jumlah_barang'];
		$KET     	=$_POST['keterangan'];


                                            

if ($NO=="" ||
$TGL=="" ||
$NAMA=="" || 
$ALAMAT=="" ||
$KATEGORI=="" ||
$JML=="" ||
	$KET=="" ) {



	}else{
		$QUERY1=mysqli_query($koneksi,"INSERT INTO sekolah SET
		no          ='$NO',
		tanggal          ='$TGL',
		nama_sekolah          ='$NAMA',
		alamat          ='$ALAMAT',
		kategori          ='$KATEGORI',
		jumlah_barang          ='$JML',
		keterangan           ='$KET';")
		or die('Gagal Memasukan Data Baru'.mysqli_error($koneksi) );

		}


?>
<?php
if
	($QUERY1){
                    echo '<script>alert("Berhasil menambahkan data."); document.location="../../operator/index.php?page=sekolah";</script>';
                }else{
                    echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
                }


?>