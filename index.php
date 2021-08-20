<!DOCTYPE HTML>
<?php
/*
Nama: Nur Kholiq Ansori
Jurusan: Teknik Informatika
Semester 3
NPM: 43A57006519080
Dosen: Wowon Priyatna, MT.
*/
?>
<html>
<head>
	<meta name="viewport" content="width=device-width"/>
	<title> CRUD PHP dan MySql </title>
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
		}
		.body {
			padding: 10px 25px;
		}
		h2 {
			font-family: 'Shortcut';
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
			margin: 5px;
			padding: 5px;
			background: #FC1;
			border: 0;
			cursor: pointer;
		}
		table {
			margin: auto;
			border-collapse: collapse;
			width: 100%;
		}
		td, th {
			padding: 10px;
		}
		.id {
			width: 15px;
		}
		.alamat {
			width: 60%;
		}
		.aksi {
			width: 25px;
			text-align: center;
		}
		tr:nth-child(even) {
			background: rgba(255,204,17,0.6);
		}
		th {
			background: #FC1;
			color: #FFF;
		}
		@media (min-width: 900px) {
			table {
				width: 70%;
			}
		}
		/*button:
		background: linear-gradient(to bottom, #FC1, transparent);*/
	</style>
</head>
<body>
	<header>
		<h2> Daftar User </h2>
	</header>
	<div class="body">
		<i><font color="#999"> Jika kosong, tambahkan user terlebih dahulu. </font></i>
		<br>
		<button><a href="add.php"> TAMBAH USER </a></button>
		<br>
		<br>
		<table border="1">
			<tr>
				<th class="id"> ID </th>
				<th> NAMA </th>
				<th class="alamat"> ALAMAT </th>
				<th class="aksi"> AKSI </th>
			</tr>
			<?php
				include 'db.php';

				$data = mysqli_query($host,"select * from user");
				while($d = mysqli_fetch_array($data)) {
			?>
			<tr>
				<td class="id"> <?php echo $d['id']; ?> </td>
				<td> <?php echo $d['nama']; ?> </td>
				<td class="alamat"> <?php echo $d['alamat']; ?> </td>
				<td class="aksi">
					<a href="change.php?id=<?php echo $d['id']; ?>"><button> EDIT </button></a><br>
					<a onclick="yakin()"><button> HAPUS </button></a>
					<script type="text/javascript">
						function yakin() {
							var yakin = confirm("Apakah anda yakin untuk menghapus akun?");
							if (yakin) {
								window.location = "delete.php?id=<?php echo $d['id']; ?>";
							} else {
								document.location = "index.php";
							}
						}
					</script>
				</td>
			</tr>
			<?php
			}
			?>
		<br>
		</table>
	</div>
</body>