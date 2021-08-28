
        <script language="javascript"><!-- 
function cekform(){
    //ini untuk ngecek formnya (semua form tidak boleh kosong)
   if(document.autoSumForm.id_kembali.value==""){
        alert('ID Kembali Harus Diisi');
        document.autoSumForm.kode_barang.focus();
        return false;
    } else if(document.autoSumForm.id_inventaris.value==""){
        alert('Id_inventaris Konsumen Harus Diisi');
        document.autoSumForm.nama.focus();
        return false;
    }else {
        return true;
    }
}
</script>

<div class="page-wrapper">
            <div class="content">
                <div class="row">
            <div class="card-body table-responsive">
</div>
</div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-10">
                <div class="card m-b-30">
                 <div class="card-body">
                    <h3>Pengembalian Barang</h3>
                     
                    <form  action="../pages/Kembali/proses_tambah.php" method="POST" name="autoSumForm" enctype="multipart/form-data" onSubmit="return cekform()">
                   	<div class="form-group">
                        <label>Id Pengembalian</label>
                        <input class="form-control" type="text" name="id_pengembalian"value=" <?php echo autonumber("daftar_pengembalian", "id_pengembalian", 10, ""); ?>" required readonly>
 
                    </div>      
                    
                    <div class="form-group">
            <label><b>Id Peminjaman</label></b>
            <select class="select2 form-control mb-1 custom-select" style="width: 100%; height:36px;" name="id_peminjaman" id="id_peminjaman">
               <option value="" class="form-control">Please Select ID Peminjaman</option>
               <?php
                  $query = mysqli_query($koneksi,"SELECT * FROM daftar_peminjaman group by id_peminjaman");
                  while ($row = mysqli_fetch_array($query)) {
                  ?>
               <option id="id_peminjaman" value="<?php echo $row['id_peminjaman']; ?>">
                  <?php echo $row['id_peminjaman']; ?> - <?php  echo $row['nama_sekolah']; ?>
               </option>
               <?php
                  }
                   ?>
            </select>
         </div>  
                    
                    <div class="form-group">
            <label><b>Nama Sekolah</label></b>
            <select class="select2 form-control mb-1 custom-select" style="width: 100%; height:36px;" name="nama_sekolah" id="nama_sekolah">
               <option value="" class="form-control">Please Select Nama Sekolah</option>
               <?php
                  $query = mysqli_query($koneksi,"SELECT * FROM sekolah group by nama_sekolah");
                  while ($row = mysqli_fetch_array($query)) {
                  ?>
               <option id="id_sekolah" value="<?php echo $row['nama_sekolah']; ?>">
                  <?php echo $row['nama_sekolah']; ?> - <?php  echo $row['id_sekolah']; ?>
               </option>
               <?php
                  }
                   ?>
            </select>
         </div>
                        
         <div class="form-group">
            <label><b>Kode Alat</label></b>
            <select class="select2 form-control mb-1 custom-select" style="width: 100%; height:36px;" name="kode_alat" id="kode_alat">
               <option value="" class="form-control">Please Select Kode Alat</option>
               <?php
                  $query = mysqli_query($koneksi,"SELECT * FROM daftar_peminjaman group by kode_alat");
                  while ($row = mysqli_fetch_array($query)) {
                  ?>
               <option id="kode_alat" value="<?php echo $row['kode_alat']; ?>">
                  <?php echo $row['kode_alat']; ?> - <?php  echo $row['nama_alat']; ?>
               </option>
               <?php
                  }
                   ?>
            </select>
         </div>

                    <div class="form-group">
                        <label>Tanggal</label>
                        <input class="form-control" type="date" name="tanggal_kembali">
 
                    </div>  
                       <div class="form-group" hidden>
                            <label>STATUS</label>
                            <input class="form-control" type="" name="status">
                       </div>
                       		<link href="../assets/plugins/timepicker/bootstrap-material-datetimepicker.css" rel="stylesheet">
                            <script src="../assets/js/jquery-1.10.2.min.js"></script>
                            <script src="../assets/js/jquery.chained.min.js"></script>
                            <script src="../assets/plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
                            <script src="../assets/plugins/timepicker/moment.js"></script>
        					<script src="../assets/plugins/timepicker/tempusdominus-bootstrap-4.js"></script>
        					<script src="../assets/plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
                            <script>
                                $("#nama_barang").chained("#kode_barang");
                                
                            </script>
                                <div>
                                    <input type="submit" name="add" value="Simpan" class="btn btn-primary">
                                    <a href="../operator/index.php?page=kembali" class="btn btn-danger">Kembali</a>
                                </div>
                         
                        </form>
                     </div>
                 </div>
             </div>
        </div>
    </div>





