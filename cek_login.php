<?php
	session_start();
	include 'config/koneksi.php';
	if (isset($_POST['login'])) {
		# code...
		$user = $_POST['username'];
		$pass = $_POST['password'];

		$login = mysqli_query($koneksi,"SELECT * FROM petugas WHERE username='$user' && password='$pass'");

		if (mysqli_num_rows($login)>0) {
			# code...
			$data = mysqli_fetch_array($login);

			if ($data['id_level'] == "1") {
				# code...
				$_SESSION['id'] = $data['id_petugas'];
				$_SESSION['username'] = $user;
				$_SESSION['nama'] = $data['nama_petugas'];
				$_SESSION['level'] = "ADMIN UTAMA";
				$_SESSION['status'] = "Login";

				header("location:admin/");
			}elseif ($data['id_level'] == "2") {
				# code...
				$_SESSION['id'] = $data['id_petugas'];
				$_SESSION['username'] = $user;
				$_SESSION['nama'] = $data['nama_petugas'];
				$_SESSION['level'] = "ADMIN";
				$_SESSION['status'] = "Login";

				header("location:operator/");
			}else{
				header("location:login.php?pesan=gagal");
			}
		}else{
			header("location:login.php?pesan=gagal");
		}
	}
?>