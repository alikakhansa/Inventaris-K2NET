<?php 


@$PAGE = $_GET['aksi'];


 ?> 
 <div class="page-wrapper">
            <div class="content">
            <ol class="breadcrumb">
<li class="breadcrumb-item">
<a href="index.php">Dashboard</a>
</li>
<li class="breadcrumb-item active">Tambah Barang
</ol>
</li>
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
                                <label class="mb-0"><b>Stok Awal</b></label>
                               
                               <input type="text" class="form-control"  id="stok_awal" name="stok_awal">
                               <br>
                               <label class="mb-0"><b>Stok Akhir</b></label>
                            
                               <input type="text" class="form-control" name="stok_akhir" id="" required/>
                               <br>
                               <label class="mb-0"><b>Barang Masuk</b></label>
                            
                               <input type="text" class="form-control" name="b_masuk" id="" required/>
                               <br>
                               <label class="mb-0"><b>Barang Keluar</b></label>
                               
                               <input type="text" class="form-control"  id="b_keluar" name="b_keluar">
                               <br>

                                <label class="mb-0"><b>Keterangan</b></label>
                             
                                <input type="text" class="form-control" name="ket" id="" required/>
                                <br>
                                <label class="mb-0"><b>Qty</b></label>
                                
                                <input type="text" class="form-control" name="qty" id="" required />
                                <br>
                                <label class="col-sm-2 col-form-label">&nbsp;</label>
                <div class="mb-0">
                    <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                    <a href="../operator/index.php?page=barang" class="btn btn-danger">Kembali</a>
                </div>
            
                        </div>
                    </div> <!-- end col -->
                </form>

                   
        <!-- End Footer -->

        <!-- jQuery  -->
       
    </body>

<!-- Mirrored from mannatthemes.com/aplomb/aplomb-cyan/horizontal/form-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 15:09:45 GMT -->
</html>