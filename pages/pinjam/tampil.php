<div class="page-wrapper">
            <div class="content">
                <div class="row">
            <div class="card-body table-responsive">
            <div class="page-title-right">
   <ol class="breadcrumb m-0">
      <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
      <li class="breadcrumb-item active">Peminjaman Barang</li>
   </ol>
</div>
<br>
                 <h5 class="header-title" style="font-size: 20px;">PEMINJAMAN BARANG</h5>
                 <br>
                        <?php 
                        @$PAGE =$_GET['page'];
                        ?>
                 <div>       
                 <a href="?page=pinjam&aksi=tambah"><button type="button" class="btn btn-info"><i class="fa fa-plus"> Pinjam Barang</button></a></i>
              
                 </div>
                 <br>   
                <div>
                    <table id="dataTables-example" class="table border-0">
<thead>
                        <tr>
                            <th>No</th>
                            <th>Id Peminjaman</th>
                            <th>Kode Alat</th>
                            <th>Nama Alat</th>
                            <th>Nama Sekolah</th>
                            <th>Stok Awal</th>
                            <th>Stok Akhir</th>
                            <th>Alat Masuk</th>
                            <th>Alat Keluar</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                         
                        </tr>

                        </thead>
                        <tbody>
                            <?php
                            include '../inc/koneksi.php';

                               $query= @mysqli_query($koneksi, "SELECT * FROM daftar_peminjaman ORDER BY id_peminjaman DESC") or die(mysqli_error($koneksi));
                              

                              $no=1;
                              while ($data = @mysqli_fetch_array($query)) {
                                
                             
                               
                            ?>
                                        <tr>
                                            <td><?php  echo $no; ?></td>
                                            <td><?php  echo $data['id_peminjaman'];  ?></td>
                                            <td><?php  echo $data['kode_alat']; ?></td>
                                            <td><?php  echo $data['nama_alat']; ?></td>
                                            <td><?php  echo $data['nama_sekolah']; ?></td>
                                            <td><?php  echo $data['stok_awal'] ; ?></td>
                                            <td><?php  echo $data['stok_akhir']; ?></td>
                                            <td><?php  echo $data['alat_masuk']; ?></td>
                                            <td><?php  echo $data['alat_keluar']; ?></td>
                                            <td><?php  echo $data['tanggal']; ?></td>
                                            <td><?php  echo $data['keterangan']; ?></td>
                                           
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

