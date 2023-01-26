<?php  
	require_once 'koneksi.php';

	$query = ("SELECT * FROM petugas");

	$sql = mysqli_query($conn, $query);

	$hasil = array();
	while ($baris = mysqli_fetch_array($sql)) {
		array_push($hasil, array(
			'id_petugas'	=> $baris['id_petugas'],
			'nama_petugas'	=> $baris['nama_petugas'],
			'username' 		=> $baris['username'],
			'password' 		=> $baris['password'],
			'telp'			=> $baris['telp'],
			'level'			=> $baris['level']
		));
	}

	echo json_encode(array(
		'hasil' 	=> $hasil
	));
?>
