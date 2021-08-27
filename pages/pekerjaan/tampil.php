<div class="page-wrapper">
            <div class="content">
                <div class="row">
            <div class="card-body table-responsive">
<div class="page-title-right">
   <ol class="breadcrumb m-0">
      <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
      <li class="breadcrumb-item active">Data Pekerjaan</li>
   </ol>
</div>
<br>
<?php
@$PAGE =$_GET['page'];
?>

            
      
  <!-- DataTables Example -->
         <div class="card mb-3">
          <div class="card-header">
           <div class="card-body">
           <h5 class="header-title" style="font-size: 20px;">DATA PERKEJAAN</h5>

            <br>
         
          <a href="?page=pekerjaan&aksi=tambah"><button type="button" class="btn btn-info"><i class="fa fa-plus"> Tambah</button></a></i>
          <a href="../../pages/laporan/laporanpekerjaan.php?kode_pekerjaan='.$data['kode_pekerjaan'].'"><button type="button" class="btn btn-warning"><i class="fa fa-print"> Laporan</button></a></i>
         </span>
        </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead">
               
                  
                

<tr>

                    <th>No</th>
                  
                    <th>Nama Sekolah</th>
                    <th>Nama Pekerjaan</th>
                     <th>Team</th>
                    <th>Tanggal</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                  </tr>

                  <?php

$query = @mysqli_query($koneksi, "SELECT * FROM daftar_pekerjaan ORDER BY kode_pekerjaan DESC") or die(mysqli_error($koneksi));
$NO=1;
while ($data = @mysqli_fetch_array($query)) {
?>

</thead>
<body>
   <tr>
  <td><?php echo "$NO"; ?></td>
       
         <td><?php echo $data['nama_sekolah']; ?></td>
          <td><?php echo $data['nama_pekerjaan']; ?></td>
           <td><?php echo $data['team']; ?></td>
          <td><?php echo $data['tanggal']; ?></td>
 <td><?php echo $data['keterangan']; ?></td>
   
     
             
        

          
          <td>
                         <a class="btn btn-warning" href="index.php?page=pekerjaan&aksi=edit&id=<?php echo $data['kode_pekerjaan']; ?>"><i class="fa fa-edit"> Edit</a></i>
                       <a class="btn btn-danger" href="../pages/pekerjaan/hapus.php?kode_pekerjaan=<?=$data['kode_pekerjaan']?>" onclick="return confirm(\'Yakin ingin menghapus data ini?\')" ><i class="fa fa-trash"> Delete</a></i>
                      </td>
         
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

  


