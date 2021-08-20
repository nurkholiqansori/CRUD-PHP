<?php
include "db.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

mysqli_query($host,"insert into user values('$id','$nama','$alamat')");

header("location:index.php");

?>