<?php  
	require_once 'koneksi.php';

	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$query = ("SELECT * FROM masyarakat WHERE username='$username' AND password='$password'");

	$sql = mysqli_query($conn, $query);

	$row = mysqli_fetch_assoc($sql);
		$nik = $row['nik'];
		$nama = $row['nama'];
		$password = $row['password'];
		echo json_encode(array("response" => "success", "nik" => $nik, "nama" => $nama, "password" => $password));
?>
