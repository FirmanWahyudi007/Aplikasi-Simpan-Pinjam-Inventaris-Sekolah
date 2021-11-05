<?php 
	if (isset($_POST['pilih'])) {
		# code...
		
		$pilih = implode(',',$_POST['pilih']);

		echo $pilih;
	}
 ?>