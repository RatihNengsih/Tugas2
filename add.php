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
	<form class="form-horizontal" name="input" method="POST" action="action_add.php">
		<div class="form-group">
			<label class="col-sm-3 control-label">NIM :</label>
				<div class="col-sm-4">
					<input class="form-control" type="text" name="nim" maxlenght="10" placeholder="NIM" required>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Nama :</label>
				<div class="col-sm-4">
					<input class="form-control" type="text" name="nama" maxlenght="50" placeholder="Nama" required>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Alamat :</label>
				<div class="col-sm-4">
					<input class="form-control" type="text" name="alamat" maxlenght="50" placeholder="Alamat" required>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">&nbsp;</label>
			<div class="col-sm-6">
				<input class="btn btn-sm btn-primary" name="submit" type="submit" value="Simpan">
				<a href="index.php" class="btn btn-sm btn-danger">Batal</a>
			</div>
		</div>
	</form>
	</article>
	<footer>Ratih Nengsih - 14.111.154</footer>
</div>
</body>
</html>