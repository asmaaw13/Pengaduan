<?php  
	require_once 'koneksi.php';

	$id_pengaduan = $_POST['id_pengaduan'];

	$query = ("SELECT id_pengaduan, tgl_pengaduan, ma.nama, judul, isi_laporan, foto, status FROM pengaduan as pe INNER JOIN masyarakat as ma ON pe.nik = ma.nik WHERE id_pengaduan='$id_pengaduan'");	

	$sql = mysqli_query($conn, $query);

	$hasil = array();
	while ($baris = mysqli_fetch_array($sql)) {
	array_push($hasil, array(
		'id_pengaduan'	=> $baris['id_pengaduan'],
		'tgl_pengaduan'	=> $baris['tgl_pengaduan'],
		'nama'			=> $baris['nama'],
		'judul'			=> $baris['judul'],
		'isi_laporan' 	=> $baris['isi_laporan'],
		'foto'		 	=> $baris['foto'],
		'status'		=> $baris['status']
		));
	}

	echo json_encode(array(
		'hasil' 	=> $hasil
	));
?>
