<div class="page-wrapper">
            <div class="content">
                <div class="row">
            <div class="card-body table-responsive">

<?php 
  $ID = @$_GET['id_login'];
  $EDIT ="SELECT * FROM login WHERE login.id_login='$ID' ";
  $HASILEDIT=mysqli_query($koneksi,$EDIT);
  while ($ROW=mysqli_fetch_array($HASILEDIT)) {
   
      $KODE         = $ROW['id_login'];
      $USER         = $ROW['username'];
      $PASS         = $ROW['password'];
      $LEVEL        = $ROW['level'];
      $TEAM         = $ROW['team'];
      $NAMA         = $ROW['nama'];

   }
  ?>
   <div class="col-lg-12">
            <ol class="breadcrumb">
<li class="breadcrumb-item">
<a href="index.php">Dashboard</a>
</li>
<li class="breadcrumb-item active">Edit User
</ol>
</li>
</div>
          <div class="col-lg-12">
   <div class="card">
      <div class="card-body">
         <h4 class="card-title mb-4">EDIT USER</h4>
         <form method="post" name="Input" action="../pages/user/proses_edit.php">
         <div class="form-group row mb-4">
             
               <div class="col-sm-9">
                  <input type="hidden" class="form-control" id="horizontal-firstname-input" name="id_login" value="<?php echo $KODE; ?>">
               </div>
            </div>
          
           <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">USERNAME</label>
               <div class="col-sm-9">
                  <input type="text" class="form-control" name="username" value="<?php echo $USER; ?>">
               </div>
            </div>
            
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">PASSWORD</label>
               <div class="col-sm-9">
                  <input type="password" class="form-control" id="horizontal-firstname-input" name="password" value="<?php echo $PASS; ?>">
               </div>
            </div>
           
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">TIPE USER</label>
               <div class="col-sm-9">
               <select class="form-control select2" name="level" >
                    <option>Silahkan Pilih Jenis User</option>
                        <option value="admin">Admin</option>
                        <option value="operator">Operator</option>
               </select>
               </div>
            </div>

            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Team</label>
               <div class="col-sm-9">
               <select class="form-control select2" name="team" >
                    <option>Silahkan Pilih Jenis Team</option>
                        <option value="team 1">Team 1</option>
                        <option value="team 2">Team 2</option>
                        <option value="team 3">Team 3</option>
               </select>
               </div>
            </div>

          <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Nama Pengguna</label>
               <div class="col-sm-9">
                  <input type="text" class="form-control" id="horizontal-firstname-input" name="nama" value="<?php echo $NAMA; ?>">
               </div>
            </div>
            <div class="form-group row justify-content-end">
               <div class="col-sm-9">
                  <div>
                  <button type="submit" class="btn btn-primary waves-effect waves-light" title="simpan">Simpan</button>
                     <a href="index.php?page=user" class="btn btn-danger waves-effect waves-light" data-toogle="tooltip" data-placement="bottom" title="Kembali"> Kembali</a>
                     
                    </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>


