<?php 
	  	require_once '../config/koneksi.php';
  		session_start();
  		if ($_SESSION['status'] != "Login") {
    		# code...
    		header("location:../login.php?pesan=belum_login");
  		}elseif ($_SESSION['level'] != "ADMIN") {
    		# code...
    		header("location:../pesan.php?page=akses_gagal");
  		}
		include '../include/header.php';

		$id = $_GET['id'];
		$query = mysqli_query($koneksi,"Select p.nama_pegawai,m.status_peminjaman,m.id_peminjaman,m.tanggal_pinjam,m.tanggal_kembali,m.status_peminjaman From pegawai p JOIN peminjaman m ON p.id_pegawai = m.id_pegawai WHERE m.id_peminjaman = '$id'");
		$data = mysqli_fetch_array($query);
		echo mysqli_error($koneksi);
 ?>
  	<?php
	 ?>
 <div class="col-xs-12">
	<div class="panel panel-default panel-border-color panel-border-color-primary">
        <div class="panel-heading panel-heading-devider">Pengembalian Barang</div>
        <div class="panel-body">
        	<form method="post" class="form-horizontal group-border-dashed" autocomplete="off" action="proses-pengembalian.php">
        			<div class="form-group">
        				<label class="col-sm-2 control-label">ID Peminjaman</label>
        				<div class="col-sm-4">
        					<input type="text" name="id_pegawai1" class="form-control" value="<?php echo $data['id_peminjaman']; ?>" readonly>
                            <input type="hidden" name="id_peminjaman" class="form-control" value="<?php echo $data['id_peminjaman']; ?>">
        				</div>
        			</div>
        			<div class="form-group">
        				<label class="col-sm-2 control-label">Nama Pegawai</label>
        				<div class="col-sm-4">
        					<input type="text" name="id_pegawai" class="form-control" value="<?php echo $data['nama_pegawai']; ?>" readonly>
        				</div>
        			</div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Status Peminjaman</label>
                        <div class="col-sm-4">
                            <input type="text" name="id_pegawai" class="form-control" value="<?php echo $data['status_peminjaman']; ?>" readonly>
                        </div>
                    </div>
        			<div class="form-group">
        				<label class="col-sm-2 control-label">Tanggal Pinjam</label>
        				<div class="col-sm-4">
        					<input type="text" name="id_pegawai" class="form-control" value="<?php echo $data['tanggal_pinjam']; ?>" readonly>
        				</div>
        			</div>
        			<div class="form-group">
        				<label class="col-sm-2 control-label">Tanggal Kembali</label>
        				<div class="col-sm-4">
        					<input type="text" name="id_pegawai" class="form-control" value="<?php echo $data['tanggal_kembali']; ?>" readonly>
        				</div>
        			</div>
        			<div class="col-sm-12">

        				<table class="table table-condensed table-hover table-bordered table-striped">
        					<thead>
        						<tr>
        							<th>No</th>
        							<th>Kode Inventaris</th>
        							<th>Nama Barang</th>
        							<th>Aksi</th>
        						</tr>
        					</thead>
        					<tbody>
        						<?php
        							$No=1;
                                    $pegawai = $_SESSION['id'];
        							$check = mysqli_query($koneksi,"Select p.id_peminjaman,d.id_detailpinjam,i.kode_inventaris,i.nama, i.id_inventaris,i.status FROM peminjaman p JOIN detailpinjam d ON p.id_peminjaman=d.id_peminjaman JOIN inventaris i ON d.id_inventaris=i.id_inventaris WHERE p.id_peminjaman = '$id'");
        							$numRows = $check->num_rows;
        							if (mysqli_num_rows($check)) {
        								
        								while ($all = mysqli_fetch_array($check)) {
        									# code...
        									echo "<tr>";
        									echo "<td>".$No++."</td>";
        									echo "<td>".$all['kode_inventaris']."</td>";
        									echo "<td>".$all['nama']."</td>";
        									?>
        									<td><input id="check" type="checkbox" name="pilih[]" value="<?php echo $all['id_inventaris']; ?>"></td>
        						<?php
        								}
        							}
        							echo mysqli_error($koneksi);
        						 ?>
        					</tbody>
        				</table>
        			</div>
        			<div class="col-sm-11">
                    <p class="text-right">
                        <button type="submit" class="btn btn-space btn-primary">Kembalikan</button>
                    </p>
                </div>
        	</form>
        </div>
    </div>
</div>
<?php 
	include '../include/footer.php';
 ?>
