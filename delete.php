<?php
include "db.php";

$id = $_GET['id'];

mysqli_query($host,"delete from user where id='$id'");

header("location:index.php")

?>