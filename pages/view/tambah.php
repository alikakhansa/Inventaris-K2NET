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
                    <label class="mb-0"><b><h4>Tambah View</h4></b></label>
                <div class="row">

    
</div>
</div>
                <!-- end page title end breadcrumb -->
        
            <form action="../pages/view/proses_tambah.php" method="post">
       
                          <div class="card-body">            
                               

                               

                            

                             
                                
                                <label class="mb-0"><b>Tanggal</b></label>
                             
                                <input type="date" class="form-control" name="tanggal" id="" required/>
                                <br>
                                <div class="form-group">
                 <label><b>Kategori</b></label>
               <div class="form-group">
               <select class="form-control select2" name="kategori" >
                        <option>Silahkan Pilih Jenis Kategori</option>
                        <option value="setting jaringan">Setting Jaringan</option>
                        <option value="setting server">Setting Server</option>
                        <option value="penambahan barang">Penambahan Barang</option>
                        <option value="perbaikan alat">Perbaikan Alat</option>
                        <option value="lainnya">Lainnya</option>
               </select>
               </div>
            </div>
                            
                               <label class="mb-0"><b>Jumlah Barang</b></label>
                            
                               <input type="text" class="form-control" name="jumlah_barang" id="" required/>
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
                    </div> <!-- end col -->
                </form>

                   
        <!-- End Footer -->

        <!-- jQuery  -->
       
    </body>

<!-- Mirrored from mannatthemes.com/aplomb/aplomb-cyan/horizontal/form-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 15:09:45 GMT -->
</html>