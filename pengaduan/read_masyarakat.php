<?php  
	require_once 'koneksi.php';

	$nik 	= $_GET['nik'];
	$query 	= ("SELECT * FROM masyarakat WHERE nik='$nik'");

	$sql = mysqli_query($conn, $query);

	$hasil = array();
	while ($baris = mysqli_fetch_array($sql)) {
		array_push($hasil, array(
			'nik'	 	=> $baris['nik'],
			'nama'		=> $baris['nama'],
			'username' 	=> $baris['username'],
			'password' 	=> $baris['password'],
			'telp'		=> $baris['telp']
		));
	}

	echo json_encode(array(
		'hasil' 	=> $hasil
	));
?>
