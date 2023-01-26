<?php  
	require_once 'koneksi.php';

	$tgl_pengaduan 	= date("Y-m-d");
	$nik 			= $_POST['nik'];
	$judul 			= $_POST['judul'];
	$isi_laporan 	= $_POST['isi_laporan'];
	$foto 			= $_POST['foto'];
	$status 		= $_POST['status'];

	$target_dir = "images/". rand() . "_". time() . ".jpeg";

	$decoded_string = base64_decode($foto);

	$file = fopen($target_dir, 'wb');

	$is_written = fwrite($file, $decoded_string);
	fclose($file);

	$photo = 'http://192.168.244.51/pengaduan/'.$target_dir;
	
	if ($is_written > 0) {
		$query = ("INSERT INTO pengaduan (tgl_pengaduan, nik, judul, isi_laporan, foto, status) VALUES ('$tgl_pengaduan', '$nik', '$judul', '$isi_laporan', '$photo', '$status')");
	}

	$sql = mysqli_query($conn, $query);

	if ($sql) {
		echo json_encode(array('response' => 'success'));
	} else {
		echo json_encode(array('response' => 'failed'));
	}

?>