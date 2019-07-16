<!DOCTYPE html>
<html>
<head>
	<title>Input </title>
</head>
<body>
<?php include_once("config.php"); ?>
<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="assets/bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.js"></script>

<a href="read.php">Home</a>
	<br/><br/>

	<form action="proses_create.php" method="post" name="form1">
		<table width="25%" class="table" border="0">
			<tr> 
				<td>Id</td>
				<td><input type="number" name="id"></td>
			</tr>
			<tr> 
				<td>nama lengkap</td>
				<td><input type="text" name="nama_lengkap"></td>
			</tr>
			<tr> 
				<td>umur</td>
				<td><input type="text" name="umur"></td>
			</tr><tr> 
				<td>pekerjaan</td>
				<td><input type="text" name="pekerjaan"></td>
			</tr><tr> 
				<td>alamat</td>
				<td><input type="text-area" name="alamat"></td>
			</tr><tr> 
				<td>kwarganegaraan</td>
				<td><input type="text" name="kewarganegaraan"></td>
			</tr>	</tr><tr> 
				<td>contact</td>
				<td><input type="number" name="contact"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Submit"></td>
			</tr>
		</table>
	</form>



</body>
</html>







