<?php

include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM tb_anggota ORDER BY id DESC"); 
?>

<html>
<head>	
	<title>lsp</title>
</head>

<body>
<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="assets/bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.js"></script>


<td><a href=add.html class='btn btn-danger btn-sm active' role='button' aria-pressed='true'>Input Baru</a><td>

	<br/><br/>
	<table width='80%' class="table" border=2>
<center><p class="text">Data Koperasi</p></center>
	<tr bgcolor='#CCCCCC'>

		<center>
		<td>Id</td>
		<td>Nama Lengkap</td>
		<td>Umur</td>
		<td>Pekerjaan</td>
		<td>Alamat</td>
		<td>Kwarganegaraan</td>
		<td>Contact</td>
		<td colspan="4">Update</td>
		</center>
	</tr>
	<?php 
	
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['nama_lengkap']."</td>";
		echo "<td>".$res['umur']."</td>";
		echo "<td>".$res['pekerjaan']."</td>";
		echo "<td>".$res['alamat']."</td>";
		echo "<td>".$res['kewarganegaraan']."</td>";
		echo "<td>".$res['contact']."</td>";
		echo "<td><a href=\"edit.php?id=$res[id]\" class='btn btn-primary btn-sm active' role='button' aria-pressed='true'>Edit</a><td>";
		echo "<td><a href=\"delete.php?id=$res[id]\" class='btn btn-danger btn-sm active' role='button' aria-pressed='true'>delete</a><td>";

				
	}
	?>



	
	</table>
</body>
</html>
