<?php
	include 'koneksi.php';
	
	if (!isset($_POST['jawaban'])) {
		echo '0';
	} else {
		echo '1';
	}
?>