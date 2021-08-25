<?php 
   @$page = $_GET['aksi'];
?>

<

</br>
<div class="page-wrapper">
            <div class="content">
                <div class="row">
            <div class="card-body table-responsive">
            <div class="col-lg-12">
            <ol class="breadcrumb">
<li class="breadcrumb-item">
<a href="index.php">Dashboard</a>
</li>
<li class="breadcrumb-item active">Tambah User
</ol>
</li>
</div>
<div class="col-lg-12">
   <div class="card">
      <div class="card-body">
         <h4 class="card-title mb-4">Tambah User</h4>
          <form  action="../pages/user/proses_tambah.php" role="form" method="POST" >
        <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">ID</label>
               <div class="col-sm-9">
                  <input type="text" class="form-control" id="horizontal-firstname-input" name="id_login"value=" <?php echo autonumber("login", "id_login", 2, ""); ?>" required readonly>
               </div>
            </div>
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Username</label>
               <div class="col-sm-9">
                  <input type="text" class="form-control" id="horizontal-firstname-input" name="username">
               </div>
            </div>
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Password</label>
               <div class="col-sm-9">
                  <input type="password" class="form-control" id="horizontal-firstname-input" name="password">
               </div>
            </div>
            
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Level</label>
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
                        <option value="team 3">Team3</option>
               </select>
               </div>
            </div>
            </div>
            <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Nama Pengguna</label>
               <div class="col-sm-9">
                  <input type="text" class="form-control" id="horizontal-firstname-input" name="nama">
               </div>
            </div>
            
            <div class="form-group row justify-content-end">
               <div class="col-sm-9">
                  <div>
                     <button type="submit" class="btn btn-primary waves-effect waves-light" title="simpan">Simpan</button>
                     <a href="index.php?page=user" class="btn btn-danger waves-effect waves-light" data-toogle="tooltip" data-placement="bottom" title="Kembali">Kembali</a>
                    </div>
               </div>
            </div>

            </form>
            </div>
            </div>
            </div>