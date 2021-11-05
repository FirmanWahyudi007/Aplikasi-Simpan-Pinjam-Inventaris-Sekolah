<?php 
// mengaktifkan session
session_start();
if (isset($_SESSION['username'])) {
		# code...
	if ($_GET['page'] == "akses_gagal") {
		# code...
		echo "<h5>Maaf anda tidak bisa mengakses halaman ini</h5>";
	}elseif ($_GET['page'] == "login") {
		if ($_SESSION['level'] == "ADMIN UTAMA") {
			# code...
			echo "<h5>Anda Harus Logout Terlebih Dahulu</h5><a href='admin/'>kembali</a>";
		}elseif ($_SESSION['level'] == "ADMIN") {
			# code...
			echo "<h5>Anda Harus Logout Terlebih Dahulu</h5><a href='operator/'>kembali</a>";
		}
	}
}else{
	header("location:login.php?pesan=belum_login");
}
?>