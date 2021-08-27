<?php 
   @$PAGE = $_GET['aksi'];
   
   
    ?> 
<div class="page-wrapper">
<div class="content">
   <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="index.php">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Tambah View Sekolah
   </ol>
   </li>
   <div class="m-t-20">
      <label class="mb-0">
         <b>
            <h4>Tambah View</h4>
         </b>
      </label>
      <div class="row">
      </div>
   </div>
   <!-- end page title end breadcrumb -->
   <form action="../pages/pekerjaan/proses_tambah.php" method="post">
      <div class="card-body">
         
         <input type="hidden" class="form-control" name="kode_pekerjaan" id="" value=" <?php echo autonumber("daftar_pekerjaan", "kode_pekerjaan", 10, ""); ?>" required readonly>
         <br>

         <div class="form-group">
            <label><b> Nama (Sekolah)</label></b>
            <select class="select2 form-control mb-1 custom-select" style="width: 100%; height:36px;" name="nama_sekolah" id="nama_sekolah">
               <option value="" class="form-control">Please Select Nama Sekolah</option>
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
          <label class="mb-0"><b>Nama Pekerjaan</b></label>
         <input type="text" class="form-control" name="nama_pekerjaan" id="" required/>
         <br>
         <div class="form-group">
            <label><b> Team </label></b>
            <select class="select2 form-control mb-1 custom-select" style="width: 100%; height:36px;" name="team" id="team">
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
         <label class="mb-0"><b>Tanggal</b></label>
         <input type="date" class="form-control" name="tanggal" id="" required/>
         <br>
        
         <label class="mb-0"><b>Keterangan</b></label>
         <textarea type="text" class="form-control" name="keterangan" id="" required/></textarea>
         <br>
         <label class="col-sm-2 col-form-label">&nbsp;</label>
         <div class="col-sm-10">
            <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
            <a href="../operator/index.php?page=barang" class="btn btn-warning">Back</a>
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