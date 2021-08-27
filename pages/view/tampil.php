
<div class="page-wrapper">
            <div class="content">
                <div class="row">
            <div class="card-body table-responsive">
<?php
@$PAGE =$_GET['page'];
?>
<div class="page-title-right">
   <ol class="breadcrumb m-0">
      <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
      <li class="breadcrumb-item active">View</li>
   </ol>
</div>
<br>   
        
  <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
           <div class="card-body">
           <h5 class="header-title" style="font-size: 20px;">DATA VIEW</h5>

            <br>
         
          <a href="?page=view&aksi=tambah"><button type="button" class="btn btn-info"><i class="fa fa-plus"> Tambah</button></a></i>
          <a href="../../pages/laporan/laporanview.php?id_view='.$data['id_view'].'"><button type="button" class="btn btn-warning"><i class="fa fa-print"> Laporan</button></a></i>
         </span>
        </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead">
               
                  
                <tr>

                    <th>No</th>
                    <th>ID Sekolah</th>
                    <th>Tanggal</th>
                    <th>Kategori</th>
                    <th>Jumlah Barang</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                  </tr>
<?php

$TAMPIL = mysqli_query($koneksi, "SELECT sekolah.*,view.* FROM 
sekolah INNER JOIN view on view.id_sekolah=sekolah.id_sekolah ORDER BY sekolah.id_sekolah ASC");
$NO=1;

while ($ROW =@mysqli_fetch_array($TAMPIL)) {

      $NO;
      $NIP    =$ROW['id_sekolah'];
      $NAMA   =$ROW['tanggal'];
      $ALAMAT =$ROW['kategori'];
      $NO_TLP =$ROW['jumlah_barang'];
      $JK     =$ROW['keterangan'];
     
  
?>
</thead>
<body>
     <tr>

          <td><?php echo $NO; ?></td>
          <td><?php echo $NIP; ?></td>
          <td><?php echo $NAMA; ?></td>
          <td><?php echo $ALAMAT; ?></td>
          <td><?php echo $NO_TLP ;?></td>
          <td><?php echo $JK; ?></td>
          
            
     
              <td>
        


        <a href="index.php?page=view&aksi=edit&id_view='.$data['id_view'].'" class="btn btn-warning"><i class="fa fa-edit"> Edit</a></i>

												  <a href="../pages/view/hapus.php?id_view='.$data['id_view'].'" class="btn btn-danger tom" onclick="return confirm(\'Yakin ingin menghapus data ini?\')"><i class="fa fa-trash"> Delete</a></i>
         
        </div>
      </li>
    </ul>
         </span>            
       </td>
                 </tr>
               </body>
   <?php
   $NO++;
 }
 ?>


                </tbody>
              </table>
            </div>
          </div>
      </div>
      <!-- Sticky Footer -->
    </div>
    <!-- /.content-wrapper -->
  </div>
  <!-- /#wrapper -->

  


