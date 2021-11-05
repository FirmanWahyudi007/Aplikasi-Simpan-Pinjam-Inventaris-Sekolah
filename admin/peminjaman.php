<?php 
	$id = $_SESSION['id'];
	$query = mysqli_query($koneksi,"Select p.nama_pegawai,m.status_peminjaman,m.id_peminjaman,m.tanggal_pinjam,m.tanggal_kembali From pegawai p JOIN peminjaman m ON p.id_pegawai = m.id_pegawai");
 ?>
<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default panel-table">
			<div class="panel-heading">List Peminjaman</div>
			<div class="panel-body">
				<table id="table1" class="table table-striped table-hover table-fw-widget">
					<thead>
						<tr>
							<th>Nama</th>
							<th>Tanggal Pinjam</th>
							<th>Tanggal Kembali</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							if (mysqli_num_rows($query)>0) {
								# code...
								while ($data = mysqli_fetch_array($query)) {
									# code...
									
						?>
						<tr>
							<td><?php echo $data['nama_pegawai']; ?></td>
							<td><?php echo $data['tanggal_pinjam']; ?></td>
							<td><?php echo $data['tanggal_kembali']; ?></td>
							<?php 
								echo "<td><a href='detail.php?id=$data[id_peminjaman]'>Detail</a></td>";
							?>
						</tr>
						<?php
								}
							}
							echo mysqli_error($koneksi);
						 ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>