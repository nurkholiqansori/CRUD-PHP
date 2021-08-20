<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width"/>
	<title> Edit Data </title>
	<style type="text/css">
		@font-face {
			font-family: 'Shortcut';
			src: url('src/SHORTCUT.ttf');
			font-weight: normal;
			font-style: normal;
		} 
		@font-face {
			font-family: 'Proxima Nova Rg';
			src: url('src/ProximaNova-Regular.otf');
			font-weight: normal;
			font-style: normal;
		}
		body {
			font-family: 'Proxima Nova Rg';
			margin: 0;
		}
		header {
			background: linear-gradient(to bottom, #FC1, transparent);
			padding: 20px;
			display: flex;
		}
		.body {
			padding: 10px 25px;
		}
		h2 {
			font-family: 'Shortcut';
			margin-left: 25%;
			text-align: center;
		}
		a {
			text-decoration: none;
			color: inherit;
			font-family: monospace;
			font-size: 15px;
		}
		button {
			color: #FFF;
			margin: 10px;
			padding: 15px;
			background: #FC1;
			border: 0;
			border-top-left-radius: 30px;
			border-bottom-left-radius:30px;
			cursor: pointer;
		}
		input[type=text] {
			padding: 10px;
		}
		input[type=submit] {
			color: #FFF;
			margin: 5px;
			padding: 5px;
			background: #FC1;
			border: 0;
			cursor: pointer;
		}
	</style>
</head>
<body>
<header>
	<a href="/tugas/8/"><button> Kembali </button></a>
	<h2> Mengedit User </h2>
</header>
<br>
<br>

<?php
include "db.php";

$id = $_GET['id'];
$data = mysqli_query($host,"select * from user where id='$id'");
if (mysqli_connect_errno()) {
	echo "Koneksi ke database gagal";
	exit();
}
while ($d = mysqli_fetch_array($data)) {
?>
<div class="body">
	<form method="post" action="change-action.php">
		<table>
			<tr>
				<td> ID </td>
				<td><input type="hidden" name="id" value="<?php echo $d['id']; ?>"><font color="#999"><?php echo $d['id']; ?></font></td>
			</tr>
			<tr>
				<td> Nama </td>
				<td><input type="text" name="nama" value="<?php echo $d['nama']; ?>" required="required"></td>
			</tr>
			<tr>
				<td> Alamat </td>
				<td><input class="alamat" type="text" name="alamat" value="<?php echo $d['alamat']; ?>" required="required"></td>
			</tr>
			</table>
		<input type="submit" value="Ubah">
	</form>
	<?php
	}
	?>
</div>
</body>
</html>