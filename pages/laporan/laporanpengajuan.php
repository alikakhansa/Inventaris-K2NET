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
  <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../../assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../assets/css/sb-admin3.css" rel="stylesheet">

</head>
<body onload="window.print();">

  <nav class="navbar navbar-expand navbar-dark bg-primary static-top">

       
 

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
          <button><li><a href="">|| Print or save ||</a></li>
           <button><li class="active "><a href="javascript:window.open('','_self').close();"> Close ||</a></li>
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

                    <th>No</th>
                  
                    
                            <th>Tanggal</th>
                            <th>Nama Barang</th>
                            <th>Nama Sekolah</th>
                            <th>Qty</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                  </tr>

                  <?php

$query = @mysqli_query($koneksi, "SELECT * FROM daftar_pengajuan ORDER BY kode_pengajuan ASC")  or die(mysqli_error($koneksi));
$NO=1;
while ($data = @mysqli_fetch_array($query)) {
?>

</thead>
<body>
   <tr>
  <td><?php echo "$NO"; ?></td>
       
         <td><?php echo $data['tanggal']; ?></td>
          <td><?php echo $data['nama_barang']; ?></td>
           <td><?php echo $data['nama_sekolah']; ?></td>
          <td><?php echo $data['qty']; ?></td>
 <td><?php echo $data['keterangan']; ?></td>
   
     

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