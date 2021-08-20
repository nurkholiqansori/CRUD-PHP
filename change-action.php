<?php
include "db.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

mysqli_query($host,"update user set nama='$nama',alamat='$alamat' where id='$id'");
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="3,url=index.php">
	<title> Sukses </title>
</head>
<body>
	Anda akan dialihkan ke homepage.
</body>
</html>