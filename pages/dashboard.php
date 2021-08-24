
                <div class="page-wrapper">
            <div class="content">
                <div class="row">
            <div class="card-body table-responsive">
 <?php  
  $QUERY = mysqli_query ($koneksi, "SELECT * FROM login WHERE username='".$_SESSION['username']."'");
  while ($DATA=mysqli_fetch_array($QUERY)) 
  $NIP = $DATA['username'];
  {
    $QUERY = mysqli_query ($koneksi, "SELECT * FROM login WHERE login.username='$NIP'");
    while ($DATA2=mysqli_fetch_array($QUERY)) 
    if ($_SESSION['username']) 
    {
      if ($_SESSION['level']== "operator") 
      {
        echo "
    
                        <div class='alert alert-info alert-dismissible fade show' role='alert'>
                            <h4>WELCOME TO APLIKASI INVENTORY </h4> 
                            <h3> $DATA2[username] </h3>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>

                 <div class='row'>       
                    <div class='col-md-12 col-xl-3'>
                        <div class='card m-b-30'>
                            <div class='card-body '>
                                <div class='d-flex row'>
                                    <div class='col-3 align-self-center'>
                                        <div class='round'>
                                            <i class='fa fa-book text-primary'></i>
                                        </div>
                                    </div>
                                    <div class='col-6 ml-auto align-self-center text-center'>
                                        <div class='m-l-10 text-white-50 float-right'>
                                            
                                            <p class='mb-0 '><a href='index.php?page=barang'>DATA BARANG</p></a>                                                                 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class='col-md-12 col-xl-3'>
                        <div class='card m-b-30'>
                            <div class='card-body '>
                                <div class='d-flex row'>
                                    <div class='col-3 align-self-center'>
                                        <div class='round'>
                                            <i class='fa fa-hospital-o text-primary'></i>
                                        </div>
                                    </div>
                                    <div class='col-6 ml-auto align-self-center text-center'>
                                        <div class='m-l-10 text-white-50 float-right'>
                                           
                                            <p class='mb-0 '><a href='index.php?page=sekolah'>DATA SEKOLAH</p></a>                                                                 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class='col-md-12 col-xl-3'>
                        <div class='card m-b-30'>
                            <div class='card-body '>
                                <div class='d-flex row'>
                                    <div class='col-3 align-self-center'>
                                        <div class='round'>
                                            <i class='fa fa-upload text-primary'></i>
                                        </div>
                                    </div>
                                    <div class='col-6 ml-auto align-self-center text-center'>
                                        <div class='m-l-10 text-white-50 float-right'>
                                           
                                            <p class='mb-0 '><a href='index.php?page=pinjam'>PEMINJAMAN BARANG</p></a>                                                                 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                                        <div class='col-md-12 col-xl-3'>
                        <div class='card m-b-30'>
                            <div class='card-body '>
                                <div class='d-flex row'>
                                    <div class='col-3 align-self-center'>
                                        <div class='round'>
                                            <i class='fa fa-download text-primary'></i>
                                        </div>
                                    </div>
                                    <div class='col-6 ml-auto align-self-center text-center'>
                                        <div class='m-l-10 text-white-50 float-right'>
                                           
                                            <p class='mb-0 '><a href='index.php?page=kembali'>PENGEMBALIAN BARANG</p></a>                                                                 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
            }else if ($_SESSION['level']== "siswa") 
            {
               echo "
                <div class='alert alert-info alert-dismissible fade show' role='alert'>
                            <h4>WELCOME TO APLIKASI INVENTORY </h4> 
                            <h3> $DATA2[username] </h3>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>

                 <div class='row'>       
                    <div class='col-md-12 col-xl-3'>
                        <div class='card m-b-30'>
                            <div class='card-body '>
                                <div class='d-flex row'>
                                    <div class='col-3 align-self-center'>
                                        <div class='round'>
                                            <i class='fa fa-book text-primary'></i>
                                        </div>
                                    </div>
                                    <div class='col-6 ml-auto align-self-center text-center'>
                                        <div class='m-l-10 text-white-50 float-right'>
                                            
                                            <p class='mb-0 '><a href='index.php?page=barangsiswa'>DATA BARANG</p></a>                                                                 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class='col-md-12 col-xl-3'>
                        <div class='card m-b-30'>
                            <div class='card-body '>
                                <div class='d-flex row'>
                                    <div class='col-3 align-self-center'>
                                        <div class='round'>
                                            <i class='fa fa-hospital-o text-primary'></i>
                                        </div>
                                    </div>
                                    <div class='col-6 ml-auto align-self-center text-center'>
                                        <div class='m-l-10 text-white-50 float-right'>
                                           
                                            <p class='mb-0 '><a href='index.php?page=sekolahsiswa'>DATA SEKOLAH</p></a>                                                                 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class='col-md-12 col-xl-3'>
                        <div class='card m-b-30'>
                            <div class='card-body '>
                                <div class='d-flex row'>
                                    <div class='col-3 align-self-center'>
                                        <div class='round'>
                                            <i class='fa fa-upload text-primary'></i>
                                        </div>
                                    </div>
                                    <div class='col-6 ml-auto align-self-center text-center'>
                                        <div class='m-l-10 text-white-50 float-right'>
                                           
                                            <p class='mb-0 '><a href='index.php?page=pinjamsiswa'>PEMINJAMAN BARANG</p></a>                                                                 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                                        <div class='col-md-12 col-xl-3'>
                        <div class='card m-b-30'>
                            <div class='card-body '>
                                <div class='d-flex row'>
                                    <div class='col-3 align-self-center'>
                                        <div class='round'>
                                            <i class='fa fa-download text-primary'></i>
                                        </div>
                                    </div>
                                    <div class='col-6 ml-auto align-self-center text-center'>
                                        <div class='m-l-10 text-white-50 float-right'>
                                           
                                            <p class='mb-0 '><a href='index.php?page=kembalisiswa'>PENGEMBALIAN BARANG</p></a>                                                                 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
                
            
            }
        }
        

};
?>
</div>
</div>
</div>