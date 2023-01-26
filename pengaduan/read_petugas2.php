<?php  
	require_once 'koneksi.php';

	$id_petugas = $_GET['id_petugas'];
	$query 		= ("SELECT * FROM petugas WHERE id_petugas='$id_petugas'");

	$sql = mysqli_query($conn, $query);

	$hasil = array();
	while ($baris = mysqli_fetch_array($sql)) {
		array_push($hasil, array(
			'id_petugas'	=> $baris['id_petugas'],
			'nama_petugas'	=> $baris['nama_petugas'],
			'username' 		=> $baris['username'],
			'password' 		=> $baris['password'],
			'telp'			=> $baris['telp'],
		));
	}

	echo json_encode(array(
		'hasil' 	=> $hasil
	));
?>
