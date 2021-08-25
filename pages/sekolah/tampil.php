<div class="page-wrapper">
            <div class="content">
                <div class="row">
            <div class="card-body table-responsive">

                <h5 class="header-title" style="font-size: 20px;">DAFTAR SEKOLAH</h5>
                    <a href="?page=sekolah&aksi=tambah"> <button type="button" class="btn btn-info">  Tambah</button></a></i>
            
                <div>
                    <table id="dataTables-example" class="table border-0">
                        <thead>
 							<br>
                        <tr>
                        	<th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            
                            <th>Aksi</th>
                        </tr>

                        </thead>
                        <tbody>
                       <?php
                       include '../inc/koneksi.php';
								$sql = mysqli_query($koneksi, "SELECT * FROM sekolah ORDER BY nama_sekolah DESC") or die(mysqli_error($koneksi));

									if(mysqli_num_rows($sql) > 0){
								
									$no = 1;
							
									while($data = mysqli_fetch_assoc($sql)){
							
										echo '
										<tr>
											<td>'.$no.'</td>
											<td>'.$data['nama_sekolah'].'</td>
											<td>'.$data['alamat'].'</td>
											
										
											<td>
										

											<a href="index.php?page=view&aksi=view&nama_sekolah='.$data['nama_sekolah'].'" class="btn btn-success"><i class="fa fa-book"> View</a></i>

												<a href="index.php?page=sekolah&aksi=edit&nama_sekolah='.$data['nama_sekolah'].'" class="btn btn-warning"><i class="fa fa-edit"> Edit</a></i>

												<a href="../pages/sekolah/hapus.php?nama_sekolah='.$data['nama_sekolah'].'" class="btn btn-danger tom" onclick="return confirm(\'Yakin ingin menghapus data ini?\')"><i class="fa fa-trash"> Delete</a></i>
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
