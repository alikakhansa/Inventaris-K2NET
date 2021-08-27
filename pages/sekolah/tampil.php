<div class="page-wrapper">
   <div class="content">
      <div class="row">
         <div class="card-body table-responsive">
            <div class="page-title-right">
               <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                  <li class="breadcrumb-item active">Daftar Sekolah</li>
               </ol>
            </div>
            <br>
            <h5 class="header-title" style="font-size: 20px;">DAFTAR SEKOLAH</h5>
            <a href="?page=sekolah&aksi=tambah"> <button type="button" class="btn btn-info"><i class="fa fa-plus">  Tambah</button></a></i>
            <div>
               <table id="dataTables-example" class="table border-0">
                  <thead>
                     <br>
                     <tr>
                        <th>No</th>
                       
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                        include '../inc/koneksi.php';
                        $sql = mysqli_query($koneksi, "SELECT * FROM sekolah ORDER BY id_sekolah DESC") or die(mysqli_error($koneksi));
                        
                        if(mysqli_num_rows($sql) > 0){
                        
                        $no = 1;
                        
                        while($data = mysqli_fetch_assoc($sql)){
                        
                        echo '
                        <tr>
                        <td>'.$no.'</td>
                       
                        <td>'.$data['nama_sekolah'].'</td>
                        <td>'.$data['alamat'].'</td>
                        
                        
                        <td>
                        
                        
                        <a href="index.php?page=view&aksi=view&id_sekolah='.$data['id_sekolah'].'" class="btn btn-success"><i class="fa fa-book"> View</a></i>
                        
                        <a href="index.php?page=sekolah&aksi=edit&id_sekolah='.$data['id_sekolah'].'" class="btn btn-warning"><i class="fa fa-edit"> Edit</a></i>
                        
                        <a href="../pages/sekolah/hapus.php?id_sekolah='.$data['id_sekolah'].'" class="btn btn-danger tom" onclick="return confirm(\'Yakin ingin menghapus data ini?\')"><i class="fa fa-trash"> Delete</a></i>
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