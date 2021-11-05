<?php 
	session_start();
	if (isset($_SESSION['username'])) {
		# code...
		header("location:pesan.php?page=login");
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login - ISPS</title>
	<link rel="shortcut icon" href="assets/img/logo-s.png">		
	<link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css">
	<link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<?php 
		if (isset($_GET['pesan'])) {
			# code...
			if ($_GET['pesan']=="gagal") {
				# code...
				echo "<div role='alert' class='alert alert-warning alert-dismissible'>
                    <button type='button' data-dismiss='alert' aria-label='Close' class='close'><span aria-hidden='true' class='mdi mdi-close'></span></button><span class='icon mdi mdi-alert-triangle'></span>Username Atau Password Salah!
                  </div>";
			}elseif ($_GET['pesan']=="logout") {
				# code...
				echo "<div role='alert' class='alert alert-success alert-dismissible'>
                    <button type='button' data-dismiss='alert' aria-label='Close' class='close'><span aria-hidden='true' class='mdi mdi-close'></span></button><span class='icon mdi mdi-check'></span>Anda Berhasil Keluar
                  </div>";
			}elseif ($_GET['pesan'] == "belum_login") {
				# code...
				echo "<div role='alert' class='alert alert-danger alert-dismissible'>
                    <button type='button' data-dismiss='alert' aria-label='Close' class='close'><span aria-hidden='true' class='icon mdi mdi-close-circle-o'></span></button><span class='icon mdi mdi-close-circle-o'></span>Anda Belum Login
                  </div>";
			}
		}
	 ?>
	<div class="be-splash-screen">
		<div class="be-wrapper be-login">
			<div class="be-content">
				<div class="main-content container-fluid">
					<div class="splash-container">
						<div class="panel panel-default panel-border-color panel-border-color-primary">
							<div class="panel-heading">
								<img src="assets/img/try.png" alt="logo" class="logo-img" width="102" height="23">
								<span class="splash-description">Silahkan masukkan userame dan password.</span>
							</div>
							<div class="panel-body">
								<form action="cek_login.php" method="POST" autocomplete="off">
									<div class="form-group">
										<input type="text" name="username" placeholder="username" class="form-control">
									</div>
									<div class="form-group">
										<input type="password" name="password" placeholder="password" class="form-control">
									</div>
									<div class="form-group login-submit">
										<button class="btn btn-primary btn-xl" type="submit" name="login">Log In</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
	<script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/main.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      });
      
    </script>
</html>