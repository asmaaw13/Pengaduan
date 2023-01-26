<?php  
	require_once 'koneksi.php';

	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$query = ("SELECT * FROM petugas WHERE username='$username' AND password='$password'");

	$sql = mysqli_query($conn, $query);

	if (!mysqli_num_rows($sql) > 0) {
		echo json_encode(array("response" => "failed"));
	} else {
		$row = mysqli_fetch_assoc($sql);
		$id_petugas = $row['id_petugas'];
		$password 	= $row['password'];
		$level		= $row['level'];
		echo json_encode(array(
			"response" 	 => "success", 
			"id_petugas" => $id_petugas,
			"password" 	 => $password,
			"level"		 => $level
		));
	}
?>
