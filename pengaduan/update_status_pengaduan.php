<?php  
	require_once 'koneksi.php';

	$id_pengaduan 	= $_POST['id_pengaduan'];
	$status			= $_POST['status'];

	$query = ("UPDATE pengaduan SET status='$status' WHERE id_pengaduan='$id_pengaduan'");

	$sql = mysqli_query($conn, $query);

	if ($sql) {
		echo json_encode(array('response' => 'success'));
	} else {
		echo json_encode(array('response' => 'failed'));
	}

?>