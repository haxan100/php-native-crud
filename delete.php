<?php 




include("config.php");


$id = $_GET['id'];


$result = mysqli_query($mysqli, "DELETE FROM tb_anggota WHERE id=$id");


header("Location:read.php");
 ?>