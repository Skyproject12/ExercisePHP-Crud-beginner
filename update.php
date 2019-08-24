<?php
include("connect.php");
$nim=$_GET['id'];
$query= mysqli_query($c,"select * from mahasiswa_tb where nim=$nim");
$data=$query->fetch_object();
?>
<html>
<head>
	<title>
	
	</title>
</head>
<body>
	<form action="" method="POST">
		<input type="hidden" name="nim" value="<?php echo $data->nim?>">
		<p>Nama</p><input type="text" name="nama" value="<?php echo $data->nama?>">
		<p>jurusan</p><input type="text" name="jurusan" name value="<?php echo $data->jurusan?>">
		<p>kelas</p><input type="text" name="kelas" value="<?php echo $data->kelas?>">
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>
<?php
	if(isset($_POST['submit'])){
		$nama=$_POST['nama'];
		$jurusan=$_POST['jurusan'];
		$kelas=$_POST['kelas'];
		$sql=mysqli_query($c,"update mahasiswa_tb set nim='$nim',nama='$nama',jurusan='$jurusan',kelas='$kelas' where nim='$nim'");
		if($sql){
			echo"insert berhasil";
			header("location:index.php");
		}
		else {
			echo"insert ngak berhasil ";
		}
	}

?>