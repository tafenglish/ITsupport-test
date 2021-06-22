<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bayu Belajar</title>
</head>
<body>
	<?php
		include 'koneksi.php';
		$sql = mysqli_query($con, "select * from tbl_soal");
		$row = mysqli_fetch_array($sql);
	?>
	<table class="table" style="margin: auto">
		<tr>
			<td colspan="4" id="number">SOAL KE-<?php echo $row['id'] ?></td>
		</tr>
		<tr>
			<td colspan="4" id="question"><?php echo $row['soal'] ?></td>
		</tr>
		<input type="hidden" id="jawaban">
		<tr>
		<?php
			$i = 0;
			$sql = mysqli_query($con, "select * from tbl_jawaban where id_soal = '".$row['id']."'");
			while ($answer = mysqli_fetch_array($sql)) {
				$i++;
		?>
			<td>
				<button type="button" id="<?php echo $i ?>" onclick="$('#jawaban').val(this.value)" value="<?php echo $answer['pilihan_jawab'] ?>"><?php echo $answer['pilihan_jawab'] ?></button>
			</td>
		<?php
				if ($i == 2) {
		?>
		</tr>
		<tr>
		<?php
				}
		?>
		<?php
			}
		?>
		</tr>
		<tr>
			<td>
				<button type="button" id="prev"><< Kembali</button>
			</td>
			<td>
				<button type="button" id="next">Selanjutnya >></button>
			</td>
		</tr>
	</table>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		function nextPertanyaan() {
			$('#jawaban').val('');
			
			$.ajax({
				type: 'post',
				data: 'number=' + $('#number').html().substring(8),
				url: 'select.php',
				success: function (i) {
					i = i.split(';');
					$('#number').html('SOAL KE-' + i[0]);
					$('#question').html(i[1]);
					$('#1').html(i[2]);
					$('#2').html(i[3]);
					$('#3').html(i[4]);
					$('#4').html(i[5]);
				}
			});
		}

		$('document').ready(function () {
			$('#next').click(function() {
				if ($('#jawaban').val() == '') {
					alert('Pilih jawaban dahulu');
					return false;
				}

				$.ajax({
					type: 'post',
					data: 'jawaban=' + $('#jawaban').val(),
					url: 'insert.php',
					success : function (i) {
						if (i == 1) {
							nextPertanyaan();
						} else {
							alert('Duh! Internetmu terputus');
						}
					}
				});
			});
		});
	</script>
</body>
</html>