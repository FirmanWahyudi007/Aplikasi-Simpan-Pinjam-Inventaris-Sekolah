<?php 
	include '../config/koneksi.php';
	if (isset($_POST['pilih'])) {
		$pilih = $_POST['pilih'];
		$id_peminjaman  = $_POST['id_peminjaman'];
		
		foreach ($pilih as $id_inventaris ) {
				$update = mysqli_query($koneksi,"update inventaris set status = 'ada' where id_inventaris = '$id_inventaris'");
				if ($update) {
					# code...
					$check = mysqli_query($koneksi,"Select p.id_peminjaman,d.id_detailpinjam,i.kode_inventaris,i.nama, i.id_inventaris,i.status FROM peminjaman p JOIN detailpinjam d ON p.id_peminjaman=d.id_peminjaman JOIN inventaris i ON d.id_inventaris=i.id_inventaris WHERE p.id_peminjaman = '$id_peminjaman' AND i.status = 'tidak ada'");
        							$numRows = $check->num_rows;
					if ($numRows == 0) {
						$update1 = mysqli_query($koneksi,"update peminjaman set status_peminjaman = 'Di Kembalikan' where id_peminjaman = '$id_peminjaman'");
						if ($update1) {
							header("location:index.php?page=datapeminjaman");
							// echo "mare";
						}
					}else{
						// echo "bunggen";
						header("location:index.php?page=datapeminjaman");
					}
						# code...
						
				}else{
					mysqli_eror($koneksi);
				}
			}
		}
 ?>