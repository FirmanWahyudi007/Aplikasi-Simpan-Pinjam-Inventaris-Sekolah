<?php
session_start();
include '../config/koneksi.php';
if (isset($_POST['tambah'])) {
	# code...
	$nomorbaru = $_POST['id_peminjaman'];
	$id_petugas = $_SESSION['id'];
	$id_peg = $_POST['id_pegawaix'];
	$tgl_pinjam = $_POST['tgl_pinjam'];
	$tgl_kembali = $_POST['tgl_kembali'];
	$insert = mysqli_query($koneksi,"insert into peminjaman values('$nomorbaru','$tgl_pinjam','$tgl_kembali','Di Proses','$id_peg','$id_petugas')");
	if ($insert) {
		# code...
		header("location:index.php?page=datapeminjaman");
	}else{
		echo mysqli_error($koneksi);
	}
}
?>