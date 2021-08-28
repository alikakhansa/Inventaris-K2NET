<div class="page-wrapper">
            <div class="content">
                <div class="row">
            <div class="card-body table-responsive">
            <div class="page-title-right">
   <ol class="breadcrumb m-0">
      <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
      <li class="breadcrumb-item active">Pengembalian Barang</li>
   </ol>
</div>
<br>
                 <h5 class="header-title" style="font-size: 20px;">PENGEMBALIAN BARANG</h5>
                 <br>
                        <?php 
                        @$PAGE =$_GET['page'];
                        ?>
           <div>       
                 <a href="?page=kembali&aksi=tambah"><button type="button" class="btn btn-info"><i class="fa fa-plus"> Pengembalian Barang</button></a></i>
              
                 </div>
                 <br>   
                    <br>
                <div>
                    <table id="dataTables-example" class="table border-0">
<thead>
                        <tr>
                            <th>No</th>
                            <th>id Pengembalian</th>
                            <th>Id Peminjaman</th>
                            <th>Nama Sekolah</th>
                            <th>Kode Alat</th>
                            <th>Tanggal Kembali</th>
                            <th>status</th>

                        </tr>

                        </thead>
                        <tbody>
                            <?php
                            include '../inc/koneksi.php';

                               $query= @mysqli_query($koneksi, "SELECT * FROM daftar_pengembalian ORDER BY id_pengembalian DESC") or die(mysqli_error($koneksi));

                              

                              $no=1;
                              while ($data = @mysqli_fetch_array($query)) {
                                $STATUS  = $data['status'];
                             
                               
                            ?>
                                        <tr>
                                            <td><?php  echo $no; ?></td>
                                            <td><?php  echo $data['id_pengembalian'];  ?></td>
                                            <td><?php  echo $data['id_peminjaman'];  ?></td>
                                            <td><?php  echo $data['nama_sekolah']; ?></td>
                                            <td><?php  echo $data['kode_alat']; ?></td>
                                            <td><?php  echo $data['tanggal_kembali']; ?></td>
                                        
                                            <td> 
                                                <span class="#" data-toggle="tooltip" data-placement="bottom">
                                                <?php if($STATUS==1){ 
                                                    echo "<span class='badge badge-pill badge-success'>Sudah Kembali</span>";
                                                }elseif($STATUS==0){
                                                    echo "<span class='badge badge-pill badge-danger'>Belum Kembali</span>";
                                                }
                                                 ?>
                                                </span> 
                                            </td>
                                        </tr>
                                                                                                        <?php  
    $no++;
    }
    ?>

                        </tbody>

                    </table>
                </div>           
            </div>
        </div>
    </div>
</div>

