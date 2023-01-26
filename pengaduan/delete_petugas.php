<?php  
	require_once 'koneksi.php';

	$id_petugas = $_POST['id_petugas'];

	$query = ("DELETE FROM petugas WHERE id_petugas = '$id_petugas'");

	$sql = mysqli_query($conn, $query);

	if($sql){
		echo json_encode(array('response' => 'success'));
	} else {
		echo json_encode(array('response' => 'failed'));
	}
?>
