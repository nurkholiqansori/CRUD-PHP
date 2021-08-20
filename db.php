<?php

$host = mysqli_connect("localhost","root","","NAMA TABLE");

if (mysqli_connect_errno()){
	echo "Koneksi database gagal: " .mysqli_connect_error();
}

?>