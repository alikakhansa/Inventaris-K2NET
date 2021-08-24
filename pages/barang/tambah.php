<?php 


@$PAGE = $_GET['aksi'];


 ?> 
 <div class="page-wrapper">
            <div class="content">

                <div class="m-t-20"> 
                    <label class="mb-0"><b><h4>Tambah Barang</h4></b></label>
                <div class="row">

    
</div>
</div>
                <!-- end page title end breadcrumb -->
        
            <form action="../pages/barang/proses_tambah.php" method="post">
       
                          <div class="card-body">            
                               

                               

                            

                             
                                <label class="mb-0"><b>Kode Barang</b></label>
                               
                                <input type="text" class="form-control"  id="kode_barang" name="kode_barang" value=" <?php echo autonumber("daftar_barang", "kode_barang", 10, ""); ?>" required readonly>
<br>
                                <label class="mb-0"><b>Nama Barang</b></label>
                             
                                <input type="text" class="form-control" name="nama_barang" id="" required/>
<br>
                                <label class="mb-0"><b>Keterangan</b></label>
                             
                                <input type="text" class="form-control" name="ket" id="" required/>
<br>
                                <label class="mb-0"><b>Qty</b></label>
                                
                                <input type="text" class="form-control" name="qty" id="" required />

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