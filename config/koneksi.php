<?php 
	$username = 'root';
	$password = '';
	$host = 'localhost';
	$db = 'inventaris';

	$koneksi = mysqli_connect($host,$username,$password,$db);
	if (! $koneksi) {
		die('Could not connect: ' . mysql_error());
   }

 ?>