<?php  
	require_once 'koneksi.php';

	$id_pengaduan = $_POST['id_pengaduan'];
	$query = ("SELECT * FROM tanggapan WHERE id_pengaduan='$id_pengaduan'");

	$sql = mysqli_query($conn, $query);

	$hasil = array();
	while ($baris = mysqli_fetch_array($sql)) {
		array_push($hasil, array(
			'id_tanggapan'	=> $baris['id_tanggapan'],
			'id_pengaduan'	=> $baris['id_pengaduan'],
			'tgl_tanggapan'	=> $baris['tgl_tanggapan'],
			'tanggapan' 	=> $baris['tanggapan'],
			'id_petugas'	=> $baris['id_petugas']
		));
	}

	echo json_encode(array(
		'hasil' 	=> $hasil
	));
?>
