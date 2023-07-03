<?php
	if (isset($_POST['proses'])) {
		$komentar = nl2br($_POST['komentar']);
		echo "komentar saudara adalah :  <br>";
		echo "<font color=blue><br> $komentar </br></font>";
	}
?>