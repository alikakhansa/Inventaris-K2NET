<div class="page-wrapper">
            <div class="content">
                <div class="row">
            <div class="card-body table-responsive">
            
<?php 
  $ID = $_GET['id'];
  $EDIT ="SELECT * FROM daftar_pekerjaan WHERE daftar_pekerjaan.kode_pekerjaan='$ID' ";
  $HASILEDIT=mysqli_query($koneksi,$EDIT);
  while ($ROW=mysqli_fetch_array($HASILEDIT)) {
   
     $KODE      = $ROW['kode_pekerjaan'];
     $TGL       = $ROW['nama_sekolah'];
     $ALAMAT    = $ROW['nama_pekerjaan'];
     $TELP      = $ROW['team'];
     $KELUHAN   = $ROW['tanggal'];
     $DIAGNOSA  = $ROW['keterangan'];

   }
  ?>

  <form  action="../pages/pekerjaan/proses_edit.php" role="form" method="POST" >

             <div class="box-body">
 

<div class="page-title-right">
   <ol class="breadcrumb m-0">
      <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
      <li class="breadcrumb-item active">Edit Data Pekerjaan</li>
   </ol>
</div>
<br>
 <div class="box box-primary">

            <div class="box-header with-border">
              <h5>Edit Data Pekerjaan</h5>
              <hr>
              </div>
            </div>
             
              <?php
if (@$_POST['edit']){ 
  include "proses_edit.php";
}
  ?>
            
                <div class="form-group">
                  <input type="hidden" class="form-control" id="kode_pekerjaan" name="kode_pekerjaan" value="<?php echo $KODE; ?>" placeholder="" required readonly>
                </div>

          

            
                <div class="form-group">
                <label>Nama Sekolah</label>
                <select class="form-control select2" style="width: 100%;" name="nama_sekolah" value="<?php echo $TGL; ?>>
                  <option selected="selected">Please Select Nama Sekolah</option>
                <?php
                  $query = mysqli_query($koneksi,"SELECT * FROM sekolah group by nama_sekolah");
                  while ($row = mysqli_fetch_array($query)) {
                  ?>
               <option id="nama_sekolah" value="<?php echo $row['nama_sekolah']; ?>">
                  <?php echo $row['nama_sekolah']; ?> 
               </option>
               <?php
                  }
                   ?>
                 </select>
              </div>

              <div class="form-group">
                  <label for="text">Nama Pekerjaan </label>
                  <input type="text" class="form-control" name="nama_pekerjaan" value="<?php echo $ALAMAT; ?>" required>
                </div>
         <div class="form-group">
            <label><b> Team </label></b>
            <select class="select2 form-control mb-1 custom-select" style="width: 100%; height:36px;" name="team" id="team" value="<?php echo $TELP; ?>>
               <option value="" class="form-control">Please Select Team</option>
               <?php
                  $query = mysqli_query($koneksi,"SELECT * FROM login group by team");
                  while ($row = mysqli_fetch_array($query)) {
                  ?>
               <option id="team" value="<?php echo $row['team']; ?>">
                  <?php echo $row['team']; ?> 
               </option>
               <?php
                  }
                   ?>
            </select>
         </div>


            
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal</label>
                  <input type="text" class="form-control" name="tanggal" value="<?php echo $KELUHAN; ?>" placeholder="" required>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Keterangan</label>
                  <input type="text" class="form-control" name="keterangan" value="<?php echo $DIAGNOSA; ?>" placeholder="" required>
                </div>

            
               
              
              <div class="box-footer">
                <button type="submit" name="edit" class="btn btn-primary" value="edit">Edit</button>
                <a href="../operator/index.php?page=pekerjaan" class="btn btn-danger">Kembali</a>
              </div>


</form>
</div>
</div>
