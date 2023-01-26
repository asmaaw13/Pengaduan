<?php  
	require_once 'koneksi.php';

	$id_petugas = $_POST['id_petugas'];
	$nama_petugas = $_POST['nama_petugas'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$telp = $_POST['telp'];

	$query = ("UPDATE petugas SET nama_petugas='$nama_petugas', username='$username', password='$password', telp='$telp' WHERE id_petugas='$id_petugas'");

	$sql = mysqli_query($conn, $query);

	if ($sql) {
		echo json_encode(array('response' => 'success'));
	} else {
		echo json_encode(array('response' => 'failed'));
	}

?>