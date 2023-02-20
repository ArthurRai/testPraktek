<?php
include ('conf.php');

$nama_pasien 	= $_POST['nama_pasien'];
$penyakit		= $_POST['penyakit'];
$obat			= $_POST['obat'];


$sql		= " INSERT INTO pasien (kd_pasien, nama_pasien, penyakit, obat) VALUES (NULL, '$nama_pasien', '$penyakit', '$obat')";

if ($conn->query($sql) === TRUE) {
	echo "Data telah disimpan.";
} else {
	echo "Error : " . $sql . "<br />" . $conn->error;
}
$conn->close();
?>