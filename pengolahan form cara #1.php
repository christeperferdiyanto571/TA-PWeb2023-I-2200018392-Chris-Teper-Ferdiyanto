<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pengelohan Form cara #1</title>
</head>
<body>
	<form action="" method="post" name="input">
		Username Anda : <input type="text" name="nama"><br>
		<input type="submit" name="input" value="tampilkan isi TextBox">
	</form>
</body>
</html>

<?php
	if(isset($_POST['Input'])){
		$nama=$_POST['nama'];
		echo "Nama Anda : <br>$nama</br>";
	}