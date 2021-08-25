
   <div class="page-wrapper">
            <div class="content">
                <div class="m-t-20">  <h4>Edit Barang</h4> </div>
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
  $ID = $_GET['kode_barang'];
  $EDIT ="SELECT * FROM daftar_barang WHERE daftar_barang.kode_barang='$ID' ";
  $HASILEDIT=@mysqli_query($koneksi,$EDIT);
  while ($_POST=@mysqli_fetch_array($HASILEDIT)) {
   

      $kode_barang     = $_POST['kode_barang'];
      $nama_barang     = $_POST['nama_barang'];
      $stok_awal     = $_POST['stok_awal'];
      $stok_akhir     = $_POST['stok_akhir'];
      $b_masuk     = $_POST['b_masuk'];
      $b_keluar     = $_POST['b_keluar'];
      $ket             = $_POST['ket'];
      $qty             = $_POST['qty'];


  }
  ?>
        
                <div class="form-group">
                  <label>KODE BARANG</label>
                  <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="<?php echo $kode_barang; ?>" required readonly>
                </div>

               <div class="form-group">
                  <label for="text">NAMA BARANG</label>
                  <input type="text" class="form-control" name="nama_barang" value="<?php echo $nama_barang; ?>" required>
                </div>

                <div class="form-group">
                  <label for="text">STOCK AWAL</label>
                  <input type="text" class="form-control" name="nama_barang" value="<?php echo $stok_awal; ?>" required>
                </div>

                <div class="form-group">
                  <label for="text">STOCK AKHIR</label>
                  <input type="text" class="form-control" name="nama_barang" value="<?php echo $stok_akhir; ?>" required>
                </div>

                <div class="form-group">
                  <label for="text">BARANG MASUK</label>
                  <input type="text" class="form-control" name="nama_barang" value="<?php echo $b_masuk; ?>" required>
                </div>

                <div class="form-group">
                  <label for="text">BARANG KELUAR</label>
                  <input type="text" class="form-control" name="nama_barang" value="<?php echo $b_keluar; ?>" required>
                </div>

               <div class="form-group">
                  <label>KETERANGAN</label>
                  <input type="text" class="form-control" id="ket" name="ket" value="<?php echo $ket; ?>" required>
                </div>

               <div class="form-group">
                  <label for="text">QTY</label>
                  <input type="text" class="form-control" name="qty" value="<?php echo $qty; ?>" required>
                </div>

              <div class="box-footer">
                <button type="submit" name="edit" class="btn btn-primary" value="edit">Edit</button>
                  <a href="../operator/index.php?page=barang" class="btn btn-warning">Back</a>
              </div>