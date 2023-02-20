<?php
include ('conf.php');
$sql	= "SELECT * FROM pasien";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo "<tr>
				<td>" . $row["nama_pasien"]."</td>
				<td>" . $row["penyakit"]."</td>
				<td>" . $row["obat"]."</td>
				<td><a id=".$row["kd_pasien"]." class=\"edit btn btn-lg btn-warning\" href=\"#\"> <span class=\"glyphicon glyphicon-pencil\"></span> </a></td>
				</tr>";					
	}
} else {
	echo "	<tr>
				<td>00</td>
				<td>Data tidak ditemukan</td>
				<td></td>
				</tr";
}
?>