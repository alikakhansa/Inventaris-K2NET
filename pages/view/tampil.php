<div class="page-wrapper">
            <div class="content">
                <div class="row">
            <div class="card-body table-responsive">

                <h5 class="header-title" style="font-size: 20px;">VIEW SEKOLAH</h5>
                    <button type="button" class="btn btn-outline-primary btn-lg-10" style="text-align: left;"><a href="../laporan/kembali.php"  target="_blank"><i class="fa fa-print"></i>  LAPORAN </a></button>
					<a href="?page=view&aksi=tambah"><button type="button" class="btn btn-info"><i class="fa fa-plus"> Tambah</button></a></i>
                <div>
                    <table id="dataTables-example" class="table border-0">
                        <thead>
 							<br>
                        <tr>
                        	<th>No</th>
                            <th>Tanggal</th>
                            <th>Kategori</th>
                            <th>Jumlah Barang</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>

                        </thead>
                        <tbody>
						<?php
                       include '../inc/koneksi.php';
					    $tes = @$_GET['nama_sekolah'];
                        $sql = mysqli_query($koneksi, "SELECT * FROM sekolah where sekolah.nama_sekolah='$tes'") or die(mysqli_error($koneksi));
									if(mysqli_num_rows($sql) >= 0){
								
									$no = 1;
							
									while($data = mysqli_fetch_assoc($sql)){
							
										echo '
										<tr>
											<td>'.$no.'</td>
										
											<td>'.$data['tanggal'].'</td>
											<td>'.$data['kategori'].'</td>
											<td>'.$data['jumlah_barang'].'</td>
											<td>'.$data['keterangan'].'</td>									
											<td>
												<a href="index.php?page=view&aksi=edit&nama_sekolah='.$data['nama_sekolah'].'" class="btn btn-warning"><i class="fa fa-edit"> Edit</a></i>

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
