<?php
	if (isset($_POST['login'])){
		$user = $_POST['username'];
		$pass = $_POST['password'];
		if ($user == "mahasiswa" && $pass == "mhs123") {
			echo <h2>Login berhasil, selamat datang di POrtal UAD</h2>;
		} else {
			echo "<h2>Username/password salah, coba lagi</h2>";
		}
	}
?>