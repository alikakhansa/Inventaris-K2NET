<?php
include "koneksi.php";
include 'infomasi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>alika</title>

  <!-- Custom fonts for this template-->
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../assets/css/sb-admin3.css" rel="stylesheet">

</head>
<body onload="window.print();">

  <nav class="navbar navbar-expand navbar-dark bg-primary static-top">

       
      <a href="#" class="logo">
        <b><img src="../inc/assets/images/d.png" width="35" height="35" alt=""><span><?php echo @$DATAINFO['nama_poliklinik'] ?></span></b>
      </a>
    </div>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
       
      </div>
    </form>

   <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
     <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         
        </a>
       <ul class="nav user-menu float-right"></ul>
          <li><a href="">|| Print or save ||</a></li>
           <li class="active "><a href="javascript:window.open('','_self').close();"> Close ||</a></li>
         </font>
    </ul>
    </ul>
</nav>
<br>
<!-- akhir header -->

 
        <!-- Breadcrumbs-->

        <div class="container">
          <?php include @'kop_laporan.php'; ?>


         <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Medis</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead">
               
                  
              <tr>

                     <th>NO</th>
                                            <th>Kode Pemeriksaan</th>
                                            <th>Kode Pasien</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Rincian</th>
                                            <th>Status</th>
                                          
                  
                  </tr>
                </thead>
<tbody> 
  <?php

                                         
                                          $query = mysqli_query($koneksi,"SELECT tb_pemeriksaan.*,tb_pasien.*,tb_pendaftaran.* FROM tb_pendaftaran
                                            INNER JOIN tb_pemeriksaan on tb_pemeriksaan.no_pendaftaran=tb_pendaftaran.no_pendaftaran
                                            INNER JOIN tb_pasien on tb_pasien.kode_pas=tb_pendaftaran.kode_pas");

                                            
                                          $NO = 1;
                                            while ($data=@mysqli_fetch_array($query)) {

                                              $Rincian = $data['rincian_pemeriksaan'];
                                              $Status  =$data['status_pemeriksaan'];
                                              
                                          
                                       ?>
                                          <td><?php echo $NO; ?></td>
                                          <td><?php echo $data['kode_pemeriksaan']; ?></td>
                                          <td><?php echo $data['kode_pas']; ?></td>
                                          <td><?php echo $data['nama_pas']; ?></td>
                                          <td><?php echo $data['alamat_pas']; ?></td>
<td>

                                            <span class="btn-md btn btn-primary" data-toogle="tooltip" data-placement="bottom">

                                             <?php if ($Rincian==1) {
                                                echo "sudah konfirmasi";
                                             }elseif ($Rincian==0) {
                                               echo "belum konfirmasi";
                                             }?></span>

                                            
                                          </td>
                                          <td>
                                            <button class="btn-md btn btn-warning" data-toogle="tooltip" data-placement="bottom">

                                             <?php if ($Status==1) {
                                                echo "sudah transaksi";
                                             }elseif ($Status==0) {
                                               echo "belum transaksi";
                                             }?></button>

                                             </td>     


    </tr>


      <?php
      $NO++;
    }
    ?>
    </table>

</div>
</div>
</div>

</body>
</html>