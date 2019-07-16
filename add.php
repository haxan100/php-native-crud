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
		
	// checking empty fields
	if(empty($nama_lengkap) || empty($umur) || empty($contact)) {
				
		if(empty($nama_lengkap)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($umur)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($contact)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		
		$result = mysqli_query($mysqli, "INSERT INTO tb_anggota(id,nama_lengkap,umur,pekerjaan,alamat,kewarganegaraan,contact) VALUES('$id','$nama_lengkap','$umur','$pekerjaan','$alamat','$kewarganegaraan','$contact')");
		
	
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='read.php'>View Result</a>";
	}
}
?>
</body>
</html>
