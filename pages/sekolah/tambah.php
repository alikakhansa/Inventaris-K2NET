<?php 
   @$PAGE = $_GET['aksi'];
   
   
    ?> 
<div class="page-wrapper">
<div class="content">
   <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="index.php">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Tambah Sekolah
   </ol>
   </li>
   <div class="m-t-20">
      <label class="mb-0">
         <b>
            <h4>Tambah Sekolah</h4>
         </b>
      </label>
      <div class="row">
      </div>
   </div>
   <!-- end page title end breadcrumb -->
   <form action="../pages/sekolah/proses_tambah.php" method="post">
      <div class="card-body">
       
         <input type="hidden" class="form-control"  id="id_sekolah" name="id_sekolah" value=" <?php echo autonumber("sekolah", "id_sekolah", 10, ""); ?>" required readonly>
         <br>
         <label class="mb-0"><b>Nama Sekolah</b></label>
         <input type="text" class="form-control" name="nama_sekolah" id="" required/>
         <br>
         <label class="mb-0"><b>Alamat</b></label>
         <input type="text" class="form-control"  id="alamat" name="alamat">
         <br>
         <label class="col-sm-2 col-form-label">&nbsp;</label>
         <div class="col-sm-10">
            <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
            <a href="../operator/index.php?page=barang" class="btn btn-warning">Kembali</a>
         </div>
      </div>
</div>
<!-- end col -->
</form>
<!-- End Footer -->
<!-- jQuery  -->
</body>
<!-- Mirrored from mannatthemes.com/aplomb/aplomb-cyan/horizontal/form-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 15:09:45 GMT -->
</html>