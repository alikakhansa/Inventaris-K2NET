<?php 


@$PAGE = $_GET['aksi'];


 ?> 
   

 <div class="page-wrapper">
            <div class="content">
            <div class="m-t-20">
<div class="card-body">   
            <ol class="breadcrumb">
<li class="breadcrumb-item">
<a href="index.php">Dashboard</a>
</li>
<li class="breadcrumb-item active">Tambah Sekolah
</ol>
</li>

                    <label class="mb-0"><b><h4>Tambah Sekolah</h4></b></label>
                <div class="row">

</div>
</div>
</div>
                <!-- end page title end breadcrumb -->
        
            <form action="../pages/sekolah/proses_tambah.php" method="post">
       
                          <div class="card-body">            
                               
 <div class="m-t-20">
                                    <label class="mb-0"><b>No</b></label>
                                    
                                   <input type="text" name="no" class="form-control"  value=" <?php echo autonumber("sekolah", "no", 10, ""); ?>" required readonly>
                                </div>
                            
                               
                            <div class="m-t-20">
                                    <label class="mb-0"><b>TANGGAL</b></label>
                                    
                                   <input type="date" name="tanggal" class="form-control" required>
                                </div>
                            

                             
                               <label class="mb-0"><b>Nama</b></label>
                               
                                <input type="text" name="nama_sekolah" class="form-control" size="4" required>

                            

                                <div class="m-t-20">
                                    <label class="mb-0"><b>ALAMAT</b></label>
                                    
                                   <input type="text" name="alamat" class="form-control" required>
                                </div>

                               

                                <div class="m-t-20">
                 <label class="mb-0"><b>Kategori</b></label>
               <div class="m-t-20">
               <select class="form-control select2" name="kategori" >
                        <option>Silahkan Pilih Jenis User</option>
                        <option value="setting jaringan">Setting Jaringan</option>
                        <option value="setting server">Setting Server</option>
                        <option value="penambahan barang">Penambahan Barang</option>
                        <option value="perbaikan alat">Perbaikan Alat</option>
                        <option value="lainnya">Lainnya</option>
               </select>
               </div>
            </div>

                                <div class="m-t-20">
                                    <label class="mb-0"><b>Jumlah Barang</b></label>
                                    
                                   <input type="text" name="jumlah_barang" class="form-control" required>
                                </div>

                                <div class="m-t-20">
                                    <label class="mb-0"><b>Keterangan</b></label>
                                    
                                   <textarea type="text" name="keterangan" class="form-control" required></textarea>
                                </div>


                              
                 <label class="col-sm-2 col-form-label">&nbsp;</label>
                <div class="col-sm-10">
                    <input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
                    <a href="../operator/index.php?page=barang" class="btn btn-warning">Back</a>
                </div>
            
                        </div>
                    </div> <!-- end col -->
                </form>

                   
        <!-- End Footer -->

        <!-- jQuery  -->
       
    </body>

<!-- Mirrored from mannatthemes.com/aplomb/aplomb-cyan/horizontal/form-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 15:09:45 GMT -->
</html>