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
      <li class="breadcrumb-item active">Daftar Pengajuan</li>
   </ol>
</div>
<br>
                <h5 class="header-title" style="font-size: 20px;">DAFTAR PENGAJUAN </h5>
              <a href="?page=pengajuan&aksi=tambah"><button type="button" class="btn btn-info"><i class="fa fa-plus"> Tambah</button></a></i>
               <br><br>
                <div>
                    <table id="dataTables-example" class="table border-0">
                        <thead>

               <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Nama Barang</th>
                  <th>Nama Sekolah</th>
                   <th>Qty</th>
                   <th>Keterangan</th>
                   <th>Status</th>
                  
                  <th>Action</th>
               </tr>
            </thead>
            <?php
               $query= @mysqli_query($koneksi, "SELECT * FROM daftar_pengajuan ORDER BY kode_pengajuan");
               
               $NO=1;
               while ($data = @mysqli_fetch_array($query)) {
                  $id_pembayaran        = $data['tanggal'];
                  $nisnn                = $data['nama_barang'];
                  $nama                 = $data['nama_sekolah'];
                  $kelas                = $data['qty'];
                  $kompetensikeahlian   = $data['keterangan'];
                  $RINCIAN              = $data['status'];
                   
               
               
               ?>
            <tr>
               <td><?php echo $NO; ?></td>
               <td><?php echo $id_pembayaran; ?></td>
               <td><?php echo $nisnn; ?></td>
               <td><?php echo $nama; ?></td>
               <td><?php echo $kelas; ?></td>
                <td><?php echo $kompetensikeahlian; ?></td>
              
             
               <td><span class="#" data-toogle="tooltip" data-placement="bottom">
                  <?php if($RINCIAN==1){ 
                     echo "<button class='btn-md btn btn-warning'>Sudah Konfirmasi</button>";
                     }elseif($RINCIAN==0){
                     echo "<button class='btn-md btn btn-danger'>Belum Konfirmasi</button>";
                     }
                     
                     ?>
                  </span>
               </td>
               <td class="text-right">
                  <?php
                     if ($data['status']==0) { ?>
                
                  <a href="index.php?page=pengajuan&aksi=konfirmasi&id=<?php echo $data['kode_pengajuan']; ?> &value=1" class="btn btn-primary" role="button" data-toggle="tooltip" data-placement="bottom"> 
                  <i class="fa fa fa-edit text-white"></i>
                  </a>
                  <?php
                     }
                       elseif ($data['status']==1) { ?>
                 
                  <a href="#" class="btn btn-success" role="button" data-toggle="tooltip" data-placement="bottom">
                  <i class="fa fa fa-check"></i>
                  <?php
                     }
                     ?>
               </td>
               <!--<td class="table-action">
                  <div class="btn-group">
                      <button type="button" class="btn btn-success">Action</button>
                      <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a class="dropdown-item" href="index.php?page=rekam_medis&aksi=detail&id=<?php //echo $data['kode_pemeriksaan']; ?>"><i class="fa fa-edit"></i> Data Detail</a></li>
                        <li><a class="dropdown-item" href="../laporan/laporan_pemeriksaan_detail.php?id=<?php //echo $data['kode_pemeriksaan']; ?>" target="_blank"><i class="fa fa fa-print"></i> Print Detail</a></li>
                        <li><a class="dropdown-item" href="../pages/rekam_medis/konfirmasi.php?id=<?php// echo $data['kode_pemeriksaan']; ?>" target="_blank"><i class="fa fa fa-checked"></i> Konfirmasi</a></li>
                      </ul>
                    </div>
                   
                  
                          
                  
                              </td>
                  -->
            </tr>
            <?php  
               $NO++;
               }
               ?>
         </table>
      </div>
   </div>
</div>
<!-- /.box-body -->
<!-- /.box -->