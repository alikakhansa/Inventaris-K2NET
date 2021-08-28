
<div class="page-wrapper">
            <div class="content">
                <div class="row">
            <div class="card-body table-responsive">
            <div class="page-title-right">
   <ol class="breadcrumb m-0">
      <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
      <li class="breadcrumb-item active">Peminjaman Barang</li>
   </ol>
  
</div>
<br>

<h5 class="header-title" style="font-size: 20px;">PEMINJAMAN BARANG</h5>
<br>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-10">
                <div class="card m-b-30">
                 <div class="card-body">
                  
                     
                    <form  action="../pages/pinjam/proses_tambah.php" method="POST" name="autoSumForm" enctype="multipart/form-data" onSubmit="return cekform()">
                        <div class="form-group">
                        <label>Id Peminjaman</label>
                        <input class="form-control" type="text" name="id_peminjaman" value=" <?php echo autonumber("daftar_peminjaman", "id_peminjaman", 10, ""); ?>" required readonly>
                        </div>

                        <div class="form-group">
                        <label>Kode Alat</label>
                        <input class="form-control" type="text" name="kode_alat" value=" <?php echo autonumber("daftar_peminjaman", "kode_alat", 10, ""); ?>" required readonly>
                        </div>

                        <div class="form-group">
                        <label>Nama Alat</label>
                        <input class="form-control" type="text" name="nama_alat">
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
                        <label>Stok Awal</label>
                        <input class="form-control" type="text" name="stok_awal">
                        <br>
                        
                        <div class="form-group">
                        <label>Stok Akhir</label>
                        <input class="form-control" type="text" name="stok_akhir">
                        </div>

                        <div class="form-group">
                        <label>Alat Masuk</label>
                        <input class="form-control" type="text" name="alat_masuk">
                        <br>
                        
                        <div class="form-group">
                        <label>Alat keluar</label>
                        <input class="form-control" type="text" name="alat_keluar">
                        </div>

                        <div class="form-group">
                        <label>Tanggal</label>
                        <input class="form-control" type="date" name="tanggal">
                        <br>
                        
                        <div class="form-group">
                        <label>Keterangan</label>
                        <input class="form-control" type="text" name="keterangan">
                        </div>

                          




                                <div>
                                    <input type="submit" name="add" value="Simpan" class="btn btn-primary">
                                    <a href="../operator/index.php?page=pinjam" class="btn btn-danger">Kembali</a>
                                </div>
                         
                        </form>
                     </div>
                 </div>
             </div>
        </div>
    </div>





