<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body><link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="assets/bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.js"></script>
<?php

include_once("config.php");


if(isset($_POST['update']))
{	




	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$nama_lengkap = mysqli_real_escape_string($mysqli, $_POST['nama_lengkap']);
	$umur = mysqli_real_escape_string($mysqli, $_POST['umur']);
	$pekerjaan = mysqli_real_escape_string($mysqli, $_POST['pekerjaan']);	
	$alamat = mysqli_real_escape_string($mysqli, $_POST['alamat']);
	$contact = mysqli_real_escape_string($mysqli, $_POST['contact']);
	$kewarganegaraan = mysqli_real_escape_string($mysqli, $_POST['kewarganegaraan']);	
	

	if(empty($nama_lengkap) || empty($umur) || empty($alamat)) {	
			
		if(empty($nama_lengkap)) {
			echo "<font color='red'>nama_lengkap field is empty.</font><br/>";
		}
		
		if(empty($umur)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($alamat)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	

		$result = mysqli_query($mysqli, "UPDATE tb_anggota SET nama_lengkap='$nama_lengkap',umur='$umur',pekerjaan='$pekerjaan',alamat='$alamat',kewarganegaraan='$kewarganegaraan',contact='$contact' WHERE id=$id");
		
		
		header("Location: read.php");
	}
}
?>
<?php

$id = $_GET['id'];


$result = mysqli_query($mysqli, "SELECT * FROM tb_anggota WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$nama_lengkap = $res['nama_lengkap'];
	$umur = $res['umur'];
	$pekerjaan = $res['pekerjaan'];
	$alamat = $res['alamat'];
	$contact = $res['contact'];
	$kewarganegaraan = $res['kewarganegaraan'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" class="table" action="edit.php">
		<table border="0">
			<tr> 
				<td>id</td>
				<td><input type="hidden" name="id" value="<?php echo  $id;?>"></td>
			</tr><tr> 
				<td>nama</td>
				<td><input type="text" name="nama_lengkap" value="<?php echo  $nama_lengkap;?>"></td>
			</tr>
			<tr> 
				<td>umur</td>
				<td><input type="text" name="umur" value="<?php echo $umur;?>"></td>
			</tr>
			<tr> 
				<td>pekerjaan</td>
				<td><input type="text" name="pekerjaan" value="<?php echo $pekerjaan;?>"></td>
			</tr>

			<tr> 
				<td>alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $alamat;?>"></td>
			</tr>
			<td>kewarganegaraan</td>
				<td><input type="text" name="kewarganegaraan" value="<?php echo $kewarganegaraan;?>"></td>
			</tr><td>contact</td>
				<td><input type="text" name="contact" value="<?php echo $contact;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

</body>
</html>