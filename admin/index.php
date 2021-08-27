<?php
   @session_start();
   include "../inc/koneksi.php";
   if (@$_SESSION['username'])
       {
           if(@!$_SESSION['level'] =="admin" )  
               {
                   header ("location:../admin/index.php");
               } 
           else {
               if (@$_SESSION['level'] =="operator" )  
                   {
                       header ("location:../operator/index.php");
               }
           }
       }
   else {
       header("location:../inc/login.php");
   }
   ?>
<?php
   include("../inc/kode.php");
   ?>
<!DOCTYPE html>
<html lang="en">
   <!-- patients23:17-->
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <link rel="shortcut icon" type="image/x-icon" href="../assets/img/k2net.png">
      <title>Inventaris K2NET</title>
      <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="../assets/css/select2.min.css">
      <link rel="stylesheet" type="text/css" href="../assets/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-datetimepicker.min.css">
      <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
   </head>
   <body>
      <div class="main-wrapper">
         <div class="header">
            <div class="header-left">
               <a href="index.php" class="logo">
               <img src="../assets/img/a.png" width="20" height="20" alt="">
               <span>Inventaris</span>
               </a>    
            </div>
            <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
               <li class="nav-item dropdown has-arrow">
                  <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                  <span class="user-img">
                  <img class="rounded-circle" src="../assets/img/user.png" width="24">
                  <span class="status online"></span>
                  </span>
                  <span>Admin</span>
                  </a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="../inc/logout.php">Logout</a>
                  </div>
               </li>
            </ul>
         </div>
         <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
               <div id="sidebar-menu" class="sidebar-menu">
                  <ul>
                     <?php
                        @$PAGE = $_GET['page'];
                        ?>                        
                     <li <?php if ($PAGE=="dashboard") { ?> class="active" <?php  } ?>>
                        <a href="?page=dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fa fa-book"></i> <span> Data Barang </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                           <li><?php if ($PAGE=="barang") { ?> <?php  } ?>
                              <a href="?page=barang">Stok Barang</a>
                           </li>
                           <li><a href="payments.html">Pengajuan</a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fa fa-cog"></i> <span> Data Alat </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                           <li><?php if ($PAGE=="barang") { ?> <?php  } ?>
                              <?php if ($PAGE=="pinjam") { ?> <?php  } ?>
                              <a href="?page=pinjam">Peminjaman</a>
                           </li>
                           <li>
                           <li <?php if ($PAGE=="kembali") { ?> class="active" <?php  } ?>>
                              <a href="?page=kembali">Pengembalian</a>
                        </ul>
                     </li>
                     <li>
                        <a href="#"><i class="fa fa-calendar-check-o"></i> <span>Data Pekerjaan</span></a>
                     </li>
                     <li <?php if ($PAGE=="sekolah") { ?> class="active" <?php  } ?>>
                        <a href="?page=sekolah"><i class="fa fa-hospital-o"></i> <span>Data Sekolah</span></a>
                     </li>
                     <li <?php if ($PAGE=="informasi") { ?> class="active" <?php  } ?>>
                        <a href="?page=informasi"><i class="fa fa-laptop"></i> <span>Informasi</span></a>
                     </li>
                     <li <?php if ($PAGE=="user") { ?> class="active" <?php  } ?>>
                        <a href="?page=user"><i class="fa fa-user"></i> <span>User</span></a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <?php include "../inc/menu.php" ?>
      <?php include "../inc/content.php" ?>
      <div class="sidebar-overlay" data-reff=""></div>
      <script src="../assets/js/jquery-3.2.1.min.js"></script>
      <script src="../assets/js/popper.min.js"></script>
      <script src="../assets/js/bootstrap.min.js"></script>
      <script src="../assets/js/jquery.slimscroll.js"></script>
      <script src="../assets/js/select2.min.js"></script>
      <script src="../assets/js/jquery.dataTables.min.js"></script>
      <script src="../assets/js/dataTables.bootstrap4.min.js"></script>
      <script src="../assets/js/moment.min.js"></script>
      <script src="../assets/js/bootstrap-datetimepicker.min.js"></script>
      <script src="../assets/js/app.js"></script>
      <!-- Responsive examples -->
      <script src="../assets/plugins/datatables/dataTables.responsive.min.js"></script>
      <script src="../assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
      <!-- Datatable init js -->
      <script src="../assets/pages/datatables.init.js"></script> 
      <script type="text/javascript">
         $(".show-form-btn").on("click",function(){
           $(".form-box").toggleClass("showed");
         });
         $(".hide-form-btn").on("click",function(){
           $(".form-box").toggleClass("showed");
         });
      </script>
      <script src="../assets/js/dataTables/jquery.dataTables.js"></script>
      <script src="../assets/js/dataTables/dataTables.bootstrap.js"></script>
      <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
      </script>
      <script src="../assets/js/jquery.dataTables.min.js"></script>
   </body>
   <!-- patients23:19-->
</html>