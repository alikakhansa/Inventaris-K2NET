<div class="page-wrapper">
            <div class="content">
                <div class="row">
            <div class="card-body table-responsive">
<div class="page-title-right">
   <ol class="breadcrumb m-0">
      <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
      <li class="breadcrumb-item active">Stok Barang</li>
   </ol>
</div>
<br>
                <h5 class="header-title" style="font-size: 20px;">STOK BARANG</h5>
              <a href="?page=barang&aksi=tambah"><button type="button" class="btn btn-info"><i class="fa fa-plus"> Tambah</button></a></i>
               <br><br>
                <div>
                    <table id="dataTables-example" class="table border-0">
                        <thead>

                        <tr>
                        	<th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Stok Awal</th>
                            <th>Stok Akhir</th>
                            <th>Barang Keluar</th>
                            <th>Barang Masuk</th>
                            <th>Keterangan</th>
                            <th>Qty</th>
                            <th>Aksi</th>
                        </tr>
                        

                        </thead>
                        <tbody>
                       <?php
                       include '../inc/koneksi.php';
								$sql = mysqli_query($koneksi, "SELECT * FROM daftar_barang ORDER BY kode_barang DESC") or die(mysqli_error($koneksi));

									if(mysqli_num_rows($sql) > 0){
								
									$no = 1;
							
									while($data = mysqli_fetch_assoc($sql)){
							
										echo '
										<tr>
											<td>'.$no.'</td>
											<td>'.$data['kode_barang'].'</td>
											<td>'.$data['nama_barang'].'</td>
                                            <td>'.$data['stok_awal'].'</td>
											<td>'.$data['stok_akhir'].'</td>
                                            <td>'.$data['b_keluar'].'</td>
											<td>'.$data['b_masuk'].'</td>
											<td>'.$data['ket'].'</td>
											<td>'.$data['qty'].'</td>
											
											<td>
												<a href="index.php?page=barang&aksi=edit&kode_barang='.$data['kode_barang'].'" class="btn btn-warning"><i class="fa fa-edit"> Edit</a></i>
												<a href="../pages/barang/hapus.php?kode_barang='.$data['kode_barang'].'" class="btn btn-danger tom" onclick="return confirm(\'Yakin ingin menghapus data ini?\')"><i class="fa fa-trash"> Delete</a></i>
											</td>
										</tr>
										';
										$no++;
									}

								}else{
									echo '
									<tr>
										<td colspan="6">Tidak ada data.</td>
									</tr>
									';
								}
								?>
                        </tbody>
                    </table>
                </div>           
            </div>
        </div>
    </div>
</div>
