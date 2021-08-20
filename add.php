<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width"/>
	<title> Tambah User </title>
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
		input[type=submit] {
			color: #FFF;
			margin: 5px;
			padding: 5px;
			background: #FC1;
			border: 0;
			cursor: pointer;
		}
		input[type=text],input[type=number] {
			padding: 10px;
		}
	</style>
</head>
<body>
<header>
	<a href="/tugas/8/"><button> Kembali </button></a>
	<h2> Menambahkan User </h2>
</header>
<br>
<br>
<div class="body">
	<form method="post" action="add-action.php">
		<table>
			<tr>
				<td> ID </td>
				<td><input type="number" name="id" required="required"></td>
			</tr>
			<tr>
				<td> Nama </td>
				<td><input type="text" name="nama" required="required"></td>
			</tr>
			<tr>
				<td> Alamat </td>
				<td><input class="alamat" type="text" name="alamat" required="required" maxlength="255"></td>
			</tr>
		</table>
		<input type="submit" value="Tambah">
	</form>
</div>
</body>
</html>