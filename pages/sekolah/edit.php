  <div class="page-wrapper">
            <div class="content">
                <div class="m-t-20">  <h4>Edit Sekolah</h4> </div>
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
  $ID = $_GET['nama_sekolah'];
  $EDIT ="SELECT * FROM sekolah WHERE sekolah.nama_sekolah='$ID' ";
  $HASILEDIT=@mysqli_query($koneksi,$EDIT);
  while ($ROW=@mysqli_fetch_array($HASILEDIT)) {
   
      $NIS       = $ROW['nama_sekolah'];
      $NAMA      = $ROW['alamat'];


  }
  ?>
            
                <div class="form-group">
                  <label>Nama Sekolah </label>
                  <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" value="<?php echo $NIS; ?>" required readonly>
                </div>

               <div class="form-group">
                  <label for="text">Alamat</label>
                  <input type="text" class="form-control" name="alamat" value="<?php echo $NAMA; ?>" required>
                </div>

             

              <div class="box-footer">
                <button type="submit" name="edit" class="btn btn-primary" value="edit">Edit</button>
              </div>


</form>