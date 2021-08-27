<?php
   include '../inc/koneksi.php';
   $tiga     = mysqli_real_escape_string($koneksi, @$_POST['id_sekolah']);
   $satu     = mysqli_real_escape_string($koneksi, @$_POST['nama_sekolah']);
   $dua      = mysqli_real_escape_string($koneksi, @$_POST['alamat']);
   
   
   
       if ($satu=="" || $dua=="" || $tiga=="") 
       {
   ?>
<?php
   }
   else
   {
   	$UPDATE1 = mysqli_query($koneksi, "UPDATE sekolah SET
   		nama_sekolah   ='$satu',
   		alamat   ='$dua' WHERE sekolah.id_sekolah='$tiga';")
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