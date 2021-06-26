<?php
	include 'koneksi.php';

	if ($sql = mysqli_query($con, "select * from tbl_soal where id = '".$_POST['number']."' + 1")) {
		$row = mysqli_fetch_array($sql);
		echo $row['id'].';'$row['soal'];
		$sql = mysqli_query($con, "select * from tbl_jawaban where id_soal = '".$row['id']."' + 1'");

		while ($row = mysqli_fetch_array($sql)) {
			echo ';'.$row['pilihan_jawab'];
		}
	}
?>