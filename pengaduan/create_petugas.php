<?php  
	require_once 'koneksi.php';

	$nama_petugas 	= $_POST['nama_petugas'];
	$username 		= $_POST['username'];
	$password 		= md5($_POST['password']);
	$telp 			= $_POST['telp'];
	$level 			= $_POST['level'];

	$query = ("INSERT INTO petugas (nama_petugas, username, password, telp, level) VALUES ('$nama_petugas', '$username', '$password', '$telp', '$level')");

	$sql = mysqli_query($conn, $query);

	if ($sql) {
		echo json_encode(array('response' => 'success'));
	} else {
		echo json_encode(array('response' => 'failed'));
	}
?>
