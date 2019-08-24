<html>
	<head>
		<title>
		
		</title>
	</head>
	<body>
		<table border="1">
			<tr>
				<td>nim</td>
				<td>nama</td>
				<td>jurusan</td>
				<td>kelas</td>
				<td>Aksi</td>
			</tr>
			<?php
			include("connect.php");
			$query=$c->query("select * from mahasiswa_tb");
			if($query->num_rows!=0){
				$i=0;
				while($data=$query->fetch_object()){	
			?>
			<tr>
				<td><?php echo $data->nim;?></td>
				<td><?php echo $data->nama;?></td>
				<td><?php echo $data->jurusan;?></td>
				<td><?php echo $data->kelas;?></td>
				<td>
					
					<a href="insert.php?nim=<?php echo $data-> nim?>">Insert</a>
					<input type="submit" href="update.php?id=" value="submit">
				
				</td>
			</tr>
			<?php
				}
			}
			else {
			?>
			<tr>
				<td colspan="4">data kosong</td>
			</tr>
			<?php
			}
			?>
		</table>
	</body>
</html>