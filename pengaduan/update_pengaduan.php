<?php  
	require_once 'koneksi.php';

	$id_pengaduan	= $_POST['id_pengaduan'];
	$isi_laporan 	= $_POST['isi_laporan'];
	$foto 			= $_POST['foto'];

	$query = ("UPDATE pengaduan SET isi_laporan='$isi_laporan', foto='$foto' WHERE id_pengaduan='$id_pengaduan'");

	$sql = mysqli_query($conn, $query);

	if ($sql) {
		echo json_encode(array('response' => 'success'));
	} else {
		echo json_encode(array('response' => 'failed'));
	}

?>
