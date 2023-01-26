<?php  
	require_once 'koneksi.php';

	$id_pengaduan	= $_POST['id_pengaduan'];
	$tgl_tanggapan 	= date('Y-m-d');
	$tanggapan 		= $_POST['tanggapan'];
	$id_petugas 	= $_POST['id_petugas'];

	$query = ("INSERT INTO tanggapan (id_pengaduan, tgl_tanggapan, tanggapan, id_petugas) VALUES ('$id_pengaduan', '$tgl_tanggapan', '$tanggapan', '$id_petugas')");

	$sql = mysqli_query($conn, $query);

	if ($sql) {
		echo json_encode(array('response' => 'success'));
	} else {
		echo json_encode(array('response' => 'failed'));
	}
?>
