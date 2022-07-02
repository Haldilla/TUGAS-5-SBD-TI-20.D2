<!DOCTYPE html>
<html>
<head>
	<title>TUGAS SISTEM BASIS DATA KE-5</title>
</head>
<body>
	<font size="5"></font>
	<h1 align="center">Data Klinik</h1>
	<h2 align="center">NIM 312010177</h2>
	<h3>Tabel Berobat</h3>
	<table border="1">
		<tr>
			<th>id_berobat</th>
			<th>id_pasien</th>
			<th>id_dokter</th>
			<th>tgl_berobat</th>
			<th>keluhan_pasien</th>
			<th>hasil_diagnosa</th>
			<th>penatalaksanaan</th>
		</tr>
		
		<?php  
			include "koneksi.php";
			$query = mysqli_query ($conn, "Select * From berobat");
			while ($data = mysqli_fetch_array($query)) {
		?>
		<tr>	
			<td><?php echo $data ["id_berobat"]; ?></td>
			<td><?php echo $data ["id_pasien"]; ?></td>
			<td><?php echo $data ["id_dokter"]; ?></td>
			<td><?php echo $data ["tgl_berobat"]; ?></td>
			<td><?php echo $data ["keluhan_pasien"]; ?></td>
			<td><?php echo $data ["hasil_diagnosa"]; ?></td>	
			<td><?php echo $data ["penatalaksanaan"]; ?></td>
		</tr>
		<?php  
		}
		?>
	</table>
	<br/>

	<h3>Tabel Dokter</h3>
	<table border="1">

		<tr>
			<th>id_dokter</th>
			<th>nama_dokter</th>	
		</tr>
		
		<?php  
		include "koneksi.php";
		$query = mysqli_query ($conn, "Select * From dokter");
		while ($data = mysqli_fetch_array($query)) {
		?>

		<tr>	
			<td><?php echo $data ["id_dokter"]; ?></td>	
			<td><?php echo $data ["nama_dokter"]; ?></td>
		</tr>
		<?php  
		}
		?>
	</table>
	<br/>

	<h3>Tabel Obat</h3>
	<table border="1">
		<tr>
			<th>id_berobat</th>
			<th>nama_obat</th>
		</tr>
		
		<?php  
			include "koneksi.php";
			$query = mysqli_query ($conn, "Select * From obat");
			while ($data = mysqli_fetch_array($query)) {
		?>
		<tr>	
			<td><?php echo $data ["id_obat"]; ?></td>
			<td><?php echo $data ["nama_obat"]; ?></td>
		</tr>
		<?php  
		}
		?>
	</table>
	<br/>

	<h3>Tabel Pasien</h3>
	<table border="1">
		<tr>
			<th>id_pasien</th>
			<th>nama_pasien</th>
			<th>jenis_kelamin</th>
			<th>umur</th>
		</tr>
		
		<?php  
			include "koneksi.php";
			$query = mysqli_query ($conn, "Select * From pasien");
			while ($data = mysqli_fetch_array($query)) {
		?>
		<tr>	
			<td><?php echo $data ["id_pasien"]; ?></td>
			<td><?php echo $data ["nama_pasien"]; ?></td>
			<td><?php echo $data ["jenis_kelamin"]; ?></td>
			<td><?php echo $data ["umur"]; ?></td>
		</tr>
		<?php  
		}
		?>
	</table>
	<br/>

	<h3>Tabel Resep Obat</h3>
	<table border="1">
		<tr>
			<th>id_resep</th>
			<th>id_berobat</th>
			<th>id_obat</th>
		</tr>
		
		<?php  
			include "koneksi.php";
			$query = mysqli_query ($conn, "Select * From resep_obat");
			while ($data = mysqli_fetch_array($query)) {
		?>
		<tr>	
			<td><?php echo $data ["id_resep"]; ?></td>
			<td><?php echo $data ["id_berobat"]; ?></td>
			<td><?php echo $data ["id_obat"]; ?></td>
		</tr>
		<?php  
		}
		?>
	</table>
	<br/>

	<h3>Tabel Users</h3>
	<table border="1">
		<tr>
			<th>id</th>
			<th>usernama</th>
			<th>password</th>
			<th>nama_lengkap</th>
		</tr>
		
		<?php  
			include "koneksi.php";
			$query = mysqli_query ($conn, "Select * From users");
			while ($data = mysqli_fetch_array($query)) {
		?>
		<tr>	
			<td><?php echo $data ["id"]; ?></td>
			<td><?php echo $data ["username"]; ?></td>
			<td><?php echo $data ["password"]; ?></td>
			<td><?php echo $data ["nama_lengkap"]; ?></td>
		</tr>
		<?php  
		}
		?>
	</table>
	<br/>

</body>
</html>