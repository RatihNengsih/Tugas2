<!DOCTYPE HTML>
<html>
<head><title>CRUD</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device=width, initial-scale=1">
<link href="css/style.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<header>
		<h3>CRUD Operation</h3>
	</header>
	<nav>
		<ul>
			<li><b>MENU</b></li>
			<li><a href="#">Menu 1</a></li>
			<li><a href="#">Menu 2</a></li>
			<li><a href="#">Menu 3</a></li>
		</ul>
	</nav>
	<article>
<?php
include("koneksi.php");
$sql = 'SELECT * FROM biodata';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
echo '		<table class="table table-striped table-hover">
			<a href="add.php" class="btn btn-link btn-sm"><span class="glyphicon glyphicon-plus"></span> Insert</a>
			<tr>
				<td><b>No</b></td>
				<td><b>Nim</b></td>
				<td><b>Nama</b></td>
				<td><b>Alamat</b></td>
				<td><b>Aksi</b></td>
			</tr>';

while ($row = mysqli_fetch_row($query))
{
	echo '<tr>
			<td>'.$row[0].'</td>
			<td>'.$row[1].'</td>
			<td>'.$row[2].'</td>
			<td>'.$row[3].'</td>
			<td><a href="#" class="btn btn-warning btn-sm">Edit</a>
			 <a href="delete.php?id=<?echo$row[0];?>" class="btn btn-danger btn-sm">Delete</a></td>
		</tr>';
}
echo '
                           
		</table>
	</article>
	<footer>Ratih Nengsih - 14.111.154</footer>
</body>
</html>';

mysqli_free_result($query);

mysqli_close($conn);