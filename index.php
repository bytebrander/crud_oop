
 <!DOCTYPE html>
 <html>
	 <head>
	 	<title></title>
	 </head>
	 <body>
	 <h1>DATA SISWA</h1>
	 <a href="./tambah.php">Tambah Data</a>
	 	<table border="1">
	 		<tr>
	 			<td>No</td>
	 			<td>Nama</td>
	 			<td>Kelas</td>
	 			<td>Jurusan</td>
	 			<td>Jenis Kelamin</td>
	 			<td>Alamat</td>
	 			<td>Opsi</td>
	 		</tr>

	 		<?php 
	 		include "database.php";
	 		$result = $link->query("SELECT * FROM datasiswa");
	 		if ($result->num_rows == 0) {
	 			echo "Tidak ada Data";
	 		} else {
	 			while ($value = $result->fetch_assoc()):

	 		 ?>
	 		
			<tr>
				<td><?php echo $value['id']; ?></td>
				<td><?php echo $value['nama']; ?></td>
				<td><?php echo $value['kelas']; ?></td>
				<td><?php echo $value['jurusan']; ?></td>
				<td><?php echo $value['jenis_kelamin']; ?></td>
				<td><?php echo $value['alamat']; ?></td>
				<td>
					<a href="edit.php?idTest=<?php echo $value['id']?>">Edit</a>
					<a href="delete.php?idTest=<?php echo $value['id']?>">Hapus</a>
				</td>
			</tr>
	 		 <?php
	 		 endwhile;
	 		  } 
	 		  ?>
	 	</table>
	 </body>
 </html>