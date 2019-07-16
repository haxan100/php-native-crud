<html>
<head>
	<title>tambah data</title>
</head>

<body>
<?php
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$nama_lengkap = mysqli_real_escape_string($mysqli, $_POST['nama_lengkap']);
	$umur = mysqli_real_escape_string($mysqli, $_POST['umur']);
	$pekerjaan = mysqli_real_escape_string($mysqli, $_POST['pekerjaan']);
	$alamat = mysqli_real_escape_string($mysqli, $_POST['alamat']);
	$kewarganegaraan = mysqli_real_escape_string($mysqli, $_POST['kewarganegaraan']);
	$contact = mysqli_real_escape_string($mysqli, $_POST['contact']);
		
	
	
			
		$result = mysqli_query($mysqli, "INSERT INTO tb_anggota(id,nama_lengkap,umur,pekerjaan,alamat,kewarganegaraan,contact) VALUES('$id','$nama_lengkap','$umur','$pekerjaan','$alamat','$kewarganegaraan','$contact')");
		
		
		echo "<font color='green'>Data ditambahkan.";
		echo "<br/><a href='read.php'>lihat data</a>";
	
}
?>
</body>
</html>
