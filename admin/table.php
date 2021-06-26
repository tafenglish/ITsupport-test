
			<?php
				include '../koneksi.php';

				if (isset($_POST['aksi'])) {
					#echo "<script>alert('".$_POST['nomor']."')</script>";
					if ($_POST['aksi'] == 'tambah') {
						echo '<script>alert("';
						if (mysqli_query($con, "insert into tbl_soal (id, soal, jawaban) values ('".$_POST['nomor']."', '".$_POST['soal']."', '".$_POST[$_POST['kunci']]."')")) {
							echo 'Sukses';
							mysqli_query($con, "insert into tbl_jawaban (id_soal, pilihan_jawab) values ('".$_POST['nomor']."', '".$_POST['a']."')");
							mysqli_query($con, "insert into tbl_jawaban (id_soal, pilihan_jawab) values ('".$_POST['nomor']."', '".$_POST['b']."')");
							mysqli_query($con, "insert into tbl_jawaban (id_soal, pilihan_jawab) values ('".$_POST['nomor']."', '".$_POST['c']."')");
							mysqli_query($con, "insert into tbl_jawaban (id_soal, pilihan_jawab) values ('".$_POST['nomor']."', '".$_POST['d']."')");
						} else {
							echo 'Gagal';
						}
						echo ' Input Soal");</script>';
					} else if ($_POST['aksi'] == 'hapus') {
						echo '<script>alert("';
						if ($sql = mysqli_query($con, $query = "delete from tbl_soal where id = '".$_POST['nomor']."'")) {
							echo 'Sukses';
							mysqli_query($con, $query = "delete from tbl_jawaban where id_soal = '".$_POST['nomor']."'");
						} else {
							echo 'Gagal';
						}
						echo ' Delete Soal. Info: '.((!$sql) ? : addslashes($query)).'");</script>';
					}
				}
			?>
	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Soal</th>
				<th>Jawaban A</th>
				<th>Jawaban B</th>
				<th>Jawaban C</th>
				<th>Jawaban D</th>
				<th>Kunci</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$row_jawaban = ['a', 'b', 'c', 'd'];
				$sql = mysqli_query($con, "select * from tbl_soal");
				while ($row = mysqli_fetch_array($sql)) {
					$id_jawaban = 0;
					$query = mysqli_query($con, "select * from tbl_jawaban where id_soal = '".$row['id']."'");
					echo '
			<tr>
				<td>'. $row['id'] .'</td>
				<td>'. $row['soal'] .'</td>';
					while ($jawaban = mysqli_fetch_array($query)) {
						${$row_jawaban[$id_jawaban]} = $jawaban['pilihan_jawab'];
						$id_jawaban++;
						echo '
				<td>'. $jawaban['pilihan_jawab'] .'</td>';
					}
					echo '
				<td>'. $row['jawaban'] .'</td>
				<td>
					<button onclick="ubahData(\''.$row['id'].'\', \''.$row['soal'].'\', \''.$a.'\', \''.$b.'\', \''.$c.'\', \''.$d.'\', \''.$row['jawaban'].'\')">Ubah</button>
					<button onclick="hapusData(\''.$row['id'].'\')">Hapus</button>
				</td>
			</tr>';
				}
			?>
		</tbody>
	</table>