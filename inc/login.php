<?php
@session_start();
include "koneksi.php";
if (@$_SESSION['level'])
    {
        if(@$_SESSION['level'] =="operator" )  {header ("location:../operator/index.php");}
    }elseif (@$_SESSION['level'] =="admin" )  {header ("location:../admin/index.php");}
   
    
?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from mannatthemes.com/aplomb/aplomb-cyan/horizontal/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 15:10:04 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/k2net.png">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

    <body class="fixed-left">

        <!-- Begin page -->
        <div class="main-wrapper account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">
                  
                    <div align="center"><b><h5><br><p>Inventaris</p></br></b></h5></div>
                    <div class="p-3">
                        <form class="form-horizontal" method="post" action="cek_login.php">
                        <?php
                          if (@$_POST['masuk'])
                          {
                            include 'cek_login.php';
                          }
                          ?>
  
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="text" required="" placeholder="Username" name="username">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="password" required="" placeholder="Password" name="password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <input type="submit" name="masuk" class="btn btn-lg btn-primary btn-block" value="Login">
                                    <a href="../index.php" class="btn btn-lg btn btn-warning waves-effect waves-light btn-block">Back</a> 
                                </div>
                            </div>

                           
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>


        <!-- jQuery  -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/modernizr.min.js"></script>
        <script src="../assets/js/detect.js"></script>
        <script src="../assets/js/fastclick.js"></script>
        <script src="../assets/js/jquery.slimscroll.js"></script>
        <script src="../assets/js/jquery.blockUI.js"></script>
        <script src="../assets/js/waves.js"></script>
        <script src="../assets/js/jquery.nicescroll.js"></script>
        <script src="../assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="../assets/js/app.js"></script>

    </body>

<!-- Mirrored from mannatthemes.com/aplomb/aplomb-cyan/horizontal/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 15:10:04 GMT -->
</html>