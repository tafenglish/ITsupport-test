<?php
	$con = mysqli_connect('localhost', 'root', '', 'kuis');
	if (mysqli_connect_errno()) {
		echo "Gagal terhubung MySQL: " . mysqli_connect_error();
	}
?>