<div class="page-wrapper">
            <div class="content">
                <div class="row">
            <div class="card-body table-responsive">
<?php
$query_informasi =mysqli_query($koneksi,"SELECT * FROM tb_informasi WHERE id_informasi ='1' ");
$informasi =@mysqli_fetch_array($query_informasi);
?>
<div id="content-wrapper">

      <div class="container-fluid">
      
            
        <ol class="breadcrumb">
<li class="breadcrumb-item">
<a href="index.php">Dashboard</a>
</li>
<li class="breadcrumb-item active">Informasi
</ol>
</li>
</div>


<div class="row mt">
          <div class="col-lg-12">
             <div class="col-sm-offset-2 col-lg-12 col-md-12">
            
             <h5 class="header-title" style="font-size: 20px;">Data Informasi K2NET</div>
           <br>
           <?php
           if (@$_POST['edit_info']) {
             include "proses_edit.php"; 
           
            }
           if (@$_POST['edit_logo']) {
             include "proses_edit_logo.php"; 
            }
           ?>
            <div class="form-panel">
              <form role="form" method="post" class="form-horizontal style-form">
                  <div class="form-group has-success">
                  <label for="nama_spp" class="col-lg-2 control-label">Nama</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="nama_spp" name="nama_spp" value="<?php echo $informasi['nama_spp']?>" required>
                 </div>
                 </div>

                   <div class="form-group ">
                    <label for="spp" class="control-label col-lg-2">Deskripsi</label>
                    <div class="col-lg-10">
                      <textarea class="form-control" id="spp" name="spp"required><?php echo $informasi['spp']?></textarea>
                    </div>
                  </div>

                    <div class="form-group ">
                    <label for="alamat_spp" class="control-label col-lg-2">Alamat</label>
                    <div class="col-lg-10">
                      <textarea class="form-control" id="alamat_spp" name="alamat_spp"  required><?php echo $informasi['alamat_spp'] ?></textarea>
                    </div>
                  </div>

                  <div class="form-group has-success">
                  <label for="kec_spp" class="col-lg-2 control-label">Kecamatan</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="kec_spp" name="kec_spp" value="<?php echo $informasi['kec_spp']?>" required>
                 </div>
                </div>

                 <div class="form-group has-success">
                  <label for="kab_spp" class="col-lg-2 control-label">Kabupaten</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="kab_spp" name="kab_spp" value="<?php echo $informasi['kab_spp']?>" required>
                 </div>
                </div>

                  <div class="form-group has-success">
                  <label for="prov_spp" class="col-lg-2 control-label">Provinsi</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="prov_spp" name="prov_spp" value="<?php echo $informasi['prov_spp']?>" required>
                 </div>
                </div>
 
                  <div class="form-group has-success">
                  <label for="kode_pos_spp" class="col-lg-2 control-label">Kode Pos</label>
                  <div class="col-lg-10">
                    <input type="number" class="form-control" id="kode_pos_spp" name="kode_pos_spp" value="<?php echo $informasi['kode_pos_spp']?>"
                 </div>
                </div>

                  <div class="form-group has-success">
                  <label for="telp_spp" class="col-lg-2 control-label">Telepon</label>
                  <div class="col-lg-10">
                    <input type="number" class="form-control" id="telp_spp" name="telp_spp" value="<?php echo $informasi['telp_spp']?>" required>
                 </div>
                </div>

                <div class="form-group has-success">
                  <label for="email_sppp" class="col-lg-2 control-label">Email</label>
                  <div class="col-lg-10">
                    <input type="email" class="form-control" id="email_sppp" name="email_sppp" value="<?php echo $informasi['email_sppp']?>" required>
                 </div>
                </div>

                  <div class="form-group has-success">
                  <div class="col-lg-10">
                    <input type="submit" class="btn btn-info" name="edit_info" value="Perbaharui Informasi">
                    <br>
                 </div>
                </div>
              </form>
              <br>

              <form method="POST" role="form" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="foto" class="col-lg-2 control-label">Foto Sebelumnya</label>
                  <div class="col-lg-12 col-md-12">
                    <img src="../pages/images/<?php echo $informasi['logo_spp']  ?>" alt="logo" width="200px" />
                  </div>
                </div>

                 <div class="form-group">
                  <label for="foto" class="col-lg-2 col-md-2">Perbaharui Foto</label>
                  <div class="col-lg-10">
                    <input type="file" class="form-control" id="foto" name="foto">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-offset-2 col-lg-12 col-md-12">
                    <input type="submit" class="btn btn-info" name="edit_logo" value="Perbaharui Logo">
          </div>
          </div>       
        </div>
      </div>
    </form>
    
        