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
   <div class="card">
      <div class="card-body">
         <h4 class="card-title mb-4">Tambah User</h4>
          <form  action="../pages/user/proses_tambah.php" role="form" method="POST" >
        <div class="form-group row mb-4">
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">ID</label>
               <div class="col-sm-9">
                  <input type="text" class="form-control" id="horizontal-firstname-input" name="id_login">
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
               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Nama Pengguna</label>
               <div class="col-sm-9">
                  <input type="text" class="form-control" id="horizontal-firstname-input" name="nama">
               </div>
            </div>
            <div class="form-group row justify-content-end">
               <div class="col-sm-9">
                  <div>
                     <button type="submit" class="btn btn-primary waves-effect waves-light" title="simpan"><i class="bx bx-check font-size-18 align-middle mr-2"></i>Simpan</button>
                     <a href="index.php?page=user" class="btn btn-danger waves-effect waves-light" data-toogle="tooltip" data-placement="bottom" title="Kembali"><i class="bx bx-arrow-back font-size-18 align-middle mr-2"></i>Kembali</a>
                    </div>
               </div>
            </div>

            </form>
            </div>
            </div>
            </div>