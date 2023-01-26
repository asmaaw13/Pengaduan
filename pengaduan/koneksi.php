<?php  
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASS', '');
	define('DB', 'db_pengaduan');

	$conn = mysqli_connect(HOST, USER, PASS, DB) or die("tidak bisa konek");
?>
