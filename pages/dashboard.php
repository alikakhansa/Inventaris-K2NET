<?php
   $query_statistik1   = mysqli_query($koneksi,"SELECT count(*) AS total_barang FROM daftar_barang");
   $data_statistik1    = mysqli_fetch_array($query_statistik1);
   
   $query_statistik2   = mysqli_query($koneksi,"SELECT count(*) AS total_sekolah FROM sekolah");
   $data_statistik2    = mysqli_fetch_array($query_statistik2);
   
   $query_statistik3   = mysqli_query($koneksi,"SELECT count(*) AS total_user FROM login");
   $data_statistik3    = mysqli_fetch_array($query_statistik3);
   
   $query_statistik4   = mysqli_query($koneksi,"SELECT count(*) AS total_peminjaman FROM daftar_peminjaman");
   $data_statistik4    = mysqli_fetch_array($query_statistik4);

   $query_statistik5   = mysqli_query($koneksi,"SELECT count(*) AS total_pengembalian FROM daftar_pengembalian");
   $data_statistik5    = mysqli_fetch_array($query_statistik5);

   $query_statistik6   = mysqli_query($koneksi,"SELECT count(*) AS total_pekerjaan FROM daftar_pekerjaan");
   $data_statistik6    = mysqli_fetch_array($query_statistik6);

   $query_statistik7   = mysqli_query($koneksi,"SELECT count(*) AS total_pengajuan FROM daftar_pengajuan");
   $data_statistik7    = mysqli_fetch_array($query_statistik7);
    
   
   ?>
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
                                                  <div class='m-l-10 text-info-50 float-right'>
                                                      
                                                      <p class='mb-0 '><a href='index.php?page=barang'>STOK BARANG</p></a>  <br> 
                                                    <h4 class='mb-0'>".$data_statistik1['total_barang']."</h4>                                                              
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
                                                  <div class='m-l-10 text-info-50 float-right'>
                                                     
                                                      <p class='mb-0 '><a href='index.php?page=sekolah'>DATA SEKOLAH</p></a>   <br>
                                                      <h4 class='mb-0'>".$data_statistik2['total_sekolah']."</h4>                                                               
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
                                                      <i class='fa fa-user text-primary'></i>
                                                  </div>
                                              </div>
                                              <div class='col-6 ml-auto align-self-center text-center'>
                                                  <div class='m-l-10 text-black-50 float-right'>
                                                     
                                                      <p class='mb-0 '><a href='index.php?page=user'>DATA USER</p></a><br> 
                                                      <h4 class='mb-0'>".$data_statistik3['total_user']."</h4>                                                                
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
                                                  <div class='m-l-10 text-black-50 float-right'>
                                                     
                                                      <p class='mb-0 '><a href='index.php?page=pinjam'>DATA PEMINJAMAN</p></a><br>
                                                      <h4 class='mb-0'>".$data_statistik4['total_peminjaman']."</h4>                                                                   
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class='row'>      
                          <div class='col-md-6 col-xl-3'>
                          <div class='card m-b-30'>
                              <div class='card-body '>
                                  <div class='d-flex row'>
                                      <div class='col-3 align-self-center'>
                                          <div class='round'>
                                              <i class='fa fa-download text-primary'></i>
                                          </div>
                                      </div>
                                      <div class='col-6 ml-auto align-self-center text-center'>
                                          <div class='m-l-10 text-black-50 float-right'>
                                             
                                              <p class='mb-0 '><a href='index.php?page=kembali'>DATA PENGEMBALIAN</p></a><br>
                                              <h4 class='mb-0'>".$data_statistik5['total_pengembalian']."</h4>                                                                   
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
                                                      <i class='fa fa-calendar-check-o text-primary'></i>
                                                  </div>
                                              </div>
                                              <div class='col-6 ml-auto align-self-center text-center'>
                                                  <div class='m-l-10 text-info-50 float-right'>
                                                     
                                                      <p class='mb-0 '><a href='index.php?page=pekerjaan'>DATA PEKERJAAN</p></a>   <br>
                                                      <h4 class='mb-0'>".$data_statistik6['total_pekerjaan']."</h4>                                                               
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
                                                  <i class='fa fa-commenting-o text-primary'></i>
                                              </div>
                                          </div>
                                          <div class='col-6 ml-auto align-self-center text-center'>
                                              <div class='m-l-10 text-black-50 float-right'>
                                                 
                                                  <p class='mb-0 '><a href='index.php?page=pengajuan'>DATA PENGAJUAN</p></a><br> 
                                                  <h4 class='mb-0'>".$data_statistik7['total_pengajuan']."</h4>                                                                
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
               
                          ";
                      }else if ($_SESSION['level']== "admin") 
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
                                                  <div class='m-l-10 text-info-50 float-right'>
                                                      
                                                      <p class='mb-0 '><a href='index.php?page=barang'>DATA BARANG</p></a>  <br> 
                                                    <h4 class='mb-0'>".$data_statistik1['total_barang']."</h4>                                                              
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
                                                  <div class='m-l-10 text-info-50 float-right'>
                                                     
                                                      <p class='mb-0 '><a href='index.php?page=sekolah'>DATA SEKOLAH</p></a>   <br>
                                                      <h4 class='mb-0'>".$data_statistik2['total_sekolah']."</h4>                                                               
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
                                                      <i class='fa fa-user text-primary'></i>
                                                  </div>
                                              </div>
                                              <div class='col-6 ml-auto align-self-center text-center'>
                                                  <div class='m-l-10 text-black-50 float-right'>
                                                     
                                                      <p class='mb-0 '><a href='index.php?page=user'>DATA USER</p></a><br> 
                                                      <h4 class='mb-0'>".$data_statistik3['total_user']."</h4>                                                                
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
                                                      <i class='fa fa-cog text-primary'></i>
                                                  </div>
                                              </div>
                                              <div class='col-6 ml-auto align-self-center text-center'>
                                                  <div class='m-l-10 text-black-50 float-right'>
                                                     
                                                      <p class='mb-0 '><a href='index.php?page=alat'>DATA ALAT</p></a><br>
                                                      <h4 class='mb-0'>".$data_statistik4['total_stok_alat']."</h4>                                                                   
                                                  </div>
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
                                              <i class='fa fa-cog text-primary'></i>
                                          </div>
                                      </div>
                                      <div class='col-6 ml-auto align-self-center text-center'>
                                          <div class='m-l-10 text-black-50 float-right'>
                                             
                                              <p class='mb-0 '><a href='index.php?page=kembali'>DATA PENGEMBALIAN</p></a><br>
                                              <h4 class='mb-0'>".$data_statistik5['total_pengembalian']."</h4>                                                                   
                                          </div>
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
                                      <i class='fa fa-calendar-check-o text-primary'></i>
                                  </div>
                              </div>
                              <div class='col-6 ml-auto align-self-center text-center'>
                                  <div class='m-l-10 text-info-50 float-right'>
                                     
                                      <p class='mb-0 '><a href='index.php?page=pekerjaan'>DATA PEKERJAAN</p></a>   <br>
                                      <h4 class='mb-0'>".$data_statistik6['total_pekerjaan']."</h4>                                                               
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
                                  <i class='fa fa-commenting-o text-primary'></i>
                              </div>
                          </div>
                          <div class='col-6 ml-auto align-self-center text-center'>
                              <div class='m-l-10 text-black-50 float-right'>
                                 
                                  <p class='mb-0 '><a href='index.php?page=pengajuan'>DATA PENGAJUAN</p></a><br> 
                                  <h4 class='mb-0'>".$data_statistik7['total_pengajuan']."</h4>                                                                
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