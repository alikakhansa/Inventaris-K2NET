<?php
   ob_start();
   include '../../inc/koneksi.php';
   
   
   	$NO     		=$_POST['id_sekolah'];
   	$NAMA     		=$_POST['nama_sekolah'];
   	$ALAMAT     	=$_POST['alamat'];
   
   if (
   $NO 				=="" ||
   $NAMA 			=="" || 
   $ALAMAT  		==""  ) {
   
   }else{
   		$QUERY1=mysqli_query($koneksi,"INSERT INTO sekolah SET
   		id_sekolah          ='$NO',
   		nama_sekolah        ='$NAMA',
   		alamat          	='$ALAMAT';")
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