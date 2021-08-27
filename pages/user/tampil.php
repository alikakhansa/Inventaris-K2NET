<div class="page-wrapper">
   <div class="content">
      <div class="row">
         <div class="card-body table-responsive">
            <ol class="breadcrumb">
               <li class="breadcrumb-item">
                  <a href="index.php">Dashboard</a>
               </li>
               <li class="breadcrumb-item active">Daftar User
            </ol>
            </li>
            <h5 class="header-title" style="font-size: 20px;">DAFTAR USER</h5>
            <a href="?page=user&aksi=tambah"><button type="button" class="btn btn-info"><i class="fa fa-plus"> Tambah</button></a></i>
            <br><br>
            <div>
               <table id="dataTables-example" class="table border-0">
                  <thead>
                     <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Level</th>
                        <th>Team</th>
                        <th>Nama Pengguna</th>
                        <th>Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                        include '../inc/koneksi.php';
                         $sql = mysqli_query($koneksi, "SELECT * FROM login ORDER BY id_login DESC") or die(mysqli_error($koneksi));
                        
                            if(mysqli_num_rows($sql) > 0){
                         
                            $no = 1;
                        
                            while($data = mysqli_fetch_assoc($sql)){
                        
                               echo '
                               <tr>
                                  <td>'.$no.'</td>
                                  
                                  <td>'.$data['username'].'</td>
                                  <td>'.$data['password'].'</td>
                                  <td>'.$data['level'].'</td>
                                  <td>'.$data['team'].'</td>
                                  <td>'.$data['nama'].'</td>
                                  
                                  <td>
                                     <a href="index.php?page=user&aksi=edit&id_login='.$data['id_login'].'" class="btn btn-warning"><i class="fa fa-edit"> Edit</a></i>
                                     <a href="../pages/user/hapus.php?id_login='.$data['id_login'].'" class="btn btn-danger tom" onclick="return confirm(\'Yakin ingin menghapus data ini?\')"><i class="fa fa-trash"> Delete</a></i>
                                  </td>
                               </tr>
                               ';
                               $no++;
                            }
                        
                         }else{
                            echo '
                            <tr>
                               <td colspan="6">Tidak ada data.</td>
                            </tr>
                            ';
                         }
                         ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>