<div class="page-wrapper">
<div class="content">
<ol class="breadcrumb">
   <li class="breadcrumb-item">
      <a href="index.php">Dashboard</a>
   </li>
   <li class="breadcrumb-item active">Edit Sekolah
</ol>
</li>
<div class="m-t-20">
   <h4>Edit Sekolah</h4>
</div>
<div class="row">
   <div class="page-title-box">
      <div class="card m-b-30">
      </div>
   </div>
</div>
<?php
   if (@$_POST['edit']){ 
     include "proses_edit.php";
   }
   ?>
<form  action="" role="form" method="POST" >
<?php 
   $ID = $_GET['id_sekolah'];
   $EDIT ="SELECT * FROM sekolah WHERE sekolah.id_sekolah='$ID' ";
   $HASILEDIT=@mysqli_query($koneksi,$EDIT);
   while ($_POST=@mysqli_fetch_array($HASILEDIT)) {
    
   
       $kode_barang     = $_POST['id_sekolah'];
       $nama_barang     = $_POST['nama_sekolah'];
       $alamat       = $_POST['alamat'];
      
   
   }
   ?>
<div class="form-group">
   <label>ID</label>
   <input type="text" class="form-control" id="id_sekolah" name="id_sekolah" value="<?php echo $kode_barang; ?>" required readonly>
</div>
<div class="form-group">
   <label for="text">NAMA SEKOLAH</label>
   <input type="text" class="form-control" name="nama_sekolah" value="<?php echo $nama_barang; ?>">
</div>
<div class="form-group">
   <label for="text">ALAMAT</label>
   <input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>" required >
</div>
<div class="box-footer">
   <button type="submit" name="edit" class="btn btn-primary" value="edit">Simpan</button>
   <a href="../operator/index.php?page=sekolah" class="btn btn-warning">Kembali</a>
</div>