<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default panel-table">
			<div class="panel-heading">List Inventaris</div>
			<div class="panel-body">
				<table id="table1" class="table table-striped table-hover table-fw-widget">
					<thead>
						<tr>
							<th>#</th>
							<th>Kode</th>
							<th>Nama Barang</th>
							<th>Jenis</th>
							<th>Ruang</th>
							<th>Tanggal Regis</th>
							<th>Jumlah</th>
							<th>Keterangan</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$query = mysqli_query($koneksi,"Select i.id_inventaris,i.nama,i.kode_inventaris,i.tanggal_registrasi,i.kondisi,i.status,i.keterangan,r.nama_ruang,j.nama_jenis FROM inventaris i JOIN ruang r ON i.id_ruang=r.id_ruang JOIN jenis j ON i.id_jenis=j.id_jenis");
							$no = 1;
							if (mysqli_num_rows($query)>0) {
								# code...
								while ($data = mysqli_fetch_array($query)) {
									# code...
		 				?>
		 					<tr>
		 						<td><?php echo $no++ ?></td>
		 						<td><?php echo $data['kode_inventaris']; ?></td>
		 						<td><?php echo $data['nama']; ?></td>
		 						<td><?php echo $data['kondisi']; ?></td>
		 						<td><?php echo $data['status']; ?></td>
		 						<td><?php echo $data['tanggal_registrasi']; ?></td>
		 						<td><?php echo $data['nama_ruang']; ?></td>
		 						<td><?php echo $data['nama_jenis']; ?></td>
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