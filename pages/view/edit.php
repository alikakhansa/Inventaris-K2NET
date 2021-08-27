<div class="page-wrapper">
            <div class="content">
                <div class="m-t-20">  <h4>Edit View</h4> </div>
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

 <?php 
 $ID =@$_GET['id_sekolah'];

  $EDIT ="SELECT sekolah.*, view.* FROM sekolah INNER JOIN view on view.id_sekolah=sekolah.id_sekolah
  WHERE tb_pegawai.id_sekolah='$ID' " or die("GAGAL".mysqli_error());
$HASILEDIT        =  @mysqli_query($koneksi, $EDIT);
while ($ROW       =  @mysqli_fetch_array($HASILEDIT)) {
   
      $IDS          = $ROW['id_sekolah'];
      $IDN          = $ROW['id_view'];
      $TGL          = $ROW['tanggal'];
      $KAT          = $ROW['kategori'];
      $JML          = $ROW['jumlah_barang'];
      $KETERANGAN   = $ROW['keterangan'];


  }
  ?>
  
<form  action="" role="form" method="POST" >
   
            
                <div class="form-group">
                 
                  <input type="hidden" class="form-control" id="id_sekolah" name="id_sekolah" value="<?php echo $IDS; ?>" required readonly>
                </div>

                 <div class="form-group">
                
                  <input type="hidden" class="form-control" id="id_view" name="id_view" value="<?php echo $IDN; ?>" required readonly>
                </div>

                <div class="form-group">
                  <label>Tanggal </label>
                  <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $TGL; ?>" required readonly>
                </div>

                <div class="form-group">
                 <label>Kategori</label>
               <div class="form-group">
               <select class="form-control select2" name="kategori" >
                        <option value="#" disabled selected>Silahkan Pilih Jenis Kategori</option>
                        <option value="setting jaringan">Setting Jaringan</option>
                        <option value="setting server">Setting Server</option>
                        <option value="penambahan barang">Penambahan Barang</option>
                        <option value="perbaikan alat">Perbaikan Alat</option>
                        <option value="lainnya">Lainnya</option>
               </select>
               </div>
            </div>

                <div class="form-group">
                  <label>Jumlah Barang</label>
                  <input type="text" class="form-control" id="jumlah_barang" name="jumlah_barang" value="<?php echo $JML; ?>" required>
                </div>

               <div class="form-group">
                  <label for="text">Keterangan</label>
                  <textarea type="text" class="form-control" name="keterangan" value="<?php echo $KETERANGAN; ?>"></textarea>
                </div>

              <div class="box-footer">
                <button type="submit" name="edit" class="btn btn-primary" value="edit">Edit</button>
              </div>


</form>