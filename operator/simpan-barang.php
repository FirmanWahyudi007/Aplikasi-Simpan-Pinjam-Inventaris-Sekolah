<?php 
	include '../config/koneksi.php';
	// $id_inven = $_POST['id_inventaris'];
	// $jumlah = count($id_inven);

	// for ($x=0; $x <$jumlah ; $x++) { 
	// 	# code...
	// 	echo $id_inven."<br>";
	// }
	if (isset($_POST['pilih'])) {
		$pilih = $_POST['pilih'];
		$id_peminjaman  = $_POST['id_peminjaman'];
		foreach ($pilih as $id_inventaris ) {
			$query = mysqli_query($koneksi,"insert into detailpinjam values('','$id_inventaris','$id_peminjaman')");
			if ($query) {
				# code...
				$update = mysqli_query($koneksi,"update inventaris set status = 'tidak ada' where id_inventaris = '$id_inventaris'");
				if ($update) {
					# code...
					$update1 = mysqli_query($koneksi,"update peminjaman set status_peminjaman = 'Di Pinjam' where id_peminjaman = '$id_peminjaman'");
					if ($update1) {
						# code...
						header("location:index.php?page=datapeminjaman");
					}
				}
			}
		}
	}
 ?>