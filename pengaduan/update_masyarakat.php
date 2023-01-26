<?php  
	require_once 'koneksi.php';

	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$telp = $_POST['telp'];

	$query = ("UPDATE masyarakat SET nama='$nama', username='$username', password='$password', telp='$telp' WHERE nik='$nik'");

	$sql = mysqli_query($conn, $query);

	if ($sql) {
		echo json_encode(array('response' => 'success'));
	} else {
		echo json_encode(array('response' => 'failed'));
	}

?>
