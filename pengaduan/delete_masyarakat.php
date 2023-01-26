<?php  
	require_once 'koneksi.php';

	$nik = $_POST['nik'];

	$query = ("DELETE FROM masyarakat WHERE nik = '$nik'");

	$sql = mysqli_query($conn, $query);

	if($sql){
		echo json_encode(array('response' => 'success'));
	} else {
		echo json_encode(array('response' => 'failed'));
	}
?>
